<?php

namespace App\Http\Controllers;

use App\Card;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cards= Card::all();
        return view('admin.Cards.card',compact('cards'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cards = Card::all();

        return view('admin.Cards.create',compact('cards'));
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
        Card::create($request->all());

        return redirect('admin/card');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $cards = Card::findOrFail($id);
        return view('admin.Cards.update',compact('cards'));
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
        $cards= Card::findOrFail($id);
        $cards->update($request->all());

        return redirect('admin/card');
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
        Card::findOrFail($id)->delete();
        return redirect('admin/card');

    }

    public function base(){

        $cards = Card::all();
        $products = Product::all();
        $photos = Photo::all();
        return view('shop',compact('cards','products','photos'));

    }

}
