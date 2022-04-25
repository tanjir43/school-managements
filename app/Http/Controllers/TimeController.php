<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTimeRequest;
use App\Models\Shift;
use App\Models\Time;
use App\Schoolmanagement\Service\Times\TimeSection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class TimeController extends Controller
{

    public function index(TimeSection $timeSection): View
    {
        if (\request()->ajax()){
            return $timeSection->getTimeData(new Time());
        }
        return view('admins.times.index', ['times' => Time::get()]);
    }


    public function create(): View
    {
        return view('admins.times.create',['shifts' => Shift::get(['id','name'])]);
    }


    public function store(StoreTimeRequest $request, TimeSection $timeSection): RedirectResponse
    {
        $timeSection->storeTimeData(new Time(), $request);
        return redirect()->route('times.index')->with('success','Times-slot has been added successfully');
    }


    public function show(Time $time): View
    {
        return view('admins.times.show', compact('time'));
    }

    public function edit(Time $time): View
    {
        return view('admins.times.edit',['time'=>$time ,'shifts' => Shift::get(['id','name'])]);
    }


    public function update(Request $request, Time $time): RedirectResponse
    {
        return redirect()->route('times.index');
    }


    public function destroy(Time $time, TimeSection $timeSection): RedirectResponse
    {
        $timeSection->deleteTimeData($time);
        return redirect()->route('times.index')->with('success','Times has been deleted successfully');

    }
}
