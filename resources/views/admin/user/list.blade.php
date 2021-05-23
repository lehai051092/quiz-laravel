@extends('layouts.admin.admin')
@section('section')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List User
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Group</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $userName = $user->first_name . ' ' . $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <img src="{{ $user->image_path }}" alt="{{ $userName }}">
                            </td>
                            <td>
                                @if($user->status == \App\Helpers\ConstVariable::ACTIVE_STATUS)
                                    Active
                                @else
                                    Disable
                                @endif
                            </td>
                            <td>{{ $user->group }}</td>
                            <td>
                                <a href="{{ route('admin.edit', ['id' => $user->id]) }}" class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('admin.delete', ['id' => $user->id]) }}" class="active"
                                   onclick="confirm('You want to delete {{ $userName }} ?')">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
