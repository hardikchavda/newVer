@include('layouts.adminHeader')
<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">Admin Home</h2>

                        <!-- Excerpt -->
                        <article class="box excerpt">
                            <table>
                                <tr>
                                    <td>
                                        Firstname
                                    </td>
                                    <td>
                                        Lastname
                                    </td>
                                    <td>
                                        Age
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                    <td>
                                        Delete
                                    </td>
                                </tr>                                                
                                @forelse($tabl as $data)
                                <tr>
                                    <td>{{$data->firstname}}</td>
                                    <td>{{$data->lastname}}</td>
                                    <td>{{$data->age}}</td>
                                    <td><a href="edit/{{$data->id}}">Edit</a></td>
                                    <td><a href="delete/{{$data->id}}">Delete</a></td>
                                </tr>                                                
                                @empty
                                Nothing Available
                                @endforelse                                                
                            </table>
                        </article>



                    </section>
                </div>

            </div>
        </div>
    </div>
</div>
@include('layouts.adminFooter')
