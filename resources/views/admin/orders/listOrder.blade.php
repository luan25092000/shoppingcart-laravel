@extends('admin.layouts.index')


@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Order
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>Id</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Total</th>
                            <th>Note</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order['id'] }}</td>
                                <td>{{ $order['email'] }}</td>
                                <td>{{ $order['address'] }}</td>
                                <td>{{ $order['city'] }}</td>
                                <td>{{ $order['state'] }}</td>
                                <td>{{ $order['zip'] }}</td>
                                <td>{{ $order['total'] }}</td>
                                <td>{{ $order['note'] }}</td>
                                <td><a href="{{ route('order.delete',['id' => $order['id']]) }}">Delete</a></td>
                                <td><a href="{{ route('order.edit.form',['id' => $order['id']]) }}">Edit</a></td>
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