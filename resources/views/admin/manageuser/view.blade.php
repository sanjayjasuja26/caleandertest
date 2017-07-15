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
              <div class="col-lg-6 col-lg-offset-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                      <div class="row">
                       <div class="col-lg-12" style="text-align:center">
                         <h2 style="color:blue">User Informancation</h2>
                       </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-6">
                          Name
                        </div>
                        <div class="col-lg-6" >
                          {{$user->name}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6" >
                          Email
                        </div>
                        <div class="col-lg-6" >
                          {{$user->email}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6" >
                          Created_at
                        </div>
                        <div class="col-lg-6" >
                          {{$user->created_at}}
                        </div>
                      </div>



                    </div>
                </div>
            </div>

            </div>
            </div>
@endsection
