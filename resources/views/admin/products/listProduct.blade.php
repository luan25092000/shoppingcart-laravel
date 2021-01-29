@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product['id'] }}</td>
                                <td>{{ $product['imagePath'] }}</td>
                                <td>{{ $product['name'] }}</td>
                                <td>{{ $product['price'] }}</td>
                                <td>{{ $product['color'] }}</td>
                                <td><a href="{{ route('product.delete',['id'=>$product['id']]) }}">Delete</a></td>
                                <td><a href="{{ route('product.edit.form',['id'=>$product['id']]) }}">Edit</a></td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection