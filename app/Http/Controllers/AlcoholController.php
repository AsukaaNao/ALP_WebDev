<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use App\Http\Requests\StoreAlcoholRequest;
use App\Http\Requests\UpdateAlcoholRequest;

class AlcoholController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlcoholRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alcohol $alcohol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alcohol $alcohol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlcoholRequest $request, Alcohol $alcohol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alcohol $alcohol)
    {
        //
    }
}
