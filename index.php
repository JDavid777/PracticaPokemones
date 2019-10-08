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
    <form method="get">
            <select name="tipo" onchange="this.form.submit()">
                <option value="0"> --Seleccione Tipo--</option>
                <option value="Agua">Agua</option>
                <option value="Fuego">Fuego</option>
                <option value="Electrico">Electrico</option>                
            </select>
            
        </form> 
    <?php foreach($pokes as $p):?>
        <div class="pokemon centrado carta">
            <div>
                <h1><?php echo $p->getNombre(); ?></h1>
            </div>     

            <img class="imagen" src="<?php echo $p->getImg()?>"/>
            <p> 
                <br>
                <?php echo $p->getTipo()?>
                <br>
                <?php echo $p->getFuerza()?>
            </p>           
        </div>   
    <?php endforeach;?>



</body>
</html>
