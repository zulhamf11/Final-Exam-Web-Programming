@extends('layouts.main')
@section('container')
    <div class="signup-form">
        <div class="container-fluid justi">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5" style="margin-top: 50px; margin-bottom: auto;">
                    <div class="card">
                        <h4 class="card-header text-center bg-warning">@lang('public.updaterole')</h4>
                        <div class="card-body">
                            <form method="POST" action="/updatedata/{{ $data->id }}">
                                @csrf
                                {{-- First name --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> @lang('public.name') : <strong>{{ $data->first_name }}
                                            {{ $data->last_name }}</strong></label>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mb-2"> @lang('public.role') : <strong>{{ $data->role }}</strong></label>
                                </div>

                                {{-- Role --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> @lang('public.changerole') </label>
                                    <br>
                                    <select class="form-control" id="role" name="role">
                                        <option selected hidden disabled value="">{{ $data->role }}</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-warning">@lang('public.save')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
