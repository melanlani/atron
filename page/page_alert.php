<div class="app-main__inner">
    <?php include('./layout/navbar.php'); ?> 

    <div id="table-status">

    <?php

        if($_REQUEST['reg'] !=''){
            $value = $_REQUEST['reg'];
            $value1= 50;
            $conn = mysqli_connect('localhost','root','','atron');
            $query="select regional, city, site_id, site_name, bw, status, current, aging, today_highest, weekly_highest, monthly_highest, yearly_highest from current_occupancy where current<='$value1' and regional = '$value' group by current_id";
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
                                    if ($output['status'] =="up"){
                                        echo '<td class="text-center"><i class="pe-7s-angle-up-circle icon-gradient bg-malibu-beach" style="font-size:35px"></i></td>';
                                    } else{      
                                        echo '<td class="text-center"><i class="pe-7s-angle-down-circle icon-gradient bg-ripe-malin" style="font-size:35px"></i></td>';
                                    }
                                    if($output['current'] >=70){
                                        echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['current'].'%</button></td>';
                                    } 
                                    else if($output['current'] >50){
                                        echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['current'].'%</button></td>';
                                    }
                                    else if($output['current'] <=50){
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
    </div>
</div>
<script>
  $(document).ready(function(){

    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });

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
    $('#btn_up').click(function(){
        var value=document.getElementById("value_reg").innerHTML;
        var angka=document.getElementById("btn_up").innerHTML;
      $.ajax(
      {
        url: 'alert_up.php',
        type: 'POST',
        data:{
          up: value,
          angka: angka
        },
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
    $('#btn_middle').click(function(){
        var value=document.getElementById("value_reg").innerHTML;
      $.ajax(
      {
        url: 'alert_middle.php',
        type: 'POST',
        data: 'middle='+value,
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
    $('#btn_down').click(function(){
      $.ajax(
      {
        url: 'alert_down.php',
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