<div class="table-responsive">
    <table class="table" id="classAssignings-table">
        <thead>
            <tr>
                <th>Course </th>
        <th>Level </th>
        <th>Shift </th>
        <th>Classroom </th>
        <th>Batch </th>
        <th>Time </th>
       
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classAssignings as $classAssigning)
            <tr>
                <td>{!! $classAssigning->course_name !!}</td>
            <td>{!! $classAssigning->level !!}</td>
            <td>{!! $classAssigning->shift !!}</td>
            <td>{!! $classAssigning->classroom_name !!}</td>
            <td>{!! $classAssigning->batch !!}</td>
            <td>{!! $classAssigning->time !!}</td>
            
                <td>
                    {!! Form::open(['route' => ['classAssignings.destroy', $classAssigning->assign_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classAssignings.show', [$classAssigning->assign_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classAssignings.edit', [$classAssigning->assign_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
