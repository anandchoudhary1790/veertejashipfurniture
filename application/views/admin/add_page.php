 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Pages</li>
						<li><i class="fa fa-square-o"></i>Add Page</li>
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
              

				<form class="form-horizontal" method="post" action="<?php echo  base_url();?>Pages/add_page" enctype="multipart/form-data">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Page Title</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" type="text" name="page_title">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                                  <label class="control-label col-sm-2">Page Short Description</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="page_short_description" rows="2"></textarea>
                                                  </div>
                                    </div>
                                     <div class="form-group">
                                                  <label class="control-label col-sm-2">Page Description</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="page_description" rows="6"></textarea>
                                                  </div>
                                    </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Page Image</label>
                                      <div class="col-sm-10">
                                          <input type="file" name="page_img">
                                      </div>
                                  </div>

                                   <div class="form-group">
                                      <div class="col-sm-5">
                                          <input type="submit" value="Add Page" class="btn btn-primary" name="submit">
                                      </div>
                                  </div>
                                 
                              </form>													
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->