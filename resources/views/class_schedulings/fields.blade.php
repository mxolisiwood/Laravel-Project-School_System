<div class="modal fade" id="class_schedule-add-modal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="exampleModalLongTitle">Add New Batch</h5>-->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class ="modal-tile">Class Schedule</h4>
      </div>
      <div class="panel-body" style="border-bottom: 1px solid #ccc;">
      <div class="form-group">

      <div class="row"></div>
<!-- Course Id Field -->

<div class="form-group col-sm-6">
     <select class="form-control" name="course_id" id="course_id">
        <option value ="">Select Course</option>
        <option value=""></option>
     </select>   
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
     <select class="form-control" name="class_id" id="class_id">
        <option value ="">Select Class</option>
        <option value=""></option>
     </select>   
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="level_id" id="level_id">
        <option value ="">Select Level</option>
        <option value=""></option>
     </select>   
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="shift_id" id="shift_id">
        <option value ="">Select Shift</option>
        <option value=""></option>
     </select>  
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="classroom_id" id="classroom_id">
        <option value ="">Select Classroom</option>
        <option value=""></option>
     </select>  
</div>



<!-- Batch Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="batch_id" id="batch_id">
        <option value ="">Select Batch</option>
        <option value=""></option>
     </select>  
</div>

<!-- Day Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="day_id" id="day_id">
        <option value ="">Select Day</option>
        <option value=""></option>
     </select>  
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="time_id" id="time_id">
        <option value ="">Select Time</option>
        <option value=""></option>
     </select>  
</div>

<!-- Teacher Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="teacher_id" id="teacher_id">
        <option value ="">Select Teacher</option>
        <option value=""></option>
     </select> 
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="start_time" id="start_time">
        <option value ="">Select Time</option>
        <option value=""></option>
     </select> 
</div>
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="end_time" id="end_time">
        <option value ="">Select Time</option>
        <option value=""></option>
     </select> 
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>



</div>
</div>
</div>
<div class="modal-footer">
<button type ="submit" class="btn btn-success btn-sm">Generate ClassSchedule</button>
</div>
</div>
</div>
</div>
