@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order
                    <small>Edit</small>
                </h1>
                <form action="{{ route('order.edit',['id' => $order['id']]) }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="email" name="email" value={{ $order['email'] }} required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter address" id="address" name="address" value={{ $order['address'] }} required>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" placeholder="Enter city" id="city" name="city" value={{ $order['city'] }} required>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" placeholder="Enter state" id="state" name="state" value={{ $order['state'] }}>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip:</label>
                        <input type="number" class="form-control" placeholder="Enter zip" id="zip" name="zip" value={{ $order['zip'] }} required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Quantity:</label>
                        <input type="number" class="form-control" placeholder="Enter quantity" id="qty" name="qty" value="{{ $cart->qty }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cart">Product:</label>
                        <select class="form-control" id="cart" name="cart" onmousedown="if(this.options.length>3){this.size=3;}" onchange='this.size=0;' onblur="this.size=0;" required>
                            @foreach ($products as $product)
                                <option value="{{ $product['name'] }}_{{ $product['color'] != null ? $product['color']: 'null' }}_{{ $product['price'] }}">{{ $product['name'] }}: {{ $product['price'] }}đ</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="total">Total:</label>
                        <input type="number" class="form-control" id="total" name="total" value={{ $order['total'] }} disabled>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control" id="note" name="note" rows="3" value={{ $order['note'] }}></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>    
</div>
@endsection