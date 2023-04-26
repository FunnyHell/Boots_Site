@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <form action="/edit-order/{{$id}}" method="post">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Name" class="input-text"
                           value="{{$order->name}}" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" class="input-text"
                           value="{{$order->email}}" required>
                    <input type="tel" name="phone" id="phone" placeholder="Phone number" class="input-text"
                           value="{{$order->phone}}" required>
                    <input type="text" name="address" id="address" placeholder="Address" class="input-text"
                           value="{{$order->address}}" required>
                    <textarea name="message" id="" cols="30" rows="3" placeholder="Comment"
                              class="input-text">{{$order->message}}</textarea>
                    <input type="text" name="price" class="input-text" value="{{$order->price}}" required>
                    <input type="submit" value="Edit" id="order">
                </form>
        </div>
    </div>
@endsection
