<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Level;
use App\Schoolmanagement\Service\Grades\GradeService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class GradeController extends Controller
{

    public function index(GradeService $gradeService): View
    {
        return view('admins.grades.index', ['grades' => $gradeService->getGradeData(new Grade)]);
    }


    public function create(): View
    {
        return view('admins.grades.create', ['levels' => Level::get(['id','name'])]);
    }


    public function store(Request $request , GradeService $gradeService): RedirectResponse
    {
        $this->validated($request);
        $gradeService->storeGradeData(new Grade() , $request);
        return redirect()->route('grades.index')->with('success', 'Grade has been crreated successfully');
    }


    public function show(Grade $grade): View
    {
        return view('admins.grades.show', compact('grade'));
    }

    public function edit(Grade $grade): View
    {
        return view('admins.grades.edit', ['grade' => $grade ,'levels' => Level::get(['id','name'])]);
    }


    public function update(Request $request, Grade $grade): RedirectResponse
    {
        return redirect()->route('grades.index');
    }


    public function destroy(Grade $grade , GradeService $gradeService): RedirectResponse
    {   
        $gradeService->deleteGradeData($grade);
        return redirect()->route('grades.index')->with('success', 'Grade data has been deleted successfully');
    }

    protected function validated($request){
        return $this->validate($request,[
            'name'      => 'required|max:100', 
            'status'    => 'required|min:1',
            'level_id'  => 'required|min:1',
            'description' => 'nullable|max:200'
        ]);
    }
}
