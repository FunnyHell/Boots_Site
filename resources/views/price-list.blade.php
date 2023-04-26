@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table style="width:80%; margin:30px auto; border-collapse:collapse;">
                    <tr style="border-bottom: solid 1px rgba(128, 155, 165, 0.53); margin-bottom: 20px">
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                    @foreach($prices as $price)
                        <tr>
                            <td>{{$price->service}}</td>
                            <td>{{$price->price}}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
