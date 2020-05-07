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
                <h1 class="m-0 text-dark">อาจารย์ & เจ้าหน้าที่</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                    <a href="{{ url('/admin/pdf') }}">
                        <button type="button" class="btn btn-success">
                            <i class="fa fa-print" aria-hidden="true"></i>Export to PDF</button>
                    </a>
                </ol> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center"></div>
        <div class="col-md-4 text-right">
            <form class="form-inline my-2 my-lg-0" action="/admin/searchprofessor" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" type="search" name="searchprofessor">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>


        <div class="col-md-4 text-center">
            <a href="{{ action('admin\ProfessorController@create') }}">
                <button class="btn btn-primary">
                    <i class="zmdi zmdi-plus"></i>เพิ่มอาจารย์ & เจ้าหน้าที่</button>
            </a>

        </div>
    </div>
    <br>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead class="thead">
                <tr>
                    <th width="150" onclick="sortTable(0)">
                        <div align="center">id</div>
                    </th>
                    <th width="300" onclick="sortTable(1)">
                        <div align="center">ชื่อ-สกุล</div>
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
                        <div align="center">{{ $student->id }}</div>
                    </td>
                    <td>
                        <div align="center"> {{ $student->name }}</div>
                    </td>
                    <td>
                        <div align="center">
                            <a href="{{ action('admin\ProfessorController@show', $student->id) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                            <a href="{{ action('admin\ProfessorController@edit', $student->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
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