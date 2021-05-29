@extends('layouts.admin.admin')
@section('title')
    <title>Add Form</title>
@endsection
@section('css')
    <link href="{{ asset('public/admin/css/quiz/upload.css')  }}" rel="stylesheet">
@endsection
@section('section')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Forms
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{ route('admin.user.post.add') }}" enctype="multipart/form-data"
                                  method="post">
                                @csrf
                                <div class="form-group">
                                    <img id='img-upload' class="img-upload"/>
                                    <input type="file" name="image_path"
                                           @if($errors->has('image_path')) style="border: solid red" @endif>
                                    <p class="help-block">Upload type image, mimes:jpeg,jpg,png and 2Mb</p>
                                    @if($errors->has('image_path'))
                                        <p class="text-danger">{{$errors->first('image_path')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="first_name"
                                           @if($errors->has('first_name')) style="border: solid red" @endif>
                                    @if($errors->has('first_name'))
                                        <p class="text-danger">{{$errors->first('first_name')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="last_name"
                                           @if($errors->has('last_name')) style="border: solid red" @endif>
                                    @if($errors->has('last_name'))
                                        <p class="text-danger">{{$errors->first('last_name')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="text" class="form-control" name="email"
                                           @if($errors->has('email')) style="border: solid red" @endif>
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password"
                                           @if($errors->has('password')) style="border: solid red" @endif>
                                    @if($errors->has('password'))
                                        <p class="text-danger">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" class="form-control" name="confirm_password"
                                           @if($errors->has('confirm_password')) style="border: solid red" @endif>
                                </div>
                                @if($errors->has('confirm_password'))
                                    <p class="text-danger">{{$errors->first('confirm_password')}}</p>
                                @endif
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control m-bot15" name="status"
                                            @if($errors->has('status')) style="border: solid red" @endif>
                                        <option value="">Selected</option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::ENABLE_STATUS }}">
                                            Enable
                                        </option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::DISABLE_STATUS }}">
                                            Disable
                                        </option>
                                    </select>
                                    @if($errors->has('status'))
                                        <p class="text-danger">{{$errors->first('status')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Group</label>
                                    <select class="form-control m-bot15" name="group"
                                            @if($errors->has('group')) style="border: solid red" @endif>
                                        <option value="">Selected</option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::GROUP_USER_ADMIN }}">
                                            Admin
                                        </option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::GROUP_USER_STAFF }}">
                                            Staff
                                        </option>
                                    </select>
                                    @if($errors->has('group'))<p
                                        class="text-danger">{{$errors->first('group')}}</p>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('public/admin/js/quiz/upload.js') }}"></script>
@endsection
