{{-- Layout base admin panel --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">


        {!! HTML::style('packages/jacopo/laravel-authentication-acl/css/bootstrap.min.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/css/fonts.css') !!}
        {!! HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') !!}

        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/jquery.bxslider.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/menu.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/slideshow.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/aboutproperty.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/property_details.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/properties.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/CT.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/aboutagent.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/testimonial.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/FAQ.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/footer.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/detail.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/contactIndex.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/cat.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/contact.css') !!}
        {!! HTML::style('packages/jacopo/laravel-authentication-acl/_css/reg_re_add.css') !!}

        @yield('head_css')
        {{-- End head css --}}

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        {{-- menu --}}
        @include('laravel-authentication-acl::client.re.layouts.menu')

        {{-- content --}}
        @yield('section')
        
         {{-- footer --}}
        @include('laravel-authentication-acl::client.re.layouts.footer')

        {{-- Start footer scripts --}}
        @yield('before_footer_scripts')

        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jquery.min.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/bootstrap.min.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jssor.slider.mini.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/submenu_BDS.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/animate_agent.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/slugit.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/detail.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/ion.rangeSlider.min.js') !!}
        
        @yield('footer_scripts_part1')

        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jquery.bxslider.js') !!}
        {!! HTML::script('packages/jacopo/laravel-authentication-acl/js/vendor/jquery.bxslider.min.js') !!}
        @yield('footer_scripts_part2')
        
        @yield('footer_scripts_form_search')
     
        {{-- End footer scripts --}}
    </body>
</html>