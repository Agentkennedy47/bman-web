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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="year-calendar"></div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>
    </div>
</div>

@endsection