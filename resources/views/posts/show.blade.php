@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{ asset("storage/$post->image") }}" class="w-100" style="height: 450px;">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->ProfileImage() }}" class="rounded-circle w-100"
                                style="max-width: 40px;">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="{{ route('profile.show', $post->user_id) }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <small><a href="#" class="pl-3 text-small font-weight-bold">Follow</a></small>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p>
                        <span class="font-weight-bold">
                            <a href="{{ route('profile.show', $post->user_id) }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
