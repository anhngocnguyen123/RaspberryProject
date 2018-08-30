<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Temperature Sensor</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i>
                        <span class="label label-warning" style="font-size: 10px; font-weight: bold">ON</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Air Conditional</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i>
                        <span class="label label-default" style="font-size: 10px; font-weight: bold">OFF</span>
                    </li>
                </ul>
            </div>
        </div>
        <?php 
            include 'connect_database.php';
            $query2 = "SELECT td.dateId AS id, AVG(td.temperature) AS temp, AVG(td.humidity) AS hum, d.date
                        FROM temperatureDatetime AS td
                        LEFT JOIN date AS d ON td.dateId = d.id
                        WHERE td.dateId = (SELECT MAX(d.id) FROM date AS d) AND td.isDelete = 0;";
            $result3 = mysqli_query($conn, $query2);
        ?>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Learning Lounge Room</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"></div>
                    </li>
                    <?php while ($row = mysqli_fetch_array($result3)) { ?>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $row['temp'] ?>&#8451;</span></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
//        include 'connect_database.php';
        $query1 = "SELECT td.dateId, td.timeId, td.temperature, td.humidity, t.id, t.time
                    FROM temperatureDatetime AS td
                    LEFT JOIN time AS t ON td.timeId = t.id
                    WHERE td.timeId <= 24 AND td.dateId = (SELECT MAX(d.id) FROM date AS d) AND td.isDelete = 0 ORDER BY id;";
        $resultTemp = mysqli_query($conn, $query1);
    ?>
    <div class="row">
        <div class="col-md-6">
            <div class="white-box">
                <h3> <b>In the morning</b> </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Temp (&#8451;)</th>
                                <th>Humidity (%)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($resultTemp)) {
                        ?>
                            <tr>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['temperature'] ?></td>
                                <td><?php echo $row['humidity'] ?></td>
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
                            </tr> 
                        <?php } ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
    //      include 'connect_database.php';
            $query1 = "SELECT td.dateId, td.timeId, td.temperature, td.humidity, t.id, t.time
                    FROM temperatureDatetime AS td
                    LEFT JOIN time AS t ON td.timeId = t.id
                    WHERE td.timeId >= 25 AND td.dateId = (SELECT MAX(d.id) FROM date AS d WHERE d.isDelete =0) AND td.isDelete = 0 ORDER BY id;";
            $resultTemps = mysqli_query($conn, $query1);
        ?>
        <div class="col-md-6">
            <div class="white-box">
                <h3> <b>In the Afternoon</b> </h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Temp (&#8451;)</th>
                                <th>Humidity (%)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($resultTemps)) {
                        ?>
                            <tr>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['temperature'] ?></td>
                                <td><?php echo $row['humidity'] ?></td>
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
                            </tr> 
                        <?php } ?>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>