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
    <title><?php echo xlt('Provider Login'); ?></title>
    <?php Header::setupHeader(); ?>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="index.php" name="provider_login">

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" name="clinic" class="form-control form-control-lg"
                               placeholder="Enter a valid clinic ID" />
                        <label class="form-label" for="form3Example3">Clinic ID</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Continue">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->
    </div>
</section>
</body>
</html>
