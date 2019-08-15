@extends('layouts.app')
@section('content')
    <section>


        <div class="container">
            <h1>Edit Profile</h1>
            <hr>
            <div class="row">
                <!-- left column -->

                <form class="form-horizontal" role="form" onsubmit="onSubmit(event,this)" method="post">
                    {!! csrf_field() !!}

                    <div class="col-md-3">
                        <div class="text-center form-group">
                            <img id="avt" src="{{asset('storage/avatars/'.$avatar)}}" class="avatar img-circle" alt="avatar">
                            <h6>Upload a different photo...</h6>

                            <input type="file" name="avatar" class="form-control">
                        </div>
                    </div>

                    <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        <div id="noti" hidden class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a>
                            <i class="fa fa-coffee"></i>
                            This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                        <h3>Personal info: </h3>


                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">

                                <input class="form-control" name="name" value='{{$name}}'>


                                @if($errors->has('name'))
                                    <p style="color:red">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="email" value='{{$email}}'>
                                @if($errors->has('email'))
                                    <p style="color:red">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="phone" value='{{$phone}}'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sex:</label>
                            <div class="col-lg-8">

                                <select class="form-control" name="sex">
                                    <option value="Male" selected="{{$sex == 'Male'?'true':'false'}}"> Male</option>
                                    <option value="Female" selected="{{$sex == 'FeMale'?'true':'false'}}">Female</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" name="password" type="password" placeholder="Password">
                                @if($errors->has('password'))
                                    <p style="color:red">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Retype password:</label>
                            <div class="col-md-8">
                                <input class="form-control" name="re_password" type="password"
                                       placeholder="Retype Password">
                                @if($errors->has('re_password'))
                                    <p style="color:red">{{$errors->first('re_password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <span></span>
                                <input type="reset" class="btn btn-default" value="Cancel">
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    <hr>
        <script>
            function onSubmit(e) {
                e.preventDefault();

                const name = $("input[name='name']").val();
                const email = $("input[name='email']").val();
                const phone = $("input[name='phone']").val();
                const sex = $("select[name='sex']").val();
                const password = $("input[name='password']").val();
                const re_password = $("input[name='re_password']").val();
                const avatar =  $("input[name='avatar']")[0].files[0] ;

                const fd = new FormData();
                fd.append('name', name);
                fd.append('email', email);
                fd.append('phone', phone);
                fd.append('sex', sex);

                if (password !== "") {
                    fd.append('password', password);    
                    fd.append('re_password', re_password);
                }
                if (avatar !== undefined) {
                    fd.append('avatar', avatar);
                }
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });
                $.ajax( '{{route("profile")}}', {
                    type: 'POST',
                    data: fd,
                    processData: false,
                    contentType: false,
                    success: (data) => {
                        $('#noti').text(data.message);
                        $('#noti').show();
                        $('#avt').attr('src',"{{asset('storage/avatars/')}}" + "/" + data.path);

                        // var newDoc = document.open("text/html", "replace");
                        // newDoc.write(data);
                        // newDoc.close();
                    }
                });
            }
        </script>
    </section>
@endsection

