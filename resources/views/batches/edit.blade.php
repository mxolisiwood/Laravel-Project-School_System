@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batche
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batche, ['route' => ['batches.update', $batche->batch_id], 'method' => 'patch']) !!}

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
                {!! Form::submit('Update Batch', ['class' => 'btn btn-primary']) !!}
            <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
            </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection