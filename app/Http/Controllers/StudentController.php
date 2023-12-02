<?php

namespace App\Http\Controllers;

use App\DataTables\StudentsDataTable;
use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class StudentController extends Controller
{
    public function getallStudent(){
        $student=Student::all();
        
        return view('index',compact('student'));
    }
    public function index(StudentsDataTable $dataTables)
    {
        return $dataTables->render('Dashboard.pages.student.index');
    }
    public function create()
    {
        return view('Dashboard.pages.student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'age' => ['required', 'numeric'],
            'residenceLocation' => ['required'],
        ]);
        Student::create([
            'name' => $request->input('name'),
            'age'=>$request->input('age'),
            'residenceLocation'=>$request->input('residenceLocation'),
        ]);
        Alert::success('success', 'Added Successfully');

        return redirect()->route('student.index');
    }
    public function edit($id)
    {     
        $student = Student::findOrFail($id);
        return view('Dashboard.pages.student.edit', compact('student'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'age' => ['required', 'numeric'],
            'residenceLocation' => ['required'],
        ]);
        $data = $request->except(['_token', '_method']);
        Student::where('id', $id)->update($data);
        Alert::success('success', 'Added Successfully');
        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
            $student = Student::findOrFail($id);
            $student->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
  
}
