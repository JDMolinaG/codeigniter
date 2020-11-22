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

    <div class="contenido-registro">

        <div class="formulario">

            <form id="formulario" action="<?php echo (base_url("public/registro/animales")) ?>" method="post" class="form">
                <h2>Registrar Animal</h2>
                <div class="campos">
                    <input type="text" required name="nombreAnimal" id="nombreAnimal" placeholder="Nombre del Animal">
                </div>
                <div class="campos">
                    <input type="text" required name="edad" id="edad" placeholder="edad">
                </div>
                <div class="campos">
                    <select name="tipoAnimal" required id="tipoAnimal">
                        <option  value="" >Tipo de Animal</option>
                        <option value="domestico">Domestico</option>
                        <option value="faunaSilvestre">FaunaSilvestre</option>
                    </select>
                </div>
                <div class="campos">
                    <textarea name="descripcion" required id="descripcion" placeholder="Descripcion" cols="30" rows="5"></textarea>
                </div>
                <div class="campos">

                    <input type="text" name="comida" required id="comida" placeholder="Comida">
                </div>
                <div class="campos">
                    <input type="text" name="foto" required id="foto" placeholder="urlimagen">
                </div>
                <button class="boton" id="registrar" type="submit">Registrar</button>
                <a class="hollow" href="<?php echo (base_url("public/registro/consultar")) ?>">Listado</a>
                <div class="alert alert-success" role="alert">
                    <?php echo (session('mensaje')) ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <script src="<?php echo(base_url("public/js/scripts.js"))?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>