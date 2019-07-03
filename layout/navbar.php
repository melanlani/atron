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
                                <?php
                                    $conn=mysqli_connect('localhost','root','','atron');
                                    $query='SELECT regional, up, down, SUM(up) AS total_up, SUM(down) AS total_down FROM `status` GROUP BY regional';
                                    $result=mysqli_query($conn,$query);
                                    $total_up = 0;
                                    $total_down = 0;
                                    $total=0;
                                    $width_up=0;
                                    $width_down=0;
                                    while($output=mysqli_fetch_assoc($result)){
                                    $one = $output['up'] +$output['down'];
                                    $total_up += $output['total_up'];
                                    $total_down += $output['total_down'];
                                    $width_up += $output['total_up'] /10;
                                    $width_down += $output['total_down'] /10;
                                    }
                                    $query2='SELECT regional, up,middle, down, SUM(middle) AS total_middle FROM `occupancy` GROUP BY regional';
                                    $result=mysqli_query($conn,$query2);
                                    $total_occ = 0;
                                    $width_occ = 0;
                                    while($output=mysqli_fetch_assoc($result)){
                                    $total_occ += $output['total_middle'];
                                    $width_occ += $output['total_middle'] /10;
                                    }
                                ?>
                                <div class="col-md-4">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-success"><?php echo $total_up; ?></div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $width_up.'%'; ?>;"></div>
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
                                                    <div class="widget-numbers mt-0 fsize-3 text-red"><?php echo $total_down; ?></div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $width_up.'%'; ?>;"></div>
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
                                                    <div class="widget-numbers mt-0 fsize-3 text-warning"><?php echo $total_occ; ?></div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $width_occ.'%'; ?>;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">OCCUPANCY >70</div>
                                                <button class="btn btn-warning" id="occ">
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