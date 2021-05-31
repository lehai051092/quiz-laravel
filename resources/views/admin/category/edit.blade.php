@extends('layouts.admin.admin')
@section('title')
    <title>Category Edit Form</title>
@endsection
@section('section')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Category Edit Form
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{ route('admin.category.post.edit', ['id' => $category->id]) }}"
                                  method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $category->name }}"
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
                                        <option value="{{ \App\Helpers\ConstVariable::ENABLE_STATUS }}"
                                                @if($category->status == \App\Helpers\ConstVariable::ENABLE_STATUS) selected @endif>
                                            Enable
                                        </option>
                                        <option value="{{ \App\Helpers\ConstVariable::DISABLE_STATUS }}"
                                                @if($category->status == \App\Helpers\ConstVariable::DISABLE_STATUS) selected @endif>
                                            Disable
                                        </option>
                                    </select>
                                    @if($errors->has('status'))
                                        <p class="text-danger">{{$errors->first('status')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Menu</label>
                                    <select class="form-control m-bot15" name="menu_id">
                                        <option value="{{ $category->menu->id }}" selected>Current value -- {{ $category->menu->name }}</option>
                                        {!! $htmlMenuOption !!}
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
