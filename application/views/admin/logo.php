 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Header Setting</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Header Setting</li>
						<li><i class="fa fa-square-o"></i>Add Logo</li>
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
              
				<?php echo form_open_multipart('Pages/upload_logo');?>
				<input type="file" name="logo_img" size="20" />
				<br /><br />
				<input type="submit" class="btn btn-danger" value="Upload Logo" />
				</form>																
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->