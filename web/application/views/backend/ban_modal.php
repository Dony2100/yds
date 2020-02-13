<!-- Ban Confirmation Modal-->
<div class="modal fade" id="BanConModal" tabindex="-1" role="dialog" aria-labelledby="BanConModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BanConModalLabel"><i class="fa fa-question-circle-o"></i> Ban/unban user(s)</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class='fa fa-close'></i></span>
        </button>
      </div>
      <?php
        $ban = array(
            'name' => 'reason',
            'id' => 'reason',
            'maxlength' => 255,
            'size' => 128,
            'class' => "form-control",
            'type' => "text",
            'placeholder' => "Enter ban reason",
            'value' => set_value('reason'),
            'class' => 'form-control'
        );
      ?>
      <div class="modal-body">
            <label for="status" class="col-md-10 control-label">Enter reason to ban or leave it empty to remove ban</label>
            <div class="col-md-12">
                <?php echo form_input($ban); ?>
            </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fa fa-close" data-dismiss="modal"> No</button>
        <button type="submit" class="btn btn-danger fa fa-check" id="btnBanYes" href="#"> Proceed</button>
      </div>
    </div>
  </div>
</div>