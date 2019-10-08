<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<?php include "BDPokemones.php"; ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device, initial-scale=1"/>
    <title>Página web con Server Side Scripting</title>
</head>
<body>
    <?php if($pokemones != null):?>
        <div id="pokemones">
            <div>
                <h1><?php echo $pokemones->getNombre(); ?></h1>
            </div>     

            <img src="<?php echo $pokemones->getImg()?>"/>
            <p> 
                <br>
                <?php echo $pokemones->getTipo()?>
                <br>
                <?php echo $pokemones->getFuerza()?>
            </p>
            
            <form method="get">
                <select name="pokemones" onchange="this.form.submit()">
                    <option value="0"> --Seleccione Tipo--</option>
                    <option value="1">Agua</option>
                    <option value="2">Fuego</option>
                    <option value="3">Electrico</option>                
                </select>
                
            </form>            
        </div>   
    <?php endif;?>



</body>
</html>