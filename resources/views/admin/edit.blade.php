@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div class="box">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!!Form::model($tabl, ['id'=>'formDelete','method'=>'PATCH','action' => ['AdminController@update',$tabl->id]])!!}
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
                {!!Form::text('city',null,['class'=>'form-control'])!!}
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
                {!!Form::text('gender',null,['class'=>'form-control'])!!}
            </div>
        </div>
        <div class="box-footer">
            {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}
            {!!Form::button('Delete',['id'=>'deleteRec','data-id'=>$tabl->id,'data-target'=>'#modal-danger','data-toggle'=>'modal','class'=>'btn btn-danger'])!!}
        </div>
        {!!Form::close()!!}
    </div>

    <div class="modal modal-danger fade in" id="modal-danger" style="display: none; padding-right: 21px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Delete UserINFO</h4>
                </div>
                <div class="modal-body">
                    <p>Are You Sure … ??????????</p>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" id="delete" class="btn btn-outline" data-dismiss="modal">Delete Record</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <script>
        $('#delete').click(function () {
            var inputData = $('#formDelete').serialize();
            var id = $('#deleteRec').attr("data-id");          
            $.ajax(
                    {
                        url: "/admin/destroy/" + id,
                        type: 'delete',
                        data: inputData,
                        success: function ()
                        {
                            window.location.replace('/admin/home');
                        }
                    });
        });
    </script>
</div>

@stop