
<?php   $langnn = $_SERVER['REQUEST_URI'];?>

<?php $langn = (explode("&lang= ",$langnn)); 
	
	//var_dump($langn);
	
	 $lang = $langn['0'];
	 $cat_id =  (explode("/search?search=",$lang));
echo	 $catid = $cat_id['1'];
	 
	?>

@extends('front_end.header1')
@section('content')
<header class="entry-nav clear">
	<ul>
		<li><a href="/">Home</a></li>
		<li>Search</li>
       
	</ul>
</header>
    <div class="search">
        <form action="{{ url('search') }}" method="GET">
        <?php if($search_value1 == "") { ?>
        <input class="search-field" type="search" placeholder="Search..." name="search">
        <?php } else { ?>
            <input class="search-field" type="search" placeholder="Search..." name="search" value="<?php echo $search_value1; ?>">
        <?php } ?>
        <button type="submit" class="search-btn">Search</button>
        </form>
    </div>
    @if (\Session::has('success'))
                            <div class="alert alert-success">

                                {!! \Session::get('success') !!}

                            </div>
                            @endif
<div class="entry-content">
	<!-- <div class="ads"><img src="assets/front_end/images/g8.jpg" /></div>	 -->

    
	<div class="container post-content newspost left">

    
               
				@foreach($info as $feed)
                @php
            $i = 1;
            $i = $loop->iteration%3;
        @endphp

        @if( $i == 1 )
            <div class="adscategory">
              <div>
                <?php $id=rand(10,2000);?>
                <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
                <div id="gpt-passback-MRATF<?php echo $id;?>">
                  <script>
                    window.googletag = window.googletag || {cmd: []};
                    googletag.cmd.push(function() {
                    googletag.defineSlot('/22387492205,22578111928/ad-masalamobile.com-bsnl(pyro)-banner-300x250-atf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRATF<?php echo $id;?>').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.pubads().set('page_url', 'masalamobile.com');
                    googletag.display('gpt-passback-MRATF<?php echo $id;?>');
                    });
                  </script>
                </div>
              </div>
              <div>
              <?php $id=rand(10,2000);?>
                <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
                  <div id="gpt-passback-MRATF<?php echo $id;?>">
                    <script>
                      window.googletag = window.googletag || {cmd: []};
                      googletag.cmd.push(function() {
                      googletag.defineSlot('/22387492205,22578111928/ad-masalamobile.com-bsnl(pyro)-banner-300x250-atf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRATF<?php echo $id;?>').addService(googletag.pubads());
                      googletag.enableServices();
                      googletag.pubads().set('page_url', 'masalamobile.com');
                      googletag.display('gpt-passback-MRATF<?php echo $id;?>');
                      });
                    </script>
                  </div>
              </div>
            </div>
        @endif
    	<article class="clear">
        @php
						$get_cat = DB::table('category')->where('categoryid',$feed->categoryid)->get();
						@endphp
						@foreach($get_cat as $get_cat)
                    	<h5>{{$get_cat->categoryname}}</h5>
						@endforeach
			<figure class="left"><a href="post-single&id={{$feed->postlink}}"><img src="{{$feed->imagepath}}" alt=""></a></figure>
            <aside class="right">
                <div>
                <a href="post-single&id={{$feed->postlink}}">
                	<h2><?php echo mb_substr($feed->posttitle, 0,50)."..."; ?></h2>
                </a>
              	<!-- <a href="#">Posted by <strong>admin</strong></a> -->
                <p><?php echo mb_substr($feed->posttitle, 0,100)."..."; ?></p>
                </div>
            </aside>
        </article>
        @endforeach
        
        
		<div class="ads"><img src="assets/front_end/images/g6.jpg" /></div>	
    </div>	
    
	<aside id="secondary" class="container post-sidebar widget-area right">
	@include('front_end.sidebar')
	</aside>
</div>
@endsection