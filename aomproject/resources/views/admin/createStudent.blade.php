@extends('layouts.LTE')
@section('content')

@if($message = Session::get('danger'))
<div class="alert-danger">
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="card">
        <div class="card-header" align="center">
            <strong class="card-title">เพิ่มบัญชีผู้ใช้</strong>
        </div>
        <div class="card-body">
            <form action="{{ action('admin\StudentController@store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="StudentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา :</label>
                    <div class="col-md-6">
                        <input id="StudentID" type="number" class="form-control" name="StudentID">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล :</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" placeholder="นาย/นาง/นางสาว">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name - Surname :</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Mr./Miss./Mrs." value="{{ old('egname', auth()->user()->egname) }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nickname" class="col-md-4 col-form-label text-md-right">ชื่อเล่น :</label>
                    <div class="col-md-6">
                        <input id="nickname" type="text" class="form-control" name="nickname" maxlength="20">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="IdCardNumber" class="col-md-4 col-form-label text-md-right">รหัสประชาชน :</label>
                    <div class="col-md-6">
                        <input id="IdCardNumber" type="number" class="form-control" name="IdCardNumber">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="BirthDay" class="col-md-4 col-form-label text-md-right">วันเดือนปีเกิด :</label>
                    <div class="col-md-6">
                        <input id="BirthDay" type="text" class="form-control" name="BirthDay" placeholder="1 มกราคม 2563">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Faculty" class="col-md-4 col-form-label text-md-right">คณะ :</label>
                    <div class="col-md-6">
                        <input id="Faculty" type="text" class="form-control" name="Faculty">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Subject" class="col-md-4 col-form-label text-md-right">สาขา :</label>
                    <div class="col-md-6">
                        <input id="Subject" type="text" class="form-control" name="Subject">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="AcademicYear" class="col-md-4 col-form-label text-md-right">ปีการศึกษา :</label>
                    <div class="col-md-6">
                        <input id="AcademicYear" type="number" class="form-control" name="AcademicYear" placeholder="2563">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Degrees" class="col-md-4 col-form-label text-md-right">ระดับการศึกษา :</label>
                    <div class="col-md-6">
                        <input id="Degrees" type="text" class="form-control" name="Degrees" placeholder="ปริญญาตรี/ปริญญาโท/ปริญญาเอก">
                    </div>
                </div> -->

                

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>
                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="Tel" class="col-md-4 col-form-label text-md-right">Tell :</label>
                    <div class="col-md-6">
                        <input id="Tel" type="number" class="form-control" name="Tel" placeholder="0812345678">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Facebook" class="col-md-4 col-form-label text-md-right">Facebook</label>
                    <div class="col-md-6">
                        <input id="Facebook" type="text" class="form-control" name="Facebook">
                    </div>
                </div> -->
                <div align="center">
                    <button class="btn btn-primary" type="submit">Save <i class="fas fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection