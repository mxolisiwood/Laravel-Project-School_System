<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batche)
            <tr>
                <td>{{ $batche->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batche->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('batches.show', [$batche->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('batches.edit', [$batche->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal using bootstap-->
<div class="modal fade" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Batch Field -->
<div class="input-group col-md-12">
<span class="input-group-addon">Batch Year</span>
   <!--{!! Form::label('batch', 'Batch:') !!}-->
    {!! Form::text('batch', null, ['class' => 'form-control']) !!}
</div>

</div>
<!-- Submit Field -->
<div class="modal-footer">
 <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Create Batch', ['class' => 'btn btn-primary']) !!}
   <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
</div>
</div>
</div>
</div>
</div>

