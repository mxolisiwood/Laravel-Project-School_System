@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Teacher
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($teacher, ['route' => ['teachers.update', $teacher->teacher_id], 'method' => 'patch']) !!}

                                    
            <!-- First Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('first_name', 'First Name:') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Last Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('last_name', 'Last Name:') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Gender Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::text('gender', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Email Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Dob Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('dob', 'Dob:') !!}
                {!! Form::date('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
            </div>


            <!-- Phone Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Address Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Current Address Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('current_address', 'Current Address:') !!}
                {!! Form::textarea('current_address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Nationality Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nationality', 'Nationality:') !!}
                {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Passport Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('passport', 'Passport:') !!}
                {!! Form::text('passport', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Status Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('status', 'Status:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', '1', null) !!}
                </label>
            </div>


            <!-- Date Registered Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('date_registered', 'Date Registered:') !!}
                {!! Form::date('date_registered', null, ['class' => 'form-control','id'=>'date_registered']) !!}
            </div>

            

            <!-- User Id Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('user_id', 'User Id:') !!}
                {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Image Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('image', 'Image:') !!}
                {!! Form::text('image', null, ['class' => 'form-control']) !!}
            </div>

               <!-- Submit Field -->
               <div class="form-group col-sm-12">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection