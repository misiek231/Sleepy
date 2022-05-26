<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $offerId
     * @return View
     */
    public function create(int $offerId): View
    {
        $offer = Offer::findOrFail($offerId);
        return view('rooms.create', ['offer' => $offer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return Response
     */
    public function store(StoreRoomRequest $request)
    {
        $requestData = $request->all();
        $room = Room::create($requestData);
        return redirect()->route('offers.show', $room->offer_id);
    }

    /**
     * Display the specified resource.
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $room = Room::findOrFail($id);
        $disabledDates = $room->reservations->map(function ($reservation) {
            return [
                'start' => $reservation->date_from,
                'end' => $reservation->date_to,
            ];
        });

        return view('rooms.show', [
            'room' => $room,
            'disabledDates' => $disabledDates
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $roomId
     * @return View
     */
    public function edit(int $roomId): View
    {
        $room = Room::findOrFail($roomId);
        $offer = $room->offer;
        return view('rooms.create', ['room' => $room, 'offer' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRoomRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRoomRequest $request, int $id): RedirectResponse
    {
        $room = Room::findOrFail($id);
        $input = $request->all();
        $room->update($input);
        return redirect()->route('rooms.show', $room->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect()->route('offers.show', $room->offer_id);
    }
}
