<?php
    $mysqli = mysqli_connect('localhost','root','','atron');
    /* Getting demo_viewer table data */
    $week = mysqli_query($mysqli, "SELECT date FROM analytic GROUP BY YEARWEEK(date)");
    $sql = "SELECT SUM(down) as count FROM analytic 
            GROUP BY YEARWEEK(date) ORDER BY YEARWEEK(date)";
    $down = mysqli_query($mysqli,$sql);
    $down = mysqli_fetch_all($down,MYSQLI_ASSOC);
    $down = json_encode(array_column($down, 'count'),JSON_NUMERIC_CHECK);


    /* Getting demo_click table data */
    $sql = "SELECT SUM(up) as count_up FROM analytic 
            GROUP BY YEARWEEK(date) ORDER BY YEARWEEK(date)";
    $up = mysqli_query($mysqli,$sql);
    $up = mysqli_fetch_all($up,MYSQLI_ASSOC);
    $up = json_encode(array_column($up, 'count_up'),JSON_NUMERIC_CHECK);

    /* Getting demo_click table data */
    $sql = "SELECT SUM(middle) as count_mid FROM analytic 
            GROUP BY YEARWEEK(date) ORDER BY YEARWEEK(date)";
    $mid = mysqli_query($mysqli,$sql);
    $mid = mysqli_fetch_all($mid,MYSQLI_ASSOC);
    $mid = json_encode(array_column($mid, 'count_mid'),JSON_NUMERIC_CHECK);

?>

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
                                        <i class="pe-7s-graph1 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Graphics
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                        </div>
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
                                <div class="col-md-12">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header">
                                            <div class="card-header-title">
                                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                Sales Report
                                            </div>
                                            <ul class="nav">
                                                <li class="nav-item"><a href="grafik.php" class="nav-link">A hours</a></li>
                                                <li class="nav-item"><a href="grafik_day.php" class="nav-link">A day</a></li>
                                                <li class="nav-item"><a href="grafik_week.php" class="active nav-link second-tab-toggle">A week</a></li>
                                                <li class="nav-item"><a href="grafik.php" class="nav-link second-tab-toggle">A month</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                        <div class="widget-chat-wrapper-outer">
                                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                <div id="container"></div>
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

<script src="http://code.highcharts.com/highcharts.src.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
var data_up = <?php echo $up; ?>;
var data_down = <?php echo $down; ?>;
var data_mid = <?php echo $mid; ?>;
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'NODE B OCCUPANCY GRAPHICS'
        },
        subtitle: {
            text: 'Week'
        },
        xAxis: {
            categories: []
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total (%)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'UP',
            data: data_up,
            color: '#3ac47d'

        }, {
            name: 'OCCUPANCY',
            data: data_mid,
            color:'#f7b924'

        }, {
            name: 'DOWN',
            data: data_down,
            color:'#ce0c0c'

        }]
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
