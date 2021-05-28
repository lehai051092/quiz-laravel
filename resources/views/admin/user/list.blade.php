@extends('layouts.admin.admin')
@section('title')
    <title>List Form</title>
@endsection
@section('section')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List User
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light text-center">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Group</th>
                        <th style="width:30px;" class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td class="v-middle">{{ ++$key }}</td>
                            <td class="v-middle">{{ $userName = $user->first_name . ' ' . $user->last_name }}</td>
                            <td class="v-middle">{{ $user->email }}</td>
                            <td class="v-middle">
                                <img src="{{ asset(($user->image_path) ? 'public/' . $user->image_path : '') }}"
                                     alt="{{ $userName }}" width="100" height="100">
                            </td>
                            <td class="v-middle">
                                @if($user->status == \App\Helpers\ConstVariable::ACTIVE_STATUS)
                                    Active
                                @else
                                    Disable
                                @endif
                            </td>
                            <td class="v-middle">{{ $user->group }}</td>
                            <td class="v-middle">
                                <a href="{{ route('admin.edit', ['id' => $user->id]) }}" class="active">
                                    <i class="fa fa-edit text-success text-active"></i>
                                </a>
                                <a href="{{ route('admin.delete', ['id' => $user->id]) }}" class="active"
                                   onclick="confirm('You want to delete {{ $userName }} ?')">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                                <a href="{{ route('admin.change.password', ['id' => $user->id]) }}" class="active">
                                    <i class="fa fa-user-secret text-info text"></i>
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
