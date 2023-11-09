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
    <title>Provider Login</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="/public/images/logos/core/favicon/favicon.ico?t=1682485780" />

    <link rel="stylesheet" href="/public/themes/style_burgundy.css?v=73" />

    <script src="/public/assets/jquery/dist/jquery.min.js?v=73"></script>
    <script src="/public/assets/bootstrap/dist/js/bootstrap.bundle.min.js?v=73"></script>
    <script src="/library/js/utility.js?v=73"></script>
    <script src="/library/textformat.js?v=73"></script>
    <script src="/library/dialog.js?v=73"></script>

    <style>
        body {
            background-image: url('med.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Mulish', sans-serif;
            text-align: center;
            color: #58413a;
        }

            .practicek {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: white;
            width: 945px;
            /* height: 474px; */
            height: length|percentage|auto|initial|inherit;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(61, 159, 255, 0.2)
        }


        .practicek__title {
            font-weight: bold;
            font-size: 26px;
            margin-bottom: 18px;
            text-align: center;
        }

        .practicek__copy {
            max-width: 450px;
            text-align: center;
            margin-bottom: 53px;
            line-height: 1.5;
        }

        .form {
            margin-bottom: 25px;
        }

        .form__email {
            padding: 20px 25px;
            border-radius: 5px;
            border: 1px solid #CAD3DB;
            width: 431px;
            font-size: 18px;
            color: #58413a;
        }

        .form__email:focus {
            outline: 1px solid #c14f4a;
        }

        .form__button {
            background: #c14f4a;
            padding: 10px;
            border: none;
            width: 244px;
            height: 65px;
            border-radius: 5px;
            font-size: 18px;
            color: white;
            box-shadow: 0 4px 20px rgba(193, 79, 74, 0.7);
        }

        .form__button:hover {
            box-shadow: 0 10px 20px rgba(193, 79, 74, 0.7);
        }

    </style>
</head>
<body>
    <section class="practicek">
        <div class="container py-5 h-100">
            <form name="practice" method="post" action="index.php">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 h-100">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div id="rcorners3" class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5" style="padding-top: 100px">
                                    <div class="text-center">
                                        <img src="moden med logo.png" alt="Moden Medical Group Logo" />
                                        <h1 class="practicek__title">MODEN EHR</h1>
                                        <p class="text-center">Welcome to Moden EHR! Please kindly enter your Practice Key below. We trust that you'll have a wonderful day!</p>
                                        <input name="clinic" type="text" id="typeEmailX" class="form__email" placeholder="Practice Key: eg. PW0127"/>
                                        <label class="form-label" for="typeEmailX"></label>
                                    </div>
                                    <input class="form__button" type="submit" value="Continue">
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
