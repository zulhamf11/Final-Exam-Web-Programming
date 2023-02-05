@extends('layouts.main')
@section('container')
    <div class="signup-form">
        <div class="container-fluid justi">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5" style="margin-top: 50px; margin-bottom: auto;">
                    <div class="card">
                        <h4 class="card-header text-center bg-warning">Update Role</h4>
                        <div class="card-body">
                            <form method="POST" action="/updatedata/{{ $data->id }}">
                                @csrf
                                {{-- First name --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Name : <strong>{{ $data->first_name }}
                                            {{ $data->last_name }}</strong></label>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mb-2"> Role : <strong>{{ $data->role }}</strong></label>
                                </div>

                                {{-- Role --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Change Role </label>
                                    <br>
                                    <select class="form-control" id="role" name="role">
                                        <option selected hidden disabled value="">{{ $data->role }}</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-warning">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
