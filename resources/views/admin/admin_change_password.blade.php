@extends('admin.master')

@section('admin')

<div class="content-body">
    <div class="container-fluid">

    	@php

    	$id = Auth::user()->id;
    	$adminData = App\Models\User::find($id);

    	@endphp

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back - {{ $adminData->name }}</h4>
                </div>
            </div>
        </div>

       <!-- row -->
        <div class="row">
        	<div class="col-xl-6 col-xxl-12">

                @if(count($errors))
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                    @endforeach
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('update.password') }}" method="POST">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Current password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="new_password" id="new_password" class="form-control" placeholder="New password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-rounded btn-success">Update password</button>
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

@endsection