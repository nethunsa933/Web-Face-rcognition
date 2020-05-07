@extends('layouts.camera')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">สแกนใบหน้า</h1>
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
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div align="center">
                <video id="video" width="720" height="560" autoplay muted></video>
            </div>
        </div>
    </div>
</div>
@endsection