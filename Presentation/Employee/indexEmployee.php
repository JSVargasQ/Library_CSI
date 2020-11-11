<?php

include_once('../../routes.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo ROOT_DIRECTORY . ROUTE_ASSETS . 'img/favicon.ico' ?>">
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

        <!-- Sidebar -->
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_COMPONENTS . "sidebar.php";
        ?>
        <!-- Sidebar -->


        <div class="main-panel">

            <div class="content">
                <div class="container-fluid ">
                    <div class="row centerLarge">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header">
                                    <h5 class="title">Cliente</h5>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tipo de documento</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="C.C.">C.C.</option>
                                                        <option value="C.E.">C.E.</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Número de documento</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Número de documento">
                                                </div>
                                            </div>

                                            <div class="col-md-1">
                                                <label>&nbsp;</label>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <input value="Realizar reserva" type="button"
                                                        class="form-control btn btn-employee btn-fill pull-left"
                                                        data-toggle="modal" data-target="#exampleModalCenter">
                                                </div>
                                            </div>

                                        </div>

                                    </form>



                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <br>


                    <div class="row centerLarge">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="header">
                                    <h5 class="title">Reservas</h5>
                                </div>
                                <div class="content table-responsive table-full-width">

                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Documento</th>
                                            <th>Codigo</th>
                                            <th>Estado</th>
                                            <th>Fecha de entrega</th>
                                            <th>Acciones</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>100 años de soledad</td>
                                                <td>ISBN 1234</td>
                                                <td>Recogido</td>
                                                <td>20/11/2020</td>
                                                <td><button><i type="span" class="fa fa-sign-out"
                                                            aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Reservar documento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-employee btn-fill">Hacer reserva</button>
                    <button type="button" class="btn btn-primary btn-fill" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

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


</html>