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
                        <h4 class="card-title">Edit Slide</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('update.slides') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <input type="hidden" name="id" value="{{ $slides->id }}">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Slide Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" value="{{ $slides->title }}">

                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Slide Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" class="form-control" value="{{ $slides->description }}">

                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Call Action</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="call_action" class="form-control" value="{{ $slides->call_action }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Slide Image</label>
                                    <div class="input-group mb-3 col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input form-control" id="Image" name="slide_image">

                                            @error('slide_image')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="img-fluid rounded" width="100px" height="50px" src="{{ asset($slides->slide_image) }}" alt="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-rounded btn-info">
                                            <span class="btn-icon-left text-info"><i class="fa fa-pencil color-info"></i></span>
                                            Update Slide
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