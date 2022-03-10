<form action="guardar-actor" method="post" enctype="multipart/form-data">
    <fieldset>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="description">Descripción</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </fieldset>
    <fieldset>
        <label for="country">País de origen</label>
        <select name="country" id="countries">
            <?php
                foreach($paises as $pais)
                {
            ?>
                <option value="<?php echo $pais['id']; ?>"><?php echo $pais['name']; ?></option>
            <?php
                }
            ?>
        </select>
    </fieldset>
    
    <fieldset>
        <!-- Ya cambiaremos el estilo del file -->
        <input type="file" name="image" id="image">
    </fieldset>
    
    <fieldset>
        <input type="submit" value="Enviar" id="enviar">
    </fieldset>
    

    
</form>