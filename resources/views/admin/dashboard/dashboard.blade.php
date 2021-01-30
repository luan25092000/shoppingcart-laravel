@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <input type="hidden" value={{ $products }} id="products" />
        <input type="hidden" value={{ $qty }} id="qty" />
    </div>
@endsection