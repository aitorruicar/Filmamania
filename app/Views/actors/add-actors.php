<form action="guardar-actor" method="post" enctype="multipart/form-data">
    <label for="name">Nombre</label><input type="text" name="name" id="name"><br>
    <label for="description">Descripción</label><br><textarea name="description" id="description" cols="30" rows="10"></textarea><br>
    <select name="country" id="countries">
        <?php
            foreach($paises as $pais)
            {

            
        ?>
        <option value="<?php echo $pais['id']; ?>"><?php echo $pais['name']; ?></option>
        <?php
            }
        ?>
    </select><br><br>
    <input type="file" name="image" id="image">

    <input type="submit" value="Enviar">
</form>