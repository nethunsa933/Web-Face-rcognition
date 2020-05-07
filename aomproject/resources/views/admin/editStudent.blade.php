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

@foreach($users as $student)

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="col-12">
                        <form action="{{ action('admin\StudentController@update', $student->StudentID) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="StudentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา :</label>
                                <div class="col-md-6">
                                    <input id="StudentID" type="text" class="form-control" name="StudentID" value="{{ $student->StudentID }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล :</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="นาย/นาง/นางสาว" value="{{ $student->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name - Surname :</label>
                                <div class="col-md-6">
                                    <input id="egname" type="text" class="form-control" name="egname" value="{{ $student->egname }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nickname" class="col-md-4 col-form-label text-md-right">ชื่อเล่น :</label>
                                <div class="col-md-6">
                                    <input id="nickname" type="text" class="form-control" name="nickname" maxlength="20" value="{{ $student->nickname }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="IdCardNumber" class="col-md-4 col-form-label text-md-right">รหัสประชาชน :</label>
                                <div class="col-md-6">
                                    <input id="IdCardNumber" type="number" class="form-control" name="IdCardNumber" value="{{ $student->IdCardNumber }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="BirthDay" class="col-md-4 col-form-label text-md-right">วันเดือนปีเกิด :</label>
                                <div class="col-md-6">
                                    <input id="BirthDay" type="text" class="form-control" name="BirthDay" placeholder="1 มกราคม 2563" value="{{ $student->BirthDay }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Faculty" class="col-md-4 col-form-label text-md-right">คณะ :</label>
                                <div class="col-md-6">
                                    <input id="Faculty" type="text" class="form-control" name="Faculty" value="{{ $student->Faculty }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Subject" class="col-md-4 col-form-label text-md-right">สาขา :</label>
                                <div class="col-md-6">
                                    <input id="Subject" type="text" class="form-control" name="Subject" value="{{ $student->Subject }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="AcademicYear" class="col-md-4 col-form-label text-md-right">ปีการศึกษา :</label>
                                <div class="col-md-6">
                                    <input id="AcademicYear" type="number" class="form-control" name="AcademicYear" placeholder="2563" value="{{ $student->AcademicYear }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Degrees" class="col-md-4 col-form-label text-md-right">ระดับการศึกษา :</label>
                                <div class="col-md-6">
                                    <input id="Degrees" type="text" class="form-control" name="Degrees" placeholder="ปริญญาตรี/ปริญญาโท/ปริญญาเอก" value="{{ $student->Degrees }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="StudentOldStatus_Id" class="col-md-4 col-form-label text-md-right">สถานะ :</label>
                                <div class="col-md-6">
                                    <select class="custom-select" name="StudentOldStatus_Id">
                                        @if( $student->StudentOldStatus_Id === 1)
                                        <option value="4" selected>กำลังศึกษา</option>
                                        <option value="3">ย้ายคณะ/ย้ายสาขา</option>
                                        <option value="2">พ้นสภาพ</option>
                                        <option value="1">จบการศึกษา</option>
                                        @elseif( $student->StudentOldStatus_Id === 2)
                                        <option value="3" selected>ย้ายคณะ/ย้ายสาขา</option>
                                        <option value="4">กำลังศึกษา</option>
                                        <option value="2">พ้นสภาพ</option>
                                        <option value="1">จบการศึกษา</option>
                                        @elseif( $student->StudentOldStatus_Id === 3)
                                        <option value="2" selected>พ้นสภาพ</option>
                                        <option value="4">กำลังศึกษา</option>
                                        <option value="3">ย้ายคณะ/ย้ายสาขา</option>
                                        <option value="4">จบการศึกษา</option>
                                        @elseif( $student->StudentOldStatus_Id === 4)
                                        <option value="1" selected>จบการศึกษา</option>
                                        <option value="4">กำลังศึกษา</option>
                                        <option value="3">ย้ายคณะ/ย้ายสาขา</option>
                                        <option value="2">พ้นสภาพ</option>
                                        @else
                                        <option value="4">กำลังศึกษา</option>
                                        <option value="3">ย้ายคณะ/ย้ายสาขา</option>
                                        <option value="2">พ้นสภาพ</option>
                                        <option value="1">จบการศึกษา</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ $student->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Tel" class="col-md-4 col-form-label text-md-right">Tell :</label>
                                <div class="col-md-6">
                                    <input id="Tel" type="number" class="form-control" name="Tel" placeholder="0812345678" value="{{ $student->Tel }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Facebook" class="col-md-4 col-form-label text-md-right">Facebook</label>
                                <div class="col-md-6">
                                    <input id="Facebook" type="text" class="form-control" name="Facebook" value="{{ $student->Facebook }}">
                                </div>
                            </div>

                            <div align="center">
                                <button class="btn btn-success" type="submit">Update <i class="fas fa-save"></i></button>
                                <a href="{{ action('admin\StudentController@index') }}" class="btn btn-primary">Back <i class="fas fa-chevron-circle-left"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection