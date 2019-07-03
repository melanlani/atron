<?php
	
	if($_POST['city']){
    $city=$_POST['city'];
    $mysqli = mysqli_connect('localhost','root','','atron');
    /* Getting demo_viewer table data */
    $week = mysqli_query($mysqli, "SELECT date FROM analytic WHERE city='$city' GROUP BY YEARWEEK(date)");
    $sql = "SELECT SUM(down) as count_down FROM analytic WHERE city='$city'  
            GROUP BY YEARWEEK(date)";
    $down = mysqli_query($mysqli,$sql);
    $down = mysqli_fetch_all($down,MYSQLI_ASSOC);
    $down = json_encode(array_column($down, 'count_down'),JSON_NUMERIC_CHECK);


    echo '<div class="card-header-tab card-header-tab-animation card-header">';
        echo '<div class="card-header-title">';
            echo '<i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>';
            echo 'Witel';
        echo '</div>';
        echo '<ul class="nav">';
            echo '<li class="nav-item"><a class="nav-link" id="day">A day</a></li>';
            echo '<li class="nav-item"><a class="nav-link" id="week">A week</a></li>';
            echo '<li class="nav-item"><a class="active nav-link second-tab-toggle" id="month">A month</a></li>';
        echo '</ul>';
    echo '</div>';
    echo '<div class="card-body">';
        echo '<div class="tab-content">';
            echo '<div class="tab-pane fade show active" id="tabs-eg-77">';
                echo '<div class="card mb-3 widget-chart widget-chart2 text-left w-100">';
                    echo '<div class="widget-chat-wrapper-outer">';
                        echo '<div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">';
                            echo '<div id="container"></div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
  }
?>
<script src="http://code.highcharts.com/highcharts.src.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
var data_down = <?php echo $down; ?>;
     $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'NODE B OCCUPANCY GRAPHICS'
        },
        subtitle: {
            text: 'Week'
        },
        xAxis: {
            categories: [<?php while ($b = mysqli_fetch_array($week)) { echo '"Week' . date('W', strtotime($b['date'])) . '",';}?>]
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
        data: 'city='+'<?php echo $_POST['city'];?>',
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
    $('#day').click(function(){
      $.ajax(
      {
        url: 'day3.php',
        type: 'POST',
        data: 'city='+'<?php echo $_POST['city'];?>',
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
