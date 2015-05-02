  <?php echo $this->load->library('form_validation'); ?>     
<div class="row">
    <div class="container">
        <form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>AdminController/SuperAdmin" />
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email"  >
        </div>
        <div class="form-group">
            <?php  echo form_error('email');?>
           </div> 
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label><?php// echo form_error('password'); ?>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <div class="form-group">
            <?php  echo form_error('password');?>
           </div> 
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
          <?php // echo validation_errors(); ?>  
    </div>
</div>
