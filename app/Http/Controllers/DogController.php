<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("dog.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo " I AM DOG CREATE";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo " I AM DOG STORE";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo " I AM DOG show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

    public function excel()
    {
        return view('dog.excel');
    }
}
