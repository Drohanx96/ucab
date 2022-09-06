<?php require("./config/db.php"); ?>

<?php require("./partials/header.php"); ?>

<div class="container p-4">
    <p class="h3 text-center">REGISTRO DE FRANQUICIAS</p>
</div>

<div class="container">
    <?php if (isset($_SESSION["message"])) { ?>
        <div class="alert alert-<?= $_SESSION["message_type"]; ?> alert-dismissible fade show text-center" role="alert">
            <?= $_SESSION["message"]; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset();
    } ?>
</div>

<div class="container pd-4">

    <div class="rows">
        <div class="col-12 mx-auto">

            <table class="table table-bordered">

                <thead>
                    <tr class="table-secondary">
                        <th>RIF</th>
                        <th>NOMBRE</th>
                        <th>DIRECCIÓN</th>
                        <th>CIUDAD</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM franquicia";
                    $record = $conn->prepare($query);
                    $record->execute();

                    while ($row = $record->fetch(PDO::FETCH_ASSOC)) { ?>

                        <tr>
                            <td><?php echo $row["rif"]; ?></td>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["direccion"]; ?></td>
                            <td><?php echo $row["ciudad"]; ?></td>
                            <td>

                                <a href="./edit_franquicia.php?id=<?php echo $row["rif"]; ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="./del_franquicia.php?id=<?php echo $row["rif"]; ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>

                    <?php } ?>
                </tbody>

            </table>

        </div>
    </div>
</div>


<?php require("./partials/footer.php"); ?>