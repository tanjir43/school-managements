<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassRouting;
use App\Models\Day;
use App\Models\Grade;
use App\Models\Level;
use App\Models\Section;
use App\Models\Session;
use App\Models\Shift;
use App\Models\Subject;
use App\Models\Time;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ClassRoutingController extends Controller
{

    public function index(): View
    {
        return view('admins.class_routings.index', ['classRoutings' => ClassRouting::get()]);
    }


    public function create(): View
    {
        return view('admins.class_routings.create',
        [
            'levels' => Level::GetActiveLevels(),
            'grades' => Grade::GetActiveGrades(),
            'classes'=> Classes::GetActiveClasses(),
            'days'   => Day::GetActiveDays(),
            'sections' => Section::GetActiveSections(),
            'shifts' => Shift::GetActiveShifts(),
            'sessions' => Session::GetActiveSessions(),
            'subjects' => Subject::GetActiveSubjects(),
            'times'    => Time::GetActiveTimes(),
        ]
        );
    }


    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('classRoutings.index');
    }


    public function show(ClassRouting $classRouting): View
    {
        return view('admins.class_routings.show', compact('classRouting'));
    }

    public function edit(ClassRouting $classRouting): View
    {
        return view('admins.class_routings.edit', compact('classRouting'));
    }


    public function update(Request $request, ClassRouting $classRouting): RedirectResponse
    {
        return redirect()->route('classRoutings.index');
    }


    public function destroy(ClassRouting $classRouting): RedirectResponse
    {
        return redirect()->route('classRoutings.index');
    }
}
