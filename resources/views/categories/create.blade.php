@extends('layouts.app')
@section('content')

<div class="card card-default">
    <div class="card-header">
        Create new category
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">
                            {{  $error  }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/store-categories" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create Category</button>
            </div>
        </form>
    </div>
</div>
@endsection
