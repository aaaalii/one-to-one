<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$students = Student::with('getContact')->find(2);
        // echo $students->name, "<br>";
        // echo $students->getContact->email;
        
        // to use condition with second table (contacts)
        $students = Student::where('gender', 'M')->withWhereHas('getContact', function($query){
            $query->where('city', 'nankana');
        })->get(); // similarly we have a method whereHas(), which checks the condition in the second table, but returns data only from first table
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // when using relational mapping, we can insert in both tables using one controller

        $student = Student::create([
            'name' => 'Lol name',
            'age' => 68,
            'gender' => 'F',
        ]);

        $student->getContact()->create([
            'email' => 'lol@email.com',
            'phone' => 2322414,
            'address' => 'lshewbbbbbbbbbbbbsdiuvhejvw',
            'city' => 'lolCity',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
