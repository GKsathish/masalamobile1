			
<?php  $lang = $feed->language;?>
	
	
	
    <?php if(($lang == "") || ($lang == "English")){ ?>
	
	
	

<footer id="colophon" class="site-footer clear">
    	<article class="clear">
        	<aside class="footer-nav left">
            	<h2>Information</h2>
                <ul>
                    <li><a href="contact-us">Contact Us</a></li>
                    <li><a href="privacy-policy">Privacy Policy</a></li>
                    <li><a href="terms-of-use">Terms of Use</a></li>
                    <li><a href="accessibility">Accessibility Statement</a></li>
                    <li><a href="disclosure">Disclosures</a></li>
                </ul>
            </aside>
        	<aside class="left">
            	<h2>Popular Tags</h2>
				<div class="tagcloud clear">
                    <a href="post-content&id=6">Health &amp; Wellness</a>
                    <!-- <a href="#">Believe It or Not</a> -->
                    <a href="post-content&id=8">Entertainment</a>
                    <!-- <a href="#">Hot Content</a>
                    <a href="#">Fitness</a>
                    <a href="#">Sports</a> -->
                    <!-- <a href="post-content&id=11">Trending Now</a> -->
                    <a href="post-content&id=9">Sports</a>
                    <!-- <a href="post-content&id=9">General Gossip</a> -->
                    <!-- <a href="post-content&id=9">Uncategorized</a> -->
                    <a href="post-content&id=1">Fashion</a>
                    <a href="post-content&id=7">Technology &amp; Gadgets</a>
                    <a href="post-content&id=4">Movies</a>
                    <a href="post-content&id=2">Celebrity Gossip</a>
					<a href="post-content&id=5">Music</a>
					<a href="post-content&id=10">Auto News</a>
					<a href="post-content&id=11">Travel & Tourism</a>
					<a href="post-content&id=17">More</a>
				</div>
				<h2>Follow Us</h2>
                <div class="footer-social-icons clear">
                    <ul>
                        <li><a href="https://www.youtube.com/channel/UCsiQiezOigqrxrNIP0N1gaw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </aside>
            <?php /*<fieldset class="right">
            	<h2>Subscribe</h2>
                <p>Get Mobile Masala free every morning and evening.</p>
                <form action="{{ url('subscribe-addon') }}" method="POST">
                    @csrf
                	<input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter your email address">						 					<input type="submit" value="Submit">
                </form>
                <!-- <p class="subscribe-msg">Thanks You for Subscribing Masalamobile</p> -->
            </fieldset> */?>
        </article>
		<div class="site-info clear">
        	<p class="left">© <span id="year"></span> Mobile Masala. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer>

<?php }?>
<?php if($lang == "Hindi"){ ?>
<footer id="colophon" class="site-footer clear">
                <article class="clear">
                    <aside class="footer-nav left">
                        <h2>Information</h2>
                        <ul>
                            <li><a href="contact-us">Contact Us</a></li>
                            <li><a href="privacy-policy">Privacy Policy</a></li>
                            <li><a href="terms-of-use">Terms of Use</a></li>
                            <li><a href="accessibility">Accessibility Statement</a></li>
                            <li><a href="disclosure">Disclosures</a></li>
                        </ul>
                    </aside>
                    <aside class="left">
                        <h2>Popular Tags</h2>
                        <div class="tagcloud clear">
                            <a href="post-content&id=6"> हेल्थ और फिटनेस </a>
                            <!-- <a href="#">Believe It or Not</a> -->
                            <a href="post-content&id=8">मनोरंजन</a>
                            <!-- <a href="#">Hot Content</a>
                            <a href="#">Fitness</a>
                            <a href="#">Sports</a> -->
                            <!-- <a href="post-content&id=11">Trending Now</a> -->
                            <a href="post-content&id=9">खेल</a>
                            <!-- <a href="post-content&id=9">General Gossip</a> -->
                            <!-- <a href="post-content&id=9">Uncategorized</a> -->
                            <a href="post-content&id=1">फ़ैशन </a>
                            <a href="post-content&id=7">टेक्नोलॉजी</a>
                            <a href="post-content&id=4">मूवीज़</a>
                            <a href="post-content&id=2"> गपशप</a>
                            <a href="post-content&id=5">म्यूज़िक</a>
                            <a href="post-content&id=10">ऑटो न्यूज़ </a>
                            <a href="post-content&id=11">ट्रेवल & टूरिज़म </a>
                            <a href="post-content&id=17">More</a>
                        </div>
                        <h2>Follow Us</h2>
                        <div class="footer-social-icons clear">
                            <ul>
                                <li><a href="https://www.youtube.com/channel/UCsiQiezOigqrxrNIP0N1gaw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                    <?php /*<fieldset class="right">
                        <h2>Subscribe</h2>
                        <p>Get Mobile Masala free every morning and evening.</p>
                        <form action="{{ url('subscribe-addon') }}" method="POST">
                            @csrf
                            <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter your email address">						 					<input type="submit" value="Submit">
                        </form>
                        <!-- <p class="subscribe-msg">Thanks You for Subscribing Masalamobile</p> -->
                    </fieldset> */?>
                </article>
                <div class="site-info clear">
                    <p class="left">© <span id="year"></span> Mobile Masala. All rights reserved.</p>
                </div><!-- .site-info -->
</footer>

<?php } ?>




