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
	        <div class="col-12">
	            <div class="card">
	                <div class="card-header">
	                    <h4 class="card-title">All Slides</h4>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table id="example" class="display" style="min-width: 845px">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>Slide Title</th>
	                                    <th>Slide Description</th>
	                                    <th>Slide Image</th>
	                                    <th>Call Action</th>
	                                    <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>

	                            	@php($i = 1)

	                            	@foreach($slides as $item)

	                                <tr>
	                                    <td>{{ $i++ }}</td>
	                                    <td>{{ $item->title }}</td>
	                                    <td>{{ $item->description }}</td>
	                                    <td>
	                                    	<img src="{{ asset($item->slide_image) }}" width="100px" alt="">
	                                    </td>
	                                    <td>{{ $item->call_action }}</td>
	                                    <td>
	                                    	<a href="{{ route('edit.slide', $item->id) }}" class="btn btn-info sm" title="Edit data">
	                                    		<i class="fa fa-edit"></i>
	                                    	</a>

	                                    	<a href="{{ route('delete.slide', $item->id) }}" class="btn btn-danger sm" title="Delete data" id="delete">
	                                    		<i class="fa fa-trash"></i>
	                                    	</a>
	                                    </td>
	                                </tr>

	                                @endforeach              
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection