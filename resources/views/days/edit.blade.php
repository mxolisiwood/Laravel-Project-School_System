@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                      <!-- Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('days.index') }}" class="btn btn-default">Cancel</a>
                </div>

                <!-- Submit Field -->
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    {!! Form::submit('Update Day', ['class' => 'btn btn-primary']) !!}
                <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection