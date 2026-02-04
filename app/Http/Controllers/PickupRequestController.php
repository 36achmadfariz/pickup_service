<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PickupRequest;

class PickupRequestController extends Controller
{
    public function index()
    {
        $pickupRequests = PickupRequest::latest()->get();
        return view('pickup_requests.index', compact('pickupRequests'));
    }

    public function create()
    {
        return view('pickup_requests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pickup_address' => 'required',
            'pickup_date' => 'required|date',
            'phone' => 'required',
            'status' => 'required'
        ]);

        PickupRequest::create($request->only([
            'name',
            'pickup_address',
            'pickup_date',
            'phone',
            'status'
        ]));

        return redirect()->route('pickup_requests.index')
            ->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $pickupRequest = PickupRequest::findOrFail($id);
        return view('pickup_requests.edit', compact('pickupRequest'));
    }

    public function update(Request $request, $id)
    {
        $pickupRequest = PickupRequest::findOrFail($id);

        $pickupRequest->update($request->only([
            'name',
            'pickup_address',
            'pickup_date',
            'phone',
            'status'
        ]));

        return redirect()->route('pickup_requests.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        PickupRequest::destroy($id);

        return redirect()->route('pickup_requests.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
