@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="review-form">
                    <form action="/reviews" method="post">
                        @csrf
                        <input type="text" name="name" id="name" class="input-text" placeholder="Name"
                               style="width: 50%" required>
                        <input type="email" name="email" id="email" class="input-text" placeholder="email"
                               style="width: 50%" required>
                        <input type="number" name="phone" id="number" class="input-text" placeholder="number"
                               style="width: 50%" required>
                        <textarea name="review" id="" cols="30" rows="3" class="input-text" placeholder="review"
                                  style="width: 50%" required></textarea>
                        <input type="submit" value="" id="order">
                    </form>
                </div>
                @foreach($reviews as $review)
                    <div class="card" id="card">
                        @if(Auth::user())
                            <form action="/delete-review/{{$review->id}}" method="post" style="padding: 20px">
                                @csrf
                                <input type="submit" value="Delete">
                            </form>
                        @endif
                        <h2>{{$review->name}}</h2>
                        <hr>
                        <p>{{$review->review}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
