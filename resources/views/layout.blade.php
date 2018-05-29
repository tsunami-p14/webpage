{{--// resources/views/layout.blade.php--}}
        <!DOCTYPE HTML>
            <html lang="ja">
                <head>
                    <meta charset="UTF-8">
                    <title>My Blog</title>

                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <!-- CSSを追加 --><!-- ① 追加 -->
                    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
                    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />--}}
                    {{--<link type="text/css" rel="stylesheet"--}}
                          {{--href="http://code.jquery.com/ui/1.10.3/themes/cupertino/jquery-ui.min.css" />--}}
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <title>{{ config('app.name', 'Laravel') }}</title>

                    <!-- Styles -->
                    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
                    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

                    <script>
                        window.Laravel = {};
                        window.Laravel.csrfToken = "{{ csrf_token() }}";
                    </script>


                </head>

                <body>
                    <div id="app">
                        {{--@include('navbar')--}}
                        @include('vuenavbar')
                        <div class="container" style="max-width: 100%">
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">{{ Session::get('flash_message') }} </div>
                            @endif

                            @yield('content')
                        </div>

                        <!-- Scripts --><!-- ③ 追加 -->
                        {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
                        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
                        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}


                    </div>
                </body>

                <script src="{{ mix('js/app.js') }}"></script>

            </html>