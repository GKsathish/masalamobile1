<html amp lang="en">

<head>
  <meta charset="utf-8" />
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
  <!--<title>Hello, amp-story</title>-->
  <!--<link rel="canonical" href="http://example.ampproject.org/my-story.html" />-->
  <!--<meta-->
  <!--  name="viewport"-->
  <!--  content="width=device-width,minimum-scale=1,initial-scale=1"-->
  <!--/>-->
  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden;
      }

      to {
        visibility: visible;
      }
    }


    .inner-align-end-next h2 {
      font-size: 22px;
      font-family: "Montserrat";
      color: rgba(255, 255, 255, 1);
      line-height: 1.27;
      margin-bottom: 10px;
    }




    .inner-align-end,
    .inner-align-middle,
    .inner-align-top {
      background: rgba(0, 0, 0, 0);
    }

    .inner-align-end .ftr {
      text-align: right;
      padding: 10px;
      font-size: 12px;
    }

    .inner-align-end,
    .inner-align-middle,
    .inner-align-top {
      padding: 0px 0px;
    }

    .align-end {
      align-content: end;
      padding: 68px 20px 32px;
    }

    .align-end,
    amp-story-grid-layer,
    .align-top,
    .align-middle {
      padding: 0;
    }



    .photo_credit {
      padding: 10px;
      font-size: 10px;
      background: none;
      margin: 0;
      width: 100%;
    }

    .inner-align-end h2,
    .inner-align-middle h2 {
      font-size: 19px;
      font-family: 'Montserrat', sans-serif;
      color: rgba(255, 255, 255, 1);
      line-height: 1.6;
      letter-spacing: 1px;
      padding: 0 0 20px;
      text-align: center;
      position: relative;
      margin-bottom: 20px;
    }

    .cover .align-end {
      align-content: end;
    }

    .inner-align-end h2:after,
    .inner-align-middle h2:after {
      content: '';
      width: 54px;
      height: 1px;
      background-color: #fff;
      position: absolute;
      left: 50%;
      bottom: 0;
      transform: translateX(-100%);
    }

    .inner-align-end p.cta_link {
      text-align: center;
      padding: 10px;
      background: #f70307;
      max-width: 280px;
      border-radius: 50px;
    }

    .inner-align-end p.cta_link a {
      color: #fff !important;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 15px;
      font-weight: bold
    }

    .cover .inner-align-end {
      background-image: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
      background-color: transparent;
      border-radius: 0;
    }



    .inner-align-end-next {
      background: rgba(0, 0, 0, 0);
      padding: 20px 20px 170px 20px
    }

    .inner-align-end-next h2 {
      font-size: 22px;
      font-family: "Montserrat";
      color: rgba(255, 255, 255, 1);
      line-height: 1.27;
      margin-bottom: 10px;
    }

    .inner-align-end-next .summary {
      font-size: 16px;
      text-align: center;
      margin-bottom: 10px;
    }

    .summary {
      text-align: center;
      color: #fff;
      line-height: 1.41;
      letter-spacing: 1px;
      font-size: 16px;
      padding: 0 0 15px;
      font-family: 'Montserrat', sans-serif;
    }

    .summary.summary-shiftup {
      margin-bottom: 30px;
    }

    .summary+.ftr {
      float: right;
      font-size: 10px;
      color: #eee;
      text-decoration: none;
    }

    .summary {
      text-align: center;
      color: #fff !important;
      line-height: 1.41;
      letter-spacing: 1px;
      /*font-size: 16px;*/
      /*padding:  15px;*/
      /*font-family: 'Montserrat', sans-serif;*/

      width: 100%;
      height: 100%;

      border-top-left-radius: 50% 75px;
      border-top-right-radius: 50% 75px;
      padding-bottom: 10%;
      top: -141%;
      background: #00000082;

      font-weight: bold;

      padding: 30px;
    }

    .inner-align-end-next .summary {
      font-size: 16px;
      text-align: center;
      margin-bottom: 20px;
    }

    .para {
      color: #fff;
      text-align: center;
      font-family: 'Open Sans', sans-serif;
      border-top-left-radius: 50% 75px;
      border-top-right-radius: 50% 75px;
      padding: 8%;

      line-height: 1.41;
      letter-spacing: 1px;
      background: #00000082;
    }

    .para1 {
      color: #fff;

      text-align: center;
      font-family: 'Open Sans', sans-serif;
      padding: 20px;
      background: #00000082;

    }

    a {
      color: #fff;
      background: #f70307;
    float:center;
    margin:35%;
    }

    @media only screen and (max-width: 900px) {



      /*.inner-align-end p.cta_link { text-align: center; padding: 10px; background: #ffffff; max-width: 280px; border-radius: 50px;}*/
      /*.inner-align-end p.cta_link a{color: #fff !important; text-decoration: none; text-transform: uppercase;  font-size:15px; font-weight:bold}*/
      /*.cover .inner-align-end{background-image:linear-gradient(transparent, rgba(0,0,0,0.7)); background-color:transparent; border-radius:0;}*/



      /*.inner-align-end-next{ background: rgba(0,0,0,0); padding:20px 20px 170px 20px}*/
      /*.inner-align-end-next h2{font-size:22px; font-family:"Montserrat"; color:rgba(255, 255, 255, 1); line-height:1.27; margin-bottom:10px;}*/
      /*.inner-align-end-next .summary { font-size:16px; text-align:center; margin-bottom:10px;}*/

      /*.summary{text-align:center; color:#fff; line-height:1.41; letter-spacing:1px; font-size:16px; padding:0 0 15px; font-family:'Montserrat', sans-serif; }*/
      .summary.summary-shiftup {
        margin-bottom: 5px;
      }

      .summary+.ftr {
        float: right;
        font-size: 10px;
        color: #eee;
        text-decoration: none;
      }

      .summary {
        text-align: center;
        color: #fff !important;
        /*line-height: 1.41;*/
        /*letter-spacing: 1px;*/
        /*font-size: 16px;*/
        padding: 15px;
        /*font-family: 'Montserrat', sans-serif;*/

        width: 100%;
        height: 100%;

        border-top-left-radius: 50% 75px;
        border-top-right-radius: 50% 75px;
        padding-bottom: 10%;

        background: #00000082;

        font-weight: bold;

        padding: 30px;
      }

      .inner-align-end-next .summary {
        font-size: 16px;
        text-align: center;
      }

      .para {
        color: #fff;
        text-align: center;
        border-top-left-radius: 50% 75px;
        border-top-right-radius: 50% 75px;
        padding-bottom: 8%;
        font-size: 24px;
        background: #00000082;
        line-height: 1.41;
        letter-spacing: 1px;
        font-family: 'Open Sans', sans-serif;

      }

      .para1 {
        color: #fff;
        font-size: 24px;
        text-align: center;
        padding: 20px;
        background: #00000082;
        font-family: 'Open Sans', sans-serif;

      }
      
    a {
      color: #fff;
      background: #f70307;
    }

    }

  </style>
  <noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none;
      }
    </style>
  </noscript>
