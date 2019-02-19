<!-- banner1 -->
<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">Freehold</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url() ?>home">Home</a></li>
							<li><a href="<?php echo base_url() ?>about">About</a></li>
							<li><a href="<?php echo base_url() ?>gallery">Gallery</a></li>
							<li class="active"><a href="<?php echo base_url() ?>contact-us">Contact</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
			
		</div>
	</div>
<!-- //banner1 -->	
<div class="agileits-con">
		<div class="container">
			<h2 class="w3ls_head">Contact</h2>
			<div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
			<?php 
         echo $this->session->flashdata('email_sent'); 
        
      ?> 
	  <form action="<?php echo base_url() ?>welcome/send_mail" method="post">
				
						<div class="contact-form2">
							<h4>Name</h4>
							
								<input type="text" name="name" placeholder="" >
							
						</div>
						
				
						<div class="contact-form2">
							<h4>Email</h4>
						
								<input type="email" name="email" placeholder="" required="">
						
						</div>
						<div class="contact-form2">
							<h4>Subject</h4>
						
								<input type="text" name="subject" placeholder="" >
						
						</div>
					
			
				<div class="contact-me ">
					<h4>Message</h4>
				
						<textarea name="message" placeholder="" > </textarea>
						</div>
						<?php 
         echo $this->session->flashdata('cap'); 
        
      ?> 
						<div class="g-recaptcha" data-sitekey="6LebgZIUAAAAABvoTP3fZygJW1kDHKIgX7t7rnIw"></div>
						<input type="submit" value="Submit">
				</form>
				
			</div>
			
			<div class="col-md-4 contact-grids">
				<div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 ">
							<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Address</h4>
							<p>7th Street, Melbourne City, <span>Australia.</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid4">
							<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Call Us</h4>
							<p>(4584) 5689 0254 128<span>(4584) 5689 0254 129</span></p>
						</div>
					</div>
				</div>
				<div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
					<div class="contact-grid1">
						<div class="contact-grid2 contact-grid5">
							<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						</div>
						<div class="contact-grid3">
							<h4>Email</h4>
							<p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
