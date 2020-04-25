<!-- Modal using bootstap-->
<div class="modal fade" id="academic-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Academic Year</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Academic Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('academic_year', 'Academic Year:') !!}
    {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="modal-footer">
 <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Academic', ['class' => 'btn btn-primary']) !!}
   <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
</div>
</div>
</div>
</div>
</div>