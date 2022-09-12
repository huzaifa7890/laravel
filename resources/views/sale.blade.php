<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Aero Bootstrap4 Admin :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
       
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="dashboard.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQahP8KdSO-tV3lDYllKTftXPTJ2H6UYlFevQ&usqp=CAU" alt="User"></a>
                    <div class="detail">

                        
                        <br>
                        <small>Super Admin</small>                        
                    </div>
                </div>
            </li>

            <li><a href="dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <li><a href="product"><i class="zmdi zmdi-grid"></i><span>Manage Product</span></a></li>
        <li><a href="biling" ><i class="zmdi zmdi-grid"></i><span>Manage Biling</span></a></li>
        <li><a href="trash" ><i class="zmdi zmdi-grid"></i><span>Manage Trash</span></a></li>
        <li class="active open"><a href="sale" ><i class="zmdi zmdi-grid"></i><span>Manage Sale</span></a></li>
            
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Sales</h2>
                  
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
              
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong></strong></h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th>Custumer Name</th> 
                                            <th>Customer Number</th> 
                                            <th>Sale Person</th> 
                                            <th>Product Name</th> 
                                            <th>Quantity</th>
                                            <th>Product Price</th>
                                            <th>Total</th>                                 

                                            
                                        </tr>
                                        
                                    </thead> @php 
                                    $t=0;
                                    @endphp
                                    @foreach($users as $k)
                                    <tbody>
                                        <tr>
                                    <td>{{$k->cname}}</td>
                                    <td>{{$k->cno}}</td>
                                    <td>{{$k->saleman}}</td>
                                    <td>{{$k->pname}}</td>
                                    
                                    <td>{{$k->quan}}</td>
                                    <td>{{$k->amt}}</td>
                                    <td>{{$k->total}}</td>
                                    </tr>    
                                    @php 
                                    $t+=$k->total;
                                    @endphp
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<h2 class='bg-warning text-center'>Total Amount: {{"$t"}}</h2>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>


</html>