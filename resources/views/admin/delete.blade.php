@include('layouts.adminHeader')
<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">Admin Home - Delete User</h2>

                        <!-- Excerpt -->
                        <article class="box excerpt">
                              <article class="box excerpt">
        {!!Form::model($tabl, ['method'=>'DELETE','action' => ['AdminController@destroy',$tabl->id],'onSubmit'=>'return confirm("Are you sure?")'])!!}
        
        {!!Form::label('fnm','Firstname')!!}
        {!!Form::text('firstname',null)!!}
        
        {!!Form::label('lnm','Lasttname')!!}
        {!!Form::text('lastname',null)!!}
        
        {!!Form::label('age','Age')!!}
        {!!Form::text('age',null)!!}
        
        {!!Form::label('ct','City')!!}
        {!!Form::text('city',null)!!}
        
        {!!Form::label('ad','Address')!!}
        {!!Form::text('address',null)!!}
        
        {!!Form::label('cnt','Contact Number')!!}
        {!!Form::text('contactno',null)!!}
                
        {!!Form::label('gd','Gender')!!}
        {!!Form::text('gender',null)!!}
                
        {!!Form::label('','')!!}
        {!!Form::submit('submit')!!}
        
        {!!Form::close()!!}
                        </article>
                        </article>



                    </section>
                </div>

            </div>
        </div>
    </div>
</div>
@include('layouts.adminFooter')
