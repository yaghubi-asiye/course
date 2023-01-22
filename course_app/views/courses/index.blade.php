@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Course List') }}</div>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ implode('', $errors->all(':message')) }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name Course</th>
                                <th>Unit</th>
                                <th>Capacity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->unit}}</td>
                                    <td>{{$course->capacity}}</td>
                                    <td>
                                        <form action="{{ route('courses.update', ['id'=>$course->id]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="course_id" value="{{$course->id}}">
                                            <button type="submit" class="btn btn-primary">Reserve</button>
                                        </form>
                                    </td>
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
