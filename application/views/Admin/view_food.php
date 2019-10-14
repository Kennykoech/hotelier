<br>
<div class="container">
    <?php if($msg = $this->session->flashdata('msg')):?>
        <div class="alert alert-success">
            <?php echo $msg;?>
        </div>
    <?php endif;?>
</div>

<div class="container" >
    <table class="container">
    <thead>
        <tr class="w3-green">
            <th scope="col" style="color:orange;">Food</th>
            <th scope="col" style="color:orange;">Name</th>
            <th scope="col" style="color:orange;">Price</th>
            <th scope="col" style="color:orange;">Edit</th>
            <th scope="col" style="color:orange;">Remove</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($food)): ?>
            <?php foreach($food as $fd): ?>
        <tr class="w3-hover-green" >
            <td><img class="w3-circle" src="<?php echo site_url(); ?>/assets/images/food/<?php echo $fd->food_image;?>" height="200" width="200" ></td>
            <td style="color:green;"><?php echo $fd->food_name;?></td>
            <td style="color:green;"><?php echo "ksh"?><?php echo $fd->food_price;?></td>
            <td style="color:blue;"><a class="w3-btn w3-circle w3-hover-blue" href="<?php echo base_url();?>admin/update_food/<?php echo $fd->id;?>">Edit</a></td>  
            <td style="color:red;"><a class="w3-btn w3-circle w3-hover-red" href="<?php echo base_url();?>admin/remove_food/<?php echo $fd->id;?>">Delete</a></td>  
        </tr>
        <?php endforeach; ?>
        <?php else:?>
        <tr>
            <td>The food is not available!</td>
        </tr>
        <?php endif; ?>
    </tbody>
    </table> 

    <div class="pagination">
        <a href="" class="active"></a>
        <?php echo $this->pagination->create_links();?>
    </div>

</div>
<br><br><br>