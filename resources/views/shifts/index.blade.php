@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Shifts</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" ><i class="fa fa-plus-circle" arial-hidden="true" data-toggle="modal" data-target="#shift-add-modal">Add New Shift</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('shifts.table')

                    {!! Form::open(['route' => 'shifts.store']) !!}

                        @include('shifts.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

