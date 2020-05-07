@extends('layouts.LTE')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">นักศึกษา</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            
                <ol class="breadcrumb float-sm-right">
                    @foreach($users as $student)<a href="{{ url('/admin/pdf', $student->StudentID) }}">@endforeach
                        <button type="button" class="btn btn-success">
                            <i class="fa fa-print" aria-hidden="true"></i>Export to PDF</button>
                    </a>
                </ol>
                
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center">
            <form action="/admin/year" action="/admin/pdf" method='get'>
                <select class="custom-select mr-sm-2" id="valueyear" name="valueyear" style="width: 40%">
                    <option value="" selected>ทุกชั้นปี</option>
                    @php

                    $year = (int)date('Y') -1962;
                    $min = $year;
                    $max = $year +5 ;
                    for( $i=$max; $i>=$min; $i-- ) {
                    if(isset($_REQUEST["valueyear"]) && ($_REQUEST["valueyear"] == $i)) {

                    $selected = 'selected="selected"';
                    } else {
                    $selected='';
                    }
                    echo "<option value=$i $selected>$i</option>";
                    }

                    @endphp
                </select>
                <button type="submit" class="btn btn-primary">
                    <i class="zmdi zmdi-filter-list"></i>ยืนยัน</button>
            </form>
            @php
            if(isset($_REQUEST['filter']))
            {
            $Year = $_REQUEST['valueyear'];
            }
            @endphp

        </div>
        <div class="col-md-4 text-right">
            <form class="form-inline my-2 my-lg-0" action="/admin/searchstudent" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" type="search" name="searchstudent">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>


        <div class="col-md-4 text-center">
            <a href="{{ action('admin\StudentController@create') }}">
                <button class="btn btn-primary">
                    <i class="zmdi zmdi-plus"></i>เพิ่มนักศึกษา</button>
            </a>

        </div>
    </div>
    <br>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead class="thead">
                <tr>
                    <th width="150" onclick="sortTable(0)">
                        <div align="center">รหัสนักศึกษา</div>
                    </th>
                    <th width="300" onclick="sortTable(1)">
                        <div align="center">ชื่อ-สกุล</div>
                    </th>
                    <th width="180" onclick="sortTable(1)">
                        <div align="center">สถานะ</div>
                    </th>
                    <th width="180">
                        <div align="center">รายละเอียด</div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $student)
                <tr>
                    <td>
                        <div align="center">{{ $student->StudentID }}</div>
                    </td>

                    <td>
                        {{ $student->name }}
                    </td>

                    <td>
                        <div align="center">@if( $student->StudentOldStatus_Id === 4)
                            <font color='#1D8348'>กำลังศึกษา</font>
                            @elseif( $student->StudentOldStatus_Id === 3)
                            <font color='#D35400'>ย้ายคณะ/ย้ายสาขา</font>
                            @elseif( $student->StudentOldStatus_Id === 2)
                            <font color='#7D3C98'>พ้นสภาพ</font>
                            @elseif( $student->StudentOldStatus_Id === 1)
                            <font color='#3498DB'>จบการศึกษา</font>
                            @else
                            <font color='#FF0000'>ไม่พบ</font>
                            @endif
                        </div>
                    </td>

                    <td>
                        <div align="center">
                            <form action="{{ action('admin\StudentController@destroy', $student->StudentID) }}" method="post">
                                <a href="{{ action('admin\StudentController@show', $student->StudentID) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                                <a href="{{ action('admin\StudentController@edit', $student->StudentID) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></button>
                            </form>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination justify-content-center">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection