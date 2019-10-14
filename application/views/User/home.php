</header>
<br><br><br><br>
    <div class="container">
        <?php if($this->input->get('keyword')):?>
    
            <?php echo $this->input->post('keyword'); ?>

        <?php endif; ?>
    </div>

        <div class="container">
            <?php if($msg = $this->session->flashdata('msg')):?>
                <div class="alert alert-success">
                    <?php echo $msg;?>
                </div>
            <?php endif;?>
        </div>
        <div class="container" >
           <br>
            <div class="row">
                <?php foreach($food as $row): ?>
            <div class="col-sm-4">
            <div class="card" style="width: 23rem;">
            <img class="w3-circle" src="<?php echo site_url(); ?>/assets/images/food/<?php echo $row->food_image;?>" height="250" width="250" >
            <div class="card-body">
                <h5 class="card-title" style="color:green;">Name:<?php echo $row->food_name;?></h5>
                <p class="card-text" style="color:green;">Ksh<?php echo $row->food_price;?></p>
                <a href="<?php echo site_url("order_food/make_order/".$row->id);?>" class="btn btn-success">Order</a>
            </div>
            </div>
            </div>
            <?php endforeach; ?>
            </div><br>
            <div class="pagination">
                <a href="" class="active"></a>
                    <?php echo $this->pagination->create_links();?>
            </div>
        </div><br>
     
       

   
        </section><br>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).scroll(function(){
                $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
            });
        </script>

  