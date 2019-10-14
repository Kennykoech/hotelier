    
 <div class="container" >
        <table class="container">
        <thead>
            <tr class="">
                <th scope="col" style="color:blue;">Mobile</th>
                <th scope="col" style="color:blue;">Food</th>
                <th scope="col" style="color:blue;">Price</th>
                <th scope="col" style="color:blue;">Qty</th>
                <th scope="col" style="color:blue;">Sub-Total</th>
                <th scope="col" style="color:blue;">Amount</th>
                <th scope="col" style="color:blue;">Mpesa-Code</th>
                     <th scope="col" style="color:blue;">Confirm Order</th>

            </tr>
        </thead>
        <tbody>
            <?php if(count($place_order)): ?>
            <?php foreach($place_order as $po): ?>
            <tr class="">  
                <td style="color:orange;"><?php echo $po->mobile;?></td>
                <td style="color:green;"><?php echo $po->food_name;?></td> 
                <td style="color:green;">ksh<?php echo $po->food_price;?></td> 
                <td style="color:red;"><?php echo $po->qty;?></td>  
                <td style="color:green;">ksh<?php echo $po->sub_total;?></td>  
                <td style="color:green;">ksh<?php echo $po->total;?></td>  
                <td style="color:green;"><?php echo $po->mpesa_code;?></td>  
                <td style="color:green;"><a class="w3-btn w3-circle w3-hover-green" href="">Confirm</a></td>          
            </tr>
            <?php endforeach; ?>
            <?php else:?>
            <tr>
                <td><h4><strong>There are no orders!</strong></h4></td>
            </tr>
            <?php endif; ?>
        </tbody>
        </table> 
    </div>