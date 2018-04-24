<?php
  $flash = $this->session->flashdata();
?>
<style type="text/css">
  body
  {
    background-image: url('/hhspg/img/back.jpg');
    background-repeat: no-repeat;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size:100% 100%;
  }
</style>
<div>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
      </ul>
      <?php if(isset($flash)):?>
        <?php foreach ($flash as $type => $message):?>
          <div class="col-sm-12">
            <div class="alert alert-<?= $type;?> fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong><?= $message;?></strong>
            </div>
          </div>
        <?php endforeach;?>  
      <?php endif;?>
      <div class="tab-content">
        
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="<?=  $action;?>" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" required autocomplete="off" name="email" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          <input type="hidden" name="return_url" value="<?= $return_url;?>"/>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>

        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="<?= $action2;?>" method="post" autocomplete="off">
          
          
          <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"/>
            </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          <input type="hidden" name="return_url" value="<?= $return_url;?>"/>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          <div class="field-wrap">
            <label>
              Phone no<span class="req">*</span>
            </label>
            <input type="text" name="contact" required  minlength="10" pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Please enter a valid phone number')" autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
            
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
<script type="text/javascript" src="js/login.js"></script>