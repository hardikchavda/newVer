<!DOCTYPE HTML>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="homepage is-preload">
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header-wrapper">
                <div class="container">

                    <!-- Header -->
                    <header id="header">
                        <div class="inner">

                            <!-- Logo -->
                            <h1><a href="/" id="logo">Model Example</a></h1>

                            <!-- Nav -->
                            <nav id="nav">
                                <ul>
                                    @if(!Auth::guest())
                                    <li ><a href="{{action('AdminController@logout')}}">{{Auth::user()->name}}</a></li>                                                                    
                                    @else
                                    <li ><a href="{{action('AdminController@logout')}}">Logout</a></li>                                                                    
                                    @endif
                                </ul>
                            </nav>

                        </div>
                    </header>

                   

                </div>
            </div>

            <!-- Main Wrapper -->
            <div id="main-wrapper">