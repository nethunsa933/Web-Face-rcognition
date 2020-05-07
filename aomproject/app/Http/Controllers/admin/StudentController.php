<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $valueyear = $request->get('valueyear');
        $users = DB::table('users')->where('type', 'like',  '%' . '0' . '')->where('StudentID', 'like',  '' . $valueyear . '%')->orderBy('StudentID', 'ASC')->paginate(10);
        $users->appends(['valueyear' => $valueyear]);




        return view('admin/StudentList', ['users' => $users]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createStudent');
    }

    public function searchstudent(Request $request)
    {
        $search = $request->get('searchstudent');
         $users = DB::table('users')->where('StudentID', 'like',  '%' . $search . '%')->orwhere('name', 'like',  '%' . $search . '%')->paginate(10);

         $users->appends(['searchstudent' => $search]);

        return view('admin/StudentList', ['users' => $users]);
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
        $egname = $request->get('egname');
        $nickname = $request->get('nickname');
        $IdCardNumber = $request->get('IdCardNumber');
        $BirthDay = $request->get('BirthDay');
        $Faculty = $request->get('Faculty');
        $Subject = $request->get('Subject');
        $AcademicYear = $request->get('AcademicYear');
        $Degrees = $request->get('Degrees');
        $Student_StatusID = $request->get('StudentOldStatus_Id ');
        $email = $request->get('email');
        $Tel = $request->get('Tel');
        $Facebook = $request->get('Facebook');
        $password = Hash::make($request->get('password'));

        $students = DB::insert('insert into users(StudentID, name, email, password) 
                            value(?,?,?,?)', [$StudentID, $name, $email, $password]);
        if ($students) {

            $red = redirect('admin/StudentList')->with('success', 'Data Student has been added');
        } else {
            $red = redirect('admin/StudentList/create')->with('danger', 'Input Student data failed, please try again');
        }
        return $red;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($StudentID)
    {
        $users = DB::select('select * from users where StudentID=?', [$StudentID]);

        return view('admin/showStudent', ['users' => $users]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($StudentID)
    {
        $users = DB::select('select * from users where StudentID=?', [$StudentID]);

        return view('admin/editStudent', ['users' => $users]);
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
        $egname = $request->get('egname');
        $nickname = $request->get('nickname');
        $IdCardNumber = $request->get('IdCardNumber');
        $BirthDay = $request->get('BirthDay');
        $Faculty = $request->get('Faculty');
        $Subject = $request->get('Subject');
        $AcademicYear = $request->get('AcademicYear');
        $Degrees = $request->get('Degrees');
        $StudentOldStatus_Id = $request->get('StudentOldStatus_Id');
        $email = $request->get('email');
        $Tel = $request->get('Tel');
        $Facebook = $request->get('Facebook');
  

        $students = DB::update('update users set name=?, email=?, StudentID=?, nickname=?,
                                 Tel=?, IdCardNumber=?, Subject=?, Faculty=?, 
                                  BirthDay=?, AcademicYear=?, Degrees=?, StudentOldStatus_Id=?, Facebook=?, egname=? where StudentID=? ', [
            $name,$email,$StudentID,$nickname,$Tel,$IdCardNumber,$Subject,$Faculty,$BirthDay,$AcademicYear,$Degrees,$StudentOldStatus_Id, $Facebook,$egname,$StudentID
            
        ]);
        if ($students) {
            $red = redirect('admin/StudentList')->with('success', 'Data has been updated');
        } else {
            $red = redirect('admin/edit/' . $StudentID)->with('danger', 'Error update please try again');
        }
        return $red;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $StudentID
     * @return \Illuminate\Http\Response
     */
    public function destroy($StudentID)
    {
        $students = DB::delete('delete from users where StudentID=?', [$StudentID]);

        $red = redirect('admin/StudentList')->with('success', 'Data has been deleted');
        return $red;
    }

}
