@extends('layout')
@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Welcome to DineBirdie</h1>
		<p>App to get tweets on various trending resturant bookings and upcomming events</p>
	</div>
</div>
		<div class="row">
		<h2>Showing Top Tweets for Event</h2>
			{{ var_dump($tweets) }}
		</div>
	</div>
@stop