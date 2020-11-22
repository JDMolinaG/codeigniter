<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo (base_url("public/css/normalize.css")) ?>">
    <link rel="stylesheet" href="<?php echo (base_url("public/css/style.css")) ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="contenedor">
        <div class="header-listado">
            <h2 class="text-center">Listado registrados</h2>
            <a href="<?php echo (base_url("public/registro/")) ?>" class="btn btn-success "> Agregar Nuevo</a>

            <div class="alert alert-success" role="alert">
                <?php echo (session('mensaje')) ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>


        <div class="group-cards">
            <?php foreach ($animales as $animal) : ?>
                <div class="cards">
                    <img class="foto" src="<?php echo ($animal["foto"]) ?>" alt="">
                    <p>Nombre: <span><?php echo ($animal["nombre"]) ?></span></p>
                    <p>Edad: <span> <?php echo ($animal["edad"]) ?></span></p>
                    <p>Tipo Animal: <span><?php echo ($animal["tipoanimal"]) ?></span></p>
                    <p>Descripcion: <span><?php echo ($animal["descripcion"]) ?></span></p>
                    <p>Comida: <span><?php echo ($animal["comida"]) ?></span></p>
                    <div class="grupobotones">
                        <a class="btn btn-danger" href="<?php echo (base_url("public/registro/eliminar/" . $animal["id"])) ?>">Eliminar</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo ($animal["id"]) ?>">
                            Editar
                        </button>
                    </div>
                </div>
                <!-- ventana modal con formulario -->
                <div class="modal fade" id="editar<?php echo ($animal["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edición de usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo (base_url("public/registro/editar/" . $animal["id"])) ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo ($animal["nombre"]) ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>edad:</label>
                                        <input type="text" class="form-control" name="edadEditar" value="<?php echo ($animal["edad"]) ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipo animal:</label>
                                        <select name="tipoAnimalEditar" id="">
                                            <?php echo ($animal["tipoanimal"]) ?>
                                            <option value="domestico">Domestico</option>
                                            <option value="faunaSilvestre">FaunaSilvestre</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion:</label>
                                        <textarea class="form-control" name="descripcionEditar" rows="3"><?php echo ($animal["descripcion"]) ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>comida:</label>
                                        <input type="text" class="form-control" name="comidaEditar" value="<?php echo ($animal["comida"]) ?>">
                                    </div>

                                    <button type="submit" class="btn btn-warning">Enviar</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>