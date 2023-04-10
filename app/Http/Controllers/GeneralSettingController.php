<?php

namespace App\Http\Controllers;

use App\Models\General_setting;
use Illuminate\Http\Request;


class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generalsettings = General_setting::all();
        return view('general_settings.indexgen')->with('general_settings' , $generalsettings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\General_setting  $general_setting
     * @return \Illuminate\Http\Response
     */
    public function show(General_setting $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General_setting  $general_setting
     * @return \Illuminate\Http\Response
     */
    public function edit($general_settings)
    {
        $general_settings = General_setting::find($general_settings);
        return view('general_settings.edit' )-> with('general_settings' , $general_settings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\General_setting  $general_setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        General_setting::where('id', $id)->update([
            'extra' => $request->get('extra'),  
            'discount' => $request->get('discount'), 
            'weekend1' => $request->get('day1'), 
            'weekend2' => $request->get('day2'), 
            'weekend3' => $request->get('day3'), 
            'weekend4' => $request->get('day4'), 
            'weekend5' => $request->get('day5'), 
            'weekend6' => $request->get('day6'), 
            'weekend7' => $request->get('day7'), 
            
        
        ]);
        // $general_settings = General_setting::find($id);
        // $input = $request->all();
        // $general_settings->update($input);
        return redirect('general_settings')->with('flash_message' , 'user updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General_setting  $general_setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(General_setting $id)
    {

    }
}
