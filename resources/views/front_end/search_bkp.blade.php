<?php   $langnn = $_SERVER['REQUEST_URI'];?>
<?php $langn = (explode("&lang= ",$langnn)); 
	
	//var_dump($langn);
	
	 $lang = $langn['0'];
	 $cat_id =  (explode("/search?lang=",$lang));
	 $catid = $cat_id['1'];
	 
	?>
@extends('front_end.langHeader')


@section('content')
<header class="entry-nav clear">
	<ul>
	    <?php if($catid =="English" || $catid==""){?>
		<li><a href="/">Home</a></li>
		<li>Search</li>
       <?php }?>
       
          <?php if($catid =="Hindi"){?>
	<li><a href="/Hindi">होम
</a></li>
	
		<li> खोज </li>
    
       <?php }?>
       
        <?php if($catid =="Telugu"){?>
	 <li><a href="/Telugu">
                హోమ్

</a></li>
		
		<li> వెతకండి </li>
      
       <?php }?>
	</ul>
</header>
    <div class="search">
       <form action="{{ url('search') }}" method="GET">
       <?php if($search_value1 == "") { ?>
       <input class="search-field" type="search" placeholder="Search..." name="search">
        <?php } else { ?>
           <input class="search-field" type="search" placeholder="Search..." name="search" value="<?php echo $search_value1; ?>" sytle="display:none;">-->
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

      @php 
        
        $entertainmentinfo= DB::select(DB::raw( "SELECT  * from post where language='$catid';"));
    

      @endphp
                
			@foreach($entertainmentinfo as $feed)
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
						 <?php if($catid =="English" || $catid==""){?>
                    	<h5>{{$get_cat->categoryname}}</h5>
                    	<?php }?>
                    		 <?php if($catid =="Hindi"){?>
                    	<h5>{{$get_cat->categoryhindi}}</h5>
                    	<?php }?>
                    		 <?php if($catid =="Telugu"){?>
                    	<h5>{{$get_cat->categorytelugu}}</h5>
                    	<?php }?>
						@endforeach
			<figure class="left"><a href="post-single&id={{$feed->postid}}">
			    <img src="{{$feed->imagepath}}" alt=""></a></figure>
            <aside class="right">
                <div>
                <a href="post-single&id={{$feed->postid}}">
                <h2><?php echo mb_substr($feed->posttitle, 0,100)."..."?>
                    
                </h2>
                
               
                </a>
              	
       
                
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