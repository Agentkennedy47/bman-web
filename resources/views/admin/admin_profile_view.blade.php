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
        	<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="card mb-3">
                    <img class="card-img-top img-fluid rounded-circle w-25 d-block mx-auto mt-3" src="{{ (!empty($adminData->profile_image)) ? url('upload/admin/'.$adminData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">Profile Data</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Name: {{ $adminData->name }} </p>
                       	<p class="card-text">Email Address: {{ $adminData->email }} </p>
                    </div>
                </div>
                <a href="{{ route('edit.profile') }}" class="btn btn-rounded btn-primary">
                	<span class="btn-icon-left text-primary">
                		<i class="fa fa-edit color-primary"></i>
                	</span>
                	Edit profile
                </a>
            </div>
        </div>
    </div>
</div>

@endsection