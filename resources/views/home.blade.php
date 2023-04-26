@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($orders as $order)
                    <div class="card" style="padding: 10px; margin-bottom: 20px">
                        <h4>Status: {{$order->status}}</h4>
                        <h1>{{$order->name}}</h1>
                        <h3>{{$order->email}}</h3>
                        <h3>{{$order->phone}}</h3>
                        <p>{{$order->message}}</p>
                        <div style="display: flex">
                            <a href="/edit-order/{{$order->id}}">
                                <button class="order-btn">Edit</button>
                            </a>
                            <form action="/delete-order/{{$order->id}}" method="post">
                                @csrf
                                <input type="submit" value="Delete" class="order-btn">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
