<br><br><br><br><br><br>
<div class="container">
    <?php if($msg = $this->session->flashdata('msg')):?>
        <div class="alert alert-success">
            <?php echo $msg;?>
        </div>
    <?php endif;?>
</div>
<div class="container" style="align-text:center;">
    <img class="" src="<?php echo site_url(); ?>/assets/images/mpesa/mpesa2.jpg" height="300" width="1000" >
</div> 

<div class="container" >
<p style="color:green;">Please Note You can only place one order for now!</p>
        <table class="container">
        <thead>
            <tr class="">
                <th scope="col" style="color:orange;">Food</th>
                <th scope="col" style="color:orange;">Price</th>
                <th scope="col" style="color:orange;">Qty</th>
                <th scope="col" style="color:orange;">Sub-Total</th>
            </tr>
        </thead>
        <tbody>
      
        <?php  $total =0; ?>
            <?php foreach($order as $o): ?>
            <br>
            <div class="container">
                <?php if($validation_errors = validation_errors()): ?>
                    <div class="alert alert-danger">
                        <?php echo $validation_errors;?>
                    </div>
                <?php endif;?>
            </div>
             <br>
         
            <form  action="<?php echo base_url();?>payments/place_order" method="post">
                <tr class="">
                    <td style="color:green;"><input name="food_name" class="form-control" value="<?php echo $o->food_name;?>"></td>
                    <td style="color:green;">ksh<input name="food_price" class="form-control" value="<?php echo $o->food_price;?>"></td>
                    <td style="color:green;"><input name="qty" class="form-control" value="<?php echo $o->qty;?>"></td>
                    <?php $sub_total = ($o->qty * $o->food_price);?>
                    <td style="color:green;"><input name="sub_total" class="form-control" value="<?php echo $sub_total;?>"></td>
                    <?php $total = $total + $sub_total;?>           
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"> </td><br><br>
                    <td style="color:green;" class="left"><strong>Pay To Mpesa:</strong></td>
                    <td style="color:green;" class="right"><strong>Ksh<input name="total" class="form-control" value="<?php echo $total;?>"></strong></td>
                    <td style="color:green;" class="left"><strong>Mobile:</strong></td>
                    <td style="color:green;" class="right"><strong><input  name="mobile" class="form-control" placeholder=" +254..."></strong></td>
                </tr>
                <tr>
                <td style="color:green;" class="left"><strong>Send Mpesa Code:</strong></td>
                    <td style="color:green;" class="right"><strong><input type="text" name="mpesa_code" class="form-control" placeholder="Mpesa_code"></strong></td>
                </tr>
                
                <tr>
                    <td><button type="submit" class="btn btn-success">Place Order</button></td>
                </tr>
            </form> 
        </tbody>
        </table>  <br><br>
        <a href="<?php echo base_url();?>order_food/view_order" ><img src="<?php echo base_url();?>/assets/images/left-arrow.png ?>" /></a>
    </div>
    
