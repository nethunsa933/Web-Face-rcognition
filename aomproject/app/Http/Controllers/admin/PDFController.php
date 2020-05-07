<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{

  public function pdf($StudentID)
  {

    // $users = DB::table('users')->where('type', 'like',  '%' . '0' . '')->where('StudentID', 'like',  '' . '59' . '%')->orderBy('StudentID', 'ASC');
    $users = DB::select('select * from users where type = 0 ');

    $pdf = PDF::loadView('admin/pdf' ,['users' => $users]);

    return @$pdf->stream('test.pdf'); //แบบนี้จะ stream มา preview
    //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
  }
}
