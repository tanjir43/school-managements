<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Schoolmanagement\Service\Subjects\SubjectService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SubjectController extends Controller
{

    public function index(): View
    {
        return view('admins.subjects.index', ['subjects' => Subject::get()]);
    }


    public function create(): View
    {
        return view('admins.subjects.create');
    }




    public function store(Request $request, SubjectService  $subjectService): RedirectResponse
    {
        $subjectService->storeSubjectData(new Subject(), $request);
        return redirect()->route('subjects.index')->with('success','Subjects has been added successfully');

    }


    public function show(Subject $subject): View
    {
        return view('admins.subjects.show', compact('subject'));
    }

    public function edit(Subject $subject): View
    {
        return view('admins.subjects.edit', compact('subject'));
    }


    public function update(Request $request, Subject $subject): RedirectResponse
    {
        return redirect()->route('subjects.index');
    }



    public function destroy(Subject $subject, SubjectService  $subjectService): RedirectResponse
    {
        $subjectService->deleteSubjectData($subject);
        return redirect()->route('subjects.index')->with('success','Subjects has been deleted successfully');

    }

    protected function validated($request){
        return $this->validate($request,[
            'name'      => 'required|max:100', 
            'status'    => 'required|min:1',
            'code'      => 'nullable',
            'hour'      => 'required|integer',
            'credit'    => 'required|integer',


        ]);
    }
}
