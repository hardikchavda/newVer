@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody><tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Age</th>
                            <th>Operations</th>
                            
                        </tr>
                        @forelse($tabl as $data)
                        <tr>
                            <td>{{$data->firstname}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->age}}</td>
                            <td><a class ="btn btn-primary btn-xs" href="edit/{{$data->id}}">Edit</a></td>                            
                        </tr>                                                
                        @empty
                        Nothing Available
                        @endforelse   
                    </tbody></table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@stop