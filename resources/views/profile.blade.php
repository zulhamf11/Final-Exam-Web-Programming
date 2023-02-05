@extends('layouts.main')
@section('container')
    <div class="signup-form">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-md-4 mb-5" style="margin-top: 50px; margin-bottom: auto;">
                    <div class="card">
                        <h4 class="card-header text-center bg-warning">Profile</h4>
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">

                            <form method="POST" action="/updateprofile/{{ Illuminate\Support\Facades\Auth::user()->id }}">
                                @csrf

                                {{-- First name --}}
                                <div class="form-group mb-3">
                                    <label for="first_name" class="mb-2"> First Name </label>
                                    <input type="text" placeholder="Enter Your Name" id="first_name"
                                        class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                        value="{{ Illuminate\Support\Facades\Auth::user()->first_name }}" required
                                        autocomplete="first_name" autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- last name --}}
                                <div class="form-group mb-3">
                                    <label for="last_name" class="mb-2"> Last Name </label>
                                    <input type="text" placeholder="Enter Your Name" id="last_name"
                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ Illuminate\Support\Facades\Auth::user()->last_name }}" required
                                        autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Email </label>
                                    <input type="email" placeholder="Enter Your Email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ Illuminate\Support\Facades\Auth::user()->email }}" required
                                        autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- Password --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Password </label>
                                    <input type="password" placeholder="Enter Your Password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- Confirm Password --}}
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Confirm Password </label>
                                    <input type="password" placeholder="Confirm Your Password" id="password-confirm"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>

                                {{-- Image --}}
                                {{-- <div class="form-group mb-3">
                                    <label class="mb-2">Display Picture</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                    <span class="text-danger"></span>
                                </div> --}}
                                {{-- Gender --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Gender </label><br>
                                    <input type="radio" id="male" name="gender" value="Male">
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="female" name="gender" value="Female">
                                    <label for="female">Female</label><br>
                                    <span class="text-danger"></span>
                                </div>

                                {{-- Role --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Role </label>
                                    <br>
                                    <select class="form-control" id="role" name="role">
                                        <option selected hidden disabled value="">
                                            {{ Illuminate\Support\Facades\Auth::user()->role }}</option>
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
