<!-- Modal using bootstap-->
<div class="modal fade" id="class-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Class Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_name', 'Class Name:') !!}
    {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_code', 'Class Code:') !!}
    {!! Form::text('class_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classes.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Submit Field -->
<div class="modal-footer">
 <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Class', ['class' => 'btn btn-primary']) !!}
   <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
</div>
</div>
</div>
</div>
</div>
