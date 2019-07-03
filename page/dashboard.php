<div class="app-main__inner">
    <?php include('./layout/navbar.php'); ?> 

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
                            $query='SELECT id_occupancy,regional, up,middle, down, SUM(up) AS total_up, SUM(middle) AS total_middle, SUM(down) AS total_down FROM `occupancy` GROUP BY regional';
                            $result=mysqli_query($conn,$query);
                            $total_up = 0;
                            $total_middle = 0;
                            $total_down = 0;
                            $total=0;
                            while($output=mysqli_fetch_assoc($result)){
                              $one = $output['up'] +$output['middle']+$output['down'];
                              $up = $output['id_occupancy'];
                              $angka=$output['up'];
                        echo '<tr>';
                            echo '<td class="text-center" id="value_reg">'.$output['regional'].'</td>';
                            echo '<td class="text-center"><a class="btn-transition btn btn-outline-success" href="index.php?page=alert1&reg='.$up.'&angka='.$angka.'">'.$output['up'].'</button></td>';
                            echo '<td class="text-center"><a class="btn-transition btn btn-outline-warning" href="index.php?page=alert2&reg='.$up.'">'.$output['middle'].'</button></td>';
                            echo '<td class="text-center"><a class="btn-transition btn btn-outline-danger" href="index.php?page=alert3&reg='.$up.'&angka='.$angka.'">'.$output['down'].'</button></td>';
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
                            // Langkah 1. Tentukan batas,cek halaman & posisi data
                            $batas   = 5;
                            $halaman = @$_GET['halaman'];
                            if(empty($halaman)){
                                $posisi  = 0;
                                $halaman = 1;
                            }
                            else{ 
                              $posisi  = ($halaman-1) * $batas; 
                            }

                            // Langkah 2. Sesuaikan query dengan posisi dan batas
                            $query  = "SELECT * FROM current_occupancy LIMIT $posisi,$batas";
                            $result=mysqli_query($conn,$query);
                            while ($output=mysqli_fetch_array($result)){
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
                <?php 
                    $conn=mysqli_connect('localhost','root','','atron');
                    $query2     = mysqli_query($conn, "select * from current_occupancy");
                    $jmldata    = mysqli_num_rows($query2);
                    $jmlhalaman = ceil($jmldata/$batas);

                    echo "<div class='card-body'><h5 class='card-title'>Page</h5> 
                    <nav class='' aria-label='Page navigation example'>
                        <ul class='pagination'>";

                    for($i=1;$i<=$jmlhalaman;$i++)
                    if ($i != $halaman){
                     echo " <li class='page-item'>
                                <a href=\"index.php?halaman=$i\" class='page-link'>$i</a>
                            </li>";
                    }
                    else{ 
                     echo " <li class='page-item'>
                                <a href=\"javascript:void(0);\" class='page-link'><b>$i</b></a>
                            </li>"; 
                    }

                ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>