@extends('admin.layouts.index')


@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Add</small>
                </h1>
                <form action="{{ route('user.add') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="firstname">Firstname:</label>
                        <input type="text" class="form-control" placeholder="Enter firstname" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" class="form-control" placeholder="Enter lastname" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>    
</div>
@endsection