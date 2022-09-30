@extends('layouts.master')

@section('title', 'View Posts')


@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Add Post
                    <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Post</a>
                </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif

                <table id="myDataTable" class="uk-table uk-table-hover uk-table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Post Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->status =='1'?'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/edit-post/'.$post->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ url('admin/delete-post/'.$post->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
