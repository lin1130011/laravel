<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $data = [
            [
                'id' => 1,
                'name' => 'Acar',
                'color' => 'red',
                'speed' => '100km'
            ],
            [
                'id' => 2,
                'name' => 'Bcar',
                'color' => 'blue',
                'speed' => '90km'
            ],
            [
                'id' => 3,
                'name' => 'Ccar',
                'color' => 'yellow',
                'speed' => '80km'
            ],

        ];

        return view('car.index', ['cars' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "FUCK";
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
        return view('car.edit', ['carnum' => $id]);
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
        echo "EXCEL DONE";
    }
}
