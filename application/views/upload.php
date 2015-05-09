
<div class="container"> 
    <?php //echo $error; ?>

    <?php echo form_open_multipart('UserController/FinalUpload'); ?>

    <input type="file" name="file" size="200" />

    <br /><br />

    <input type="submit" value="upload" />

</form>
</div>