<?php if($lang == "Telugu"){ ?>
<footer id="colophon" class="site-footer clear">
                <article class="clear">
                    <aside class="footer-nav left">
                        <h2>సమాచారం</h2>
                        <ul>
                            <li><a href="contact-us">   సంప్రదించండి </a></li>
                            <li><a href="privacy-policy">  ప్రైవసీ పాలసీ </a></li>
                            <li><a href="terms-of-use"> నిబంధనలు </a></li>
                            <li><a href="accessibility">యాక్సెసిబిలిటీ స్టేట్‌మెంట్
</a></li>
                            <li><a href="disclosure">డిస్క్లోజర్స్</a></li>
                        </ul>
                    </aside>
                    <aside class="left">
                        <h2>పాపులర్ ట్యాగ్స్</h2>
                        <div class="tagcloud clear">
                            <a href="post-content&id=6">హెల్త్ & వెల్నెస్</a>
                            <!-- <a href="#">Believe It or Not</a> -->
                            <a href="post-content&id=8">ఎంటర్టైన్మెంట్</a>
                            <!-- <a href="#">Hot Content</a>
                            <a href="#">Fitness</a>
                            <a href="#">Sports</a> -->
                            <!-- <a href="post-content&id=11">Trending Now</a> -->
                            <a href="post-content&id=9">క్రీడలు</a>
                            <!-- <a href="post-content&id=9">General Gossip</a> -->
                            <!-- <a href="post-content&id=9">Uncategorized</a> -->
                            <a href="post-content&id=1">ఫ్యాషన్‌</a>
                            <a href="post-content&id=7">టెక్నాలజీ & గాడ్జెట్‌లు</a>
                            <a href="post-content&id=4">సినిమా</a>
                            <a href="post-content&id=2"> సెలబ్రిటీ గాసిప్స్</a>
                            <a href="post-content&id=5">సంగీతం</a>
                            <a href="post-content&id=10">ఆటో న్యూస్</a>
                            <a href="post-content&id=11">ట్రావెల్ & టూరిజం</a>
                            <a href="post-content&id=17"> మరిన్ని</a>
                        </div>
                        <h2>ఫాలో అస్</h2>
                        <div class="footer-social-icons clear">
                            <ul>
                                <li><a href="https://www.youtube.com/channel/UCsiQiezOigqrxrNIP0N1gaw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                    <?php /*<fieldset class="right">
                        <h2>Subscribe</h2>
                        <p>Get Mobile Masala free every morning and evening.</p>
                        <form action="{{ url('subscribe-addon') }}" method="POST">
                            @csrf
                            <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter your email address">						 					<input type="submit" value="Submit">
                        </form>
                        <!-- <p class="subscribe-msg">Thanks You for Subscribing Masalamobile</p> -->
                    </fieldset> */?>
                </article>
                <div class="site-info clear">
                    <p class="left">© <span id="year"></span>మొబైల్ మసాలా.  అన్ని హక్కులు ప్రత్యేకించబడ్డాయి.</p>
                </div><!-- .site-info -->
</footer>

<?php } ?>

