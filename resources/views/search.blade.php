@extends('layouts.template')

@section('title','Tìm kiếm')

@section('content')
    <div class="container">
        <a href="{{ route('index') }}" class="home">Trang chủ</a> <span class="collection">/ Tìm kiếm </span>
        <p><small>Kết quả tìm kiếm cho: {{ $keyword }}</small></p>
        @if (count($results) > 5)
            <div class="col-md-12 mt-5">
                <div class="row">
                    <div class="col-sm-12 position-button-slide">
                        <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                            @foreach ($results as $result)
                                <div class="product product-block">
                                    <img src="{{ URL::to('/').$result->imagePath }}" alt="...">
                                    <div class="name">{{ $result->name }}</div>
                                    <div class="price">{{ number_format($result->price,-3,',',',') }}₫</div>
                                    <div class="detail">
                                        <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="btns-carousel-slide">
                            <div class="customNextBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg></div>
                            <div class="customPreviousBtn"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                    class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-12 mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-12 position-button-slide">
                        <div class="own-one owl-carousel owl-theme owl-carousel-type3">
                            @foreach ($results as $result)
                                <a class="product product-block" href="{{ route('product.table',['id'=> $result->id]) }}">
                                    <img src="{{ URL::to('/').$result->imagePath }}" alt="...">
                                    <div class="name">{{ $result->name }}</div>
                                    <div class="price">{{ number_format($result->price,-3,',',',') }}₫</div>
                                    <div class="detail">
                                        <i class="far fa-eye" data-toggle="modal" data-target="#exampleModal"></i>
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection