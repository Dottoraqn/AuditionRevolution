<div class="modal fade start-modal-lg" tabindex="-1" role="dialog" aria-labelledby="large" id="create">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Begin a Project</h4>
        </div>
        <div class="modal-body">
          {!! Form::open(['url' => 'home']) !!}

          <div class="form-group"> 
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
          </div>

          <div class="form-group"> 
            {!! Form::label('location', 'Location:') !!}
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
          </div>   

          <div class="form-group"> 
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
          </div>       

          <div class="form-group"> 
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
          </div>  

          {!! Form::close() !!}
        </div>
        <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
        </div>
    </div>
  </div>
</div>
