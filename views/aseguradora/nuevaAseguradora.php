<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <?php require_once 'views/header.php'?>

            <h1>Aseguradoras</h1>

            <?php if($this->mensaje != ""){ ?>
                <div>
                    <p class="mensaje"><?php echo $this->mensaje; ?></p>
                </div>
            <?php } ?>

            <form action="<?php echo constant('URL'); ?>aseguradoras/crearAseguradora" method="post" id="formulario">
                <div class="row justify-content-center">  
                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre de empresa">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="password" id="contraseña-rep" name="contraseña-rep" placeholder="Contraseña">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" id="cif" name="cif" placeholder="CIF">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" id="localidad" name="localidad" placeholder="Localidad">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" id="codigopostal" name="codigopostal" placeholder="CP">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="tel" id="telefono" name="telefono" placeholder="Telefono">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="email" id="email" name="email" placeholder="test@test.com">
                    </div>

                    <div class="col-8 mb-3">
                        <input class="form-control" type="text" id="contacto" name="contacto" placeholder="Persona de contacto">
                    </div>

                    <div class="col-5 text-center">
                        <button class="btn btn-primary" type="submit">Regisrar aseguradora</button>
                    </div>
                </div>
            </form>

            <?php require_once 'views/footer.php'?>
        </div>

        <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/popper.min.js"></script>
        <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    </body>
</html>