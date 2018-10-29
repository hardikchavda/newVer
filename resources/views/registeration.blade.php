
@include('layouts.header')

<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">User Registeration</h2>

                        <!-- Excerpt -->
                        <article class="box excerpt">
        {!!Form::open(['url'=>'formsubmit'])!!}
        
        {!!Form::label('fnm','Firstname')!!}
        {!!Form::text('fnm',null)!!}
        
        {!!Form::label('lnm','Lasttname')!!}
        {!!Form::text('lnm',null)!!}
        
        {!!Form::label('age','Age')!!}
        {!!Form::text('age',null)!!}
        
        {!!Form::label('ct','City')!!}
        {!!Form::text('ct',null)!!}
        
        {!!Form::label('ad','Address')!!}
        {!!Form::text('ad',null)!!}
        
        {!!Form::label('cnt','Contact Number')!!}
        {!!Form::text('cnt',null)!!}
                
        {!!Form::label('gd','Gender')!!}
        {!!Form::text('gd',null)!!}
                
        {!!Form::label('','')!!}
        {!!Form::submit('submit')!!}
        
        {!!Form::close()!!}
                        </article>

                       

                    </section>
                </div>
                <div class="col-4 col-12-medium">

                    <!-- Spotlight -->
                    <section class="box spotlight">
                        <h2 class="icon fa-file-text-o">Spotlight</h2>
                        <article>
                            <a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
                            <header>
                                <h3><a href="#">Neural Implants</a></h3>
                                <p>The pros and cons. Mostly cons.</p>
                            </header>
                            <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
                                quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam
                                lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
                                et tempus consequat etiam.</p>
                            <p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
                                mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
                            <footer>
                                <a href="#" class="button alt icon fa-file-o">Continue Reading</a>
                            </footer>
                        </article>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>

         
@include('layouts.footer')
