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
                            <h1><a href="/admin/home" id="logo">Model Example</a></h1>



                        </div>
                    </header>



                </div>
            </div>

            <!-- Main Wrapper -->
            <div id="main-wrapper">

                <div class="wrapper style3">
                    <div class="inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 col-12-medium">

                                    <!-- Article list -->
                                    <section class="box article-list">
                                        <h2 class="icon fa-file-text-o">Admin Login</h2>

                                        <!-- Excerpt -->
                                        <article class="box excerpt">
                                            {!!Form::open(['url'=>'admin/login'])!!}

                                            {!!Form::label('fnm','UserName')!!}
                                            {!!Form::text('fnm',null)!!}

                                            {!!Form::label('lnm','Password')!!}
                                            {!!Form::password('lnm',null)!!}


                                            {!!Form::label('','')!!}
                                            {!!Form::submit('Login')!!}

                                            {!!Form::close()!!}
                                        </article>



                                    </section>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Wrapper -->


            <div id="copyright">
                <ul class="menu">
                    <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>





        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>