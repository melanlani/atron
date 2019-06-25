<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="assets/images/atron/logo-inverse.png" type="image/x-icon">
    <title>ATRON - Do It Easy And Achieve More.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <style type="text/css">
        .app-header__logo .logo-src{
            background: url(assets/images/atron/logo-inverse.png);
            width: 150px; height: 54px; margin-left: 22px
        }
        .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after{
            background-color: #d41515;
        }
        .app-theme-white .app-footer .app-footer__inner, .app-theme-white .app-header{
            background: #ffffff;
        }
        .app-sidebar__heading{
            color: #bd0606;
        }
        .btn-danger{
            background-color: #ce0c0c;
        }
        .text-red {
            color: #ce0c0c;
        }
        .bg-red{
            background-color: #ce0c0c;
        }
        .badge-danger{
            background-color: #ce0c0c;
        }
        .btn-outline-danger:hover{
            background-color: #ce0c0c;
        }
    </style>
</head>
<body>
    
        <?php include('header.php'); ?> 
        <?php include('setting.php'); ?> 

        <div class="app-main"> 
            <?php include('menu.php'); ?> 
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Analytics Dashboard
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                        </div>
                                    </div>
                                </div> 

                                <div class="page-title-actions">
                                    <h5>Filters:</h5>
                                    <div class="d-inline-block dropdown">
                                        <select type="select" name="customSelect" class="custom-select" id="filter_reg">
                                            <option value="">ALL TREG</option>
                                            <option value="1">TREG 1</option>
                                            <option value="2">TREG 2</option>
                                        </select>
                                    </div>
                                </div>   
                            </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            USER PROFILE
                                        </div>

                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button type="button" class="btn-open-options btn btn-transparant">
                                                    <i class="pe-7s-settings fa-w-16 fa-2x"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="52" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Ella-Rose Henry</div>
                                                            <div class="widget-subheading">ellarose@email.com</div>
                                                            <div class="widget-subheading">90101-Admin</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <button type="button" class="btn-open-options btn btn-danger">
                                                                <i class="pe-7s-power fa-w-16 fa-2x"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="mb-3 card">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="tab-eg-55">
                                            <div class="pt-2 card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-success">71%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">UP</div>
                                                                    <button class="btn btn-success" id="up">
                                                                        More Info
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-red">32%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-red" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">DOWN</div>
                                                                    <button class="btn btn-danger" id="down">
                                                                        More Info
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        
                                                        <div class="widget-content">
                                                            <div class="widget-content-outer">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left pr-2 fsize-1">
                                                                        <div class="widget-numbers mt-0 fsize-3 text-warning">12%</div>
                                                                    </div>
                                                                    <div class="widget-content-right w-100">
                                                                        <div class="progress-bar-xs progress">
                                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left fsize-1">
                                                                    <div class="text-muted opacity-6">OCCUPANCY >70</div>
                                                                    <button class="btn btn-warning">
                                                                        More Info
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="table-status">
                            
                        <div class="row">
                            <div class="col-md-5">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Node B Status
                                    </div>
                                    <div class="table-responsive" id="table-container">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Regional</th>
                                                <th class="text-center"><div class="badge badge-success">UP</div></th>
                                                <th class="text-center"><div class="badge badge-danger">Down</div></th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $conn=mysqli_connect('localhost','root','','atron');
                                                $query='SELECT regional, up, down, SUM(up) AS total_up, SUM(down) AS total_down FROM `status` GROUP BY regional';
                                                $result=mysqli_query($conn,$query);
                                                $total_up = 0;
                                                $total_down = 0;
                                                $total=0;
                                                while($output=mysqli_fetch_assoc($result)){
                                                  $one = $output['up'] +$output['down'];
                                                    echo '<tr>';
                                                        
                                                        echo '<td class="text-center">'.$output['regional'].'</td>';
                                                        echo '<td class="text-center">'.$output['up'].'</td>';
                                                        echo '<td class="text-center">'.$output['down'].'</td>';
                                                        echo '<td class="text-center">'.$one.'</td>';
                                                    echo '</tr>';
                                                $total_up += $output['total_up'];
                                                $total_down += $output['total_down'];
                                                $total += $one;
                                                }
                                                echo '</tbody>';
                                                echo '<tfoot>';  
                                                    echo '<tr>';
                                                        echo '<th class="text-center">Total</th>';
                                                        echo '<th class="text-center">'.$total_up.'</th>';
                                                        echo '<th class="text-center">'.$total_down.'</th>';
                                                        echo '<th class="text-center">'.$total.'</th>';
                                                    echo '</tr>';
                                                echo '</tfoot>';
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">NODE B OCCUPANCY OVERVIEW
                                    </div>
                                    <div class="table-responsive" id="table-containers">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Regional</th>
                                                <th class="text-center"><div class="badge badge-success">50%</div></th>
                                                <th class="text-center"><div class="badge badge-warning">50%-70%</div></th>
                                                <th class="text-center"><div class="badge badge-danger">>70%</div></th>
                                                <th class="text-center"><div class="badge badge-primary">Total</div></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $conn=mysqli_connect('localhost','root','','atron');
                                                $query='SELECT regional, up,middle, down, SUM(up) AS total_up, SUM(middle) AS total_middle, SUM(down) AS total_down FROM `occupancy` GROUP BY regional';
                                                $result=mysqli_query($conn,$query);
                                                $total_up = 0;
                                                $total_middle = 0;
                                                $total_down = 0;
                                                $total=0;
                                                while($output=mysqli_fetch_assoc($result)){
                                                  $one = $output['up'] +$output['middle']+$output['down'];
                                                  $up = $output['regional'];
                                                  $angka=$output['up'];
                                            echo '<tr>';
                                                echo '<td class="text-center" id="value_reg">'.$output['regional'].'</td>';
                                                echo '<td class="text-center"><a class="btn-transition btn btn-outline-success" href="page_alert.php?reg='.$up.'&angka='.$angka.'">'.$output['up'].'</button></td>';
                                                echo '<td class="text-center"><a class="btn-transition btn btn-outline-warning" href="page_alert2.php?reg='.$up.'">'.$output['middle'].'</button></td>';
                                                echo '<td class="text-center"><a class="btn-transition btn btn-outline-danger" href="page_alert3.php?reg='.$up.'&angka='.$angka.'">>'.$output['down'].'</button></td>';
                                                echo '<td class="text-center"><button class="btn-transition btn btn-outline-primary">'.$one.'</button></td></td>';
                                            echo '</tr>';
                                            $total_up += $output['total_up'];
                                            $total_middle += $output['total_middle'];
                                            $total_down += $output['total_down'];
                                            $total += $one;
                                            }
                                            echo '</tbody>';
                                            echo '<tfoot>';
                                            echo '<tr>';
                                                echo '<th class="text-center">Total</th>';
                                                echo '<th class="text-center"><div class="badge badge-success">'.$total_up.'</div></th>';
                                                echo '<th class="text-center"><div class="badge badge-warning">'.$total_middle.'</div></th>';
                                                echo '<th class="text-center"><div class="badge badge-danger">'.$total_down.'</div></th>';
                                                echo '<th class="text-center"><div class="badge badge-primary">'.$total.'</div></th>';
                                            echo '</tr>';
                                            echo '</tfoot>';
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="main-card mb-3 card">
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Reg</th>
                                                <th class="text-center">Witel</th>
                                                <th class="text-center">Site ID</th>
                                                <th class="text-center">Site Name</th>
                                                <th class="text-center">BW</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Current Occupancy</th>
                                                <th class="text-center">Aging</th>
                                                <th class="text-center">Today Highest</th>
                                                <th class="text-center">Weekly Highest</th>
                                                <th class="text-center">Monthly Highest</th>
                                                <th class="text-center">Yearly Highest</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $conn=mysqli_connect('localhost','root','','atron');
                                                $query='SELECT * FROM current_occupancy';
                                                $result=mysqli_query($conn,$query);
                                                while($output=mysqli_fetch_assoc($result)){
                                            echo '<tr>';
                                                echo '<td class="text-center">'.$output['regional'].'</td>';
                                                echo '<td class="text-center">'.$output['city'].'</td>';
                                                echo '<td class="text-center">'.$output['site_id'].'</td>';
                                                echo '<td class="text-center">'.$output['site_name'].'</td>';
                                                echo '<td class="text-center">'.$output['bw'].'</td>';             
                                                if ($output['current'] >=50){
                                                    echo '<td class="text-center"><i class="pe-7s-angle-up-circle icon-gradient bg-malibu-beach" style="font-size:35px"></i></td>';
                                                } else{      
                                                    echo '<td class="text-center"><i class="pe-7s-angle-down-circle icon-gradient bg-ripe-malin" style="font-size:35px"></i></td>';
                                                }
                                                if($output['current'] >=70){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['current'].'%</button></td>';
                                                } 
                                                else if($output['current'] >=50){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['current'].'%</button></td>';
                                                }
                                                else if($output['current'] >=0){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-success">'.$output['current'].'%</button></td>';
                                                }

                                                echo '<td class="text-center">'.$output['aging'].'</td>';

                                                if($output['today_highest'] >=70){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['today_highest'].'%</button></td>';
                                                } 
                                                else if($output['today_highest'] >=50){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['today_highest'].'%</button></td>';
                                                }
                                                else if($output['today_highest'] >=0){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-success">'.$output['today_highest'].'%</button></td>';
                                                }

                                                if($output['weekly_highest'] >=70){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['weekly_highest'].'%</button></td>';
                                                } 
                                                else if($output['weekly_highest'] >=50){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['weekly_highest'].'%</button></td>';
                                                }
                                                else if($output['weekly_highest'] >=0){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-success">'.$output['weekly_highest'].'%</button></td>';
                                                }

                                                if($output['monthly_highest'] >=70){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['monthly_highest'].'%</button></td>';
                                                } 
                                                else if($output['monthly_highest'] >=50){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['monthly_highest'].'%</button></td>';
                                                }
                                                else if($output['monthly_highest'] >=0){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-success">'.$output['monthly_highest'].'%</button></td>';
                                                }

                                                if($output['yearly_highest'] >=70){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['yearly_highest'].'%</button></td>';
                                                } 
                                                else if($output['yearly_highest'] >=50){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['yearly_highest'].'%</button></td>';
                                                }
                                                else if($output['yearly_highest'] >=0){
                                                    echo '<td class="text-center"><button class="btn-transition btn btn-outline-success">'.$output['yearly_highest'].'%</button></td>';
                                                }
                                            echo '</tr>';
                                        
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>
  $(document).ready(function(){

    $("#filter_reg").on('change', function()
    {
    var value = $(this).val();
      $.ajax(
      {
        url: 'filter.php',
        type: 'POST',
        data: 'request='+value,
        beforeSend:function()
        {
          $("#table-container").html('Working On...')
        },
        success:function(data)
        {
          $("#table-container").html(data);
        },
      });
      $.ajax(
      {
        url: 'filter2.php',
        type: 'POST',
        data: 'request='+value,
        beforeSend:function()
        {
          $("#table-containers").html('Working On...')
        },
        success:function(data)
        {
          $("#table-containers").html(data);
        },
      });
    });
    $('#up').click(function(){
      $.ajax(
      {
        url: 'up.php',
        type: 'POST',
        data: 'up='+50,
        beforeSend:function()
        {
          $("#table-status").html('Working On...')
        },
        success:function(data)
        {
          $("#table-status").html(data);
        },
      });
    });
    $('#down').click(function(){
      $.ajax(
      {
        url: 'down.php',
        type: 'POST',
        data: 'down='+50,
        beforeSend:function()
        {
          $("#table-status").html('Working On...')
        },
        success:function(data)
        {
          $("#table-status").html(data);
        },
      });
    });
  });
</script>
</body>
</html>