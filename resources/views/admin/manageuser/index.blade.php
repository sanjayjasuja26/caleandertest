@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Dashboard</h2>
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
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name </th>
                                        <th>Email</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @if($users->count()>0)
                                    @foreach($users as $user)
                                      <tr>
                                          <td><div class="icheckbox_square-green checked" style="position: relative;"><input checked="" class="i-checks" name="input[]" style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->created_at}}</td>
                                          <td>
                                              <a href="/manageuser/view/{{$user->id}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>view</a>
                                              <a href="/manageuser/access/{{$user->id}}" class="btn btn-primary"><i class="fa fa-key" aria-hidden="true"></i> access</a>
                                              <a href="/manageuser/event/{{$user->id}}" class="btn btn-primary"><i class="fa fa-calendar-o" aria-hidden="true"></i> Event</a>
                                          </td>
                                      </tr>
                                    @endforeach
                                    @endif
                                  </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            </div>
@endsection
