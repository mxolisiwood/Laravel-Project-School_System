<div class="table-responsive">
    <table class="table" id="treansactions-table">
        <thead>
            <tr>
                <th>Student Id</th>
        <th>Fee Id</th>
        <th>User Id</th>
        <th>Paid</th>
        <th>Transaction Date</th>
        <th>Remark</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($treansactions as $treansaction)
            <tr>
                <td>{{ $treansaction->student_id }}</td>
            <td>{{ $treansaction->fee_id }}</td>
            <td>{{ $treansaction->user_id }}</td>
            <td>{{ $treansaction->paid }}</td>
            <td>{{ $treansaction->transaction_date }}</td>
            <td>{{ $treansaction->remark }}</td>
            <td>{{ $treansaction->description }}</td>
                <td>
                    {!! Form::open(['route' => ['treansactions.destroy', $treansaction->transaction_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('treansactions.show', [$treansaction->transaction_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('treansactions.edit', [$treansaction->transaction_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
