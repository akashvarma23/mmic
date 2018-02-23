@extends('layouts.app')

@section('tag')
@endsection

@section('title')
<?php echo str_replace ('/', '  ',(ucwords(Request::path()))) ?>
@endsection

@section('css')
@endsection

@section('js-head')
@endsection


@section('content')

@includeIf('breadcrumb')

<section id="team">
	<div class="container">
		<div class="row">
			<h2 class="subtitle text-center">Pick any of your choice</h2>

			@if(isset($exp))
				@forelse ($exp as $ex)
					<div class="col-md-3">
						<div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
							<a href="{{Request::url()}}/{{$ex->name_slug}}">
								<div class="team-img">
									<img src="{{asset('images/team/team-1.jpg')}}" class="team-pic" alt="">
								</div>
								<h3 class="team_name">{{$ex->name}}</h3>
								<p class="team_designation">{{$ex->description}}</p>
								<p class="team_text"></p>
							</a>
						</div>
					</div>
				@empty

					<div class="col-md-4 col-md-offset-4">
						<div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
							
								<div class="team-img">
									<img src="{{asset('images/team/team-1.jpg')}}" class="team-pic" alt="">
								</div>
								<h3 class="team_name text-center">Coming Soon</h3>
								<p class="team_designation text-center">Coming Soon</p>
								<p class="team_text"></p>
							
						</div>
					</div>

				@endforelse
			@endif
		</div>
	</div>
</section>

@endsection


@section('js-body')
@endsection