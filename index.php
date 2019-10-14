<!DOCTYPE html>
<?php include "ObtenerPokemones.php";?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device, initial-scale=1"/>
    <title>Pokedex</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="global">
    <div class="centrado">
        <h1 class="text">Bienvenido a Pokedex</h1>
    </div>
    <div id="explicacion" class="centrado">
        <h2 class=text>
            ¡Elige un tipo de Pokemon y podrás ver la información de todos los pokemones de ese tipo que tengamos registrados!
        </h2>
    </div>
    <form method="get" class="centrado">
            <select name="tipo" onchange="this.form.submit()">
                <option value="0"> --Seleccione Tipo--</option>
                <option value="Agua">Agua</option>
                <option value="Fuego">Fuego</option>
                <option value="Electrico">Electrico</option>                
            </select>
            
        </form> 
    <?php foreach($pokes as $p):?>
        <div class="pokemon centrado">
            <div class=centrado>
                <h1 class="text1 nombre"><?php echo $p->getNombre(); ?></h1>
            </div>
            <div class=centrado>
                <img class="imagen" src="<?php echo $p->getImg()?>"/>
            </div>
            <div class=centrado>
            <h2 class="text1 nombre"> 
                Tipo:
                <?php echo $p->getTipo()?>
                <br>
                Fuerza:
                <?php echo $p->getFuerza()?>
                Velocidad:
                <?php echo $p->getVelocidad()?>
                Evolución:
                <?php echo $p->getEvolucion()?>
            </h2>    
            </div>
            
            
            
            
        </div>   
    <?php endforeach;?>



</body>
</html>
