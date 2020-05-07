@extends('layouts.app')
@section('content')
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
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="StudentID" class="col-md-4 col-form-label text-md-right">รหัสนักศึกษา :</label>
                                        <div class="col-md-6">
                                            <input id="StudentID" type="number" class="form-control" name="StudentID" placeholder="5904101000" value="{{ old('StudentID', auth()->user()->StudentID) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">ชื่อ - นามสกุล :</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" placeholder="นาย/นาง/นางสาว" value="{{ old('name', auth()->user()->name) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Name - Surname :</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="egname" placeholder="Mr./Miss./Mrs." value="{{ old('egname', auth()->user()->egname) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nickname" class="col-md-4 col-form-label text-md-right">ชื่อเล่น :</label>
                                        <div class="col-md-6">
                                            <input id="nickname" type="text" class="form-control" name="nickname" maxlength="20" value="{{ old('nickname', auth()->user()->nickname) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="IdCardNumber" class="col-md-4 col-form-label text-md-right">รหัสประชาชน :</label>
                                        <div class="col-md-6">
                                            <input id="IdCardNumber" type="number" class="form-control" name="IdCardNumber" value="{{ old('IdCardNumber', auth()->user()->IdCardNumber) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="BirthDay" class="col-md-4 col-form-label text-md-right">วันเดือนปีเกิด :</label>
                                        <div class="col-md-6">
                                            <input id="BirthDay" type="text" class="form-control" name="BirthDay" placeholder="1 มกราคม 2563" value="{{ old('BirthDay', auth()->user()->BirthDay) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Faculty" class="col-md-4 col-form-label text-md-right">คณะ :</label>
                                        <div class="col-md-6">
                                            <input id="Faculty" type="text" class="form-control" name="Faculty" value="{{ old('Faculty', auth()->user()->Faculty) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Subject" class="col-md-4 col-form-label text-md-right">สาขา :</label>
                                        <div class="col-md-6">
                                            <input id="Subject" type="text" class="form-control" name="Subject" value="{{ old('Subject', auth()->user()->Subject) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="AcademicYear" class="col-md-4 col-form-label text-md-right">ปีการศึกษา :</label>
                                        <div class="col-md-6">
                                            <input id="AcademicYear" type="number" class="form-control" name="AcademicYear" placeholder="2563" value="{{ old('AcademicYear', auth()->user()->AcademicYear) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Degrees" class="col-md-4 col-form-label text-md-right">ระดับการศึกษา :</label>
                                        <div class="col-md-6">
                                            <input id="Degrees" type="text" class="form-control" name="Degrees" placeholder="ปริญญาตรี/ปริญญาโท/ปริญญาเอก" value="{{ old('Degrees', auth()->user()->Degrees) }}">
                                        </div>
                                    </div>

                                    

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>
                                        <div class="col-md-6">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Tel" class="col-md-4 col-form-label text-md-right">Tell :</label>
                                        <div class="col-md-6">
                                            <input id="Tel" type="number" class="form-control" name="Tel" placeholder="0812345678" value="{{ old('Tel', auth()->user()->Tel) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Facebook" class="col-md-4 col-form-label text-md-right">Facebook</label>
                                        <div class="col-md-6">
                                            <input id="Facebook" type="text" class="form-control" name="Facebook" value="{{ old('Facebook', auth()->user()->Facebook) }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                        <div class="col-md-6">
                                            <input id="profile_image" type="file" class="form-control" name="profile_image">
                                            @if (auth()->user()->image)
                                            <code>{{ auth()->user()->image }}</code>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 mt-5">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection