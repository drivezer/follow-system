@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>{{ auth()->user()->id == $user->id ? "My Profile" : $user->name }}</h2>
            <img class="img-responsive" width="400" src="https://thaipbs-world.s3.ap-southeast-1.amazonaws.com/thaipbsworld/wp-content/uploads/2019/12/29110958/Thailand-Prayut-Chan-ocha-Twitter-900x540.jpg" />
            <nav class="nav nav-tabs" id="nav-tab" role="tablist" style="margin: 5px;">
                <a href="#followers" class="nav-item  nav-link active" data-toggle="tab" role="tab">ผู้ติดตาม <span class="badge badge-primary followers">{{ $user->followers()->get()->count() }}</span></a>
                <a href="#followings" class="nav-item  nav-link" data-toggle="tab" role="tab">กำลังติดตาม <span class="badge badge-primary followings">{{ $user->followings()->get()->count() }}</span></a>
            </nav>
            <div class="tab-content" id="nav-tabcontent">
                <div class="tab-pane fade show active" id="followers" role="tabpanel">
                    <div class="card-columns">
                        @include('users', ['users' => $user->followers()->get()])
                    </div>
                </div>
                <div class="tab-pane fade show" id="followings" role="tabpanel">
                    <div class="card-columns">
                        @include('users', ['users' => $user->followings()->get()])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
