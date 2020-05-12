<div class="modal fade" id="class_assigning-add-modal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" style="width:90%">
    <div class="modal-content">
      <div class="modal-header">
        <!--<h5 class="modal-title" id="exampleModalLongTitle">Add New Batch</h5>-->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class ="modal-tile">Class Assigning</h4>
      </div>
      <div class="panel-body" style="border-bottom: 1px solid #ccc;">
      <div class="form-group">

      <div class="row"></div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
     <select class="form-control" name="course_id" id="course_id">
        <option value ="">Select Course</option>
        <!-- using a foreach loop to get all data from controller-->
        @foreach($course as $cou)
        <option value="{{$cou->course_id}}">{{$cou->course_name}}</option>
        @endforeach
     </select>   
</div>



<!-- Level Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="level_id" id="level_id">
        <option value ="">Select Level</option>
        @foreach($level as $lev)
        <option value="{{$lev->level_id}}">{{$lev->level}}</option>
        @endforeach
     </select>   
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="shift_id" id="shift_id">
        <option value ="">Select Shift</option>
        @foreach($shift as $shf)
        <option value="{{$shf->shift_id}}">{{$shf->shift}}</option>
        @endforeach
     </select>  
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="classroom_id" id="classroom_id">
        <option value ="">Select Classroom</option>
        @foreach($classroom as $clrm)
        <option value="{{$clrm->classroom_id}}">{{$clrm->classroom_name}}</option>
        @endforeach
     </select>  
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="batch_id" id="batch_id">
        <option value ="">Select Batch</option>
        @foreach($batche as $btch)
        <option value="{{$btch->batch_id}}">{{$btch->batch}}</option>
        @endforeach
     </select>  
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-6">
    <select class="form-control" name="time_id" id="time_id">
        <option value ="">Select Time</option>
        @foreach($time as $time)
        <option value="{{$time->time_id}}">{{$time->time}}</option>
        @endforeach
     </select>  
</div>

<!-- Submit Field -->
</div>
</div>
</div>
<div class="modal-footer">
<button type ="submit" class="btn btn-success btn-sm">Generate ClassAssigning</button>
</div>
</div>
</div>
</div>