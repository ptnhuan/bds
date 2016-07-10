@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
           {!!trans('front.page_users')!!}
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        {{-- successful message --}}
        <?php $message = Session::get('message'); ?>
        @if( isset($message) )
        <div class="alert alert-success">{!! $message !!}</div>
        @endif
        @if($errors->has('model') )
            <div class="alert alert-danger">{!! $errors->first('model') !!}</div>
        @endif
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="panel-title bariol-thin">{!! isset($user->id) ? '<i class="fa fa-pencil"></i> '.trans('front.users.edit') : '<i class="fa fa-user"></i> '.trans('front.users.create_user') !!}</h3>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <a href="{!! URL::route('users.profile.edit',['user_id' => $user->id]) !!}" class="btn btn-info pull-right adprofile" {!! ! isset($user->id) ? 'disabled="disabled"' : '' !!}><i class="fa fa-user"></i> {!!trans('front.users.edit_user')!!}</a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h4>{!!trans('front.users.create_data_login')!!}</h4>
                    {!! Form::model($user, [ 'url' => URL::route('users.edit')] )  !!}
                    {{-- Field hidden to fix chrome and safari autocomplete bug --}}
                    {!! Form::password('__to_hide_password_autocomplete', ['class' => 'hidden']) !!}
                    
                    @if($user->uid)
                     <div class="form-group">
                        {!! Form::label('uid',trans('front.users.id_user').': ') !!} {!! $user->uid!!}
                    </div>
                    @endif
                    <!-- email text field -->
                    <div class="form-group">
                        {!! Form::label('email',trans('front.users.email').': *') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' =>trans('front.users.email'), 'autocomplete' => 'off']) !!}
                    </div>
                    <span class="text-danger">{!! $errors->first('email') !!}</span>
                    <!-- password text field -->
                    <div class="form-group">
                        {!! Form::label('password',isset($user->id) ? trans('front.users.change_password') : trans('front.users.create_password')) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '']) !!}
                    </div>
                    <span class="text-danger">{!! $errors->first('password') !!}</span>
                    <!-- password_confirmation text field -->
                    <div class="form-group">
                        {!! Form::label('password_confirmation',isset($user->id) ? trans('front.users.confirm_change_password') : trans('front.users.create_confirm_password')) !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '','autocomplete' => 'off']) !!}
                    </div>
                    <span class="text-danger">{!! $errors->first('password_confirmation') !!}</span>
                    <div class="form-group">
                        {!! Form::label("activated",trans('front.users.create_user_active').': ') !!}
                        {!! Form::select('activated', ["1" => "Yes", "0" => "No"], (isset($user->activated) && $user->activated) ? $user->activated : "0", ["class"=> "form-control"] ) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label("banned",trans('front.users.create_banned').': ') !!}
                        {!! Form::select('banned', ["1" => "Yes", "0" => "No"], (isset($user->banned) && $user->banned) ? $user->banned : "0", ["class"=> "form-control"] ) !!}
                    </div>
                    {!! Form::hidden('id') !!}
                    {!! Form::hidden('form_name','user') !!}
                    <a href="{!! URL::route('users.delete',['id' => $user->id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull-right margin-left-5 delete">{!!trans('front.users.delete')!!}</a>
                    {!! Form::submit(trans('front.users.create_save'), array("class"=>"btn btn-info pull-right ")) !!}
                    {!! Form::close() !!}
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h4><i class="fa fa-users"></i> {!!trans('front.users.create_gruops')!!}</h4>
                        @include('laravel-authentication-acl::admin.user.groups')

                        {{-- group permission form --}}
                        <h4><i class="fa fa-lock"></i> {!!trans('front.users.create_permission')!!}</h4>
                        {{-- permissions --}}
                        @include('laravel-authentication-acl::admin.user.perm')
                    </div>
                </div>
            </div>
      </div>
</div>
@stop

@section('footer_scripts')
<script>
    $(".delete").click(function(){
        return confirm('{!!trans('front.alert_you_want_delete_user')!!}');
    });
</script>
@stop