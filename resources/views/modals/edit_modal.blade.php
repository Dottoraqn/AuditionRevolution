
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="large" id="">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Edit {{$audition->name}}</h4>
        </div>
        <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Collaborators:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="control-label">Role:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
        </div>
    </div>
  </div>
</div>
