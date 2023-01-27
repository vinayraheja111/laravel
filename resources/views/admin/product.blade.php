@extends('admin.layout.app')

@section('page_title','Product')

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
                                <a href="{{ route('manage_product') }}">
                                	<button type="button" class="btn btn-primary mt-4">
                                	Add Product
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
                                                <th>Product name</th>
                                                <th>Slug</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($arr as $list)
                                            <tr>
                                                <td>{{$list->id}}</td> 
                                                <td>{{$list->name}}</td>
                                                <td>{{$list->slug}}</td>
                                                <td></td>
                                                <td>
                                                	<a href="" class="btn btn-primary">Edit</a>
                                                	@if($list->status == 1)
                                                	<a href="{{url('admin/product/status/0')}}/{{$list->id}}" class="btn btn-info">Active</a>
                                                	@else
                                                	<a href="{{url(('admin/product/status/1'))}}/{{$list->id}}" class="btn btn-warning">Deactive</a>
                                                	@endif
                                                	
                                                	<a href="{{url('admin/product/')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
                                                </td>
                                              
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