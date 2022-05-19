<?php

namespace App\Http\Controllers;

use App\Http\Requests\Filters\OfferFilterRequest;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Offer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param OfferFilterRequest $request
     * @return View
     */
    public function index(OfferFilterRequest $request): View
    {
        return view('offers.index', [
            'offers' => Offer::filter($request)->paginate(10),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function myOffers(): View
    {
        return view('offers.my-offers', [
            'offers' => Offer::where('user_id', '=', Auth::id())->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOfferRequest $request
     * @return RedirectResponse
     */
    public function store(StoreOfferRequest $request)
    {
        $fileName = $request->image->getClientOriginalName();
        $request->file('image')->storeAs('', $fileName, 'public');
        $requestData = $request->all();
        $requestData['image'] = $fileName;
        $requestData['user_id'] = Auth::id();
        $offer = Offer::create($requestData);
        return redirect()->route('offers.show', $offer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('offers.show', [
            'offer' => Offer::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $offerId
     * @return View
     */
    public function edit(int $offerId): View
    {
        return view('offers.create', [
            'offer' => Offer::findOrFail($offerId)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOfferRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateOfferRequest $request, int $id): RedirectResponse
    {
        $trip = Offer::findOrFail($id);
        $oldFileName = $trip->image;
        $input = $request->all();
        $trip->update($input);
        if ($request->hasFile('image')) {
            $fileName = $request->image->getClientOriginalName();
            $request->file('image')->storeAs('', $fileName, 'public');
            $trip->image = $fileName;
            $trip->save();
            Storage::disk('public')->delete($oldFileName);
        }
        return redirect()->route('offers.show', $trip->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $offer = Offer::findOrFail($id);
        $offer->rooms()->delete();
        $offer->delete();
        return redirect()->route('offers.my');
    }
}
