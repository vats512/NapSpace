<?php
  $flash = $this->session->flashdata();
?>
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
<div class="content col-sm-12" >

  <div class="right col-sm-6">

      <img src="img/banner2.jpg" height="500px" width="600px">

  </div>
  <div class="left col-sm-6">
        <div class="col-sm-4 btn btn-orange" style="margin-top: 13%;" align="center">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    Address:
        </div>

        <div class="col-sm-8 " style="background-color:; margin-top: 05%; font-size: 20px ">
              Ahmedabad Office:<br>
              Office No. 1204<br>
              12th floor, B-Block<br>
              Titanium city centre<br>
              Satellite, Ahmedabad-380015<br>
        </div>
        <div class="col-sm-12" align="center  " style="background-color:; margin-top: 05%; font-size: 20px; color: #2e64ba; ">
              Give us your Precious Feedback and Suggestions Here...!!!          
        </div>
        <br>
        <div class="clearfix"></div>
        <br>
        <form action="user/contact_us" method="POST">
        <div class="col-sm-6">        
        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" width="100%">
        </div>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" width="100%">
        </div>
        <br>
        <div class="clearfix"></div>
        <br>
        <div class="col-sm-6">        
        <input type="text" class="form-control" max="10" name="number" id="number" placeholder="Mobile Number" width="100%">
        </div>
        <div class="col-sm-6">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email-Address" width="100%">
        </div>

        <br>
        <div class="clearfix"></div>
        <br>

        <div class="col-sm-12">
            <textarea id="feedback" class="form-control" name="feedback" rows="5" cols="75" placeholder="Enter Your Feedback Here...!"></textarea>
        </div>
        <div class="clearfix"></div>
        <br>

        <div class="col-sm-4 col-sm-offset-4">
            <input type="submit" name="feedback" id="feedback" value="Send Feedback" style="background-color: #2e64ba; color: white" class="btn" >
        </div>
        </form>
  </div>

</div>