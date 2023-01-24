<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BunkerController extends Controller
{
    public function landing(){
        return view('pages.landing');
    }

    public function about(){
        return view('pages.about');
    }

    public function subscription(){
        return view('pages.subscription');
    }

    public function firstaid(){
        return view('pages.firstaid');
    }
    public function userpage(){
        if(Auth::guest()) 
        {
            return redirect()->route('login')->with('error', 'You need to login before you can access');
        }
        
        return view('pages.userpage');
    }
    public function vip(){
        if(Auth::guest()) 
        {
            return redirect()->route('login')->with('error', 'You need to login before you can access');
        }
        return view('subscriptions.vip');
    }
    public function gold(){
        if(Auth::guest()) 
        {
            return redirect()->route('login')->with('error', 'You need to login before you can access');
        }
        return view('subscriptions.gold');
    }
    public function silver(){
        if(Auth::guest()) 
        {
            return redirect()->route('login')->with('error', 'You need to login before you can access');
        }
        return view('subscriptions.silver');
    }
    public function confirmation(){
        return view('subscriptions.confirmation');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
