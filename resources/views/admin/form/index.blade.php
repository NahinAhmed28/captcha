@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">Form Information </div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead class="badge-dark">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>MEssage</th>
                            </thead>
                            <tbody>
                            @foreach($forms as $form)
                                <tr>
                                    <td>{{$form->id}}</td>
                                    <td>{{$form->name}}</td>
                                    <td>{{$form->email}}</td>
                                    <td>{{$form->phone}}</td>
                                    <td>{{$form->subject}}</td>
                                    <td>{{$form->message}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
