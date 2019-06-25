<?php
	
	if($_POST['request']){
		$request = $_POST['request'];
		$conn = mysqli_connect('localhost','root','','atron');
		$query="select city, up, middle, down, SUM(up) as total_up , SUM(middle) as total_middle, SUM(down) as total_down from city_occupancy where id_occupancy='$request' group by city";
		$result=mysqli_query($conn,$query);
	    $total_up = 0;
      $total_middle = 0;
	    $total_down = 0;
	    $total=0;
		echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
          echo '<thead>';
            echo '<tr>';
              echo '<th class="text-center">Witel</th>';
              echo '<th class="text-center"><div class="badge badge-success">UP</div></th>';
              echo '<th class="text-center"><div class="badge badge-warning">Middle</div></th>';
              echo '<th class="text-center"><div class="badge badge-danger">Down</div></th>';
              echo ' <th class="text-center"><div class="badge badge-primary">Total</div></th>';
            echo '</tr>';
          echo '</thead>';
         while ($output=mysqli_fetch_assoc($result)) {
         $one = $output['up'] +$output['down']+$output['middle'];
            echo '<tbody>';
              echo '<tr>';
                echo '<td class="text-center">'.$output['city'].'</td>';
                echo '<td class="text-center"><button class="btn-transition btn btn-outline-success">'.$output['up'].'</button></td>';
                echo '<td class="text-center"><button class="btn-transition btn btn-outline-warning">'.$output['middle'].'</button></td>';
                echo '<td class="text-center"><button class="btn-transition btn btn-outline-danger">'.$output['down'].'</button></td>';
                echo '<td class="text-center"><div class="btn-transition btn btn-outline-primary">'.$one.'</span></td>';
              echo '</tr>';
            echo '</tbody>';
            $total_up += $output['total_up'];
            $total_middle += $output['total_middle'];
            $total_down += $output['total_down'];
            $total += $one;
            }
            echo '<tfoot>';     
              echo '<tr>';
                echo '<th class="text-center">Total</th>';
                echo '<th class="text-center"><div class="badge badge-success">'.$total_up.'</div></th>';
                echo '<th class="text-center"><div class="badge badge-warning">'.$total_middle.'</div></th>';
                echo '<th class="text-center"><div class="badge badge-danger">'.$total_down.'</div></th>';
                echo '<th class="text-center"><div class="badge badge-primary">'.$total.'</div></th>';
              echo '</tr>' ;
            echo '</tfoot>';  
		echo '</table>';
		mysqli_close($conn);
    }
    else{
      $conn = mysqli_connect('localhost','root','','atron');
      $query='SELECT regional, up,middle, down, SUM(up) AS total_up, SUM(middle) AS total_middle, SUM(down) AS total_down FROM `occupancy` GROUP BY regional';
      $result=mysqli_query($conn,$query);
        $total_up = 0;
        $total_middle = 0;
        $total_down = 0;
        $total=0;
      echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
            echo '<thead>';
              echo '<tr>';
                echo '<th class="text-center">Regional</th>';
                echo '<th class="text-center"><div class="badge badge-success">50%</div></th>';
                echo '<th class="text-center"><div class="badge badge-warning">50%-70%</div></th>';
                echo '<th class="text-center"><div class="badge badge-danger">>70%</div></th>';
                echo '<th class="text-center"><div class="badge badge-primary">Total</div></th>';
              echo '</tr>';
            echo '</thead>';
           while ($output=mysqli_fetch_assoc($result)) {
           $one = $output['up'] +$output['down']+$output['middle'];
           $up = $output['regional'];
           $angka=$output['up'];
              echo '<tbody>';
                echo '<tr>';
                  echo '<td class="text-center" id="value_reg">'.$output['regional'].'</td>';
                  echo '<td class="text-center"><a class="btn-transition btn btn-outline-success" href="page_alert.php?reg='.$up.'&angka='.$angka.'">'.$output['up'].'</button></td>';
                  echo '<td class="text-center"><a class="btn-transition btn btn-outline-warning" href="page_alert2.php?reg='.$up.'">'.$output['middle'].'</button></td>';
                  echo '<td class="text-center"><a class="btn-transition btn btn-outline-danger" href="page_alert3.php?reg='.$up.'&angka='.$angka.'">>'.$output['down'].'</button></td>';
                  echo '<td class="text-center"><button class="btn-transition btn btn-outline-primary">'.$one.'</button></td></td>';
                echo '</tr>';
              echo '</tbody>';
              $total_up += $output['total_up'];
              $total_middle += $output['total_middle'];
              $total_down += $output['total_down'];
              $total += $one;
              }
              echo '<tfoot>';     
                echo '<tr>';
                  echo '<th style="text-align: center;">Total</th>';
                  echo '<th style="text-align: center;"><div class="badge badge-success">'.$total_up.'</div></th>';
                  echo '<th style="text-align: center;"><div class="badge badge-warning">'.$total_middle.'</div></th>';
                  echo '<th style="text-align: center;"><div class="badge badge-danger">'.$total_down.'</div></th>';
                  echo '<th style="text-align: center;"><div class="badge badge-primary">'.$total.'</div></th>';
                echo '</tr>' ;
              echo '</tfoot>';  
      echo '</table>';
      mysqli_close($conn);
    }
?>