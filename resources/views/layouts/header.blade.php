<!DOCTYPE HTML>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{URL::asset('asset/css/main.css')}}" />
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
                                    <li ><a href="{{action('testc@main')}}">Home</a></li>                                
                                    <li><a href="{{action('testc@abtus')}}">About Us</a></li>
                                    <li><a href="/contactus">Contact Us</a></li>                                    
                                    <li><a href="/register">Register</a></li>                                    
                                </ul>
                            </nav>

                        </div>
                    </header>

                    <!-- Banner -->
                    <div id="banner">
                        <h2><strong>Creating Model:</strong> A free MAN
                            <br />
                            studied at geetanjali college<a href="http://html5up.net">Rajkot</a></h2>
                        <p>Does this statement make you want to click the big shiny button?</p>
                        <a href="#" class="button large icon fa-check-circle">Yes it does</a>
                    </div>

                </div>
            </div>

            <!-- Main Wrapper -->
            <div id="main-wrapper">