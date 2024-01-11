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
            <div class="col-xl-12 col-xxl-12">
                <form action="{{ route('update.about') }}" method="POST">

                    @csrf

                    <input type="hidden" name="id" value="{{ $aboutPage->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Section</h4>
                        </div>
                        <div class="card-body">
                            <textarea class="summernote" name="long_description">{{ $aboutPage->long_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-rounded btn-info px-3">
                                <span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i></span>
                                Add Section
                            </button>
                            {{-- <button type="submit" class="btn btn-rounded btn-success">Update page</button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection