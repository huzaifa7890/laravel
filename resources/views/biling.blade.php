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
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css" />
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
                        <a class="image" href="dashboard"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQahP8KdSO-tV3lDYllKTftXPTJ2H6UYlFevQ&usqp=CAU"
                                alt="User"></a>
                        <div class="detail">


                            <small>Employee</small>
                        </div>
                    </div>
                </li>

                <li><a href="dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="product"><i class="zmdi zmdi-grid"></i><span>Manage Product</span></a></li>
                <li class="active open"><a href="biling"><i class="zmdi zmdi-grid"></i><span>Manage Biling</span></a></li>
                <li><a href="trash"><i class="zmdi zmdi-grid"></i><span>Manage Trash</span></a></li>
                <li><a href="sale" ><i class="zmdi zmdi-grid"></i><span>Manage Sale</span></a></li>
        
            </ul>
        </div>
    </aside>

    <!-- Main Content -->


    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Invoice</h2>

                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <!-- Basic Table -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                            </div>

                            <div class="body">

                                <div class="table-responsive table-bordered">

                                    <form action="/checkoutk" method="post">
                                        @csrf
                                        <table class="table">
                                            <tr>
                                                <td>Customer Name <br>
                                                    <input type="text" name="cname" class="form-control" id="">
                                                </td>
                                                <td>Phone Number <br>
                                                    <input type="number" name="cnumber" class="form-control" id="">
                                                </td>
                                                <td>SaleMen <br>

                                                    <Select name="sname" class="form-control">
                                                        <option class="hidden " selected disabled>Select Salemen</option>

                                                        <option value="mudasir">Mudasir</option>
                                                        <option value="Hamad">Hamad</option>
                                                        <option value="Usman">Usman</option>
                                                    </Select>
                                                </td>
                                            </tr>
                                            <td></td>
                                            <td></td>

                                            <td><input type="submit" value="CheckOut" name="btn2"
                                                    class="btn btn-primary">
                                            </td>
                                        </table>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>


    <!-- Product DEtails -->




    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h4>Product Catalogue</h4>

                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <h4>Shopping Bag </h4>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">

                    <div class="col-lg-7">
                        <div class="card">



                            <div class="body">


                                <table class="table table-bordered">
                                    <tr>
                                        <form action="" method="POST">
                                            <div class="container">

                                                <input type="text" name="searchh" id="country" class="form-control"
                                                    style="width:222px;">
                                                <input type="submit" name="btn3" id="" class="btn btn-primary">
                                                <div class="bg-warning" id="countrylist"></div>

                                            </div>
                                    </tr>
                                    </form>
                                    <td>Product Name</td>
                                    <td>Product Price</td>
                                    <td>Available Quantity</td>
                                    <td>Select Quantity</td>
                                    <td>Action</td>


                                    <tr>
                                        @foreach($users as $k)
                                        <td>{{$k->pname}}</td>
                                        <td>{{$k->sprice}}</td>
                                        <td>{{$k->quantites}}</td>
                                        <form action="adddtocart" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$k->id}}" required>
                                            <input type="hidden" name="pname" value="{{$k->pname}}" required>
                                            <input type="hidden" name="sprice" value="{{$k->sprice}}" required>
                                            <td> <input type="number" class="form-control" value="0" name="quan"
                                                    placeholder="quantity" min="0" max="{{$k->quantites}}" required>
                                            </td>

                                            <td><button class="btn btn-success" type="submit" name="cart">Add To
                                                    Cart</button>
                                            </td>
                                        </form>
                                    </tr>
                                    @endforeach



                                </table>
                            </div>
                        </div>
                    </div>



                    <!-- Shopping bag -->


                    <div class="col-lg-5">
                        <div class="card">


                            <div class="body">

                                <div class="table-responsive ">
                                    <table class="table table-bordered">

                                        <tr>
                                            @php  
                                            $total=0;
                                            @endphp
                                            <td>Product Name</td>
                                            <td>Product Price</td>
                                            <td>Product Quantity</td>
                                            <td>Total Amount</td>
                                            <td>Action</td>
                                        </tr>
                                        @if(session('cart'))
                                        @foreach(session('cart') as $k => $item)
                                        <tr>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['price']}}</td>
                                            <td>{{$item['quan']}}</td>
                                            <td>{{$item['quan']*$item['price']}}</td>
                                            <td><a href="pdel/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
                                            @php  
                                                $sum= $item['quan']*$item['price'];
                                                $total=$total+$sum;
                                            @endphp
                                        </tr>


                                </div>
                            </div>
                        </div>


                    </div>

                   
                    <br>
                    @endforeach
                    @endif
                </table>
                <a class="btn btn-primary" style="float: right; color:white;">Total Rs: {{$total}}</a>
                    <a class='btn btn-warning ' href="session">EmptyCart</a>
                    <a class='btn btn-warning ' href="print" target="_blank">Print</a>



                </div>
            </div>
        </div>
    </section>

</body>
<script>
    $(document).ready(function () {
        $('#country').keyup(function () {
            var quer = $(this).val();
            if (quer != '') {
                $.ajax({
                    url: "bilsearch.php",
                    method: "POST",
                    data: { quer: quer },
                    success: function (data) {
                        $('#countrylist').fadeIn();
                        $('#countrylist').html(data);
                    }
                });
            }
            else {
                $("#countrylist").fadeOut();
                $("#countrylist").html("");

            }
        });
        $(document).on('click', 'li', function () {
            $("#country").val($(this).text());
            $("#countrylist").fadeOut();
        });

    });

</script>

</html>