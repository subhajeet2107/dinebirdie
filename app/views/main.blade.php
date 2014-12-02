@extends('layout')
@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Welcome to DineBirdie</h1>
		<p>App to get tweets on various trending resturant bookings and upcomming events</p>
	</div>
</div>
<ul>
@foreach ($events['events'] as $element=>$ev)
	<li>{{ $ev['e_title'].' @ '.$ev['screen_name'] }}</li>
@endforeach
</ul>
@stop