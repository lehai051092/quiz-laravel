@extends('layouts.admin.admin')
@section('title')
    <title>Change Password Form</title>
@endsection
@section('section')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Change Password Forms
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{ route('admin.user.post.change.password', ['id' => $user->id]) }}"
                                  method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control" name="old_password"
                                           @if($errors->has('old_password')) style="border: solid red" @endif >
                                    @if($errors->has('old_password'))
                                        <p class="text-danger">{{$errors->first('old_password')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control" name="new_password"
                                           @if($errors->has('new_password')) style="border: solid red" @endif >
                                    @if($errors->has('new_password'))
                                        <p class="text-danger">{{$errors->first('new_password')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control" name="confirm_new_password"
                                           @if($errors->has('confirm_new_password')) style="border: solid red" @endif >
                                    @if($errors->has('confirm_new_password'))
                                        <p class="text-danger">{{$errors->first('confirm_new_password')}}</p>
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
