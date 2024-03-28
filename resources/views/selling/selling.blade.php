@php
    $isActive = true;
@endphp
@extends('layouts.layout')
@section('contents')
    <div class="row" id="table-head">
        <div class="col-12">
            <form action="/selling/payment" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Product List</h1>
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </div>
                    <div class="row my-5">
                        <div class="table-responsive col-7">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>
                                                <div class="input-group touchspin-cart">
                                                    <input class="touchspin-cart" type="number" value="0"
                                                        max="{{ $item->stock }}" name="quantity[]" />
                                                </div>
                                            </td>
                                            <td class="d-flex align-items-center">
                                                <input class="form-check-input productCheck" type="checkbox"
                                                    name="productCheck[]" value="{{ $item->id }}" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4 shadow-lg py-3">
                            <h1>Customer Data</h1>
                            <br>
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="customer_name">
                            <br>
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="customer_address">
                            <br>
                            <label for="" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="customer_phone_number">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
