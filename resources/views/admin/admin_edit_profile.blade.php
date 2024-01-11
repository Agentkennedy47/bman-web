@extends('admin.master')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="{{ $editData->name }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" value="{{ $editData->email }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="input-group mb-3 col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input form-control" id="Image" name="profile_image">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="img-fluid rounded-circle" width="100px" height="50px" src="{{ (!empty($editData->profile_image)) ? url('upload/admin/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-rounded btn-info">
                                            <span class="btn-icon-left text-info"><i class="fa fa-pencil color-info"></i></span>
                                            Update profile
                                        </button>
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

<script>
    $(document).ready(function () {
        $('#Image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection