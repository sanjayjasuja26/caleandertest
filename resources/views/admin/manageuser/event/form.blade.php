@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
                    <h2>Event</h2>

                </div>
            </div>
            <div class="input-group">
                <input id="FromDateTime" type="text" class="form-control startDate" name="starting_date"  value="" placeholder="" required>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>
@endsection
  @section('extra_script')

<script>
       $(document).ready(function(){

         $('.clockpicker').clockpicker();


     $(".startDate").datepicker({

          format: "dd MM yyyy - hh:ii"
     });



       });

 </script>
  @endsection
