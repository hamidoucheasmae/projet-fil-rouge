<?php
include('security.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex border-0">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Asmae HAMIDOUCHE</a>
        </div>
      </div>

   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard3.php" class="nav-link active  ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
          
          
          </li>
         <!-- Mes documents -->
         <li class="nav-item">
          <a href="MesDocuments.html" class="nav-link">
            <i class="nav-icon far fa-address-book"></i>
            <p> Mes Documents</p>
          </a>
        </li> 
         
         <!-- calendar -->
          <li class="nav-item">
            <a href="calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="../landing-page/index.html" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Se Déconnecter
               
              </p>
            </a>
          </li>


        </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
    
        <div class="card-body">
          <div class="row">
         
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                <?php
                // $query = "SELECT etat, COUNT(*)
                // FROM documents
                // WHERE etat='Expiré' "; 
                
               $query= " SELECT * FROM documents where etat='Expiré' " ;
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo ' <h3 style ="color:#F35162">   '.$row.'</h3>';
            ?>
  
                  <p>Papiers à Régler</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-light ">
                <div class="inner">
                     <?php
                
                            $query = "SELECT * FROM documents WHERE etat ='Valable'";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h3 style ="color:#91C776" >  '.$row.'</h3>';
                        ?>
  
                  <p>Papiers Valables </p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
              <!-- small box -->
              <div class="small-box bg-light">
                <div class="inner">
                
               
                  <?php
                
                            $query = "SELECT id_document FROM documents ORDER BY id_document";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h3>  '.$row.'</h3>';
                        ?>
                        <p >Tous Vos Papiers</p>
                          
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div>
        <!-- /.card-body -->
       
      <div class="container-fluid">
        <div class="row ">
          <div class="col-lg-6">
             <div class="card bg-gradient-light" style="position: relative; left: 7px; right: 7px;  top: 0px;">
                <div class="card-header border-0">
                 <h3 class="card-title p-2 ">
                 
                  Mes Documents
                 </h3>
                 <a href="MesDocuments.html" class="page-link border-0 float-right bg-gradient-light">Plus »</a>
                <div class="card-tools">
                
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
          <table class="table table-striped table-hover" id="myTable">
            <thead>
            <tr class="text-center">
            <th class="align-middle">Document</th>
            <th class="align-middle">Date d'expiration</th>
            <th class="align-middle">Etat</th>
            <th class="align-middle"></th>
            </tr>
          
            </thead>
             <tbody class="classeList">

             <tr class="text-center align-middle">
               <td class="document_name"></th>
               <td class="ate_expiration"></td>
               <td class="etat "></td>
               <!-- <input type="hidden" name="" value="" class="sid"> -->

               </tr>
            </tbody>

      </table>
      </div>
              <!-- /.card-body -->
            
            </div>

<!-- calender  -->

              <!-- /.card-body -->
            </div>


 <div class="col-lg-6 ">

<div class="card bg-gradient-light">
              <div class="card-header border-0 ui-sortable-handle " >

                <h3 class="card-title p-2">
                  Calendar
                </h3>
                <a href="#" class="page-link border-0 float-right bg-gradient-light">Plus »</a>
                <!-- tools card -->
             
              <!-- /.card-header -->
              <div class="card-body p-2 text-center align-middle">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="06/27/2021" class="day old weekend">27</td><td data-action="selectDay" data-day="06/28/2021" class="day old">28</td><td data-action="selectDay" data-day="06/29/2021" class="day old">29</td><td data-action="selectDay" data-day="06/30/2021" class="day old">30</td><td data-action="selectDay" data-day="07/01/2021" class="day">1</td><td data-action="selectDay" data-day="07/02/2021" class="day">2</td><td data-action="selectDay" data-day="07/03/2021" class="day weekend">3</td></tr><tr><td data-action="selectDay" data-day="07/04/2021" class="day weekend">4</td><td data-action="selectDay" data-day="07/05/2021" class="day">5</td><td data-action="selectDay" data-day="07/06/2021" class="day">6</td><td data-action="selectDay" data-day="07/07/2021" class="day">7</td><td data-action="selectDay" data-day="07/08/2021" class="day">8</td><td data-action="selectDay" data-day="07/09/2021" class="day">9</td><td data-action="selectDay" data-day="07/10/2021" class="day weekend">10</td></tr><tr><td data-action="selectDay" data-day="07/11/2021" class="day weekend">11</td><td data-action="selectDay" data-day="07/12/2021" class="day">12</td><td data-action="selectDay" data-day="07/13/2021" class="day">13</td><td data-action="selectDay" data-day="07/14/2021" class="day">14</td><td data-action="selectDay" data-day="07/15/2021" class="day">15</td><td data-action="selectDay" data-day="07/16/2021" class="day">16</td><td data-action="selectDay" data-day="07/17/2021" class="day weekend">17</td></tr><tr><td data-action="selectDay" data-day="07/18/2021" class="day weekend">18</td><td data-action="selectDay" data-day="07/19/2021" class="day">19</td><td data-action="selectDay" data-day="07/20/2021" class="day">20</td><td data-action="selectDay" data-day="07/21/2021" class="day">21</td><td data-action="selectDay" data-day="07/22/2021" class="day">22</td><td data-action="selectDay" data-day="07/23/2021" class="day">23</td><td data-action="selectDay" data-day="07/24/2021" class="day weekend">24</td></tr><tr><td data-action="selectDay" data-day="07/25/2021" class="day active today weekend">25</td><td data-action="selectDay" data-day="07/26/2021" class="day">26</td><td data-action="selectDay" data-day="07/27/2021" class="day">27</td><td data-action="selectDay" data-day="07/28/2021" class="day">28</td><td data-action="selectDay" data-day="07/29/2021" class="day">29</td><td data-action="selectDay" data-day="07/30/2021" class="day">30</td><td data-action="selectDay" data-day="07/31/2021" class="day weekend">31</td></tr><tr><td data-action="selectDay" data-day="08/01/2021" class="day new weekend">1</td><td data-action="selectDay" data-day="08/02/2021" class="day new">2</td><td data-action="selectDay" data-day="08/03/2021" class="day new">3</td><td data-action="selectDay" data-day="08/04/2021" class="day new">4</td><td data-action="selectDay" data-day="08/05/2021" class="day new">5</td><td data-action="selectDay" data-day="08/06/2021" class="day new">6</td><td data-action="selectDay" data-day="08/07/2021" class="day new weekend">7</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>

              </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      
<!-- todo -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
