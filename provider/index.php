<?php


$ignoreAuth = true;
// Set $sessionAllowWrite to true to prevent session concurrency issues during authorization related code
$sessionAllowWrite = true;
require_once '../interface/globals.php';

use OpenEMR\Core\Header;

if ($_POST['clinic'] && is_dir('../sites/' . $_POST['clinic'])) {
    header('Location: ../interface/login/login.php?site=' . $_POST['clinic']);
    die('Clinic found');
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moden EHR</title>
    <title><?php echo xlt('Provider Login'); ?></title>
    <?php Header::setupHeader(); ?>
    <style>
        #rcorners3 {
            border-radius: 25px;
        }
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <form name="practice" method="post" action="index.php">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 h-100">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div id="rcorners3" class="card-body p-5 text-center" style="background-image: url('v870-tang-31.jpg'); height: 700px; opacity: 0.8;">
                            <div class="mb-md-5 mt-md-4 pb-5" style="padding-top: 200px">
                                <div class="form-outline form-white mb-4">
                                    <h1 class="text-dark mb-5">MODEN EHR</h1>
                                    <p class="text-dark"></p>
                                    <input name="clinic" type="text" id="typeEmailX" class="form-control form-control-lg text-center" placeholder="Practice Key: eg. PW0127"/>
                                    <label class="form-label" for="typeEmailX"></label>
                                </div>
                                <input class="btn btn-primary btn-lg px-5" type="submit" value="Continue">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</body>
</html>
