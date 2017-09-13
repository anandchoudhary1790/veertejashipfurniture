 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Pages</li>
						<li><i class="fa fa-square-o"></i>Add Team</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
       
        <?php
       if(!isset($_SESSION['error'])){?>
	      <div class="alert alert-success">
	      <?php echo  $this->session->userdata('message'); ?>
	      </div>
       	<?php }else {
			    unset($_SESSION['error']);
		} 
		if(isset($error)) {  ?>
      <div class="alert alert-danger">
    <?php echo isset($error)?$error:'';?>
  </div>
<?php } ?>
              

				<form class="form-horizontal" method="post" action="<?php echo  base_url();?>Pages/add_team" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Team Job Title</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="text" name="job_title">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                                  <label class="control-label col-sm-2">Team Job Description</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="job_description" rows="2"></textarea>
                                                  </div>
                                    </div>
                                     <div class="form-group">
                                                  <label class="control-label col-sm-2">Team Member Name</label>
                                                  <div class="col-sm-10">
                                                      <input class="form-control" type="text" name="job_member_name">
                                                  </div>
                                    </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Team Member Image</label>
                                      <div class="col-sm-10">
                                          <input type="file" name="team_member_img">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Team Fb Url</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="team_fb_url">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Team GooglePlus Url</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="team_googleplus_url">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Team Instagram Url</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="team_insta_url">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Team Twitter Url</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="team_twitter_url">
                                      </div>
                                  </div>

                                   <div class="form-group">
                                      <div class="col-sm-5">
                                          <input type="submit" value="Add Team" class="btn btn-primary" name="submit">
                                      </div>
                                  </div>
                                 
                              </form>													
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->