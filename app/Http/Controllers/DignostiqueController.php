<?php

namespace App\Http\Controllers;

use App\Models\Dignostique;
use App\Http\Requests\StoreDignostiqueRequest;
use App\Http\Requests\UpdateDignostiqueRequest;

class DignostiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDignostiqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDignostiqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dignostique  $dignostique
     * @return \Illuminate\Http\Response
     */
    public function show(Dignostique $dignostique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dignostique  $dignostique
     * @return \Illuminate\Http\Response
     */
    public function edit(Dignostique $dignostique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDignostiqueRequest  $request
     * @param  \App\Models\Dignostique  $dignostique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDignostiqueRequest $request, Dignostique $dignostique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dignostique  $dignostique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dignostique $dignostique)
    {
        //
    }
}
