<?php
    $mysqli = mysqli_connect('localhost','root','','atron');
    /* Getting demo_viewer table data */
    $day = mysqli_query($mysqli, "SELECT date FROM analytic GROUP BY DAYOFWEEK(date)");
    $sql = "SELECT SUM(down) as count FROM analytic 
            GROUP BY DAYOFWEEK(date) ORDER BY DAYOFWEEK(date)";
    $down = mysqli_query($mysqli,$sql);
    $down = mysqli_fetch_all($down,MYSQLI_ASSOC);
    $down = json_encode(array_column($down, 'count'),JSON_NUMERIC_CHECK);


    /* Getting demo_click table data */
    $sql = "SELECT SUM(up) as count_up FROM analytic 
            GROUP BY DAYOFWEEK(date) ORDER BY DAYOFWEEK(date)";
    $up = mysqli_query($mysqli,$sql);
    $up = mysqli_fetch_all($up,MYSQLI_ASSOC);
    $up = json_encode(array_column($up, 'count_up'),JSON_NUMERIC_CHECK);

    /* Getting demo_click table data */
    $sql = "SELECT SUM(middle) as count_mid FROM analytic 
            GROUP BY DAYOFWEEK(date) ORDER BY DAYOFWEEK(date)";
    $mid = mysqli_query($mysqli,$sql);
    $mid = mysqli_fetch_all($mid,MYSQLI_ASSOC);
    $mid = json_encode(array_column($mid, 'count_mid'),JSON_NUMERIC_CHECK);

?>

<div class="app-main__inner">
    <?php include('./layout/navbar.php'); ?> 
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
                            <li class="nav-item"><a href="index.php?page=grafik1" class="nav-link">A hours</a></li>
                            <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">A day</a></li>
                            <li class="nav-item"><a href="index.php?page=grafik3" class="nav-link second-tab-toggle">A week</a></li>
                            <li class="nav-item"><a href="index.php?page=grafik4" class="nav-link second-tab-toggle">A month</a></li>
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
var data_up = <?php echo $up; ?>;
var data_down = <?php echo $down; ?>;
var data_mid = <?php echo $mid; ?>;
    $('#container').highcharts({
        chart: {
            type: 'area'
        },
        title: {
            text: 'NODE B OCCUPANCY GRAPHICS'
        },
        subtitle: {
            text: 'Sunday - Saturday'
        },
        xAxis: {
            categories: [<?php while ($b = mysqli_fetch_array($day)) { echo '"' . date('D', strtotime($b['date'])) . '",';}?>]
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
