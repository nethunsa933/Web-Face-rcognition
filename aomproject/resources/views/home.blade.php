@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PROFILE</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div div class="col-12">
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <img src="{{ auth()->user()->image }}" alt="" width="200">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="StudentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา :</label>
                            <div class="col-md-6">
                                <input id="StudentID" type="number" class="form-control" name="StudentID" value="{{ old('StudentID', auth()->user()->StudentID) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name - Surname :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="egname" value="{{ old('egname', auth()->user()->egname) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">ชื่อเล่น :</label>
                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname', auth()->user()->nickname) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="IdCardNumber" class="col-md-4 col-form-label text-md-right">รหัสประชาชน :</label>
                            <div class="col-md-6">
                                <input id="IdCardNumber" type="number" class="form-control" name="IdCardNumber" value="{{ old('IdCardNumber', auth()->user()->IdCardNumber) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="BirthDay" class="col-md-4 col-form-label text-md-right">วันเดือนปีเกิด :</label>
                            <div class="col-md-6">
                                <input id="BirthDay" type="text" class="form-control" name="BirthDay" value="{{ old('BirthDay', auth()->user()->BirthDay) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Faculty" class="col-md-4 col-form-label text-md-right">คณะ :</label>
                            <div class="col-md-6">
                                <input id="Faculty" type="text" class="form-control" name="Faculty" value="{{ old('Faculty', auth()->user()->Faculty) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Subject" class="col-md-4 col-form-label text-md-right">สาขา :</label>
                            <div class="col-md-6">
                                <input id="Subject" type="text" class="form-control" name="Subject" value="{{ old('Subject', auth()->user()->Subject) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="AcademicYear" class="col-md-4 col-form-label text-md-right">ปีการศึกษา :</label>
                            <div class="col-md-6">
                                <input id="AcademicYear" type="number" class="form-control" name="AcademicYear" value="{{ old('AcademicYear', auth()->user()->AcademicYear) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Degrees" class="col-md-4 col-form-label text-md-right">ระดับการศึกษา :</label>
                            <div class="col-md-6">
                                <input id="Degrees" type="text" class="form-control" name="Degrees" value="{{ old('Degrees', auth()->user()->Degrees) }}" disabled>
                            </div>
                        </div>

                        <!--  -->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tel" class="col-md-4 col-form-label text-md-right">Tell :</label>
                            <div class="col-md-6">
                                <input id="Tel" type="number" class="form-control" name="Tel" value="{{ old('Tel', auth()->user()->Tel) }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Facebook" class="col-md-4 col-form-label text-md-right">Facebook</label>
                            <div class="col-md-6">
                                <input id="Facebook" type="text" class="form-control" name="Facebook" value="{{ old('Facebook', auth()->user()->Facebook) }}" disabled>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary" href="{{ url('/profile') }}">Edit Profile</button>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection