<?php
$this->load->helper(array('form', 'url'));
//$this->upload->initialize($config);
?>

<div class="container"> 
    <form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>UserController/FinalUpload" />

    <div class="form-group">
        <label for="exampleInputFile">Image input</label>
        <input type="file" id="exampleInputFile" name="file">
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <button type="submit" class="btn btn-default">Upload</button>

</form>
</div>
