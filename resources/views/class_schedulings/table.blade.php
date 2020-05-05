<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course </th>
        <th>Level </th>
        <th>Shift </th>
        <th>Classroom </th>
        <th>Batch </th>
        <th>Day </th>
        <th>Time </th>
        <th>Teacher </th>
        
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td>{!! $classScheduling->course_name !!}</td>
            <td>{!! $classScheduling->level !!}</td>
            <td>{!! $classScheduling->shift !!}</td>
            <td>{!! $classScheduling->classroom_name !!}</td>
            <td>{!! $classScheduling->batch !!}</td>
            <td>{!! $classScheduling->name !!}</td>
            <td>{!! $classScheduling->time !!}</td>
            <td>{!! $classScheduling->last_name !!}</td>
           
            <td> 
               @if($classScheduling->status == 1)
                 <div style="color:green"> Active </div>
                 @else 
                  <div style="color:red"> Inactive </div>
                 @endif 
            
            </td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classScheduling->schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
