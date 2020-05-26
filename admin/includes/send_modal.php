<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Send New Message</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="mssge_add.php">
          		  <div class="form-group">
                  	<label for="to" class="col-sm-3 control-label">To</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="to" name="to" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="mssge" class="col-sm-3 control-label">Message</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="mssge" id="mssge" required></textarea>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Edit Message</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="mssge_edit.php">
                <div class="form-group">
                    <label for="to" class="col-sm-3 control-label">To</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="to" name="to" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mssge" class="col-sm-3 control-label">Message</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="mssge" id="mssge" required></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
          	</div>
        </div>
    </div>
</div>

     