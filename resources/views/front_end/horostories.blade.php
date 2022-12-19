

@extends('front_end.header')
@section('content')

<?php  $langnn = $_SERVER['REQUEST_URI'];?>
<?php $langn = (explode("&id=",$langnn)); 
	
	//var_dump($langn);
	
	 $lang = $langn['1'];?>
<style>
  body {
    -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    animation: -amp-start 8s steps(1, end) 0s 1 normal both
  }

  .site-header,
  .site-footer,
  #stuck_container,
  .main-navigation {
    display: none;
  }

  .i-amphtml-story-unmute-audio-control {
    display: none ! important;
  }
</style>
<script>
  $(document).ready(function() {
    $('.i-amphtml-story-unmute-audio-control').css("display", "none");
  })
</script>
<div class="stories">
  <a href="http://127.0.0.1:8000">
  <amp-story          publisher="AMP tutorials"
standalone publisher-logo-src="assets/front_end/images/AMP-Brand-White-Icon.svg" poster-portrait-src="assets/front_end/images/cover.jpg">


    @foreach($detailsmain2 as $main_cart)
    <amp-story-page id="Page1" loop>
      <amp-story-grid-layer template="fill">
        <amp-img src="<?php echo $main_cart->imagelink; ?>" width="720" height="1280" layout="responsive">
        </amp-img>
        <amp-video autoplay loop width="720" height="1280" layout="responsive">
          <source src="#" type="video/mp4">
        </amp-video>
      </amp-story-grid-layer>
      <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
      <amp-story-grid-layer template="vertical" class="bottom">
        <h2>{{$main_cart->storytitle}}</h2>
        <p><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>
      </amp-story-grid-layer>
    </amp-story-page>
    @endforeach

    @foreach ($detailsmain1 as $details)
    <amp-story-page id="Page2" background-audio="assets/front_end/images/bird-singing.mp3" loop>
      <amp-story-grid-layer template="fill">
        <amp-img src="<?php echo $details->t_imagelink; ?>" width="720" height="1280" layout="responsive">
        </amp-img>
        <amp-video autoplay loop width="720" height="1280" layout="responsive">
          <source src="#" type="video/mp4">
        </amp-video>
      </amp-story-grid-layer>
      <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
      <amp-story-grid-layer template="vertical" class="bottom">
        <h2>{{$details->t_title}}</h2>
        <p onclick><?php echo implode(' ', array_slice(explode(' ', $details->t_description), 0)); ?></p>
      </amp-story-grid-layer>


    </amp-story-page>

    
    @endforeach
    <!--   <amp-story-page id="Page1" background-audio="assets/front_end/images/bird-singing.mp3">
        <amp-story-grid-layer template="fill">
          <amp-img src="assets/front_end/images/cover.jpg"
              width="720" height="1280"
              layout="responsive">
          </amp-img>
          <amp-video autoplay loop
                width="720" height="1280"
                layout="responsive">
              <source src="assets/front_end/images/rabbit.mp4" type="video/mp4">
          </amp-video>
        </amp-story-grid-layer> -->
    <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
    <!-- <amp-story-grid-layer template="vertical" class="bottom">
          <h2>The Joy of Pets</h2>
          <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </amp-story-grid-layer>
      </amp-story-page> -->

    <!-- Bookend -->

    @foreach($detailsmain2 as $main_cart)
    <amp-story-page id="Page1" loop>
      <amp-story-grid-layer template="fill">
        <amp-img src="<?php echo $main_cart->imagelink; ?>" width="720" height="1280" layout="responsive">
        </amp-img>
        <amp-video autoplay loop width="720" height="1280" layout="responsive">
          <source src="#" type="video/mp4">
        </amp-video>
      </amp-story-grid-layer>
      <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
      <amp-story-grid-layer template="vertical" class="bottom">
        <h2>{{$main_cart->storytitle}}</h2>
        <p><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>
      </amp-story-grid-layer>
    </amp-story-page>
    @endforeach

    



    @php 
                 

			
      $get_vs1= DB::select(DB::raw( "SELECT  * from `H_stories`  where cat_type='horoscope'  and  storyid <'$lang'  ORDER BY storyid DESC" ));
   

    @endphp
   
    
    <amp-story-page id="page-outlink-example"  >
    
  <amp-story-grid-layer template="fill">
  
    @foreach ($get_vs1 as $get_vs1) 
    <amp-img src="<?php echo $get_vs1->imagelink; ?>" width="900" height="1600">
    <p><?php echo implode(' ', array_slice(explode(' ', $get_vs1->description), 0)); ?></p>
   
  </amp-story-grid-layer>
   <amp-story-page-outlink layout="nodisplay" theme="dark">
                           
    <a href="stories&id={{$get_vs1->storyid}}" title="Link Description" ></a>
    @endforeach
  </amp-story-page-outlink>

</amp-story-page>


    <amp-story-bookend src="bookend.json" layout="nodisplay"></amp-story-bookend>
    
  </amp-story>
</a>
</div>
@endsection

<!-- <amp-analytics data-credentials="include" type="gtag" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" style="width: 1px; height: 1px;" hidden=""><script type="application/json">
               {
                 "vars": {
                   "gtag_id": "UA-198011-4",
                   "config": {
                     "UA-198011-4": {
                       "groups": "default"
                     }
                   }
                 },
                 "triggers": {
                   "storyProgress": {
                     "on": "story-page-visible",
                     "vars": {
                       "event_name": "web_story",
                       "event_action": "story_progress",
                       "event_category": "Visual Stories_Web",
                       "event_label": "${storyPageId}_https://recipes.timesofindia.com/web-stories/this-one-kitchen-ingredient-is-the-secret-of-bhagyashrees-wrinkle-free-skin/photostory/96052302.cms",
                       "send_to": ["UA-198011-4"]
                     }
                   },
                   "pageAttachmentEnter": {
                       "on": "story-page-attachment-enter",
                       "request": "event",
                       "vars": {
                           "event_name": "web_story",
                           "event_action": "Read_more_WEB_Recipes",
                           "event_category": "All_VS",
                           "event_label": "${attachmentHref}",
                           "send_to": ["UA-198011-4"]
                        }
                    },
                   "storyEnd": {
                     "on": "story-last-page-visible",
                     "vars": {
                       "event_name": "web_story",
                       "event_action": "story_complete",
                       "event_category": "Visual Stories_Web",
                       "send_to": ["UA-198011-4"]
                     }
                   },
                    "linkClick": {
                      "on": "click",
                      "selector": "#btn_link",
                      "request": "event",
                      "vars": {
                        "event_name": "cta_click",
                        "eventCategory": "${title}",
                        "eventAction": "cta-click",
                        "event_label": "${storyPageId}"
                      }
                    },
                    "linkClick": {
                      "on": "click",
                      "selector": "#btn_link_next",
                      "request": "event",
                      "vars": {
                        "event_name": "click_readmore",
                        "event_category": "Web_VisualStories",
                        "eventAction": "click_readmore",
                        "event_label": "Recipes_https://recipes.timesofindia.com/web-stories/bigg-boss-16-what-priyanka-chahar-choudhary-eats-in-a-day/photostory/96048314.cms"
                      }
                    }
                 }
               }
             </script></amp-analytics> -->