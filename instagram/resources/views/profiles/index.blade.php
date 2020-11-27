@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="row">
            <div class="col-3 p-5">
            <div>
                <img src="{{$user->profile->profileImage()}}" class = "rounded-circle w-100">
            </div>
            </div>
            <div class="col-9 p-5" >
                  <div class = "pl-3 pt-1 d-flex justify-content-between align-items-baseline">
                      <div class = "d-flex align-text-center pb-4" >
                            <div class = "h4"> {{ $user->username}} </div>
                        <follow-button user-id = "{{$user->id}}"></follow-button>
                      </div>
                    @can('update', $user->profile)
                        <a href="/p/create"> Add New Post</a>
                    @endcan
                </div>
                    @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit" > Edit Profile</a>
                    @endcan
                  <div class="d-flex">
                      <div class = "pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                      <div class = "pr-5"><strong>100m</strong> followers</div>
                      <div class = "pr-5"><strong>100</strong> following</div>
                  </div>
                  <div class = "pt-2 "><strong> {{ $user->profile->title}} </strong></div>
                  <div class = "pt-2" > {{ $user->profile->description}}</div>
                  <div class = "pt-2" > <a href="#">{{ $user->profile->url}}</a>  </div>
            </div>
        </div>

        <div class="row pt-4" >
            @foreach($user->posts as $post)
                <div class="col-4 p-4">
                    <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class= "w-100 h-80 p-2">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
