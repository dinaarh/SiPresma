<?php

namespace App\Http\Controllers;

use App\Models\BidangKeahlianModel;
use Illuminate\Http\Request;

class BidangKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang_keahlians = BidangKeahlianModel::all();

        return view('bidang_keahlian.index', compact('bidang_keahlians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bidang_keahlian.modals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bidang_keahlian = BidangKeahlianModel::findOrFail($id);

        return view('bidang_keahlian.modals.edit', compact('bidang_keahlian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
