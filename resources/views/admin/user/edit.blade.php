@extends('layouts.admin.admin')
@section('section')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Forms
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{ route('admin.post.edit', ['id' => $user->id]) }}"
                                  enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="first_name"
                                           @if($errors->has('first_name')) style="border: solid red"
                                           @endif value="{{ $user->first_name }}">
                                    @if($errors->has('first_name'))
                                        <p class="text-danger">{{$errors->first('first_name')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="last_name"
                                           @if($errors->has('last_name')) style="border: solid red"
                                           @endif value="{{ $user->last_name }}">
                                    @if($errors->has('last_name'))
                                        <p class="text-danger">{{$errors->first('last_name')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password"
                                           value="{{ $user->password }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image_path"
                                           @if($errors->has('image_path')) style="border: solid red" @endif>
                                    @if($errors->has('image_path'))
                                        <p class="text-danger">{{$errors->first('image_path')}}</p>
                                    @endif
                                    <p class="help-block">Upload only images.</p>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control m-bot15" name="status"
                                            @if($errors->has('status')) style="border: solid red" @endif>
                                        <option value="">Selected</option>
                                        <option value="{{ \App\Helpers\ConstVariable::ACTIVE_STATUS }}"
                                            {{ ($user->status ==  \App\Helpers\ConstVariable::ACTIVE_STATUS) ? 'selected' : ''}}>
                                            Active
                                        </option>
                                        <option value="{{ \App\Helpers\ConstVariable::DISABLE_STATUS }}"
                                            {{ ($user->status ==  \App\Helpers\ConstVariable::DISABLE_STATUS) ? 'selected' : ''}}>
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
                                            value="{{ \App\Helpers\ConstVariable::GROUP_USER_ADMIN }}"
                                            {{ ($user->group ==  \App\Helpers\ConstVariable::GROUP_USER_ADMIN) ? 'selected' : ''}}>
                                            Admin
                                        </option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::GROUP_USER_STAFF }}"
                                            {{ ($user->group ==  \App\Helpers\ConstVariable::GROUP_USER_STAFF) ? 'selected' : ''}}>
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
