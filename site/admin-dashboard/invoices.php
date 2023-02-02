<?php  
 $connect = mysqli_connect("localhost", "root", "","final");  
 $query ="select invoice_id,owner_name,date, total from invoice";  
 $result = mysqli_query($connect, $query);

 ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NMC - Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="../images-favicon.png">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/416491/timeline.css'>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/invoice.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css" rel="stylesheet" />


</head>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="../images-favicon.png" alt="NMC logo" width="35px"
                        height="35px"> &nbsp; Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Elon Bhai Musk</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Elon Bhai Musk</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Elon Bhai Musk</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="tenants.php"><i class="fa fa-users fa-fw"></i> Tenants</a>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="markets.html"><i class="fa fa-map-marker fa-fw"></i> Markets</a>


                            <a href="invoices.php"><i class="fa fa-wrench fa-fw"></i> Invoices</a>
                            <!-- <ul class="nav nav-second-level">
              <li>
                <a href="panels-wells.html">Panels and Wells</a>
              </li>
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="notifications.html">Notifications</a>
              </li>
              <li>
                <a href="typography.html">Typography</a>
              </li>
              <li>
                <a href="icons.html"> Icons</a>
              </li>
              <li>
                <a href="grid.html">Grid</a>
              </li>
            </ul> -->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="payments.html"><i class="fa fa-sitemap fa-fw"></i>Payments</a>

                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
            <a href="#"><i class="fa fa-files-o fa-fw"></i> More<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="#">Support</a>
              </li>
              <li>
                <a href="#">Manage Users</a>
              </li>
            </ul>
          </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Invoice Report</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- ================================================================================================================================================= -->
                <div class="col-12">
                    <table id="example" class="table table-hover responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Invoice Number</th>
                                <th>Tenant Name</th>
                                <th>Invoice Date</th>
                                <th>Invoice Total</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php  
		if(mysqli_num_rows($result)>0){

		
		while($row = mysqli_fetch_array($result))  
		{  
		echo '  
		  <tr>  
		  <td>'.$row["invoice_id"].'</td> 
		  	   <td>'.$row["owner_name"].'</td> 
			   <td>'.$row["date"].'</td>  
			   <td>'.$row["total"].'</td>  
               <td>
                                    <div class="badge badge-success badge-success-alt">Pending</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip"
                                                data-placement="top" title="Actions"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> View
                                            </a>
                                            <a class="dropdown-item text-danger" href="#"><i
                                                    class="bx bxs-trash mr-2"></i> Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
		 </tr>  
		   ';  
	 }  
		}
	 ?>  
                        <!-- <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <div class="d-flex align-items-center"> -->
                                            <!-- <div class="avatar avatar-blue mr-3">EB</div> -->

                                            <!-- <div class="">
                                                <p class="font-weight-bold mb-0"><a href="#">INV-387</a></p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>naam me kya rakha hai</td>
                                <td>12 Sept 2022</td>
                                <td>&#8377; 17573.00</td>
                                <td>
                                    <div class="badge badge-success badge-success-alt">Pending</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip"
                                                data-placement="top" title="Actions"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> View
                                            </a>
                                            <a class="dropdown-item text-danger" href="#"><i
                                                    class="bx bxs-trash mr-2"></i> Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a href="#">
                                        <div class="d-flex align-items-center"> -->
                                            <!-- <div class="avatar avatar-pink mr-3">JR</div> -->

                                            <!-- <div class="">
                                                <p class="font-weight-bold mb-0"><a href="#">INV-357</a></p>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td> blah blah</td>
                                <td>04 Sept 2022</td>
                                <td>&#8377; 15643.00</td>
                                <td>
                                    <div class="badge badge-partial badge-partial-alt">Partially</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip"
                                                data-placement="top" title="Actions"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i>
                                                View</a>
                                            <a class="dropdown-item text-danger" href="#"><i
                                                    class="bx bxs-trash mr-2"></i> Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody> -->
                    </table>
                </div>

                <!-- ============================================================================================================================================ -->
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.1/raphael.js'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js'></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js'></script>
    <script src='https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js'></script>

    <script src="./javascript/script.js"></script>
    <script src="javascript\chart1.js"></script>
    <script src="javascript\chart2.js"></script>
    <script src="javascript\chart3.js"></script>
    <script>

        $(document).ready(function () {
            $("#example").DataTable({
                aaSorting: [],
                responsive: true,

                columnDefs: [
                    {
                        responsivePriority: 1,
                        targets: 0
                    },
                    {
                        responsivePriority: 2,
                        targets: -1
                    }
                ]
            });

            $(".dataTables_filter input")
                .attr("placeholder", "Search here...")
                .css({
                    width: "300px",
                    display: "inline-block"
                });

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>