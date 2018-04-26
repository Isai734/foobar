<?php

namespace FoorbaApp\Http\Controllers;

use Illuminate\Http\Request;

class AddPersonaController extends Controller
{
    public function index(){
        $users = DB::select('select * from student');
        return view('stud_view',['users'=>$users]);
    }

    public function insertform(){
        return view('addpersona');
    }

    public function insert(Request $request){
        $name = $request->input('stud_name');
        DB::insert('insert into student (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
