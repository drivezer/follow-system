@extends('layouts.app')

@section('content')
<script src="{{ asset('js/follow.js') }}" charset="utf-8"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-columns">
                @include('users', ['users' => $users])
            </div>
        </div>
    </div>
</div>
@endsection
