



@extends('front_end.header1')
@section('content')
<style type="text/css">
#randomposts  ul  li{

width:25%;   
padding:30px;
}
.sub-head
{
text-align: center;
}
.imag{
    width: 400px !important;
    height: 500px !important;
    border-radius:8px;
}

@media only screen and (max-width:720px){
    #randomposts  ul  li{

width:100%;   
padding:10px;
}
}

</style>






<section class="container random-posts padding-top-none clear">
<h2 class="left sub-head"><span><a href="/">Horoscope</a></span></h2>
<div id="randomposts">
<ul class="clear">

@php
$get_vs1 = DB::table('v_stories')->where('categoryid',1)->where('cat_type','horoscope')->orderBy('storyid','desc')->take(12)->get();
@endphp
@foreach ($get_vs1 as $get_vs1)
<li>
<a href="horoscope&id={{$get_vs1->storyid}}" target="_blank">
<img src="<?php echo $get_vs1->imagelink; ?>" class="imag" />
<figcaption>
<!--<h2 class="sub-head">{{$get_vs1->storytitle}}</h2>-->
	<h3 class="sub-head">DAILY / WEEKLY </h3>
</figcaption>
</a>
</li>
@endforeach

</ul>
</div>
    </section>

@endsection









