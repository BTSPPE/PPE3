<div class="modal fade" id="popupoffre" tabindex="-1" role="dialog" aria-labelledby="popupoffre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popupoffre">Ajoutez votre demande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="Model_AjoutOffre.php" method="post">
  <div class="form-group">
    <label for="numoffre">Numéro de l'offre'</label>
    <input type="textarea" name="numOffre" class="form-control" id="numoffre" placeholder="">
  </div>
  <div class="form-group">
    <label for="selectoffre">Que proposez-vous ?</label>
    <select class="form-control" id="selectoffre">
        <?php
            foreach ($lesOptions as $uneOption)
            {
        ?>
                <option name="nomOffre" value="17" ><?php echo $uneOption->nomService ; ?>
        <?php
            }
        ?>

    </select>
  </div>
  <div class="form-group">
    <label for="descriptionoffre">Description</label>
    <input type="textarea" name="descriptionOffre" class="form-control" id="descriptionoffre" rows="3"></textarea>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Enregistrer votre offre</button>
      </div>
    </div>
  </div>
</div>