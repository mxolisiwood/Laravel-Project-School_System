@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Shift
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($shift, ['route' => ['shifts.update', $shift->shift_id], 'method' => 'patch']) !!}

                     <!-- Shift Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('shift', 'Shift:') !!}
                        {!! Form::text('shift', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('shifts.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection