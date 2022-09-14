@extends('front_end.header')
@section('content')
<header class="entry-nav clear">
	<ul>
		<li><a href="/">Home</a></li>
		<li>Contact Us</li>
	</ul>
</header>
<div class="entry-content container equal-height contact clear">
	<aside class="left">
		<h2>Info</h2>
		<!--<p><img src="assets/front_end/images/address.svg"><strong>Address</strong>33, Lawyer Chinnathambi Street,<br>
    Kondithope, George Town,<br>
    Chennai - 600 079.<br>
    Tamil Nadu. India.</p>-->
		<p><img src="assets/front_end/images/phone.svg"><strong>Phone No</strong><a href="https://web.whatsapp.com/send?phone=9403356207&amp;text=Hello!%20I%27m%20interested" target="_blank" title="Whatsapp" rel="noopener" style="color:white;">+91-94033 56207</a></p>
		<p><img src="assets/front_end/images/mail.svg"><strong>Email us</strong><a href="mailto:support@beeinnovations.com" style="color:white;">support@beeinnovations.com</a></p>
		<p><img src="assets/front_end/images/website.svg"><strong>Website</strong><a href="/" style="color:white;">www.mobilemasala.com</a></p>
        <h3>Follow Us</h3>
                <div class="footer-social-icons clear">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
	</aside>
    <fieldset class="right">
		<h2>Keep in touch</h2>
		<form method="POST" action="{{ url('keep-in-touch')}}">
			@csrf
        	<label><input name="name" type="text" placeholder="Name" required></label>
        	<label><input name="email" type="email" placeholder="Email" required></label>
			<label><input name="mobile" type="text" placeholder="Mobile" required></label>
        	<label class="clear"><textarea name="mesg" placeholder="Message"></textarea></label>
        	<label><input name="submit" type="submit" value="Send"/></label>
		</form>
	</fieldset>
</div>
@endsection