<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Hotelier Admin</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/w3.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <!-- navigation --> 
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">Admin Panel</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>admin/confirm_food_orders">Confirm Orders</a>
                            </li>
                            <li class="nav-item-active" style="color:blue;" >
                                <a class="nav-link" href="<?php echo base_url();?>admin/view_food">View Foods</a>
                            </li>
                            <li class="nav-item-active" style="color:blue;" >
                                <a class="nav-link" href="<?php echo base_url();?>admin/create_food">Add Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>admin/create_food_category">Add Food Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sign Up</a>
                            </li>
                        
                            </ul>
                    </div>
                </div>
            </nav>
    