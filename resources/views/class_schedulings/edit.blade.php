@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Scheduling
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classScheduling, ['route' => ['classSchedulings.update', $classScheduling->schedule_id], 'method' => 'patch']) !!}

                                    <!-- Course Id Field -->

            <!-- Course Id Field -->
            <div class="form-group col-sm-6">
                        {!! Form::label('course_id', 'Course Id:') !!}
                        {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
                    </div>

            <!-- Class Id Field -->
            <div class="form-group col-sm-6">
                        {!! Form::label('class_id', 'Class Id:') !!}
                        {!! Form::number('class_id', null, ['class' => 'form-control']) !!}  
            </div>

            <!-- Level Id Field -->
            <div class="form-group col-sm-6">
                        {!! Form::label('level_id', 'Level Id:') !!}
                        {!! Form::number('level_id', null, ['class' => 'form-control']) !!} 
            </div>

            <!-- Shift Id Field -->
            <div class="form-group col-sm-6">
                         {!! Form::label('shift_id', 'Shift Id:') !!}
                        {!! Form::number('shift_id', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Classroom Id Field -->
            <div class="form-group col-sm-6">
                        {!! Form::label('classroom_id', 'Classroom Id:') !!}
                        {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!} 
            </div>



            <!-- Batch Id Field -->
            <div class="form-group col-sm-6">
                         {!! Form::label('batch_id', 'Batch Id:') !!}
                        {!! Form::number('batch_id', null, ['class' => 'form-control']) !!}  
            </div>

            <!-- Day Id Field -->
            <div class="form-group col-sm-6">
                       {!! Form::label('day_id', 'Day Id:') !!}
                        {!! Form::number('day_id', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Time Id Field -->
            <div class="form-group col-sm-6">
                         {!! Form::label('time_id', 'time Id:') !!}
                        {!! Form::number('time_id', null, ['class' => 'form-control']) !!}  
            </div>

            <!-- Teacher Id Field -->
            <div class="form-group col-sm-6">
                       {!! Form::label('teacher_id', 'Teacher Id:') !!}
                        {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
            </div>


            <!-- Status Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('status', 'Status:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', '1', null) !!}
                </label>



            </div>
            </div>
             <!-- Submit Field -->
             <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        {!! Form::submit('Update Schedule', ['class' => 'btn btn-primary']) !!}
                    <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection