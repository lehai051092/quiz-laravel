@extends('layouts.admin.admin')
@section('title')
    <title>Menu List</title>
@endsection
@section('section')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Menu List
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light text-center">
                    <thead>
                    <tr>
                        <th class="text-left">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Status</th>
                        <th style="width:30px;" class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menus as $key => $menu)
                        <tr>
                            <td class="v-middle text-left">{{ ++$key }}</td>
                            <td class="v-middle">{{ $menu->name }}</td>
                            <td class="v-middle">
                                @if($menu->status == \App\Helpers\ConstVariable::ENABLE_STATUS)
                                    Enable
                                @else
                                    Disable
                                @endif
                            </td>
                            <td class="v-middle">
                                <a href="{{ route('admin.menu.edit', ['id' => $menu->id]) }}" class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('admin.menu.delete', ['id' => $menu->id]) }}" class="active"
                                   onclick="confirm('You want to delete {{ $menu->name }} ?')">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        {{ $menus->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
