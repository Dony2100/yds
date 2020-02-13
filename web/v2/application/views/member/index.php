     
      <!-- DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user-plus"></i> Profile Member</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-condensed stripe" id="table" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th style="white-space:nowrap">No</th>
                    <th style="white-space:nowrap">First Name</th>
                    <th style="white-space:nowrap">Last Name</th>
                    <th style="white-space:nowrap">Birth place/date</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>
              </thead>

              <tbody>
              </tbody>
              
              <tfoot>
                <tr>
                    <th colspan='8'>&nbsp;</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated <?=$last_update?></div>
      </div>
