<br><br><br><br><br><br><br><br>
<div class="container">
    <?php if($msg = $this->session->flashdata('msg')):?>
        <div class="alert alert-success">
            <?php echo $msg;?>
        </div>
    <?php endif;?>
</div>
<div class="container">
    <div class="login-box-body">
        <div class="col-md-6 col-md-offset-3">
            <h3>Add Food</h3>
        
            <form action="<?php echo base_url();?>admin/add_food" method="post" enctype="multipart/form-data">
              
                <div class="form-group">
                    <input type="file" name="userfile" size="20">
                </div>

                <div class="form-group">
                    <input type="text" name="food_name" size="20" placeholder="Enter food name...">
                </div>
                <div class="form-group">
                    <input  name="food_price" size="20" placeholder="Enter food price ...">
                </div>
                <div class="form-group">
                    <label><h6>Choose food category name below:</h6></label>
                    <select name="category_id" class="form-control">
                    <?php foreach($food_category as $cat): ?>
                        <option value="<?php echo $cat['category_id']; ?>" ><?php echo $cat['food_category_name']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" align-text="center">Add Food</button>   
            </form>     
        </div>
    </div>
</div>