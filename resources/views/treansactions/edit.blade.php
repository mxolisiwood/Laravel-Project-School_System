@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Treansaction
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($treansaction, ['route' => ['treansactions.update', $treansaction->id], 'method' => 'patch']) !!}

                        @include('treansactions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection