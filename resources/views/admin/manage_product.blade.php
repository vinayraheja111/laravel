@extends('admin.layout.app')

@section('page_title','Manage Product')

@section('content')

<div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                	
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><h3>Manage Product</h3></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Product</h3>
                                        </div>
                                        <hr>
                                        <form action="{{route('pro_str')}}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Product Name</label>
                                                <input id="cc-pament" name="product_name" type="Product_name" class="form-control" aria-required="true" aria-invalid="false" value="{{old('category_name')}}" required="">
                                                @error('product_name')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product slug</label>
                                                <input id="cc-name" name="product_slug" type="product_slug" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('category_slug')}}">
                                        
                                                @error('product_slug')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                              <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category</label>
                                                <select
                                                id="cc-name" name="Category" type="Category" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('Category')}}">
                                                    <option value="hidden">Choose Ctaegory</option>
                                                    @foreach($arr as $list)
                                                     <option value="{{$list->id}}">{{$list->category_name}}</option>
                                                    @endforeach
                                                </select>
                                        
                                                @error('Category')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                               <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Product Image</label>
                                                <input id="cc-name" name="image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('category_slug')}}">
                                        
                                                @error('file')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                                <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Model</label>
                                                <input id="cc-name" name="model" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('model')}}">
                                        
                                                @error('model')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                               <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Brand</label>
                                                <input id="cc-name" name="brand" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('brand')}}">
                                        
                                                @error('brand')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                               <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Short description</label>
                                                <textarea id="cc-name" name="sdesc" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('sdesc')}}"></textarea> 
                                        
                                                @error('sdesc')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                              <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Description</label>
                                                <textarea id="cc-name" name="desc" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('desc')}}"></textarea> 
                                        
                                                @error('desc')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                               <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">keywords</label>
                                                <textarea id="cc-name" name="keywords" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('keywords')}}"></textarea> 
                                        
                                                @error('keywords')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                               <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Warranty</label>
                                                <input id="cc-name" name="Warranty" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required="" value="{{old('brand')}}">
                                        
                                                @error('Warranty')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

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