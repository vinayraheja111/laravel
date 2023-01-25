@extends('admin.layout.app')

@section('page_title','Manage Category')

@section('content')

<div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                	
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><h3>Manage ctaegory</h3></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Category</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('cat_insert')}}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">category Name</label>
                                                <input id="cc-pament" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{old('category_name')}}" required="">
                                                @error('category_name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category slug</label>
                                                <input id="cc-name" name="category_slug" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('category_slug')}}">
                                        
                                                @error('category_slug')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            
                
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                 Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
        </div>


@endsection()