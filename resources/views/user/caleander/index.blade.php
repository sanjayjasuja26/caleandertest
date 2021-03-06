@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2><i class="fa fa-calendar" aria-hidden="true"></i>Caleander</h2>
                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol> -->
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div> -->
            </div>
            <div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Striped Table </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal-title"></h4>
        </div>
        <div class="modal-body" >
       Start date
        </div>
        <div class="modal-body" id="startdate">

        </div>
        <div class="modal-body" >
           End Date:
        </div>
        <div class="modal-body"  id="enddate">
        </div>
        <div class="modal-body" >
         Time:

        </div>
        <div class="modal-body"  id="time">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  @endsection

  @section('extra_script')
<script>

      $(document).ready(function() {


          $('#calendar').fullCalendar({
            header: {
                      left: 'prev,next, today',
                      center: 'title',
                      right: 'month,basicWeek,basicDay'
                    },


        events: [


                @foreach($dates as $date)
                {

                  title: '{{$date->task}}',
                  start: '{{$date->date}}',
                  end: '{{$date->enddate}}',
                  time: '{{$date->time}}',


                },
               @endforeach





             ],
             eventClick: function(event) {
              $("#modal-title").text(event.title);
              $("#startdate").text(event.start);
              $("#enddate").text(event.end);
              $("#time").text(event.time);
              $('#myModal').modal('show');
              }
          });


      });

  </script>
@endsection
