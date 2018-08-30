<?php include 'connect_database.php'; ?>
<?php
error_reporting(2);
$maximumErr = $normalErr = "";
$maximum = $normal = 0;
$isError = false;
?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Setting</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Setting</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="white-box">
                <h3 class="m-b-0"><b>Apparatus Manage</b> </h3>
                <p class="text-muted m-b-30 font-13"> Turn on and off apparatus (Air conditioner, Temperature sensor) </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="white-box analytics-info" style="border: 1px solid #e4e7ea;">
                            <h3 class="box-title">Temperature Sensor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-power-off"></i> </button>
                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-power-off"></i> </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="white-box analytics-info" style="border: 1px solid #e4e7ea">
                            <h3 class="box-title">Air Conditional</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i>
                                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-power-off"></i> </button>
                                    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-power-off"></i> </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="white-box">
                <h3 class="m-b-0"><b>Temperature Setting</b> </h3>
                <p class="text-muted m-b-30 font-13"> Setting the appropriate temperature to turn on and off the air conditioner </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="tempSetting">
                            <div class="form-group">
                                <label>Time of day:</label>
                                <select name="day" class="form-control">
                                    <option value="1">Morning</option>
                                    <option value="2">Afternoon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Maximum temperature:</label>
                                <input type="number" name="maximum" class="form-control" placeholder="Enter maximum temperature to turn on AC"> </div>
                            <div class="form-group">
                                <label>Normal temperature:</label>
                                <input type="number" name="normal" class="form-control" placeholder="Enter normal temperature to turn off AC">
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
                            <button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(".tempSetting").on("reset", function(){
            return confirm("Bạn chắc chắn muốn rời khỏi trang khi chưa lưu dữ liệu?");
        });
    </script>
    </div>
</div>