<?php
require_once ('connect_database.php');
//if (!isset($_SESSION['user'])) {
//    header('location:login.php');
//}
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'head.php'; ?>
    <body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <?php include 'header.php' ?>
        <?php include 'menu.php'; ?>
        <div id="page-wrapper">
            <div id="content">
                <?php include 'dashboard.php'; ?>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#home").click(function () {
                $.ajax({url: 'dashboard.php',
                    success: function (data) {
                        $('#content').html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#report").click(function () {
                $.ajax({url: 'temperature-report.php',
                    success: function (data) {
                        $('#content').html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#setting").click(function () {
                $.ajax({url: 'setting.php',
                    success: function (data) {
                        $('#content').html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#error").click(function () {
                $.ajax({url: 'errors.php',
                    success: function (data) {
                        $('#content').html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("#profile").click(function () {
                $.ajax({url: 'profile.php',
                    success: function (data) {
                        $('#content').html(data);
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });
            });
        });
    </script>
</body>
</html>
