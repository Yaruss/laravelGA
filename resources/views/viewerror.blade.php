@extends('app')

@section('error')
    <div class="p-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">last id</th>
                <th scope="col">id 2</th>
                <th scope="col">id 3</th>
                <th scope="col">GA</th>
                <th scope="col">data</th>
            </tr>
            </thead>
            <tbody>
            @foreach($errors as $error)
                <tr>
                    <th scope="row">{{$error->id}}</th>
                    <td>{{$error->id1}}</td>
                    <td>{{$error->id2}}</td>
                    <td>{{$error->id3}}</td>
                    <td>{{$error->names->ganame}}</td>
                    <td>{{$error->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center"> {{ $errors->render() }} </div>
    </div>
@endsection
