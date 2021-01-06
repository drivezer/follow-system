@if($users->count())
    @foreach ($users as $user)
        @if (auth()->user()->id != $user->id)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('user', $user->id) }}">{{ $user->name }}</a>
                    </h5>
                    <img class="card-img-top img-responsive" alt="{{ $user->name }}" src="https://thaipbs-world.s3.ap-southeast-1.amazonaws.com/thaipbsworld/wp-content/uploads/2019/12/29110958/Thailand-Prayut-Chan-ocha-Twitter-900x540.jpg" />
                    <small>
                        ผู้ติดตาม <span class="badge badge-primary followers">{{ $user->followers()->get()->count() }}</span>
                    </small>
                    <small>
                        กำลังติดตาม <span class="badge badge-primary followings">{{ $user->followings()->get()->count() }}</span>
                    </small>
                </div>
                <button class="btn btn-primary btn-follow" type="button" style="margin: 10px;" data-id="{{ $user->id }}">
                    <strong>
                        @if (auth()->user()->isFollowing($user))
                            เลิกติดตาม
                        @else
                            ติดตาม
                        @endif
                    </strong>
                </button>
            </div>
        @endif
    @endforeach
@else
    <h3>ไม่พบข้อมูลผู้ใช้</h3>
@endif
