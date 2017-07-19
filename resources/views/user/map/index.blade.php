@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Location Map</h2>
                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol> -->
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="/map/location/create" class="btn btn-primary">create</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content">

                            <div class="table-responsive">
                              @if(count($locations)>0)
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Location </th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($locations as $location)
                                      <tr>
                                          <td>{{$location->location}} </td>
                                          <td>{{$location->description}}</td>
                                          <td>{{$location->created_at}}</td>
                                          <td><a href="/map/location/view/{{$location->id}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>view</a>
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
