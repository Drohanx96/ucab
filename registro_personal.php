<?php require("./partials/header.php"); ?>

<div class="container p-4">
    <p class="h3 text-center">REGISTRO DEL PERSONAL</p>
</div>

<div class="container pd-4">

    <div class="rows">
        <div class="col-12 mx-auto">

            <table class="table table-bordered">

                <thead>
                    <tr class="table-secondary">
                        <th>CI</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>DIRECCIÓN</th>
                        <th>SUELDO</th>
                        <th>ESPECIALIDAD</th>
                        <th>RIF</th>
                        <th>ENCARGADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php

                            $query = "SELECT * FROM task";
                            $record = $conn->prepare($query);
                            $record->execute();

                            while ($row = $record->fetch(PDO::FETCH_ASSOC)) { ?>

            <tr>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["created_at"]; ?></td>
                <td>

                    <a href="./edit_task.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                    </a>
                    <a href="./delete_task.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </a>

                </td>
            </tr>

        <?php } ?> -->
                </tbody>

            </table>

        </div>
    </div>
</div>


<?php require("./partials/footer.php"); ?>