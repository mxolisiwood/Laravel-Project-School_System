@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Class Assignings</h1>
        <h1 class="pull-right">
        <a data-toggle="modal" data-target="#class_assigning-add-modal" 
        class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" 
           >Add New class_assigning</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('class_assignings.table')
                    {!! Form::open(['route' => 'classAssignings.store']) !!}

                        @include('class_assignings.fields')

                        {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

