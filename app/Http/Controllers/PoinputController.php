<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Poinput;
use App\Ledger;

use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PoinputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all of the InputPo records
        $poinputs = Poinput::all();

        //Load the view and pass the InputPo records onto it
        return View::make('Poinputs.index')->with('poinputs', $poinputs);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poinput = Poinput::findOrFail($id);
        $ledgers = $poinput->ledgers;

        return View::make('Poinputs.show')->with(array('poinput' => $poinput, 'ledgers' => $ledgers));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
