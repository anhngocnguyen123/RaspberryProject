<?php include 'connect_database.php'; ?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Temperature Report</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Temperature Report</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="table-responsive">
                    <table class="table table-hover manage-u-table">
                        <thead>
                            <tr>
                                <th width="70" class="text-center">#</th>
                                <th>DATE</th>
                                <th>TEMP (&#8451;)</th>
                                <th>HUMIDITY (%)</th>
                                <th>STATUS</th>
                                <th width="300">MANAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $queryDate = "SELECT id FROM date;";
                                $kq = mysqli_query($conn, $queryDate);
                                while ($row = mysqli_fetch_array($kq)) {
                                    $dateId = $row['id'];
                            ?>
                            <?php
                        //        include 'connect_database.php';
                                $query2 = "SELECT td.dateId AS id, AVG(td.temperature) AS temp, AVG(td.humidity) AS hum, d.date
                                            FROM temperatureDatetime AS td
                                            LEFT JOIN date AS d ON td.dateId = d.id
                                            WHERE td.dateId = $dateId AND td.isDelete = 0;";
                                $result = mysqli_query($conn, $query2);
                            ?>

                            <?php
                                while ($row1 = mysqli_fetch_array($result)) {
                                $id = $row1['id'];  
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $row1['id']; ?></td>
                                <td><?php echo $row1['date']; ?></td>
                                <td><?php echo $row1['temp']; ?></td>
                                <td><?php echo $row1['hum']; ?></td>
                                <td>
                                    <?php if($row1['temp'] >= 35){?>
                                        <span class="label label-danger">
                                            <?php
                                                echo 'HOT';
                                            ?>
                                        </span>
                                    <?php }else if(($row1['temp'] < 35) && ($row1['temp'] >= 25)){ ?>
                                        <span class="label label-warning">
                                            <?php
                                                echo 'Nomarl';
                                            ?>
                                        </span>
                                    <?php }else{ ?>
                                        <span class="label label-info">
                                            <?php
                                                echo 'Cold';
                                            ?>
                                        </span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg" data-toggle="modal" data-target="#modal_detail_<?php echo $id; ?>">
                                        <i class="fa fa-share-square-o"></i> 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal_detail_<?php echo $id;?>" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Temperature Detail</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6" style="border-right: 1px solid #E0E3DA">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Time</th>
                                                                            <th>Temp</th>
                                                                            <th>(%)</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
                                    //                                    include 'connect_database.php';
                                                                        $query1 = "SELECT td.dateId, td.timeId, td.temperature, td.humidity, t.id, t.time
                                                                                    FROM temperatureDatetime AS td
                                                                                    LEFT JOIN time AS t ON td.timeId = t.id
                                                                                    WHERE td.timeId <= 24 AND td.dateId = $id 
                                                                                    AND td.isDelete = 0 ORDER BY id;";
                                                                        $resultTemp = mysqli_query($conn, $query1);
                                                                    ?>
                                                                    <tbody>
                                                                        <?php
                                                                            while ($row = mysqli_fetch_array($resultTemp)) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $row['time'] ?></td>
                                                                            <td><?php echo $row['temperature'] ?>&#8451;</td>
                                                                            <td><?php echo $row['humidity'] ?>%</td>
                                                                            <td>
                                                                                <?php if($row['temperature'] >= 35){?>
                                                                                    <span class="label label-danger">
                                                                                        <?php
                                                                                            echo 'HOT';
                                                                                        ?>
                                                                                    </span>
                                                                                <?php }else if(($row['temperature'] < 35) && ($row['temperature'] >= 25)){ ?>
                                                                                    <span class="label label-warning">
                                                                                        <?php
                                                                                            echo 'Nor';
                                                                                        ?>
                                                                                    </span>
                                                                                <?php }else{ ?>
                                                                                    <span class="label label-info">
                                                                                        <?php
                                                                                            echo 'Cold';
                                                                                        ?>
                                                                                    </span>
                                                                                <?php } ?>
                                                                            </td>
                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Time</th>
                                                                            <th>Temp</th>
                                                                            <th>(%)</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
                                    //                                    include 'connect_database.php';
                                                                        $query1 = "SELECT td.dateId, td.timeId, td.temperature, td.humidity, t.id, t.time
                                                                                    FROM temperatureDatetime AS td
                                                                                    LEFT JOIN time AS t ON td.timeId = t.id
                                                                                    WHERE td.timeId >=25 AND td.dateId = $id
                                                                                    AND td.isDelete = 0 ORDER BY id;";
                                                                        $resultTemp = mysqli_query($conn, $query1);
                                                                    ?>
                                                                    <tbody>
                                                                        <?php
                                                                            while ($row = mysqli_fetch_array($resultTemp)) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $row['time'] ?></td>
                                                                            <td><?php echo $row['temperature'] ?>&#8451;</td>
                                                                            <td><?php echo $row['humidity'] ?>%</td>
                                                                            <td>
                                                                                <?php if($row['temperature'] >= 35){?>
                                                                                    <span class="label label-danger">
                                                                                        <?php
                                                                                            echo 'Hot';
                                                                                        ?>
                                                                                    </span>
                                                                                <?php }else if(($row['temperature'] < 35) && ($row['temperature'] >= 25)){ ?>
                                                                                    <span class="label label-warning">
                                                                                        <?php
                                                                                            echo 'Nor';
                                                                                        ?>
                                                                                    </span>
                                                                                <?php }else{ ?>
                                                                                    <span class="label label-info">
                                                                                        <?php
                                                                                            echo 'Cold';
                                                                                        ?>
                                                                                    </span>
                                                                                <?php } ?>
                                                                            </td>
                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" onclick='deletetemp(<?php echo $id; ?>)' class="btn btn-info btn-outline btn-circle btn-lg">
                                        <i class="fa fa-trash-o"></i> 
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>