<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $valueyear = $request->get('valueyear');
        $users = DB::table('users')->where('type', 'like',  '%' . '1' . '')->paginate(10);
        $users->appends(['valueyear' => $valueyear]);




        return view('admin/ProfessorList', ['users' => $users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createProfessor');
    }

    public function searchprofessor(Request $request)
    {
        $search = $request->get('searchprofessor');
         $users = DB::table('users')->where('name', 'like',  '%' . $search . '%')->where('type', '=', '1')->paginate(10);

         $users->appends(['searchprofessor' => $search]);

        return view('admin/ProfessorList', ['users' => $users]);
    }

    // public function year(Request $request)
    // {
    //     $valueyear = $request->get('valueyear');
    //     $users = DB::table('users')->where('StudentID', 'like',  '' . $valueyear . '%')->where('typeID', '=', '2')->paginate(10);


    //     return view('admin/studentstatus.index', ['users' => $users]);
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $StudentID = $request->get('StudentID');
        $type = $request->get('type');
        $IdCardNumber = $request->get('IdCardNumber');
        $BirthDay = $request->get('BirthDay');
        $Faculty = $request->get('Faculty');
        $Subject = $request->get('Subject');
        $AcademicYear = $request->get('AcademicYear');
        $Degrees = $request->get('Degrees');
        $email = $request->get('email');
        $Tel = $request->get('Tel');
        $Facebook = $request->get('Facebook');
        $password = Hash::make($request->get('password'));

        $students = DB::insert('insert into users(StudentID, name, email, password, type ) 
                            value(?,?,?,?,?)', [$StudentID, $name, $email, $password, $type]);
        if ($students) {
            $red = redirect('admin/ProfessorList')->with('success', 'Data Student has been added');
        } else {
            $red = redirect('admin/ProfessorList/create')->with('danger', 'Input Student data failed, please try again');
        }
        return $red;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::select('select * from users where id=?', [$id]);

        return view('admin/showProfessor', ['users' => $users]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::select('select * from users where id=?', [$id]);

        return view('admin/editProfessor', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $StudentID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $StudentID)
    {
        $name = $request->get('name');
        $StudentID = $request->get('StudentID');
        $nickname = $request->get('nickname');
        $IdCardNumber = $request->get('IdCardNumber');
        $BirthDay = $request->get('BirthDay');
        $Faculty = $request->get('Faculty');
        $Subject = $request->get('Subject');
        $AcademicYear = $request->get('AcademicYear');
        $Degrees = $request->get('Degrees');
        $email = $request->get('email');
        $Tel = $request->get('Tel');
        $Facebook = $request->get('Facebook');
  

        $students = DB::update('update users set name=?, email=?, StudentID=?, nickname=?,
                                 Tel=?, IdCardNumber=?, Subject=?, Faculty=?, 
                                 BirthDay=?, AcademicYear=?, Degrees=?, Facebook=? where StudentID=?', [
            $name,$email,$StudentID,$nickname,$Tel,$IdCardNumber,$Subject,$Faculty,$BirthDay,$AcademicYear,$Degrees,$Facebook,$StudentID
            
        ]);
        if ($students) {
            $red = redirect('admin/ProfessorList')->with('success', 'Data has been updated');
        } else {
            $red = redirect('admin/edit/' . $StudentID)->with('danger', 'Error update please try again');
        }
        return $red;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $students = DB::delete('delete from users where id=?', [$id]);

        $red = redirect('admin/ProfessorList')->with('success', 'Data has been deleted');
        return $red;
    }

}
