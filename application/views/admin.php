         

<div class="row">
    <div class="container">
        <form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>UserController/SuperAdmin" />
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email" id="name" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="text" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>