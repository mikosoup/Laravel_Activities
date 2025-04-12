<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function myWelcomeView()
    {
        $students = Students::all();
        return view('welcome', compact('students'));
    }

    public function createNewStd(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|numeric',
            'gender' => 'required|max:6',
            'address' => 'required'
        ]);
        
        $addNew = new Students();
        $addNew->name = $request->name;
        $addNew->age = $request->age;
        $addNew->gender = $request->gender;
        $addNew->address = $request->address;
        $addNew->save();

        return back()->with('success', 'Student added successfully!');
    }

    // mao ni ang mo delete nga function

    public function destroy($id) {
        $students = Students::findOrFail($id); 
        $students->delete(); 
    
        return redirect()->back()->with('success', 'Student deleted successfully!');
    }

    public function edit($id)
    {
        $students = Students::findOrFail($id); 
        return view('edit-student', compact('students'));
    }
    public function update(Request $request, $id)
{
   
    $request->validate([
        'name' => 'required',
        'age' => 'required|integer',
        'gender' => 'required',
        'address' => 'required',
    ]);

    
    $students = Students::findOrFail($id);
    $students->update([
        'name' => $request->name,
        'age' => $request->age,
        'gender' => $request->gender,
        'address' => $request->address,

    ]);

    return redirect()->route('students.edit', $id)->with('success', 'Student updated successfully!');
}

    


    // public function showEditScreen(Post $id){
    //     return view('edit-post', ['post' => $id]);

    // }


}
