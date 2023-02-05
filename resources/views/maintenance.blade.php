@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                <a href="/showdata/{{ $item->id }}" type="button" class="btn btn-info">Update
                                    Role</a>
                                <a href="/deletedata/{{ $item->id }}" type="button" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection()
