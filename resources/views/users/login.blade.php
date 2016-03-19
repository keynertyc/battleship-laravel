@extends('layouts.default')

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Log in
            <small>Enter your credentials.</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Div Row -->
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form action="/login" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="demo">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="12345">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>
<!-- /.row -->

<hr>

@endsection