@extends('layouts.layout')
@section('contents')
    @if (Session::get('success'))
        <div class="alert alert-success py-1 text-center" role="alert">
            <p style="font-size: 20px">
                {{ Session::get('success') }}
            </p>
        </div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger py-1 text-center" role="alert">
            <p style="font-size:  20px">
                {{ Session::get('fail') }}
            </p>
        </div>
    @endif
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Selling Data</h1>
                    <a href="/selling/create" class="btn btn-primary">Add new selling data</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Customer Name</th>
                                <th>Total Price</th>
                                <th>Salesman</th>
                                <th>Date issued</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($selling as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->customer->name }}</td>
                                    <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="d-flex">
                                        <a href="/selling/detail/{{ $item->id }}" class="btn btn-warning">See
                                            Details</a>
                                        <a href="/selling/download/{{ $item->id }}"
                                            class="btn btn-success ms-1">Download</a>
                                        <form action="/selling/delete/{{ $item->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger ms-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
