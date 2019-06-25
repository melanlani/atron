<?php
	
	if($_POST['request'] !=''){
		$request = $_POST['request'];
		$conn = mysqli_connect('localhost','root','','atron');
		$query="select city, up, down, SUM(up) as total_up , SUM(down) as total_down from city_regional where status_id='$request' group by city";
		$result=mysqli_query($conn,$query);
	    $total_up = 0;
	    $total_down = 0;
	    $total=0;
		echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
	      echo '<thead>';
	        echo '<tr>';
	          echo '<th class="text-center">Witel</th>';
	          echo '<th class="text-center"><div class="badge badge-success">UP</div></th>';
	          echo '<th class="text-center"><div class="badge badge-danger">Down</div></th>';
	          echo ' <th class="text-center">Total</th>';
	        echo '</tr>';
	      echo '</thead>';
         while ($output=mysqli_fetch_assoc($result)) {
         $one = $output['up'] +$output['down'];;
         	echo '<tbody>';
              echo '<tr>';
                echo '<td class="text-center">'.$output['city'].'</td>';
                echo '<td class="text-center">'.$output['up'].'</td>';
                echo '<td class="text-center">'.$output['down'].'</td>';
                echo '<td class="text-center">'.$one.'</td>';
              echo '</tr>';
            echo '</tbody>';
            $total_up += $output['total_up'];
            $total_down += $output['total_down'];
            $total += $one;
            }
            echo '<tfoot>';     
              echo '<tr>';
                echo '<th class="text-center">Total</th>';
                echo '<th class="text-center">'.$total_up.'</th>';
                echo '<th class="text-center">'.$total_down.'</th>';
                echo '<th class="text-center">'.$total.'</th>';
            echo '</tr>';
            echo '</tfoot>';  
		echo '</table>';
		mysqli_close($conn);
    }
    else
	{
	    $conn=mysqli_connect('localhost','root','','atron');
	    $query='SELECT regional, up, down, SUM(up) AS total_up, SUM(down) AS total_down FROM `status` GROUP BY regional';
	    $result=mysqli_query($conn,$query);
	    $total_up = 0;
	    $total_down = 0;
	    $total=0;
	    
		echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
	      echo '<thead>';
	        echo '<tr>';
	          echo '<th class="text-center">Regional</th>';
	          echo '<th class="text-center"><div class="badge badge-success">UP</div></th>';
	          echo '<th class="text-center"><div class="badge badge-danger">Down</div></th>';
	          echo ' <th class="text-center">Total</th>';
	        echo '</tr>';
	      echo '</thead>';
	    while ($output=mysqli_fetch_assoc($result)) {
	    $one = $output['up'] +$output['down'];;
	     	echo '<tbody>';
	          echo '<tr>';
	            echo '<td style="text-align: center;">'.$output['regional'].'</td>';
	            echo '<td style="text-align: center;">'.$output['up'].'</td>';
	            echo '<td style="text-align: center;">'.$output['down'].'</td>';
	            echo '<td style="text-align: center;">'.$one.'</td>';
	          echo '</tr>';
	        echo '</tbody>';
	        $total_up += $output['total_up'];
	        $total_down += $output['total_down'];
	        $total += $one;
	        }
	        echo '<tfoot>';     
	          echo '<tr>';
	            echo '<th style="text-align: center;">Total</th>';
	            echo '<th style="text-align: center;">'.$total_up.'</th>';
	            echo '<th style="text-align: center;">'.$total_down.'</th>';
	            echo '<th style="text-align: center;">'.$total.'</th>';
	          echo '</tr>' ;
	        echo '</tfoot>';  
		echo '</table>';
	}
?>