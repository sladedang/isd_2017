@extends('layouts.admin.application',['menu' => 'users'] )

@section('metadata')
@stop

@section('styles')
@stop

@section('scripts')
    <script src="{!! \URLHelper::asset('js/sortable.js', 'admin') !!}"></script>
    <script src="{!! \URLHelper::asset('js/delete_item.js', 'admin') !!}"></script>
@stop

@section('title')
    {{ config('site.name') }} | Admin | Admin Users
@stop

@section('header')
    Users
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                <p class="text-right">
                    <a href="{!! URL::action('Admin\UserController@create') !!}"
                       class="btn btn-block btn-primary btn-sm">Create New</a>
                </p>
            </h3>
            {!! \PaginationHelper::render($offset, $limit, $count, $baseUrl, []) !!}
        </div>

        <div class="box-body scroll">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">ID</th>
                    <th style="width: 10px">Name</th>
                    <th style="width: 10px">Email</th>
                    <th style="width: 10px">Date of Birth</th>
                    <th style="width: 10px">Phone Number</th>
                    <th style="width: 10px">Gender</th>
                    <th style="width: 10px">Address</th>
                    <th style="width: 40px"></th>
                </tr>
                @foreach( $users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ ($user->gender == 1 ? 'Male' : 'Female') }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <a href="#" class="btn btn-block btn-danger btn-sm delete-button" data-delete-url="{!! action('Admin\UserController@destroy', $user->id) !!}">@lang('admin.pages.common.buttons.delete')</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="box-footer">
            {!! \PaginationHelper::render($offset, $limit, $count, $baseUrl, []) !!}
        </div>
    </div>
@stop
