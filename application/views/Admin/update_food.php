<br><br><br><br>
<div class="container">
    <form action="<?php echo site_url();?>admin/edit_food/<?php echo $food->id; ?>" method="post">
        <div class="form-group">
            <img class="w3-circle" src="<?php echo site_url(); ?>/assets/images/food/<?php echo $food->food_image;?>" height="300" width="300" >
            <br>
        </div><br>
        <div class="form-group">
            <label>Name:</label>
                <input type="text" name="food_name" class="form-control" value="<?php echo $food->food_name; ?>" style="color:green;">
        </div><br>
        <div class="form-group">
            <label>Price:</label>
            <input name="food_price" class="form-control" value="<?php echo $food->food_price; ?>" style="color:green;">
        </div><br>
        <button type="submit" class="btn btn-success" align-text="center">Update Food</button>
    </form>
</div>
<br><br><br><br>