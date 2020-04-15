@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
          <i class="fa fa-registered"> Role </i>
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
          {!! Form::model($role, ['route' => ['roles.update', $role->roles_id], 'method' => 'put']) !!}
                 
                 <!-- Name Field -->
                <div class="form-group col-md-6">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
               

                <!-- Submit Field --
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                </div>-->

                
                    <div>
                     
                      {!! Form::submit('Update Role', ['class' => 'btn btn-info']) !!}
                    
                    </div>
                  
                    
                      <!--  @include('roles.fields')-->

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection