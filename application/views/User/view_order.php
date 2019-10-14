    <br><br><br><br><br>
    <div class="container" >
        <table class="container">
        <thead>
            <tr class="">
                <th scope="col" style="color:orange;">Qty</th>
                <th scope="col" style="color:orange;"><strong>Food</strong></th>
                <th scope="col" style="color:orange;">Name</th>
                <th scope="col" style="color:orange;">Price</th>
                <th scope="col" style="color:orange;">Sub-Total</th>
                <th scope="col" style="color:orange;">Remove</th>
            </tr>
        </thead>
        <tbody>
        <?php  $total =0; ?>
            <?php if(count($food)): ?>
                <?php foreach($food as $row): ?>
            <tr class="" >
                <form  action="<?php echo site_url();?>order_food/food_qty/<?php echo $row->id; ?>" method="post">
                    <td><input name="qty" class="form-control" size="5" value="<?php echo $row->qty; ?>"><br>
                    <button type="submit" class="btn btn-success" align-text="center">Update Qty</button>
                </form>
                <td><img class="w3-circle" src="<?php echo site_url(); ?>/assets/images/food/<?php echo $row->food_image;?>" height="200" width="200" ></td>
                <td style="color:green;"><?php echo $row->food_name;?></td>
                <td style="color:green;"><?php echo "ksh"?><?php echo $row->food_price;?></td>
             
                <?php $sub_total = ($row->qty * $row->food_price);?>

                <?php $total = $total + $sub_total;?>       

                <td style="color:green;">ksh<?php echo $sub_total; ?></td>  
                <td style=""><a href="<?php echo base_url();?>order_food/remove_food/<?php echo $row->id; ?>" class="btn btn-danger">Remove</a></td>       
            </tr>
           
            <?php endforeach; ?>
            <tr>
                <td colspan="2"> </td>
                <td style="color:green;" class="right"><strong>Total:</strong></td>
                <td style="color:green;" class="right"><strong>Ksh<?php echo $total ; ?></strong></td>
                <td><a class="btn btn-success" href="<?php echo base_url();?>payments/checkout">Proceed to Checkout</a></td>
            </tr>
            <?php else:?>
            <tr>
                <td><h4><strong>Your order is Empty! <a href="<?php echo base_url();?>">Please make an order first ....></a></strong></h4></td>
            </tr>
            <?php endif; ?>
        </tbody>
        </table> <br><br>
        <a href="<?php echo base_url();?>" ><img src="<?php echo base_url();?>/assets/images/left-arrow.png ?>" /></a>
    </div>
    <br><br>