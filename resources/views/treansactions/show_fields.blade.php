<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $treansaction->student_id }}</p>
</div>

<!-- Fee Id Field -->
<div class="form-group">
    {!! Form::label('fee_id', 'Fee Id:') !!}
    <p>{{ $treansaction->fee_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $treansaction->user_id }}</p>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $treansaction->paid }}</p>
</div>

<!-- Transaction Date Field -->
<div class="form-group">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{{ $treansaction->transaction_date }}</p>
</div>

<!-- Remark Field -->
<div class="form-group">
    {!! Form::label('remark', 'Remark:') !!}
    <p>{{ $treansaction->remark }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $treansaction->description }}</p>
</div>