<a href="#" class="scrollup"></a>
<script>
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
</script>
<script>
    
  $(document).ready( funtion(){
        $('.lazy').lazy();
    });

    

</script>
<script src="assets/front_end/js/owl.carousel.js"></script>
<script src="assets/front_end/js/script.js"></script>
<!-- <script src="assets/front_end/js/app.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js"></script>
<script>
   const firebaseConfig = {
    apiKey: "AIzaSyDl1BNMw6BaBEAXQEtTDIddOgj8TlD4ZUc",
    authDomain: "fir-testing-89579.firebaseapp.com",
    projectId: "fir-testing-89579",
    storageBucket: "fir-testing-89579.appspot.com",
    messagingSenderId: "833792043931",
    appId: "1:833792043931:web:ec917a948a2cae90424f3e",
    measurementId: "G-J9K8FM9EVG"
  };
    firebase.initializeApp(firebaseConfig);
    
    const messaging=firebase.messaging();

    function IntitalizeFireBaseMessaging() {
        messaging
            .requestPermission()
            .then(function () {
                // console.log("Notification Permission");
                return messaging.getToken();
            })
            .then(function (token) {
                console.log("Token : "+token);
                // document.getElementById("token").innerHTML=token;
                // $.post("noti-token-send", {noti_token: token}, function(result){
                //     console.log(result);
                // });
                 $.get("noti-token-send&id="+token, function(result){
                    console.log(result)
                });
            })
            .catch(function (reason) {
                console.log(reason);
            });
    }

    messaging.onMessage(function (payload) {
        console.log(payload);
        const notificationOption={
            body:payload.notification.body,
            icon:payload.notification.icon
        };

        if(Notification.permission==="granted"){
            var notification=new Notification(payload.notification.title,notificationOption);

            notification.onclick=function (ev) {
                ev.preventDefault();
                window.open(payload.notification.click_action,'_blank');
                notification.close();
            }
        }

    });
    messaging.onTokenRefresh(function () {
        messaging.getToken()
            .then(function (newtoken) {
                console.log("New Token : "+ newtoken);
            })
            .catch(function (reason) {
                console.log(reason);
            })
    })
    IntitalizeFireBaseMessaging();
</script>
<script>

$(".open").click(function(){
    console.log("Working");
    $(".copylabel").empty();
    var id = $(this).val();
    $.get("get-share-info&id="+id, function(data){
        console.log(data);
            if(data.success == true)
            {
                var posttitle = "https://mobilemasala.com/meta_share&id="+data.posttitle+"&share=yes";
                $("#fb").attr("href", "http://www.facebook.com/sharer.php?u="+posttitle);
                $("#twit").attr("href", "https://twitter.com/share?url="+posttitle);
                $("#wa").attr("href", "https://api.whatsapp.com/send?text=https://mobilemasala.com/meta_share%26id="+data.posttitle+"%26share=yes")
                $("#insta").attr("href", "https://www.instagram.com/?url="+posttitle)
                $("#telegram").attr("href", "https://t.me/share/url?url=https://mobilemasala.com/post-single%26id="+data.posttitle)
                $("#mail").attr("href", "mailto:?subject=Take a Look of Article&amp;body=Check out this site "+posttitle)  
                
                $("#myInput").val(posttitle);
                 $("#a").fadeIn();
                 $("#b").fadeIn();
            }
            
        });
});


$(".cancel").click(function(){
     $("#a").fadeOut();
     $("#b").fadeOut();
});

$(".cpy").click(function(){
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
    navigator.clipboard.writeText(copyText.value);
    $(".copylabel").text("LINK COPIED");
})
$("#subscribe_submit").click(function(){
        var denierid = "+"+$("#mobile_num_sub").val();
        console.log(denierid);
        var param = { 'phoneA_number': denierid };
        $.ajax({
            url: "http://13.234.96.218:3000/sendMessage",
            dataType: "json",
            contentType: "application/json",
            type: "POST",
            data: JSON.stringify(param),
            success: function (msg) {
                if (msg != null) {
                    return msg;
                }
            }
        });
});

</script>
</body>
</html>