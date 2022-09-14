<?php include("header.php");?>
<header class="entry-nav clear">
	<ul>
		<li><a href="/">Home</a></li>
		<li>Visual Stories</li>
	</ul>
</header>
<div class="entry-content">
	<div class="container post-content left">
		<div class="visual-stories-inner clear">
			<div class="tab visualstories">
				<button class="tablinks" onclick="openCity(event, 'FEATURED')" id="defaultOpen">FEATURED</button>
				<button class="tablinks" onclick="openCity(event, 'LIFESTYLE')">LIFESTYLE</button>
				<button class="tablinks" onclick="openCity(event, 'HEALTH & FITNESS')">HEALTH & FITNESS</button>
				<button class="tablinks" onclick="openCity(event, 'ENTERTAINMENT')">ENTERTAINMENT</button>
				<button class="tablinks" onclick="openCity(event, 'FOOD')">FOOD</button>
				<button class="tablinks" onclick="openCity(event, 'TRAVEL')">TRAVEL</button>
			</div>
			<div id="FEATURED" class=" clear">
				<div class="visual-stories-inner-list clear">
					<div class="item">
						<a href="assets/front_end/stories" target="_blank">
							<img src="assets/front_end/images/cover.jpg" />
							<figcaption>
								<h2>Create a Web Stories</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				</div>
			</div>
		</div>
    </div>	
	<aside id="secondary" class="container post-sidebar widget-area right">
		<?php include("sidebar.php");?> 
	</aside>
</div>
<?php include("footer.php");?>