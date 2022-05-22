@extends('app')

@section('name')
    <div class="row row-cols-3">
        @foreach($names as $name)
            <div class="col p-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('editname')}}" method="get">
                            <input hidden value="{{$name->id}}" name="id">
                            <div class="mb-3">
                                <label for="name" class="form-label">Название шлюза</label>
                                <input type="name" class="form-control" id="name" value="{{$name->ganame}}" name="name">
                            </div>
                            <p class="card-text">{{$name->ip}}</p>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                            <a href="{{route('delname', ['id' => $name->id, 'delete'=>'on'])}}" class="btn btn-danger">Удалить</a>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center"> {{ $names->render() }} </div>
@endsection
