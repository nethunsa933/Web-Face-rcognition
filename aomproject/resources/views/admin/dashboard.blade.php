@extends('layouts.LTE')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">หน้าหลัก</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin\dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-lg">
    <div class="row">
    <div class="col-md-2">
            <div class="card-body">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-right"><b>Welcome to </b>
                        </h1>
                        <h2 class="text-right">The Face Recognition System<br>
                            for Searching of MJU Computer <br>Science
                            Student Information
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-logo">
                            <img src="{{ asset('image/facial-recognition.png') }}" width="180">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3 class="number">{{ $users->count() }}</h3>

                <p>นักศึกษาทั้งหมด</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ url('admin\StudentList') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3 class="number">{{ $professor->count() }}</h3>

                <p>อาจารย์ & เจ้าหน้าที่</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-friends"></i>
            </div>
            <a href="{{ url('admin\ProfessorList') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>60<sup style="font-size: 20px">%</sup></h3>

                <p>ความแม่นยำ</p>
            </div>
            <div class="icon">
                <i class="fas fa-percentage"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>@endsection