@extends('layouts.app')

@section('navbar')
    @include('parts.navbar.auth')
@endsection

@section('content')
<div class="container-lg">
    <div class="row justify-content-lg-center">
        <div class="card col-7 card-padding-none">
            <div class="card-header">
                Register
            </div>
            <div class="card-body form-auth-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-4">Name</label>
                        <div class="col-sm-8 form-auth-input">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4">E-Mail Address</label>
                        <div class="col-sm-8 form-auth-input">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-4">Password</label>
                        <div class="col-sm-8 form-auth-input">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="confirm-password" class="col-sm-4">Confirm Password</label>
                        <div class="col-sm-8 form-auth-input">
                            <input type="password" class="form-control" id="confirm-password" name="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="confirm-password" class="col-sm-4"></label>
                        <div class="col-sm-8 form-auth-input">
                            <button type="submit" class="btn btn-primary form-button">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
