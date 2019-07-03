<?php
if($_REQUEST['city'] !=''){
    $city = $_REQUEST['city']; 
    $mysqli = mysqli_connect('localhost','root','','atron');
    /* Getting demo_viewer table data */
    $hour = mysqli_query($mysqli, "SELECT date FROM analytic WHERE city= '$city' GROUP BY HOUR(date)");
    
    /* Getting demo_click table data */
    $sql = "SELECT SUM(down) as count_down FROM analytic WHERE city= '$city' 
            GROUP BY HOUR(date) ORDER BY HOUR(date)";
    $down = mysqli_query($mysqli,$sql);
    $down = mysqli_fetch_all($down,MYSQLI_ASSOC);
    $down = json_encode(array_column($down, 'count_down'),JSON_NUMERIC_CHECK);
}

?>

<div class="app-main__inner">
    <?php include('./layout/navbar.php'); ?> 

    <div id="table-status">

    <?php

        if($_REQUEST['city'] !=''){
            $value = $_REQUEST['city'];
            $value1= 70;
            $conn = mysqli_connect('localhost','root','','atron');
            $query="select regional, city, site_id, site_name, bw, current, aging, today_highest, weekly_highest, monthly_highest, yearly_highest from current_occupancy where current>='$value1' and city = '$value' group by current_id";
            $result=mysqli_query($conn,$query);
            echo '<div class="row">';
                echo '<div class="col-md-12">';
                    echo '<div class="main-card mb-3 card">';
                        echo '<div class="card-header">NODE B OVERVIEW > OCCUPANCY ALERT</div>';
                        echo '<div class="table-responsive">';
                            echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
                              echo '<thead>';
                                echo '<tr>';
                                    echo '<th class="text-center">Reg</th>';
                                    echo '<th class="text-center">Witel</th>';
                                    echo '<th class="text-center">Site ID</th>';
                                    echo '<th class="text-center">Site Name</th>';
                                    echo '<th class="text-center">BW</th>';
                                    echo '<th class="text-center">Status</th>';
                                    echo '<th class="text-center">Current Occupancy</th>';
                                    echo '<th class="text-center">Aging</th>';
                                    echo '<th class="text-center">Today Highest</th>';
                                    echo '<th class="text-center">Weekly Highest</th>';
                                    echo '<th class="text-center">Monthly Highest</th>';
                                    echo '<th class="text-center">Yearly Highest</th>';
                                echo '</tr>';
                                echo '</thead>';
                                echo '<tbody>';
                             while ($output=mysqli_fetch_assoc($result)) {
                                  echo '<tr>';
                                    if($output['regional']==1){
                                        echo '<td class="text-center">I</td>';
                                    }
                                    else if($output['regional']==2){
                                        echo '<td class="text-center">II</td>';
                                    }
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
                                echo '</tbody>';
                            echo '</table>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            mysqli_close($conn);
        } 
        
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 card" id="grafik">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Witel (<?php echo $_REQUEST['city'];?>)
                        </div>
                        <ul class="nav">
                            <li class="nav-item"><a class="active nav-link" id="day">A day</a></li>
                            <li class="nav-item"><a class="nav-link" id="week">A week</a></li>
                            <li class="nav-item"><a class="nav-link second-tab-toggle" id="month">A month</a></li>
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
<script src="http://code.highcharts.com/highcharts.src.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
var data_down = <?php echo $down; ?>;
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'NODE B OCCUPANCY GRAPHICS'
        },
        subtitle: {
            text: '24 Hours'
        },
        xAxis: {
            categories: [<?php while ($b = mysqli_fetch_array($hour)) { echo '"' . date('H', strtotime($b['date'])) . ':00",';}?>]
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
            name: 'DOWN',
            data: data_down,
            color:'#ce0c0c'

        }]
    });
});
$(document).ready(function(){    
    $('#week').click(function(){
      $.ajax(
      {
        url: 'week3.php',
        type: 'POST',
        data: 'city='+'<?php echo $_REQUEST['city'];?>',
        beforeSend:function()
        {
          $("#grafik").html('Working On...')
        },
        success:function(data)
        {
          $("#grafik").html(data);
        },
      });
    });
    $('#month').click(function(){
      $.ajax(
      {
        url: 'month3.php',
        type: 'POST',
        data: 'city='+'<?php echo $_REQUEST['city'];?>',
        beforeSend:function()
        {
          $("#grafik").html('Working On...')
        },
        success:function(data)
        {
          $("#grafik").html(data);
        },
      });
    });
});
</script>
