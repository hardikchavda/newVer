@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div class="box">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create New UserInfo</h3>
           
        </div>
         <ul class="alert alert-danger">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
                @endif
            </ul>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::open(['id'=>'formCreate','method'=>'POST','action' => ['AdminController@addition']])!!}
        <div class="box-body">
            <div class="form-group">
                {!!Form::label('fnm','Firstname')!!}
                {!!Form::text('firstname',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('lnm','Lasttname')!!}
                {!!Form::text('lastname',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('age','Age')!!}
                {!!Form::text('age',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('ct','City')!!}
                {!!Form::select('city',['R'=>'Rajkot','A'=>'Ahmedabad','J'=>'Jamnagar'],'A',['class'=>'form-control'])!!}
                
            </div>
            <div class="form-group">
                {!!Form::label('ad','Address')!!}
                {!!Form::text('address',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('cnt','Contact Number')!!}
                {!!Form::text('contactno',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('gd','Gender')!!}                                  
                {!!Form::radio('gender','Male',true,['class'=>'radio-inline'])!!}                
                Male 
                {!!Form::radio('gender','Female',false,['class'=>'radio-inline'])!!}
                Female
            </div>
        </div>
        <div class="box-footer">
            {!!Form::submit('Create',['class'=>'btn btn-primary'])!!}
            {!!Form::button('Create',['id'=>'createRec','data-target'=>'#modal-primary','data-toggle'=>'modal','class'=>'btn btn-primary'])!!}
        </div>
        {!!Form::close()!!}
    </div>

    <div class="modal modal-primary fade in" id="modal-primary" style="display: none; padding-right: 21px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Create UserINFO</h4>
                </div>
                <div class="modal-body">
                    <p>Are You Sure … ??????????</p>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" id="create" class="btn btn-outline" data-dismiss="modal">Delete Record</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <script>
        $('#create').click(function () {
            var inputData = $('#formCreate').serialize();
            $.ajax(
                    {
                        url: "/admin/addition",
                        type: 'post',
                        data: inputData,
                        success: function ()
                        {
                            window.location.replace('/admin/home');
                        },
                        error: function (data) {
                            console.log(data);
                        }
                    });
        });
    </script>
</div>

@stop