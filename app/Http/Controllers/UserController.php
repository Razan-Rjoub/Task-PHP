<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
    public function indexDashboard(){
        $student=Student::get()->count();
        $user=User::get()->count();
 
        return view('Dashboard.pages.index',compact('user','student'));
    }
    public function index(UsersDataTable $dataTables)
    {
        return $dataTables->render('Dashboard.pages.user.index');
    }
    public function create()
    {
        return view('Dashboard.pages.user.create');
    }

    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'role' => ['required'],
            'password'=>['required'],
        ]);


        User::create([
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role'=>$request->input('role'),
        ]);

        Alert::success('success', 'Added Successfully');

        return redirect()->route('user.index');
    }
    public function edit($id)
    {     
        $user = User::findOrFail($id);
        return view('Dashboard.pages.user.edit', compact('user'));
    }

    
    public function update(Request $request, $id)
    {
  
        $request->validate([

            'role' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);


        User::where('id', $id)->update($data);

        Alert::success('success', 'Added Successfully');

        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
            $user = User::findOrFail($id);
            $user->delete();

            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
