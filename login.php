<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
    
<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-page">
        <div class="row" style="margin-top: 290px;">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <small style="font-weight: bold; display: block">Forgot password?</small>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">LOGIN</button>
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