@extends('layouts.admin.admin')
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
                            <form role="form" action="{{ route('admin.post.add') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="last_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image_path">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control m-bot15" name="status">
                                        <option value="">Selected</option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::ACTIVE_STATUS }}">
                                            Active
                                        </option>
                                        <option
                                            value="{{ \App\Helpers\ConstVariable::DISABLE_STATUS }}">
                                            Disable
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Group</label>
                                    <select class="form-control m-bot15" name="group">
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
