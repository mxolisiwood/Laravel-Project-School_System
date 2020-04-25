@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academic, ['route' => ['academics.update', $academic->academic_id], 'method' => 'patch']) !!}

                  
                <!-- Academic Year Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('academic_year', 'Academic Year:') !!}
                    {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Submit Field -->
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    {!! Form::submit('Update Academic', ['class' => 'btn btn-primary']) !!}
                <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection