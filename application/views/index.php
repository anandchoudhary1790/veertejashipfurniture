
		
		<!-- basic-slider start -->
		 <?php
            $query = $this->db->get('slider');

$result = $query->row_array(); //For more than one row
?>
		<div class="basic-slider slide-6 height-100-vh" style="background: rgba(0, 0, 0, 0) url(uploads/<?php echo $result['slider_img']?>) repeat scroll right top / cover;">
			<div class="container">
				<div class="hero-caption">
					<div class=" hero-text">
						<div class="slider-content text-MiniFox">
						<?php
						$query = $this->db->get('slider');
						$result = $query->row_array(); //For more than one row
?>
							<h3><?php echo $result['slider_title'] ;?></h3>
							<h2 class="cd-headline clip is-full-width">Our Work is   
							<?php $str = $result['slider_tag_line'];
								// zero limit
								$tag_str= explode(',',$str,-1);

							?>
								<span class="cd-words-wrapper">
								<?php
								foreach ($tag_str as $value) {
									?>
								<b class="is-visible"><?php echo $value; ?></b>
								<?php
								}
								?>
								
								</span>
							</h2>
							<p><?php echo $result['slider_description'];?></p>
							<a href="<?php echo base_url();?>contact" class="btn btn-MiniFox">contact us</a>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<!-- basic-slider end -->
		<!-- basic-portfolio-area start -->
		<div class="basic-portfolio-area ptb-90">
			<div class="container">
				<div class="filter-menu text-center mb-40">
					<button class="active" data-filter="*">ALL</button>
						<?php
						$query = $this->db->get('add_portfolio_category');
						$result = $query->result_array(); //For more than one row
						foreach ($result as $value) {
						?>
						<button data-filter=".<?php echo lcfirst($value['portfolio_category']);?>"><?php echo $value['portfolio_category'];?> </button>
					<?php } ?>
					
				</div>			
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
				<?php
						$query = $this->db->get('portfolio');
						$result = $query->result_array(); //For more than one row
						foreach ($result as $value) {
						?>
					<div class="portfolio-item <?php echo lcfirst($value['project_cat']);?>">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="uploads/portfolio/<?php echo $value['project_img'];?>" alt="" />
								<div class="view-icon">
									<a class="popup-link" href="uploads/portfolio/<?php echo $value['project_img'];?>"><span class="icon-focus"></span></a>
								</div>
							</div>
							<div class="portfolio-caption text-left">
								<h4><a href="portfolio-single.html"><?php echo $value['project_title'];?></a></h4>
								<div class="work-tag">
								<?php $str = $value['project_description'];
								// zero limit
								$desc_str= explode(',',$str,1);
								
                                 foreach ($desc_str as $value_desc) {
								 ?>
									<a href="#"><?php echo $value_desc;?></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="view-more mt-20 text-center">
					<a class="btn btn-large" href="#">View More</a>
				</div>			
			</div>
		</div>
		<!-- basic-portfolio-area end -->		
		<!-- basic-blog-area -->
		<div class="basic-blo-area gray-bg pt-90 pb-30">
			<div class="container">
				<div class="area-title text-center">
					<h2>Our Blog</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci.</p>
				</div>
				<div class="row">
				<?php
						$query = $this->db->get('blog');
						$result = $query->result_array(); //For more than one row
						foreach ($result as $value) {
						?>
					<div class="col-sm-6 col-md-4 blog-item">
						<!-- POST -->
						<article class="post MiniFox-bg">
							<div class="post-thumbnail">
								<img src="uploads/blog/<?php echo $value['blog_img']?>" alt="">
							</div>
							<div class="blog-details-space">
								<div class="post-header">
									<div class="post-meta">
										By <a href="#">Tanay</a>, <?php echo date('d F Y' , 1503406877);?>
									</div>
									<h2 class="post-title"><a href="blog-single.html"><?php echo $value['blog_title'];?></a></h2>
								</div>
								<div class="post-content">
									<p><?php echo $value['blog_description'];?></p>
									<a class="post-more" href="blog-single.html">Read more &rarr;</a>
								</div>
							</div>
						</article>
						<!-- /POST -->
					</div>
					<?php } ?>
					<div class="hide">
					<div class="col-sm-6 col-md-4 blog-item">
						<!-- POST -->
						<article class="post MiniFox-bg">
							<div class="post-thumbnail embed-responsive embed-responsive-16by9">
								<iframe src="https://www.youtube.com/embed/QD_hrJLqEhY"></iframe>
							</div>
							<div class="blog-details-space">
								<div class="post-header">
									<div class="post-meta">
										By <a href="#">Mark Stone</a>, 23 November, 2015
									</div>
									<h2 class="post-title"><a href="blog-single.html">Living Big in Tiny Houses</a></h2>
								</div>
								<div class="post-content">
									<p>Grass there without lights be years male have and grass firmament kind bring, is thing doesn't herb.</p>
									<a class="post-more" href="blog-single.html">Read more &rarr;</a>
								</div>
							</div>
						</article>
						<!-- /POST -->
					</div>					
					<div class="col-sm-6 col-md-4 blog-item">
						<!-- POST -->
						<article class="post MiniFox-bg">
							<div class="post-thumbnail blog-slider owl-carousel">
								<img src="img/blog/6.jpg" alt="">
								<img src="img/blog/7.jpg" alt="">
								<img src="img/blog/3.jpg" alt="">
							</div>
							<div class="blog-details-space">
								<div class="post-header">
									<div class="post-meta">
										By <a href="#">Mark Stone</a>, 23 November, 2015
									</div>
									<h2 class="post-title"><a href="blog-single.html">The Ultimate Renters Guide</a></h2>
								</div>
								<div class="post-content">
									<p>Grass there without lights be years male have and grass firmament kind bring, is thing doesn't herb.</p>
									<a class="post-more" href="blog-single.html">Read more &rarr;</a>
								</div>
							</div>
						</article>
						<!-- /POST -->
					</div>
					</div>
				</div>

			</div>
		</div>
		<!-- basic-blog-area end -->
		<!-- footer start -->
		
		<!-- footer end -->

		
		