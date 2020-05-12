<div class="row">
   <div class="col-lg-12">

<!-- Modal using bootstap-->
<div class="modal fade" id="teacher-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">New Teacher</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    
 <div class="panel panel-default">

     <div class="panel-heading">
     <b><i class="fa fa-user"></i><legend>Teacher Details</legend>
      <h3> Teacher No: </h3></b>
     <b class="pull-right"></b>
     </div>

     <div class="panel-body" style="padding-bottom:4px;">

       <input type="hidden" name="class_id" id="class_id" required>
       <input type="hidden" name="date_registered" id="date_registered" value="{{date('Y-m-d')}}">
       <div class="row">
       <div class="col-lg-9 col-md-9 col-sm-9">

<!-- First Name Field -->

<div>
<div class="col-md-6">
<div class="form-group">
<input type="text" name="first_name" id="first_name" class="form-control text-capitalaze"
 placeholder="Enter First Name">
</div>
</div>



<!-- Last Name Field -->
<div>
<div class="col-md-6">
<div class="form-group">
<input type="text" name="last_name" id="last_name" class="form-control text-capitalaze"
 placeholder="Enter Last Name">
</div>
</div>




<!-- Gender Field -->
<div class="col-md-6">
  <div class="form-group">
  <fieldset>
  <legend for="gender">Gender</legend>
  <table style="width:100%;margin-top: 14px;">
  <tr style="border-bottom:1px solid #ccc;">
  <td>
  <label>
     <input type="radio" name="gender" id="gender" value = "0">
       Male
  </label>
  </td>

  <td>
  <label>
     <input type="radio" name="gender" id="gender" value = "1">
       Female
  </label>
  </td>

  <td>
  <label>
     <input type="radio" name="gender" id="gender" value = "2">
       Other
  </label>
  </td>
  </tr>
  </table>
  </fieldset>
  </div>
</div>
</div>






<!-- Email Field -->
<div clas="col-md-6">
<div class="form-group">
<input type="text" name="email" id="email" class="form-control text-capitalize"
placeholder="Enter Email Address">
</div>
</div>





<!-- Dob Field -->
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<div class="inout-group-addon">
<i class="fa fa-calender teacherdob"></i>
</div>
<input type="text" name="dob" id="dob" class="form-control text-capitalize" placeholder="YYYY-MM-DD">
</div>
</div>
</div>




<!-- Phone Field -->
<div clas="col-md-6">
<div class="form-group">
<input type="text" name="phone" id="phone" class="form-control text-capitalize"
placeholder="Enter Phone Number">
</div>
</div>





<!-- Address Field -->
<div class="panel-heading" style="margin-top: -20px;">
<b><i class="fa fa-map-marker"></i> Address</b>
</div>
<br>
<div class="panel-body" style="padding-bottom:10px;margin-top: 0;">


<div class="row">
<div class="col-md-6">
<div class="form-group">
<textarea placeholder="Enter Address" name="address" id="address"
cols="40" rows="2" class="form-control text-capitalize"></textarea>
</div>
</div>
</div>
</div>



<!-- Current Address Field -->

<div class="row">
<div class="col-md-6">
<div class="form-group">
<textarea placeholder="Enter Address" name="current_address" id="current_address"
cols="40" rows="2" class="form-control text-capitalize"></textarea>
</div>
</div>
</div>
</div>





<!-- Nationality Field -->
<div clas="col-md-6">
<div class="form-group">
<input type="text" name="nationality" id="nationality" class="form-control text-capitalize"
placeholder="Enter Nationality">
</div>
</div>




<!-- Passport Field -->
<div class="col-md-6">
<div class="form-group">
<input type="text" name="passport" id="passport" class="form-control text-capitalaze"
 placeholder="Enter Passport Number">
</div>
</div>




<!-- Date Registered Field -->
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<div class="inout-group-addon">
<i class="fa fa-calender teacherdob"></i>
</div>
<input type="text" name="date_registered" id="date_registered" class="form-control text-capitalize" placeholder="YYYY-MM-DD">
</div>
</div>
</div>






<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="col-lg-3 col-md-3 col-sm-3">
<div class="form-group form-group-login">
<table style="margin:0 auto;">
<thread>
     <tr class="info">
     </tr>
     </thread>
     <tbody>
     <tr>
       <td class="image">
           {{!!Html::image('teacher_image/profile.jpg',null,['class'=>'teacher-image','id'=>'showImage']) !!}}
           <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
        </td>
     </tr>
     <tr>
        <td style="text-align:center;background:#ddd;"> 
        <input type="button" name="browse_file" id="browse_file"
        class="form-control text-capitalize btn-choose" class="btn btn-outline-danger" value="Choose">
        </td>
        </tr>
     </tbody >
</table> 
</div>
</div>
</div>
</div>
<br>      



<!-- Status Field -->
<div class="col-md-6">
  <div class="form-group">
  <fieldset>
  <legend>Status</legend>
  <table style="width:100%;margin-top:-14px;">
  <tr style="border-bottom: 1px solid #ccc;">
  <td>
  <label>
     <input type="radio" name="status" id="status" value="0" required checked>
     Single
  </label>
  </td> 

  <td>
  <label>
     <input type="radio" name="status" id="status" value="1" required >
     Married
  </label>
  </td>
  </tr>
  </table>
  </fieldset>
  </div>
</div>  




<!-- Submit Field -->
<div class="modal-footer">
 <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    {!! Form::submit('Add Teacher', ['class' => 'btn btn-primary']) !!}
   <!-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

