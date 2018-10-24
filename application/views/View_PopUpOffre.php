<div class="modal fade" id="popupoffre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajoutez votre demande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="numdemande">Numéro de l'offre'</label>
    <input type="textarea" class="form-control" id="numdemande" placeholder="">
  </div>
  <div class="form-group">
    <label for="selectdemande">Que proposez-vous ?</label>
    <select class="form-control" id="selectdemande">
        <?php
            foreach ($lesOptions as $uneOption)
            {
        ?>
                <option name="nomDemande" value="17" ><?php echo $uneOption->nomService ; ?>
        <?php
            }
        ?>

    </select>
  </div>
  <div class="form-group">
    <label for="descriptiondemande">Description</label>
    <textarea class="form-control" id="descriptiondemande" rows="3"></textarea>
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