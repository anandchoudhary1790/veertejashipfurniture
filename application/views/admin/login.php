    <div class="container">
   <?php $attributes = array('class' => 'login-form', 'id' => 'login-form');
echo form_open('admin/login/validate_credentials', $attributes); ?>
          
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <?php  echo form_input('user_name', '', 'placeholder="Username"', array('class' => 'form-control')); ?>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <?php  echo  form_password('password', '', 'placeholder="Password"', array('class' => 'form-control')); ?>

            </div>
             <?php if(isset($message_error) && $message_error){
             echo '<div class="alert alert-error">';
             echo '<a class="close" data-dismiss="alert">×</a>';
             echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
             echo '</div>';             
              }
              echo "<br />";
              echo anchor('admin/signup', 'Signup!');
              echo "<br />";
              echo "<br />";
              echo form_submit('submit', 'Login', 'class="btn btn-primary btn-lg btn-block"');
              
      ?>
            
        </div>
     <?php echo form_close();?>
  
    </div>
 