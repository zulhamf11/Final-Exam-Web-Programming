@extends('layouts.main')

@section('container')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @foreach ($data as $data)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ $data->image }}" alt="..." style="width: 100%;">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <h2>{{ $data->item_name }}</h2>
                                    <table class="table">
                                        <tbody>

                                            <tr>
                                                <td>@lang('public.quantity')</td>
                                                <td>:</td>
                                                <td>{{ $data->qty }}</td>
                                            </tr>

                                            <tr>
                                                <td>@lang('public.totalprice')</td>
                                                <td>:</td>
                                                <td>
                                                    IDR {{ number_format($data->total_price) }}
                                                </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                    <a href="/deletecart/{{ $data->id }}" type="button"
                                        class="btn btn-danger">@lang('public.delete')</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a type="button" class="btn btn-warning mt-4" href="/checkout">
                        @lang('public.checkout')
                    </a>



                </div>
            </div>
        </div>
    </div>
@endsection
