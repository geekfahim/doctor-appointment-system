<?php

namespace App\Http\Controllers;

use App\Models\Settings\Time;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times =Time::select('id','name')->get();
        $date = now()->startOfHour()->format('H:i');
        dd($date);
        return view('dashboard.settings.time.time_index',compact('times'));
    }


    public function create() {
        return view('dashboard.settings.time.time_create');
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
     * @param  \App\Models\Settings\Time  $time
     * @return \Illuminate\Http\Response
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settings\Time  $time
     * @return \Illuminate\Http\Response
     */
    public function edit(Time $time)
    {
        return view('dashboard.settings.time.time_edit',compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settings\Time  $time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Time $time)
    {
        $request->validate([
            'name' => ['required',Rule::unique(Time::getTableName(),'name')->ignore('id')]
        ]);
        $time->name = $request->name;
        $time->updated_by = $request->updated_user;
        $time->save();
        return response()->json([
            'success'=> $time->name.' '.'updated successfully'
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settings\Time  $time
     * @return \Illuminate\Http\Response
     */
    public function destroy(Time $time)
    {
        $time->delete();
        return response()->json([
            'success'=> 'time'. $time->name.' '.'has been deleted successfully'
        ]);

    }
}
