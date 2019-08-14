

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>  {% block title %} {% endblock %}
     </title>
    <!--favicon-->
    <link rel="icon" href="../public/images/favicon.png" sizes="16x16 32x32" type="image/png">
    <!-- simplebar CSS-->
    <link href="../public/plugins/fancybox/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
    <link href="../public/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="../public/css/animate.css" rel="stylesheet" type="text/css"/>

    <!--Data Tables -->
    <link href="../public/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css">

    <link href="../public/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css">
    <!-- Icons CSS-->
    <link href="../public/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="../public/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="../public/css/app-style.css" rel="stylesheet"/>
    <link href="../public/js/jquery.min.js" rel="stylesheet"/>

    <style type="text/css">
        /****User Interface****/
        #sidebar-wrapper {
          font-family: 'Proxima Nova', sans-serif;
          background: #1e1d1d !important;
          color: #000;
          position: fixed;
          
          overflow: hidden;
          width: 240px;
          height: 100%;
          -webkit-transition: all 0.3s ease;
          -moz-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease; 
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
      }

      .sidebar-menu>li>a {
        padding: 30px 5px 10px 15px;;
        display: block;
        border-left: 3px solid transparent;
        color: #fff;
        font-size: 12px;
    }


    .text-white {
        color: #736e6e!important;
        font-weight: 900;
    }

    .stat-one {
        width: 60px;
        height: 60px;
        text-align: center;
        background-color: #0dcff0;
        color: white !important;
    }

    .stat-two {
        width: 60px;
        height: 60px;
        text-align: center;
        background-color: #FF9800;
    }

    .stat-three{

        width: 60px;
        height: 60px;
        text-align: center;
        background-color: #752bf9;

    }
    .stat-four {
        width: 60px;
        height: 60px;
        text-align: center;
        background-color: #14d2c0;
    }

    .icon-bg-color{
      color: white !important;
  }

  .hide_thumb{
    display: none;
  }
</style>
</head>

<body>
<div id="wrapper" class="toggled">
<!--  sidebar here -->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
 <div class="brand-logo">
  <a href="index">
   <img src="../public/images/logo.png" class="logo-icon" alt="JHAKI">
 
 </a>
</div>
<ul class="sidebar-menu do-nicescrol">
  <li>
    <a href="index" class="waves-effect">
      <i class="zmdi zmdi-home"></i> <span>Home</span>
    </a>

  </li>
  

  

  <li>
  <a href="javaScript:void();" class="waves-effect">
       <i class="fa fa-book"></i>
      <span>Document</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="sidebar-submenu">
      <li><a href="uploadDocument"><i class="zmdi zmdi-star-outline"></i> Add Document</a></li>
      <li><a href="manageDocument"><i class="zmdi zmdi-star-outline"></i> Manage Document</a></li>
    </ul>
  </li>

  <li>
    <a href="trip-history" class="waves-effect">
      <i class="fa fa-map-marker"></i>
      <span>Trip History</span>
    </a>
  </li>

    

  <li>
    <a href="profile" class="waves-effect">
      <i class="fa fa-user"></i>
      <span>Profile</span>
    </a>
  </li>

  <li>
    <a href="wallet" class="waves-effect">
      <i class="zmdi zmdi-balance-wallet"></i>
      <span>Wallet</span>
    </a>
  </li>
  <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="fa fa-bullhorn"></i>
                <span>Complaint</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">

                <li><a href="view_complaint"><i class="zmdi zmdi-star-outline"></i> View Complaints</a></li>
                <li><a href="javascript:void();" data-toggle='modal' data-target='#complaint'><i class="zmdi zmdi-star-outline"></i> Make Complaint</a></li>
            </ul>
        </li>

  
</ul>

</div>

<!-- topbar here -->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-white">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
     <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">JID:<span> {% block JID %} {% endblock %}</span></a>
      </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile">  {% block profile_pics %} {% endblock %}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="<?php 
             $src =  $config->getField('image',$_SESSION['id']); 
             if($src == '' || $src == null)
             {
               echo 'images/profile.png'; 
             }else{
              echo $config->getField('image',$_SESSION['id']); 

             }
             
             ?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"> {% block contact_name %} {% endblock %}</h6>
            <p class="user-subtitle"> {% block contact_email %} {% endblock %}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
       
        <a href="wallet"><li class="dropdown-item"><i class="icon-wallet mr-2"></i> Wallet</li></a>
        <li class="dropdown-divider"></li>
        <a href="profile"><li class="dropdown-item"><i class="icon-user mr-2"></i> Profile</li></a>
        <li class="dropdown-divider"></li>
        <a href="logout"><li class="dropdown-item"><i class="icon-power mr-2"></i> Logout </li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
 

<div class="clearfix"></div>
  
  <div class="content-wrapper" class="toggled">
  
    <!-- End container-fluid-->
      {% block content %} {% endblock %}
     
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <footer class="footer" style="position: fixed; ">
    <div class="container">
        <div class="text-center">
            Copyright &copy; <?php echo date("Y"); ?> Jhaki
        </div>
    </div>
</footer>
<!--End footer-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="../public/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="../public/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="../public/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="../public/js/app-script.js"></script>

<!--Data Tables js-->
<script src="../public/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="../public/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

<script>
    $(document).ready(function () {
        //Default data table
        $('#default-datatable').DataTable();


        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

    });

</script>


<script type="text/javascript">
    $(".alert-success").fadeTo(10000, 2500).slideUp(2500, function () {
        $(".alert-success").slideUp(2500);
    });


    $(".alert-danger").fadeTo(10000, 2500).slideUp(2500, function () {
        $(".alert-danger").slideUp(2500);
    });

   /* $(".alert-info").fadeTo(10000, 2500).slideUp(2500, function () {
        $(".alert-info").slideUp(2500);
    });*/

</script>
<script src="../public/plugins/fancybox/js/jquery.fancybox.min.js"></script>
</body>
</html>
