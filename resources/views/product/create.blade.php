@php
    $isActive = true;
@endphp
@extends('layouts.layout')
@section('contents')
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Product</h4>
                    </div>
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Product Name</label>
                                        <input type="text" class="form-control" id="basicInput" name="name"
                                            placeholder="Enter The Product Name" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Price</label>
                                        <input type="number" class="form-control" id="helpInputTop" name="price"
                                            placeholder="Enter The Product Price" />
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Stock</label>
                                        <div class="input-group input-group-lg">
                                            <input class="touchspin-cart" type="number" value="1" name="stock" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <button class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
