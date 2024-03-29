﻿<?php

include_once('../routes.php');

$typeUser = $_GET['u'];

if ($typeUser == 1) {
    $nameUser = " estandar";
    $typeBtn = "primary";
    $classDiv = "col-xs-offset-3 col-xs-6";
} else {
    $nameUser = " publicador";
    $typeBtn = "danger";
    $classDiv = "col-xs-offset-2 col-xs-8";
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" type="image/png" href="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'img/iconApp.png' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php echo NAME_PROJECT ?></title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href=<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'css/bootstrap.min.css' ?> rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'css/animate.min.css' ?>" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'css/light-bootstrap-dashboard.css?v=1.4.0' ?>"
        rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'css/pe-icon-7-stroke.css' ?>" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">

        <div class="main-panel" data="index">

            <!-- Navbar -->
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_COMPONENTS . "navbar.php";
            ?>
            <!-- Navbar -->

            <div class="content background-image-login"
                style=" background-image: url('<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . "img/bannerLogin.jpg";  ?>  ');padding-top: 102px;"">
                <div class=" container-fluid ">
                    <div class=" row center-block">
                <div class="<?php echo $classDiv ?>">
                    <div class="card ">
                        <div class="header ">
                            <center>
                                <br>
                                <h3 class="title">Registro <?php echo $nameUser ?></h3>
                            </center>
                        </div>
                        <div class="content col-xs-offset-1 col-xs-postset-1">
                            <form id="formRegister">
                                <?php if ($typeUser == 1) { ?>
                                <div class="row ">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tipo de documento</label>
                                            <select name="typeDocument" id="typeDocument" class="form-control">
                                                <option value="C.C.">C.C.</option>
                                                <option value="C.E.">C.E.</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Número de documento</label>
                                            <input type="number" class="form-control" placeholder="Número de documento"
                                                id="numberDocument" name="numberDocument" required>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="text" class="form-control" placeholder="Correo" id="mail"
                                                name="mail"
                                                pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"
                                                required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" placeholder="Nombres" id="name"
                                                name="name" pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" placeholder="Apellidos"
                                                id="lastName" name="lastName"
                                                pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input type="number" class="form-control" placeholder="Celular" id="phone"
                                                name="phone" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Contraseña"
                                                id="password1" name="password1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirmar contraseña</label>
                                            <input type="password" class="form-control"
                                                placeholder="Confirmar contraseña" name="password2" id="password2"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <?php } else { ?>

                                <div class="row ">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tipo de documento</label>
                                            <select name="typeDocument" id="typeDocument" class="form-control">
                                                <option value="C.C.">C.C.</option>
                                                <option value="C.E.">C.E.</option>
                                                <option value="NIT">NIT</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Número de identificación</label>
                                            <input type="number" class="form-control"
                                                placeholder="Número de identificación" id="numberDocument"
                                                name="numberDocument" required>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Nombre comercial</label>
                                            <input type="text" class="form-control" placeholder="Nombre comercial"
                                                id="comercialName" name="comercialName"
                                                pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                                        </div>
                                    </div>




                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="text" class="form-control" placeholder="Correo" id="mail"
                                                name="mail"
                                                pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Encargado</label>
                                            <input type="text" class="form-control" placeholder="Encargado"
                                                id="attendant" name="attendant"
                                                pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" required>
                                        </div>
                                    </div>



                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipo de publicador</label>
                                            <select name="typePublisher" id="typePublisher" class="form-control">
                                                <option value="Editorial">Editorial</option>
                                                <option value="Independiente">Independiente</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input type="number" class="form-control" placeholder="Celular" id="phone"
                                                name="phone" required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Contraseña"
                                                id="password1" name="password1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirmar contraseña</label>
                                            <input type="password" class="form-control"
                                                placeholder="Confirmar contraseña" name="password2" id="password2"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <?php }  ?>
                                <br>
                                <div class="row">
                                    <div class="col-md-offset-2 col-xs-8">
                                        <div class="registrationFormAlert text-center" id="CheckPasswordMatch">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <?php echo "<button type='submit' style='width: 25%;'
                                                    class='btn btn-" . $typeBtn . " btn-pull' id='btnSubmit'>Registrarme</button>"  ?>
                                        <br>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12 text-center">
                                        <br>
                                        <a href="<?php echo ROOT_DIRECTORY . '/index.php' ?>"
                                            class="title text-info">Regresar</a>
                                        <br><br>
                                    </div>
                                </div>
                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>


    <!-- Footer -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_COMPONENTS . "footer.php";
    ?>
    <!-- Footer -->

    </div>

    <!-- ModalRegister -->
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_FIELDS . "ModalRegister.php";
    ?>
    <!-- ModalRegister -->

</body>

<!--   Core JS Files   -->
<script src="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'js/jquery.3.2.1.min.js' ?>" type="text/javascript">
</script>
<script src="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'js/bootstrap.min.js' ?>" type="text/javascript">
</script>

<!--  Charts Plugin -->
<script src="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'js/chartist.min.js' ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'js/bootstrap-notify.js' ?>"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'js/light-bootstrap-dashboard.js?v=1.4.0' ?>"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'js/demo.js' ?>"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#formRegister').submit(function(e) {
        $('#btnSubmit').prop('disabled', true);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '<?php echo ROOT_DIRECTORY . ROUTE_PROCEDURES . "registerUser.php" ?>',
            data: $(this).serialize(),
            success: function(response) {
                var jsonData = JSON.parse(response);

                if (jsonData.success == "1") {
                    $("#formRegister")[0].reset();
                    notifications.showNotificationInfo("Se ha registrado con éxito");

                } else {
                    notifications.showNotificationWarning("Ha ocurrido un error");
                }
                $('#btnSubmit').prop('disabled', false);
            }
        });
    });
});
</script>

<script>
function validatePasswordMatch() {

    var pass1 = $("#password1").val();
    var pass2 = $("#password2").val();

    if (pass1 == "" || pass2 == "") {
        $("#CheckPasswordMatch").css('color', 'red');
        $("#CheckPasswordMatch").html("Complete los campos.");
        $('#btnSubmit').prop('disabled', true);

    } else {
        if (pass1 != pass2) {
            $("#CheckPasswordMatch").css('color', 'red');
            $("#CheckPasswordMatch").html("Las contraseñas no coinciden.");
            $('#btnSubmit').prop('disabled', true);
        } else {
            if (pass1.length < 10) {
                $("#CheckPasswordMatch").css('color', 'red');
                $("#CheckPasswordMatch").html("La contraseña tiene menos de 10 caracteres.");
                $('#btnSubmit').prop('disabled', true);
            } else {
                $("#CheckPasswordMatch").html("");
                $('#btnSubmit').prop('disabled', false);
            }
        }
    }

}
$(document).ready(function() {
    $("#password1").keyup(validatePasswordMatch);
    $("#password2").keyup(validatePasswordMatch);
});
</script>

</html>