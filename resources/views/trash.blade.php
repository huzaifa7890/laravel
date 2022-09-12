@if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->


<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->


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
                    <a class="image" href="dash1.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQahP8KdSO-tV3lDYllKTftXPTJ2H6UYlFevQ&usqp=CAU" alt="User"></a>
                    <div class="detail">
                  
                 
                      
                        <small>Employee</small>                        
                    </div>
                </div>
            </li>

            <li><a href="dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <li><a href="product"><i class="zmdi zmdi-grid"></i><span>Manage Product</span></a></li>
        <li><a href="biling" ><i class="zmdi zmdi-grid"></i><span>Manage Biling</span></a></li>
        <li class="active open"><a href="trash" ><i class="zmdi zmdi-grid"></i><span>Manage Trash</span></a></li>
        <li><a href="sale" ><i class="zmdi zmdi-grid"></i><span>Manage Sale</span></a></li>
           
           
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
                    <h2>Products</h2>
                  
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
                         <a href="addproduct" class="btn btn-primary">Add Product</a> 
                        <div class="table-responsive">
                         <table class="table table-bordered">           
                         <thead>
                                        <tr>
                                        <th>SR NO</th>
                                        <th>Name</th>
                                        <th>Sale</th>
                                        <th>Purchase</th>
                                        <th>Quantity</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                           
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($data as $k)
                                        <tr>
                                            <td>{{$k['id']}}</td>
                                            <td>{{$k['pname']}}</td>
                                            <td>{{$k['pprice']}}</td>
                                            <td>{{$k['sprice']}}</td>
                                            <td>{{$k['quantites']}}</td>
                                            <td><img src="uploads/{{$k->image}}" width=50px></td>
                                            <td><a href="forcedel/{{$k->id}}" class="btn btn-warning waves-effect waves-float btn-sm waves-green">Permantaly Delete</a>
                                           <a href="restore/{{$k->id}}" class="btn btn-danger waves-effect waves-float btn-sm waves-red">Restore</a> </td>
                  
                                        </tr>
                                    </tbody>
                                    @endforeach

                                    </table>    
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- Jquery Core Js --> 

</body>

</html>