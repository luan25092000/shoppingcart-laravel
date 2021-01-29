@extends('layouts.template')

@section('title','Thanh toán')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="main-content">
                <h2 class="content">Thanh toán</h2>
                <div class="background" style="background-image: url(./img/about_header_bg.webp);"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrap">
            <form action="{{ route('pay') }}" method="get">
                <div class="col-75">
                    <div class="form-group">
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Enter your name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="Enter your address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Enter your city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="state"><i class="fas fa-flag"></i> State</label>
                        <input type="text" id="state" name="state" placeholder="Enter your state" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="zip"><i class="fas fa-user-check"></i> Zip</label>
                        <input type="text" id="zip" name="zip" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Thanh toán</button>
                </div>
            </form>
            <div class="col-25">
                <h4>Cart <span class="bill" style="color:black"><i class="fa fa-shopping-cart"></i> <b>{{ count($products) }}</b></span></h4>
                @foreach ($products as $product)
                    <p><a href="{{ route('product.table',['id' => $product['item']['id']]) }}">{{ $product['item']['name'] }}</a> <span class="price">{{ number_format($product['price'],-3,',',',') }}₫</span></p>
                @endforeach
                <hr>
                <p>Total <span class="price" style="color:black"><b>{{ number_format($totalPrice,-3,',',',') }}₫</b></span></p>
            </div>
        </div>
    </div>
@endsection