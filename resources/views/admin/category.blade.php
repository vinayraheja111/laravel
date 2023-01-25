@extends('admin.layout.app')

@section('page_title','Category')

@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- END USER DATA-->
                                <h1>Category</h1>
                                <a href="{{ route('manage_cate') }}">
                                	<button type="button" class="btn btn-primary mt-4">
                                	Add Category
                                </button>
                            </a>
                            @if(session('success'))
                            <div class="alert alert-success mt-2">
                                {{session('success')}}
                            </div>
                            @endif

                            </div>
                           
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Name</th>
                                                <th>Category Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($arr as $list)
                                            <tr>
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->category_name}}</td>
                                                <td>{{$list->category_slug}}</td>
                                                <td><a href="" class="btn btn-primary">Edit</a><a href="{{url('admin/delete/')}}/{{$list->id}}" class="btn btn-danger">Delete</td>
                                              
                                            </tr> 
                                            @endforeach                                 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection