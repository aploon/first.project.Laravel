<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> @yield('title') </title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    @yield('head-modules')

    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="{{ asset('main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        {{-- @yield('header') --}}

        @component('layouts.components.header')
        @endcomponent


        {{-- @yield('settings-ui') --}}

        @component('layouts.components.settings-ui')
        @endcomponent


        <div class="app-main">

            {{-- @yield('sidebar') --}}

            @component('layouts.components.sidebar')
            @endcomponent



            <div class="app-main__outer">

                
                <div class="app-main__inner">

                    @section('main-inner-title')
                        <div class="app-page-title app-page-title-simple">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                        <div class="page-title-head center-elem">
                                            <span class="d-inline-block pr-2">
                                                <i class="lnr-apartment opacity-6"></i>
                                            </span>
                                            <span class="d-inline-block">Minimal Dashboard</span>
                                        </div>
                                        <div class="page-title-subheading opacity-10">
                                            <nav class="" aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a>
                                                            <i aria-hidden="true" class="fa fa-home"></i>
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a>Dashboards</a>
                                                    </li>
                                                    <li class="active breadcrumb-item" aria-current="page">
                                                        Minimal Dashboard Example
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block pr-3">
                                        <select id="custom-inp-top" type="select" class="custom-select">
                                            <option>Select period...</option>
                                            <option>Last Week</option>
                                            <option>Last Month</option>
                                            <option>Last Year</option>
                                        </select>
                                    </div>
                                    <button type="button" data-toggle="tooltip" data-placement="left" class="btn btn-dark"
                                        title="Show a Toastr Notification!">
                                        <i class="fa fa-battery-three-quarters"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @show
                    
                    @yield('main-content')
                    
                </div>

                @section('footer')
                    @component('layouts.components.footer')
                    @endcomponent
                @show

            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>
    @yield('footer-modules')
</body>

</html>
