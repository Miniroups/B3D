<!-- <button id="bubulle" type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCo2">
  Co2
</button> -->
<div id="bubulle">
  <img src="images/co2.png" alt="test_feuille" width="100%" data-toggle="modal" data-target="#modalCo2">
</div>

<div class="modal fade" id="modalCo2" tabindex="-1" role="dialog" aria-labelledby="modalCo2Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCo2Label"><?= $_SESSION['translate']['modal_header'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $_SESSION['translate']['modal_body'];?>
      </div>
      <div class="modal-footer">
        <p><?= $_SESSION['translate']['modal_footer'];?></p>
      </div>
    </div>
  </div>
</div>
