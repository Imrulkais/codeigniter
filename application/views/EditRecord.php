<?php
if (null == $this->session->userdata('email')) {
    redirect('UserController/admin');
}
    ?>
<div class="row">
    <div class="col-md-6 col-md-offset-3"
         <div class="container">

            <form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>UserController/CompleteEdit" />
            <?php foreach ($alldata as $data) {?>   
            <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $data->name;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $data->mobile;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $data->address;?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="password">
            </div>
            <input type="hidden" name="id" value="<?php echo $data->id;?>">
            <?php } ?>
                <button type="submit" class="btn btn-default">Submit</button>

            </form>
        </div>
    </div>


