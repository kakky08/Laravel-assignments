@extends('layouts.app')

@section('navbar')
    @include('parts.navbar.default')
@endsection

@section('content')
<div class="container-lg">
    <div class="row justify-content-lg-center">
        <div class="card col-7 card-padding-none">
            <div class="card-header">
                Dashboard
            </div>
            <div class="card-body form-auth-body">
                <p>You are logged in!</p>
            </div>
        </div>
    </div>
</div>
@endsection
