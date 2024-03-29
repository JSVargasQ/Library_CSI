<?php

include_once('../../../routes.php');

include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_DRIVINGS . 'BookingDriving.php');
include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_DRIVINGS . 'DocumentDriving.php');
include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_DRIVINGS . 'PenaltyDriving.php');
include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_DRIVINGS . 'UserDriving.php');

include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_PERSISTENCE . 'Connection.php');
include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_ENTITIES . 'Booking.php');
include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_ENTITIES . 'Penalty.php');
include_once($_SERVER['DOCUMENT_ROOT'] . ROOT_DIRECTORY . ROUTE_ENTITIES . 'User.php');


$c = Connection::getInstance();
$connection = $c->connectBD();

$bookingDriving = new BookingDriving($connection);
$documentDriving = new DocumentDriving($connection);
$penaltyDriving = new PenaltyDriving($connection);
$userDriving = new UserDriving($connection);

$typeDocument = $_REQUEST['typeId'];
$idUser = $_REQUEST['idUser'];

$validate = $userDriving->userValidate($typeDocument, $idUser);
if ($validate != 0) {
    $books = $bookingDriving->searchBookingActivesByUserId($idUser);
    $penaltys = $penaltyDriving->getPenaltysActiveByUser($idUser);
}

?>

<br>
<div class="row centerLarge">
    <div class="col-md-12 ">
        <div class="card">
            <div class="header">
                <?php
                if ($validate > 0) {
                    echo "<input value='Realizar reserva' type='button' class='btn btn-employee btn-fill pull-left' data-toggle='modal'
                    data-target='#exampleModalCenter' onclick='clearDoReserve()'>";
                    echo "<br><br>";
                }
                ?>

            </div>
            <div class="content table-responsive table-full-width">

                <table class="table table-hover table-striped">
                    <thead>
                        <th>Titulo</th>
                        <th>Fecha de reserva</th>
                        <th>Fecha de recogida</th>
                        <th>Fecha de entrega</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php

                        if ($validate == 0) {
                            echo "<tr><td colspan='6'><center>El usuario no existe.</center></td></tr>";
                        } else if (isset($books) and $books == -1) {
                            echo "<tr><td colspan='6'><center>No se encontrarón datos.</center></td></tr>";
                        } else {
                            foreach ($books as $book) {

                                $status = $book->getBookingStatus();

                                if (strcasecmp($status, 'Reserved') == 0) {
                                    $btnAction = " <button class='btn btn-employee btn-fill' onClick=updateModal('" . $status . "'," . $book->getId() . "," . $book->getIdDocument() . ")>
                                                        <i type='span' class='fa fa-check' aria-hidden='true'></i>
                                                    </button>";
                                    $status = "Reservado";
                                } else if (strcasecmp($status, 'Retired') == 0) {

                                    $btnAction = "<button class='btn btn-primary btn-fill' onClick=updateModal('" . $status . "'," . $book->getId() . "," . $book->getIdDocument() . ")>
                                                    <i type='span' class='fa fa-sign-in' aria-hidden='true'></i>
                                                  </button>";
                                    $status = "Retirado";
                                } else if (strcasecmp($status, 'Fined') == 0) {
                                    $btnAction = "<button class='btn btn-admin btn-fill' onClick=updateModal('" . $status . "'," . $book->getId() . "," . $book->getIdDocument() . ")>
                                    <i type='span' class='fa fa-money' style='font-size: 1.3em;'></i>
                                  </button>";
                                    $status = "Multado";
                                }

                                $title = $documentDriving->getTitleDocumentById($book->getIdDocument());

                                echo "<tr>";
                                echo "<td>" . $title . "</td>";
                                echo "<td>" . $book->getBookingDate() . "</td>";
                                echo "<td>" . $book->getDeliveryDate() . "</td>";
                                echo "<td>" . $book->getDateOfCollection() . "</td>";
                                echo "<td>" . $status . "</td>";

                                echo "<td>" . $btnAction . "</td>";

                                echo "</tr>";
                            }
                        }



                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
if ($validate != 0 and count($penaltys) > 0) {
?>
<div class="row centerLarge">
    <div class="col-md-12 ">
        <div class="card">
            <div class="header">

            </div>
            <div class="content table-responsive table-full-width">

                <table class="table table-hover table-striped">
                    <thead>
                        <th>Documento</th>
                        <th>Fecha de inicio</th>
                        <th>Renovaciones</th>
                        <th>Dias de retardo</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php

                            $fechaActual = new DateTime();

                            foreach ($penaltys as $penalty) {

                                $booking = $bookingDriving->search($penalty->getBookingId());
                                $title = $documentDriving->getTitleDocumentById($book->getIdDocument());

                                $fecha1 = new DateTime($booking->getDateOfCollection());
                                $diff = $fecha1->diff($fechaActual);
                                $daysR = $diff->days - 1;
                                $valueFined = $daysR * $bookingDriving->getValueFined();

                                echo "<tr>";
                                echo "<td>" . $title . "</td>";
                                echo "<td>" . $penalty->getDateStart() . "</td>";
                                echo "<td>" . $booking->getRenovations() . "</td>";
                                echo "<td>" . $daysR . "</td>";
                                echo "<td>" . $valueFined . "</td>";

                                echo "<td><button class='btn btn-admin btn-fill' onClick=updateModal('Fined'," . $penalty->getBookingId() . "," . $booking->getIdDocument() . ")>
                                <i type='span' class='fa fa-money' style='font-size: 1.3em;'></i>
                              </button></td>";


                                echo "</tr>";
                            }





                            ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
}

?>