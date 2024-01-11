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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit MTN DATA PLANS</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('update.mtn.data') }}" method="POST">

                                @csrf

                                <input type="hidden" name="id" value="{{ $mtnData->id }}">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">MTN Data</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="mtn_data" class="form-control" value="{{ $mtnData->mtn_data }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">MTN Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="mtn_price" class="form-control" value="{{ $mtnData->mtn_price }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-rounded btn-info">
                                            Update MTN Data
                                        </button>
                                        {{-- <button type="submit" class="btn btn-rounded btn-success">Add Slide</button> --}}
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