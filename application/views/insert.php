<div class="row">
    <div class="col-md-6 col-md-offset-3"
<div class="container">

    <form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>UserController/insert" />
    
        
             <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          
        </form>
</div>
    </div>
</div>