
    <div class="container signup">
      <div class="text-success">
      <?php echo  $this->session->userdata('message'); ?>
      </div>
      <div class="text-danger">
    <?php echo isset($error)?$error:'';?>
  </div>
      <?php
      $attributes = array('class' => 'form-signin login-form');   
      echo form_open_multipart('User/create_member', $attributes); 
      echo '<h2 class="form-signin-heading">Create an account</h2>';?>
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-address-book-o" style="font-size:36px"></i></p>
            <div class="form-group">
              <?php echo form_input('first_name', set_value('first_name'), 'placeholder="First name"', array('class' => 'form-control')); ?>
              <?php echo  form_error('first_name') ?>
            </div>
             <div class="form-group">
               <?php echo form_input('last_name', set_value('last_name'), 'placeholder="Last name"', array('class' => 'form-control')); ?>
               <?php echo  form_error('last_name') ?>
            </div>
            <div class="form-group">
              <?php echo form_input('email_address', set_value('email_address'), 'placeholder="Email"'); ?>
              <?php echo  form_error('email_address') ?>
           </div>
            <div class="form-group">
              <?php echo form_input('username', set_value('username'), 'placeholder="Username"'); ?>
              <?php echo  form_error('username') ?>
           </div>
            <div class="form-group">
               <?php echo form_password('password', '', 'placeholder="Password"'); ?>
               <?php echo  form_error('password') ?>
           </div>
            <div class="form-group">
               <?php echo form_password('password2', '', 'placeholder="Password confirm"'); ?>
               <?php echo  form_error('password2') ?>
           </div>
           <div class="form-group">
            <?php echo '<input type="file" name="userfile" size="20" />'; ?>
           </div>
               <?php echo form_submit('submit', 'submit', 'class="btn btn-large btn-primary"'); ?>
               <a href="<?php echo base_url();?>admin/login" class="btn btn-warning btn-large">Already have account ? Login Now</a>
        </div>
    <?php echo form_close(); ?>
    </div>
     