<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>  
<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-page">
        <div class="row" style="margin-top: 200px;">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="white-box">
                    <form class="form-horizontal" action ="process.php" method="post">
                        <?php 
                            if (@$_GET['empty']==true) {
                        ?>
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <small style ="color: red;"><?php echo $_GET['empty']; ?></small>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        <?php 
                            if (@$_GET['invalid']==true) {
                        ?>
                            <div class="form-group" style="margin-bottom: 10px;">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <small style ="color: red;"><?php echo $_GET['invalid']; ?></small>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label class="col-sm-3 control-label">Username*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name= "username" placeholder="Username"> </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label class="col-sm-3 control-label">Password*</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <small style="font-weight: bold; display: block">Forgot password?</small>
                                <button type="submit" name="login" class="btn btn-info waves-effect waves-light m-t-10">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </section>
    <?php include 'link_javaScript.php'; ?>
</body>

</html>