</head>

<body>
  <amp-story publisher-logo-src="assets/front_end/images/AMP-Brand-White-Icon.svg" poster-portrait-src="assets/front_end/images/cover.jpg" title="image" standalone>
    @foreach($detailsmain as $main_cart)

    <amp-story-page class="cover" auto-advance-after="" id="Page1">
      <amp-story-grid-layer template="fill">
        <amp-img tabindex="0" height="1024" width="768" class="image" layout="responsive" src="<?php echo $main_cart->imagelink; ?>" alt="imag">

        </amp-img>

      </amp-story-grid-layer>

      <amp-story-grid-layer class="align-end" template="vertical">
        <div class="align-end ">

          <p class="para1"><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>

        </div>
      </amp-story-grid-layer>
    </amp-story-page>
    @endforeach




    @foreach ($details as $details)
    <!-- <amp-analytics id="ibeatanalytics" type="ibeatanalytics" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" style="width: 1px; height: 1px;" hidden="">
                <script type="application/json">
                
                </script>    
                
        </amp-analytics> -->
    <amp-story-page class="slide" auto-advance-after="" id="page1">




      <amp-story-grid-layer template="fill">
        <amp-img tabindex="0" height="1024" width="768" layout="fixed" src="<?php echo $details->t_imagelink; ?>" alt="iamge">
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer class="align-end" template="vertical">

        <div animate-in-duration="2s" animate-in-delay=".5s" animate-in="fly-in-bottom">

          <div class="inner-align-end ">

            <p class="para"><?php echo implode(' ', array_slice(explode(' ', $details->t_description), 0)); ?></p>
          </div>
        </div>


      </amp-story-grid-layer>

    </amp-story-page>


    @endforeach

    <!-- </section> -->




    <amp-story-page class="cover" auto-advance-after="" id="Page1">
      <amp-story-grid-layer template="fill">
        <amp-img tabindex="0" height="1024" width="768" class="image" layout="responsive" src="<?php echo $main_cart->imagelink; ?>" alt="imag">

        </amp-img>

      </amp-story-grid-layer>

      <amp-story-grid-layer class="align-end" template="vertical">
        <div class="align-end ">

          <p class="para1"><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>
          <a href="http://127.0.0.1:8000/stories&id=248">FIND MORE</a>
        </div>
      </amp-story-grid-layer>
    </amp-story-page>

  </amp-story>

</body>

</html>

<!-- <amp-story-page-outlink layout="nodisplay">   


<a href="http://127.0.0.1:8000/stories&id=222">
Find More
</a>


</amp-story-page-outlink >  -->