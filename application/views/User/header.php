<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Order Food</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/w3.css">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#"><h1 style="color:greenyellow;"><strong>Hotelier</strong></h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo site_url()?>user" >
                                    <input class="form-control mr-sm-2" type="search" placeholder="search your tasty meal..." 
                                    aria-label="Search" name="keyword" value="<?php if($this->input->get('keyword')) echo $this->input->get('keyword');?>">
                                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>"><em style="color:green">Make Order</em><span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>order_food/view_order"><em style="color:green;">View Order</em></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>payments/checkout"><em style="color:green;">Checkout</em></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>payments/delivery"><em style="color:green;">Delivery</em></a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#contact"><em style="color:green;">Contact Us</em></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href=""><em style="color:green;">Sign in</em></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=""><em style="color:green;">Sign Up</em></a>
                            </li>
                            <li class="nav-item dropdown">
                            
                            </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    
     