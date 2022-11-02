






	

<?php  echo   $langnn = $_SERVER['REQUEST_URI'];?>


@extends('front_end.langHeader')





@section('content')


	
	
	 
<section class="container random-posts padding-top-none clear">
 		<h2><span>Paparazzi</span></h2>
		<div id="randomposts">
		<ul class="clear">
				@php 
				$entertainmentinfo = DB::table('paparazzi_post')->where('cat_type','paparazzi')->where('status','Publish')->orderBy('published_date','desc')->inRandomOrder()->take(100)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<li>
				
					<a href="paparazzi-post&id={{$entertainmentinfo->postlink}}" title="">
				
                    	<h5>Paparazzi</h5>
					
						
						<figure>
							<!-- <iframe src="{{$entertainmentinfo->videopath}}" frameborder="0"></iframe> -->
							<iframe width="100%" height="315" src="{{$entertainmentinfo->videopath}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</figure>
						<h3>{{$entertainmentinfo->posttitle}}</h3>
					</a>
					
				</li>
				@endforeach
			</ul> 
		</div>
</section>
@endsection
