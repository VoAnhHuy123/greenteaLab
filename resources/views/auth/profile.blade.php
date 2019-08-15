@extends('layouts.app')
@section('css')

    <style>
        h4, h6 {
            margin: 10px 0px 10px 0px !important;;
        }

        h4 {
            text-align: center;
            margin: 30px 0px 30px 0px !important;
            font-weight: bold;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            float: right;
            width: 66.66%;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
            margin-top: 100px;
            margin-bottom: 50px;
        }

        .row {
            margin-right: 5px;
            margin-left: 5px;
        }

        .snippet {
            margin-top: 100px;
        }

        input, textarea, select {
            pointer-events: none;
        }
    </style>
@endsection
@section('content')

    {{--<!doctype html>--}}
    {{--<html lang="en">--}}
    {{--<head>--}}
    {{--    <meta charset="UTF-8">--}}
    {{--    <meta name="viewport"--}}
    {{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    {{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    {{--    <title>Bootstrap Example</title>--}}
    {{--    <meta charset="utf-8">--}}
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

    {{--<body>--}}

    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                         alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr><br>


                <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                </div>




                <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">
                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i
                                class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i
                                class="fa fa-google-plus fa-2x"></i>
                    </div>
                </div>

            </div><!--/col-3-->

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Your Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">Name*</label>
                                        <div class="col-8">
                                            <input value="@if(Session::has('auth')){{Session::get('auth')->name}}@endif" id="username" name="name" placeholder="Username"
                                                   class="form-control here" required="required" type="text">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Email</label>
                                        <div class="col-8">
                                            <div  class="form-control here" >@if(Session::has('auth')){{Session::get('auth')->email}}@endif</div>
                                        </div>
                                    </div>






                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label">Phone</label>
                                        <div class="col-8">
                                            <input value="@if(Session::has('auth')){{Session::get('auth')->phone}}@endif" id="lastname" name="lastname" placeholder="Phone"
                                                   class="form-control here" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="select" class="col-4 col-form-label">Gender</label>
                                        <div class="col-8">
                                            <select id="select" name="select" class="custom-select form-control here">
                                                @if(Session::has('auth'))
                                                <option value="">{{Session::get('auth')->gender}}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label">Date Of Birth</label>
                                        <div class="col-8">
                                            <input value="@if(Session::has('auth')){{Session::get('auth')->dateofbirth}}@endif" id="lastname" name="dateofbirth" placeholder="Date Of Birth"
                                                   class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label">Student Code</label>
                                        <div class="col-8">
                                            <input value="@if(Session::has('auth')){{Session::get('auth')->studentcode}}@endif" id="lastname" name="studentcode" placeholder="Student Code"
                                                   class="form-control here" type="text">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary"> <a href="{{route('editprofile')}}"> Update My
                                                    Profile</a>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            {{--            <div class="col-sm-9">--}}
            {{--                <ul class="nav nav-tabs">--}}
            {{--                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>--}}
            {{--                    <li><a data-toggle="tab" href="#messages">Menu 1</a></li>--}}
            {{--                    <li><a data-toggle="tab" href="#settings">Menu 2</a></li>--}}
            {{--                </ul>--}}


            {{--                <div class="tab-content">--}}
            {{--                    <div class="tab-pane active" id="home">--}}
            {{--                        <hr>--}}
            {{--                        <form class="form" action="##" method="post" id="registrationForm">--}}
            {{--                            @csrf--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="first_name"><h4>Name</h4></label>--}}
            {{--                                    <input value="{{Session::get('auth')->name}}" type="text" class="form-control"--}}
            {{--                                           name="name" id="first_name" placeholder="Name"--}}
            {{--                                           title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label><h4>Email</h4></label>--}}
            {{--                                    <input value="{{Session::get('auth')->email}}" type="text" class="form-control"--}}
            {{--                                           name="email" id="first_name" placeholder="Email"--}}
            {{--                                           title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="first_name"><h4>Phone</h4></label>--}}
            {{--                                    <input value="{{Session::get('auth')->phone}}" type="text" class="form-control"--}}
            {{--                                           name="phone" id="first_name" placeholder="Phone Number"--}}
            {{--                                           title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="first_name"><h4>Gender</h4></label>--}}
            {{--                                    <input value="{{Session::get('auth')->gender}}" type="text" class="form-control"--}}
            {{--                                           name="gender" id="first_name" placeholder="Gender"--}}
            {{--                                           title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="first_name"><h4>Group</h4></label>--}}
            {{--                                    <input value="{{Session::get('auth')->group}}" type="text" class="form-control"--}}
            {{--                                           name="group" id="first_name" placeholder="Group"--}}
            {{--                                           title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="form-group">--}}
            {{--                                <div class="col-xs-12">--}}
            {{--                                    <br>--}}
            {{--                                    <button class="btn btn-lg btn-success" type="submit"><i--}}
            {{--                                                class="glyphicon glyphicon-ok-sign"></i> Save--}}
            {{--                                    </button>--}}
            {{--                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>--}}
            {{--                                        Reset--}}
            {{--                                    </button>--}}

            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </form>--}}

            {{--                        <hr>--}}

            {{--                    </div><!--/tab-pane-->--}}
            {{--                    <div class="tab-pane" id="messages">--}}

            {{--                        <h2></h2>--}}

            {{--                        <hr>--}}
            {{--                        <form class="form" action="{{route('profile')}}" method="post" id="registrationForm">--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="first_name"><h4>First name</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="first_name" id="first_name"--}}
            {{--                                           placeholder="first name" title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="last_name"><h4>Last name</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="last_name" id="last_name"--}}
            {{--                                           placeholder="last name" title="enter your last name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="phone"><h4>Phone</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="phone" id="phone"--}}
            {{--                                           placeholder="enter phone" title="enter your phone number if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="form-group">--}}
            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="mobile"><h4>Mobile</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="mobile" id="mobile"--}}
            {{--                                           placeholder="enter mobile number" title="enter your mobile number if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="email"><h4>Email</h4></label>--}}
            {{--                                    <input type="email" class="form-control" name="email" id="email"--}}
            {{--                                           placeholder="you@email.com" title="enter your email.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="email"><h4>Location</h4></label>--}}
            {{--                                    <input type="email" class="form-control" id="location" placeholder="somewhere"--}}
            {{--                                           title="enter a location">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="password"><h4>Password</h4></label>--}}
            {{--                                    <input type="password" class="form-control" name="password" id="password"--}}
            {{--                                           placeholder="password" title="enter your password.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="password2"><h4>Verify</h4></label>--}}
            {{--                                    <input type="password" class="form-control" name="password2" id="password2"--}}
            {{--                                           placeholder="password2" title="enter your password2.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}
            {{--                                <div class="col-xs-12">--}}
            {{--                                    <br>--}}
            {{--                                    <button class="btn btn-lg btn-success" type="submit"><i--}}
            {{--                                                class="glyphicon glyphicon-ok-sign"></i> Save--}}
            {{--                                    </button>--}}
            {{--                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>--}}
            {{--                                        Reset--}}
            {{--                                    </button>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </form>--}}

            {{--                    </div><!--/tab-pane-->--}}
            {{--                    <div class="tab-pane" id="settings">--}}


            {{--                        <hr>--}}
            {{--                        <form class="form" action="##" method="post" id="registrationForm">--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="first_name"><h4>First name</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="first_name" id="first_name"--}}
            {{--                                           placeholder="first name" title="enter your first name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="last_name"><h4>Last name</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="last_name" id="last_name"--}}
            {{--                                           placeholder="last name" title="enter your last name if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="phone"><h4>Phone</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="phone" id="phone"--}}
            {{--                                           placeholder="enter phone" title="enter your phone number if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="form-group">--}}
            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="mobile"><h4>Mobile</h4></label>--}}
            {{--                                    <input type="text" class="form-control" name="mobile" id="mobile"--}}
            {{--                                           placeholder="enter mobile number" title="enter your mobile number if any.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="email"><h4>Email</h4></label>--}}
            {{--                                    <input type="email" class="form-control" name="email" id="email"--}}
            {{--                                           placeholder="you@email.com" title="enter your email.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="email"><h4>Location</h4></label>--}}
            {{--                                    <input type="email" class="form-control" id="location" placeholder="somewhere"--}}
            {{--                                           title="enter a location">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="password"><h4>Password</h4></label>--}}
            {{--                                    <input type="password" class="form-control" name="password" id="password"--}}
            {{--                                           placeholder="password" title="enter your password.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}

            {{--                                <div class="col-xs-6">--}}
            {{--                                    <label for="password2"><h4>Verify</h4></label>--}}
            {{--                                    <input type="password" class="form-control" name="password2" id="password2"--}}
            {{--                                           placeholder="password2" title="enter your password2.">--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}
            {{--                                <div class="col-xs-12">--}}
            {{--                                    <br>--}}
            {{--                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i--}}
            {{--                                                class="glyphicon glyphicon-ok-sign"></i> Save--}}
            {{--                                    </button>--}}
            {{--                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </form>--}}
            {{--                    </div>--}}

            {{--                </div><!--/tab-pane-->--}}
            {{--            </div><!--/tab-content-->--}}

        </div><!--/col-9-->
    </div><!--/row-->

@endsection
@section('script')

@endsection