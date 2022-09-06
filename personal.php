<?php require("./partials/header.php"); ?>

<div class="container p-4">
    <p class="h3 text-center">REGISTRAR PERSONAL</p>
</div>

<div class="container pb-5">

    <div class="row">

        <div class="col-8 mx-auto">

            <div class="card card-body">

                <form action="">

                    <div class="input-group mb-3">

                        <input type="text" name="ci-empleado" class="form-control" placeholder="Cedula">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="nom-empleado" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="tlf-empleado" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="direc-empleado" class="form-control" placeholder="Dirección">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="sueldo" class="form-control" placeholder="Sueldo">
                    </div>
                    <div class="input-group mb-3">

                        <select class="form-select" aria-label="Default select example" name="especialidad">
                            <option selected disabled>Especialidad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">

                        <select class="form-select" aria-label="Default select example" name="encargado">
                            <option selected disabled>Encargado de</option>
                            <option value="1">N/A</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="rif" class="form-control" placeholder="RIF de la franquicia">
                    </div>
                    <button class="btn btn-success" name="registrar">
                        Añadir Personal
                    </button>
                </form>
            </div>
        </div>

        <div class="col-4 pt-4">
            <button class="btn btn-lg btn-outline-light" name="registrar">
                <a href="./registro_personal.php"><i class="fa-solid fa-address-card fa-2xl"></i></a>
            </button>
        </div>

    </div>
</div>


<?php require("./partials/footer.php"); ?>