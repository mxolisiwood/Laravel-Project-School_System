<!-- Batch Field -->
<div class="form-group">
    {!! Form::label('batch_id', 'id:') !!}
    <p>{{ $batche->batch_id }}</p>
</div>

<div class="form-group">
    {!! Form::label('batch', 'Batch:') !!}
    <p>{{ $batche->batch }}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Date Created:') !!}
    <p>{{ $batche->created_at }}</p>
</div>

<div class="form-group">
    {!! Form::label('updated_at', 'Date Updated:') !!}
    <p>{{ $batche->updated_at }}</p>
</div>

