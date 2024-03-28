@extends('layouts.layout')
@section('contents')
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.update', $product->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Product
                                            Name</label>
                                        <input type="text" class="form-control" id="basicInput" name="name"
                                            placeholder="Enter The Product Name" value="{{ $product->name }}" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Price</label>
                                        <input type="number" class="form-control" id="helpInputTop" name="price"
                                            placeholder="Enter The Product Price" value="{{ $product->price }}" />
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="helpInputTop">Stock</label>
                                        <div class="input-group input-group-lg">
                                            <input class="touchspin-cart" type="number" value="{{ $product->stock }}"
                                                name="stock" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <button class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
