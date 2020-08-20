<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residents;
use App\Quotes;

class ResidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();

        $residents = Residents::all();
        return view('feed.index')->with('residents', $residents);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resident = Residents::find($id);
        $quotes = Quotes::where('user_id', $resident->id)->get();

        $data = array('resident' => $resident, 'quotes' => $quotes);
        return view('feed.show')->with('data', $data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Residents::find($id);

        return view('feed.edit')->with('resident', $resident);
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

        $resident = Residents::find($id);
        
        $quote = new Quotes;

        $quote->user_id = $id;
        $quote->quotation = $request->input('quote');

        // Update Post
        $resident->firstname = $request->input('firstname');
        $resident->surname = $request->input('surname');
        $resident->address = $request->input('address');

        $resident->save();
        $quote->save();

        return redirect('/');
    }
}
