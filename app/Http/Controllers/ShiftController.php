<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Schoolmanagement\Service\Shifts\ShiftService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ShiftController extends Controller
{

    public function index(): View
    {
        return view('admins.shifts.index', ['shifts' => Shift::get()]);
    }


    public function create(): View
    {
        return view('admins.shifts.create');
    }


    public function store(Request $request , ShiftService $shiftService): RedirectResponse
    {
        $this->validated($request);
        $shiftService->storeShiftData(new Shift(),$request);
        return redirect()->route('shifts.index')->with('success','Shift has been added successfully');
    }


    public function show(Shift $shift): View
    {
        return view('admins.shifts.show', compact('shift'));
    }

    public function edit(Shift $shift): View
    {
        return view('admins.shifts.edit', compact('shift'));
    }


    public function update(Request $request, Shift $shift): RedirectResponse
    {
        return redirect()->route('shifts.index');
    }


    public function destroy(Shift $shift, ShiftService  $shiftService): RedirectResponse
    {
        $shiftService->deleteShiftData($shift);
        return redirect()->route('shifts.index')->with('success','Shift has been deleted successfully');

    }

    protected function validated($request){
        return $this->validate($request,[
            'name'      => 'required|max:100', 
            'status'    => 'required|min:1',
            'code'      => 'nullable'
        ]);
    }
}
