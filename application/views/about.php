<!-- basic-breadcrumb start -->
		<div class="breadcrumb-2-area pos-relative bg-2 bg-black-alfa-40">
			<div class="hero-caption">
				<div class="hero-text">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
							<?php
						// $query = $this->db->get('slider');
						$query = $this->db->get_where('slider', array('id' => 2));
						$result = $query->row_array(); //For more than one row
				?>
					
								<h1 class="text-uppercase color-MiniFox breadcrumb-2"><?php echo $result['slider_title']?></h1>
								<p class="lead color-MiniFox "><?php echo $result['slider_tag_line'];?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- basic-breadcrumb end -->

		<div class="about-us-area pt-90">
			<div class="container">
				<div class="area-title text-center">
				<?php
						// $query = $this->db->get('slider');
						$query = $this->db->get('cms_pages');
						$result = $query->row_array(); //For more than one row
				?>
				
					<h2><?php echo $result['page_title'];?></h2>
					<p><?php echo $result['page_short_description'];?></p>
				</div>			
				<div class="row">
					<!-- ABOUT TEXT -->
						<?php echo $result['page_description'];?>
					<!-- /ABOUT TEXT -->
					<!-- PHOTO -->
					<div class="col-md-6">
						<div class="about-img hidden-sm hidden-xs">
							<img src="uploads/<?php echo $result['page_img'];?>" alt="">
						</div>
					</div>
					<!-- /PHOTO -->
				</div>
			</div>
		</div>
		<div class="basic-counter-area clearfix">
			<div class="counter-box">
				<div class="counter-icon">
					<span class=" icon-trophy"></span>
				</div>
				<div class="counter-text">
					<h3 class="counter-number">650</h3>
					<h4>cups of coffee</h4>
				</div>
			</div>			
			<div class="counter-box">
				<div class="counter-icon">
					<span class="icon-happy"></span>
				</div>
				<div class="counter-text">
					<h3 class="counter-number">890</h3>
					<h4>project done</h4>
				</div>
			</div>
			<div class="counter-box">
				<div class="counter-icon">
					<span class="icon-alarmclock"></span>
				</div>
				<div class="counter-text">
					<h3 class="counter-number">1200</h3>
					<h4>branding</h4>
				</div>
			</div>
			<div class="counter-box">
				<div class="counter-icon">
					<span class="icon-megaphone"></span>
				</div>
				<div class="counter-text">
					<h3 class="counter-number">1500</h3>
					<h4>happy clients</h4>
				</div>
			</div>
		</div>		
		<!-- basic-process-area start -->
		<div class="basic-process-area pt-90 pb-60">
			<div class="container">
				<div class="area-title text-center">
				<?php $query = $this->db->get('add_section');
				 $result = $query->row_array();?>
					<h2><?php echo $result['section_title']?></h2>
					<p><?php echo $result['section_description']?></p>
				</div>			
				<div class="row">
				<?php $query = $this->db->get('work_process');
				 $result = $query->result_array();?>
				 <?php foreach ($result as  $value) { ?>
				 	<div class="col-md-3 col-sm-6 mb-30">
						<div class="process-item text-center <?php if($value['id']==2) { ?> highlight <?php  } elseif($value['id']==4) {?> highlight<?php } ?>">
							<div class="process-item-icon">
							<?php if($value['id']==1){ ?>
								<span class="icon-linegraph "></span>
							<?php 
							}
							else if($value['id']==2){ ?>
								<span class="icon-lightbulb"></span>
							<?php
							}
							else if($value['id']==3){ ?>
								<span class="icon-pencil"></span>
							<?php
							}
							else if($value['id']==4){ ?>
								<span class="icon-laptop"></span>
							<?php
							}
							?>
							</div>
							<div class="process-item-content">
								<span class="process-item-number"><?php echo $value['id']?></span>
								<h3 class="process-item-title"><?php echo $value['work_title'] ?></h3>
								<p><?php echo $value['work_description']?></p>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</div>
		<!-- basic-process-area end -->		
		<div class="video-area ptb-150 bg-1">
			<div class="video-icon-view text-center">
				<a class="play-btn popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>
			</div>
		</div>		
		<!-- basic-service-area start -->
		<div class="basic-service-area gray-bg pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<?php $query = $this->db->get_where('add_section',array('id' => 2));
				 $result = $query->row_array();?>
					<h2><?php echo $result['section_title']?></h2>
					<p><?php echo $result['section_description']?></p>
				</div>
				<div class="row">
				<?php $query = $this->db->get('add_service');
				 $result = $query->result_array();
				 foreach ($result as $value) {
				 ?>
					<div class="col-md-4 col-sm-6 mb-40">
						<div class="service-box MiniFox-bg">
							<div class="service-icon">
							<?php if($value['id']==1) { ?>
								<span class="icon-pencil"></span>
							<?php 
							}elseif($value['id']==2){ ?>
								<span class="icon-gears"></span>
							<?php
							}
							elseif($value['id']==3){ ?>
								<span class="icon-mobile"></span>
							<?php
							}
							elseif($value['id']==4){ ?>
								<span class="icon-basket"></span>
						    <?php
							}
							elseif($value['id']==5){ ?>
								<span class="icon-speedometer"></span>
							<?php
							}
							elseif($value['id']==6){ ?>
								<span class="icon-chat "></span>
							<?php
							}
							?>
							</div>
							<div class="service-content">
								<h3><?php echo $value['service_title'] ?></h3>
								<p><?php echo $value['service_description'];?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- basic-service-area end -->	
		<!-- basic-testimonial-area start -->
		<div class="basic-testimonial-area bg-black-alfa-40 bg-5 ptb-110">
			<div class="container">
				<div class="row">
					<div class="testimonial-active owl-carousel">					
						<div class="col-md-12">
							<div class="testimonial-box">
								<blockquote>
									Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave.
									<span class="fa fa-quote-right"></span>
								</blockquote>
								<div class="testimonial-content">
									<h6 class="testimonial-name">Martin Friman</h6>
									<span class="testimonial-pos">Programmer, <a href="#">somesite.com</a></span>
								</div>							
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-box">
								<blockquote>
									Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave.
									<span class="fa fa-quote-right"></span>
								</blockquote>
								<div class="testimonial-content">
									<h6 class="testimonial-name">Martin Friman</h6>
									<span class="testimonial-pos">Programmer, <a href="#">somesite.com</a></span>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- basic-testimonial-area end -->
		<!-- basic-team-area start -->
		<div class="basic-team-area gray-bg pt-90 pb-60">
			<div class="container">
				<div class="area-title text-center">
					<?php $query = $this->db->get_where('add_section',array('id' => 3));
				 $result = $query->row_array();?>
					<h2><?php echo $result['section_title']?></h2>
					<p><?php echo $result['section_description']?></p>
				</div>			
				<div class="row">
				<?php $query = $this->db->get('our_team');
				 $result = $query->result_array();?>
					<?php foreach ($result as  $value) { ?>
					
					<div class="col-sm-6 col-md-3">
						<div class="team-item">
							<div class="team-item-image">
								<img src="uploads/team/<?php echo $value['team_member_img']?>" alt="team member" height="337" widht="300">
								<div class="team-item-detail">
									<h5 class="team-item-title"><?php echo $value['job_title']?> </h5>
									<p><?php echo $value['job_description']?></p>
									<div class="team-social-icon">
										<a href="<?php echo $value['team_fb_url'];?>"><i class="ion-social-facebook"></i></a>
										<a href="<?php echo $value['team_googleplus_url'];?>"><i class="ion-social-googleplus"></i></a>
										<a href="<?php echo $value['team_insta_url'];?>"><i class="ion-social-instagram"></i></a>
										<a href="<?php echo $value['team_twitter_url'];?>s"><i class="ion-social-dribbble"></i></a>
									</div>
								</div>
							</div>
							<h4 class="team-item-name"><?php echo $value['job_member_name']?></h4>
							<span class="team-item-role">Developer</span>
						</div>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
		<!-- basic-team-area end -->
		<!-- basic-pricing-area start -->
		<div class="basic-pricing-area pt-90 pb-60">
			<div class="container">
				<div class="area-title text-center">
					<h2>Our Pricing</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci.</p>
				</div>			
				<div class="row">
					<div class="col-sm-3 mb-30">
						<!-- PRICING TABLE -->
						<div class="pricing-table">
							<div class="pricing-title">
								<h6>Light</h6>
								<em class="text-small">for new users</em>
							</div>
							<div class="pricing-price">
								<span class="price-unit montserrat"><span>$</span>25</span>
								<span class="price-tenure">/mo</span>
							</div>
							<div class="pricing-features">
								<ul>
									<li>5GB Disk Space</li>
									<li>15 Email Addresses</li>
									<li>5 Domains</li>
									<li>50 Subdomains</li>
									<li>Email Support</li>
								</ul>
							</div>
							<div class="pricing-action">
								<a href="#" class="btn btn-circle btn-dark">Purchase</a>
							</div>
						</div>
						<!-- END PRICING TABLE -->
					</div>

					<div class="col-sm-3 mb-30">
						<!-- PRICING TABLE -->
						<div class="pricing-table">
							<div class="pricing-title">
								<h6>Professional</h6>
								<em class="text-small">most popular plan</em>
							</div>
							<div class="pricing-price">
								<span class="price-unit montserrat"><span>$</span>35</span>
								<span class="price-tenure">/mo</span>
							</div>
							<div class="pricing-features">
								<ul>
									<li>5GB Disk Space</li>
									<li>15 Email Addresses</li>
									<li>5 Domains</li>
									<li>50 Subdomains</li>
									<li>Email Support</li>
								</ul>
							</div>
							<div class="pricing-action">
								<a href="#" class="btn btn-circle btn-dark">Purchase</a>
							</div>
						</div>
						<!-- END PRICING TABLE -->
					</div>

					<div class="col-sm-3 mb-30">
						<!-- PRICING TABLE -->
						<div class="pricing-table">
							<div class="pricing-title">
								<h6>Business</h6>
								<em class="text-small">plan for bussines</em>
							</div>
							<div class="pricing-price">
								<span class="price-unit montserrat"><span>$</span>99</span>
								<span class="price-tenure">/mo</span>
							</div>
							<div class="pricing-features">
								<ul>
									<li>5GB Disk Space</li>
									<li>15 Email Addresses</li>
									<li>5 Domains</li>
									<li>50 Subdomains</li>
									<li>Email Support</li>
								</ul>
							</div>
							<div class="pricing-action">
								<a href="#" class="btn btn-circle btn-dark">Purchase</a>
							</div>
						</div>
						<!-- END PRICING TABLE -->
					</div>

					<div class="col-sm-3 mb-30">
						<!-- PRICING TABLE -->
						<div class="pricing-table">
							<div class="pricing-title">
								<h6>Light</h6>
								<em class="text-small">for new users</em>
							</div>
							<div class="pricing-price">
								<span class="price-unit montserrat"><span>$</span>25</span>
								<span class="price-tenure">/mo</span>
							</div>
							<div class="pricing-features">
								<ul>
									<li>5GB Disk Space</li>
									<li>15 Email Addresses</li>
									<li>5 Domains</li>
									<li>50 Subdomains</li>
									<li>Email Support</li>
								</ul>
							</div>
							<div class="pricing-action">
								<a href="#" class="btn btn-circle btn-dark">Purchase</a>
							</div>
						</div>
						<!-- END PRICING TABLE -->
					</div>
				</div><!-- .row -->
			</div>
		</div>
		<!-- basic-pricing-area end -->
		<div class="basic-skill-area pb-70">
			<div class="container">
				<div class="area-title text-center">
					<h2>Our Skill</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci.</p>
				</div>	
				<div class="row">
					<div class="col-sm-6">
						<!-- PROGRESS BAR -->
						<h6 class="progress-title">HTML <span class="pull-right"><span>80</span>%</span></h6>
						<div class="progress">
							<div class="progress-bar" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
						</div>
						<!-- END PROGRESS BAR -->

						<!-- PROGRESS BAR -->
						<h6 class="progress-title">CSS <span class="pull-right"><span>60</span>%</span></h6>
						<div class="progress">
							<div class="progress-bar" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
						</div>
						<!-- END PROGRESS BAR -->

						<!-- PROGRESS BAR -->
						<h6 class="progress-title">Jquery <span class="pull-right"><span>75</span>%</span></h6>
						<div class="progress">
							<div class="progress-bar" aria-valuenow="75" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
						</div>
						<!-- END PROGRESS BAR -->
					</div>
					<div class="col-sm-6">
						<!-- PROGRESS BAR -->
						<h6 class="progress-title">WordPress <span class="pull-right"><span>80</span>%</span></h6>
						<div class="progress">
							<div class="progress-bar" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
						</div>
						<!-- END PROGRESS BAR -->

						<!-- PROGRESS BAR -->
						<h6 class="progress-title">PHP <span class="pull-right"><span>60</span>%</span></h6>
						<div class="progress">
							<div class="progress-bar" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
						</div>
						<!-- END PROGRESS BAR -->

						<!-- PROGRESS BAR -->
						<h6 class="progress-title">Design <span class="pull-right"><span>75</span>%</span></h6>
						<div class="progress">
							<div class="progress-bar" aria-valuenow="75" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
						</div>
						<!-- END PROGRESS BAR -->
					</div>					
				</div>
			</div>
		</div>
		<!-- call-to-action-area start -->
		<div class="call-to-action-area gray-bg ptb-60">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="call-to-action">
							<h3>best solution for your business</h3>
							<p>It can be used on larger scale projects as well as small scale projects</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12 text-right">
						<div class="call-to-action">
							<a class="btn btn-large" href="#">Download now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- call-to-action-area end -->		
		<div class="clients-area ptb-40">
			<div class="container">
				<div class="row">
					<div class="clients-active owl-carousel">
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-1.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-2.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-3.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-4.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-5.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-6.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-1.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="basic-clients">
								<a href="#"><img src="img/clients/client-2.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>