@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Class Schedulings</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#class_schedule-add-modal" class="btn btn-success pull-right" 
           style="margin-top: -10px;margin-bottom: 5px">Generate New ClassSchedule</a>
           
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('class_schedulings.table')
                    @include('class_schedulings.fields')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

