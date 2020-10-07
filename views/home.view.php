
<div id="content" class="p-4 p-md-5 pt-5">
<div id="cuenta"></div>
  <p class="mb-4" style="font-size:45px;">Preguntas de <?php echo $posts[0]['curso'];?></p>


  <form class="" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?curso=<?php echo $curso;?>">

    <?php foreach($posts as $post): ?>
      <fieldset class="form-group">
          <legend class="col-form-label" style="font-size:20px;"><b><?php echo $post['codigo'].'. '.utf8_encode($post['texto']);?></b> </legend>
          <?php
              $file ='images/'.$post['codigo'].'.jpg';
              $imagen = is_file( $file );
            ?>
          <?php if( $imagen==1 ): ?>
            <div class="container">
              <img src="images/<?php echo $post['codigo'];?>.jpg" alt=""><br><br>
            </div>
          <?php endif; ?>
          <!-- A L T E R N A T I V A S -->
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" 
                name="p_<?php echo $post['codigo']; ?>" 
                id="p_<?php echo $post['codigo']; ?>_1" 
                value="1"
                style="width: 20px; height: 20px;"
                <?php if($post['rpta'] == '1') { echo 'checked'; } ?>
              >
              <label class="form-check-label" style="font-size:15px;" for="p_<?php echo $post['codigo']; ?>_1"><?php echo utf8_encode($post['alt1']);?></label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" 
                name="p_<?php echo $post['codigo']; ?>" 
                id="p_<?php echo $post['codigo']; ?>_2" 
                value="2"
                style="width: 20px; height: 20px;"
                <?php if($post['rpta'] == '2') { echo 'checked'; } ?>
              >
              <label class="form-check-label" style="font-size:15px;" for="p_<?php echo $post['codigo']; ?>_2"><?php echo utf8_encode($post['alt2']);?></label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" 
                name="p_<?php echo $post['codigo']; ?>" 
                id="p_<?php echo $post['codigo']; ?>_3" 
                value="3"
                style="width: 20px; height: 20px;"
                <?php if($post['rpta'] == '3') { echo 'checked'; } ?>
              >
              <label class="form-check-label" style="font-size:15px;" for="p_<?php echo $post['codigo']; ?>_3"><?php echo utf8_encode($post['alt3']);?></label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" 
                name="p_<?php echo $post['codigo']; ?>" 
                id="p_<?php echo $post['codigo']; ?>_4" 
                value="4"
                style="width: 20px; height: 20px;"
                <?php if($post['rpta'] == '4') { echo 'checked'; } ?>
              >
              <label class="form-check-label" style="font-size:15;" for="p_<?php echo $post['codigo']; ?>_4"><?php echo utf8_encode($post['alt4']);?> </label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" 
                name="p_<?php echo $post['codigo']; ?>" 
                id="p_<?php echo $post['codigo']; ?>_5" 
                value="5"
                style="width: 20px; height: 20px;"
                <?php if($post['rpta'] == '5') { echo 'checked'; } ?>
              >
              <label class="form-check-label" style="font-size:15px;" for="p_<?php echo $post['codigo']; ?>_5"><?php echo utf8_encode($post['alt5']);?> </label>
            </div>
      </fieldset><br>
    <?php endforeach; ?>

    <br><br><input type="submit" class="btn btn-primary" value="Guardar Respuestas" onclick="funcionAlerta()">
  </form>
</div>
	