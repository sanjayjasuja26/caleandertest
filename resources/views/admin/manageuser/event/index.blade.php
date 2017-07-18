@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
                    <h2>Event</h2>
                    <a href="/manageuser/event/create/{{$userId}}" class="btn btn-primary pull-right">create</a>
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
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content">

                            <div class="table-responsive">
                              @if(count($events) > 0)
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Task </th>
                                        <th>Time</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                     @foreach($events as $event)
                                      <tr>
                                          <td>{{$event->task}}</td>
                                          <td>{{$event->time}}</td>
                                          <td>{{$event->date}}</td>
                                          <td>{{$event->enddate}}</td>
                                          <td>
                                              <a href="/manageuser/event/delete/{{$event->id}}" class="btn btn-danger" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                          </td>
                                      </tr>
                                      @endforeach


                                     </tbody>
                                </table>
                              @endif
                            </div>

                        </div>
                    </div>
                </div>

            </div>



  @endsection
