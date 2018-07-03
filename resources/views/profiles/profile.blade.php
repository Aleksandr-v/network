@extends('layouts.app')


@section('content')

	<div class="container">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<p class="text-center">
						{{$user->name}}
					</p>
				</div>
				<div class="panel-body">
					<center>
						<img src="{{ Storage::url($user->avatar) }}" width="140px" height="140px" style="border-radius: 50%;" alt="">
					</center>
					<p class="text-center">
						@if(Auth::id() == $user->id)
							<a class="btn btn-primary" style="margin-top: 10px;">Edit Profile</a>
						@endif
					</p>
				</div>
			</div>
		</div>				
	</div>

@stop