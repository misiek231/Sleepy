<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('offers.index', [
            'offers' => Offer::all(),
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
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfferRequest  $request
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
