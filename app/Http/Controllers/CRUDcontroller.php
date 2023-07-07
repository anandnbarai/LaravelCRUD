<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class CRUDcontroller extends Controller
{
    public function insert(Request $request)
    {
        $name = $request->get('studentname');
        $email = $request->get('email');
        $technology = $request->get('technology');
        $city = $request->get('city');

        // return $request->input();

        $student = new student();

        $student->studentname = $name;
        $student->email = $email;
        $student->technology = $technology;
        $student->city = $city;
        $student->save();

        return redirect('/');
    }

    public function readdata()
    {
        $studentdata = student::all();
        return view('insert', ['data' => $studentdata]);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $studentname = $request->get('studentname');
        $email = $request->get('email');
        $technology = $request->get('technology');
        $city = $request->get('city');

        if ($request->get('update') == 'Update') {
            return view('update', ['id' => $id, 'studentname' => $studentname, 'email' => $email, 'technology' => $technology, 'city' => $city]);
        } else {
            $student = student::find($id);
            $student->delete();

        }
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $id = $request->get('id');
        $studentname = $request->get('studentname');
        $email = $request->get('email');
        $technology = $request->get('technology');
        $city = $request->get('city');

        $student = student::find($id);
        $student->studentname = $studentname;
        $student->email = $email;
        $student->technology = $technology;
        $student->city = $city;
        $student->save();

        return redirect('/');
    }
}