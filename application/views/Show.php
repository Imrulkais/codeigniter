
<div class="container">
    <div class="row"> 
        <table class="table table-hover">
            <tr>
                <td class="active">NAME</td>
                <td class="success">MOBILE</td>
                <td class="active">ADDRESS</td>                
                <td class="active">Edit</td>
                <td class="active">Delete</td>
            </tr>
            <?php foreach ($results as $maindata) { ?>

                <tr>
                    <td class="active"><?php echo $maindata->name; ?></td>
                    <td class="success"><?php echo $maindata->mobile; ?></td>
                    <td class="active"><?php echo $maindata->address; ?></td>
                    <td class="active"><a href="<?php echo base_url(); ?>UserController/EditData/<?php echo $maindata->id; ?>">edit</a></td>
                    <td class="active"><a href="<?php echo base_url(); ?>UserController/DeleteData/<?php echo $maindata->id; ?>">delete</a></td>
                </tr>

            <?php } ?>
        </table>
        <?php echo $this->pagination->create_links(); ?>    
        
    </div>
</div>
