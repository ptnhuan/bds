@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
     {!!trans('front.page_contactl')!!}
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        {{-- print messages --}}
        <?php $message = Session::get('message'); ?>
        @if( isset($message) )
        <div class="alert alert-success">{{$message}}</div>
        @endif
        {{-- print errors --}}
        @if($errors && ! $errors->isEmpty() )
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title bariol-thin"><i class="fa fa-lock"></i> {!!trans('front.contact.name_table')!!}</h3>
            </div>
            <div class="panel-body">
                @include('laravel-authentication-acl::admin.contact.contact-table')
            </div>
        </div>
    </div>
</div>
@stop

@section('footer_scripts')
    <script>
        $(".delete").click(function(){
            return confirm("Are you sure to delete this item?");
        });
    </script>
@stop