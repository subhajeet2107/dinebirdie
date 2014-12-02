@extends('layout')
@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Welcome to DineBirdie</h1>
		<p>App to get tweets on various trending resturant bookings and upcomming events</p>
	</div>
</div>
		<div class="row">
		<h2>Showing Top 10 Events</h2>
			<div class="[ col-xs-12]">
				<ul class="event-list">
				<?php 
				$i = 0;
				?>
				@foreach ($events['events'] as $element=>$ev)

					<li>
					@if(!empty($ev['e_dt']))
						<time datetime="{{ $ev['e_dt'] }}">
							<span class="day">{{ date("d", strtotime($ev['e_dt'])); }}</span>
							<span class="month">{{ date("m", strtotime($ev['e_dt'])); }}</span>
							<span class="year">{{ date("Y", strtotime($ev['e_dt'])); }}</span>
							<span class="time">{{ date("H:i", strtotime($ev['e_dt'])); }}</span>
						</time>
					@endif
					@if(!empty($ev['image_arr']['image_url']))
						<img alt="" src="{{ $ev['image_arr']['image_url'] }}" />
					@endif
						<div class="info">
							<h2 class="title">
							@if(!empty($ev['e_title']))
							{{ $ev['e_title'] }} 
							@endif
							@ 
							@if(!empty($ev['screen_name']))
							{{ $ev['screen_name'] }}</h2>
							@endif
							<p class="desc">
							@if(!empty($ev['e_desc']))
							{{ substr($ev['e_desc'], 0,200) }}
							@endif
							</p>
							<ul>
							<li style="width:33%;"><a href="{{ URL::to('/tweets').'/'.trim($ev['e_title'].'@'.$ev['screen_name']) }}"> View Tweets</a> <span class="glyphicon glyphicon-twiiter"></span></li>
							</ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>
					<?php
					if($i++ == 10) break;
					?>
					@endforeach
				</ul>

			</div>
		</div>
	</div>
@stop