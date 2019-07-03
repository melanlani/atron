<?php
	
	if($_POST['occ'] !=''){
		$occ = $_POST['occ'];
		$value2= 70;
		$conn = mysqli_connect('localhost','root','','atron');
		$query="select regional, city, site_id, site_name, bw, current, aging, today_highest, weekly_highest, monthly_highest, yearly_highest from current_occupancy where current between '$occ' and '$value2' group by current_id";
		$result=mysqli_query($conn,$query);
		echo '<div class="row">';
            echo '<div class="col-md-12">';
                echo '<div class="main-card mb-3 card">';
                    echo '<div class="card-header">NODE B OVERVIEW > OCCUPANCY</div>';
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


<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>
  $(document).ready(function(){

    $("#filter_reg").on('change', function()
    {
    var value = $(this).val();
      $.ajax(
      {
        url: 'filter3.php',
        type: 'POST',
        data: {request: value, req: 'down'},
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