

@extends('layouts.default')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12">
        <h2>Event</h2>
    </div>
</div>

<div class="row">
<div class="col-sm-6 col-sm-offset-3">
  <form action="/manageuser/event/create"  method="post"  class="form-horizontal" >
      {{csrf_field()}}
    <input type="hidden" value="{{$userId}}" name="user_id">
  <div class="form-group" id="data_1">
      <label class="font-noraml">Enter date</label>
      <div class="input-group date">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input id="inputcaleander" name="date" type="text" class="form-control" value="">
      </div>
  </div>
  <div class="form-group">
      <label class="font-noraml">Task</label>
      <div class="input-group date">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input  type="text" name="task" class="form-control" value="">
      </div>
  </div>
  <div class="input-group date">

      <button  type="submit" class="form-control" class="btn btn-primary" value="">Submit</button>
  </div>
</form>
</div>
</diV>
@endsection
@section('extra_script')


<script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script type="text/javascript" src=' http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js '></script>

<script>


   $("#inputcaleander").datepicker();

 </script>



<!--test -->
<!-- Date range picker -->
@endsection
