@extends('layouts.LTE')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PROFILE</div>
                @foreach($users as $student)

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <img src="{{ $student->profile_image }}" alt="" width="200">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="StudentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา :</label>
                            <div class="col-md-6">
                                <input id="StudentID" type="number" class="form-control" name="StudentID" value="{{ $student->StudentID }}" disabled>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $student->name }}" disabled>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name - Surname :</label>
                            <div class="col-md-6">
                                <input id="egname" type="text" class="form-control" name="egname" value="{{ $student->egname }}" disabled>
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">ชื่อเล่น :</label>
                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ $student->nickname }}" disabled>
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="IdCardNumber" class="col-md-4 col-form-label text-md-right">รหัสประชาชน :</label>
                            <div class="col-md-6">
                                <input id="IdCardNumber" type="number" class="form-control" name="IdCardNumber" value="{{ $student->IdCardNumber }}" disabled>
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="BirthDay" class="col-md-4 col-form-label text-md-right">วันเดือนปีเกิด :</label>
                            <div class="col-md-6">
                                <input id="BirthDay" type="text" class="form-control" name="BirthDay" value="{{ $student->BirthDay }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Faculty" class="col-md-4 col-form-label text-md-right">คณะ :</label>
                            <div class="col-md-6">
                                <input id="Faculty" type="text" class="form-control" name="Faculty" value="{{ $student->Faculty }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Subject" class="col-md-4 col-form-label text-md-right">สาขา :</label>
                            <div class="col-md-6">
                                <input id="Subject" type="text" class="form-control" name="Subject" value="{{ $student->Subject }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="AcademicYear" class="col-md-4 col-form-label text-md-right">ปีการศึกษา :</label>
                            <div class="col-md-6">
                                <input id="AcademicYear" type="number" class="form-control" name="AcademicYear" value="{{ $student->AcademicYear }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Degrees" class="col-md-4 col-form-label text-md-right">ระดับการศึกษา :</label>
                            <div class="col-md-6">
                                <input id="Degrees" type="text" class="form-control" name="Degrees" value="{{ $student->Degrees }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cc-exp" class="col-md-4 col-form-label text-md-right">สถานะ :</label>
                            <div class="col-md-6">
                                <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="@if( $student->StudentOldStatus_Id === 4)กำลังศึกษา
                                                                                                            @elseif( $student->StudentOldStatus_Id === 3)ย้ายคณะ/ย้ายสาขา
                                                                                                            @elseif( $student->StudentOldStatus_Id === 2)พ้นสภาพ
                                                                                                            @elseif( $student->StudentOldStatus_Id === 1)จบการศึกษา   
                                                                                                            @elseไม่พบ
                                                                                                            @endif" disabled>
                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $student->email }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tel" class="col-md-4 col-form-label text-md-right">Tell :</label>
                            <div class="col-md-6">
                                <input id="Tel" type="number" class="form-control" name="Tel" value="{{ $student->Tel }}" disabled>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="Facebook" class="col-md-4 col-form-label text-md-right">Facebook</label>
                            <div class="col-md-6">
                                <input id="Facebook" type="text" class="form-control" name="Facebook" value="{{ $student->Facebook }}" disabled>
                            </div>
                        </div> -->

                        <div align="center">
                            <a href="{{ action('admin\ProfessorController@index') }}" class="btn btn-primary">Back <i class="fas fa-chevron-circle-left"></i></a>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection