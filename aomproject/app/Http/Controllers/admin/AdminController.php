<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        $users = DB::table('users')->where('type','=', '0');
        $professor = DB::table('users')->where('type','=', '1');
        // $valueyear = $request->get('valueyear');
        // $users = DB::table('users')->orderBy('StudentID', 'ASC')->where('type', 'like',  '%' . $valueyear . '')->paginate(10);
        // $users->appends(['valueyear' => $valueyear]);

        return view('admin/dashboard',compact('users', 'professor'));
    
    }

    // public function searchstudent(Request $request)
    // {
    //     $search = $request->get('searchstudent');
    //     $users = DB::table('users')->where('name', 'like',  '%' . $search . '%')->paginate(10);

    //     $users->appends(['searchstudent' => $search]);

    //     return view('admin/dashboard', ['users' => $users]);
    // }

    public function AllStudent()
    {
      

        return view('admin/AllStudent');
    }
}
