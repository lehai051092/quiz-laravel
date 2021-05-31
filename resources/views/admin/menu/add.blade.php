@extends('layouts.admin.admin')
@section('title')
    <title>Menu Add Form</title>
@endsection
@section('section')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Menu Add Form
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{ route('admin.menu.post.add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name"
                                           @if($errors->has('name')) style="border: solid red" @endif>
                                    @if($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
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
                                    <label>Parent</label>
                                    <select class="form-control m-bot15" name="parent_id">
                                        <option value="{{ \App\Helpers\ConstVariable::ROOT_PARENT }}">Root Menu</option>
                                        {!! $htmlOption !!}
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
