<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Grade;
use App\Schoolmanagement\Service\Classes\ClassService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function index(ClassService $classService): View
    {
        return view('admins.classes.index', ['classes' => $classService->getClassData(new Classes())]
  
    );
    }
    // ['classes' => Classes::get()]
    public function create(): View
    {
        return view('admins.classes.create',['grades' => Grade::all()]);
    }


    public function store(Request $request , ClassService $classService): RedirectResponse
    {
        $this->validated($request);
        $classService->storeClassData(new Classes() , $request);
        return redirect()->route('classes.index')->with('success', 'Class has been created successfully');
    }


    public function show(Classes $classes): View
    {
        return view('admins.classes.show', compact('classes'));
    }

    public function edit($id ,Classes $classes): View
    {
        return view('admins.classes.edit', ['class'=>Classes::find($id) , 'grades' =>Grade::all()]);
    }


    public function update(Request $request, Classes $classes): RedirectResponse
    {
        return redirect()->route('classes.index');
    }


    public function destroy($id, Classes $classes, ClassService $classService): RedirectResponse
    {
        $classService->deleteClassData(Classes::find($id));
        return redirect()->route('classes.index')->with('success', 'Class data has been deleted successfully');
    }

    protected function validated($request){
        return $this->validate($request,[
            'name'      => 'required|max:100', 
            'status'    => 'required|min:1',
            'grade_id'  => 'required|min:1',
            'description' => 'nullable'
        ]);
    }
}

