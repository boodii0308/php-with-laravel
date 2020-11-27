@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{$post->image}}" class="w-100">
		</div>
		<div class="col-4">
			<div class = "d-flex align-items-center">
				<div>
					<img src= "{{ $post->user->profile->profileImage()}}" class = "w-100 rounded-circle " style = "max-width: 40px">
				</div>
				<div class = "font-weight-bold pl-3">
					<a href="/profile/{{$post->user->id}}">
						<span class = "text-dark">{{$post->user->username}}</span>
					</a>
					<a href="#" class = "pl-3"> Follow</a>
				</div>
			</div>
			<hr>
			<div d-flex >
				<a href="/profile/{{$post->user->id}}"  class = "font-weight-bold pl-3">
					<span class = "text-dark">{{$post->user->username}}</span>
				</a>
				<span class = "p-3">{{$post->caption}}</span>
			</div>
		</div>
	</div>
</div>
@endsection
