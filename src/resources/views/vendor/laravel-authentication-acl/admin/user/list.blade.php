@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
           {!!trans('front.page_users')!!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="col-md-9">
                {{-- print messages --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                    <div class="alert alert-success">{!! $message !!}</div>
                @endif
                {{-- print errors --}}
                @if($errors && ! $errors->isEmpty() )
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{!! $error !!}</div>
                    @endforeach
                @endif
                {{-- user lists --}}
                @include('laravel-authentication-acl::admin.user.user-table')
            </div>
            <div class="col-md-3">
                @include('laravel-authentication-acl::admin.user.search')
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