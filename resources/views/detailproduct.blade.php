@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $data->image }}" alt="..." style="width: 100%;">
                            </div>
                            <div class="col-md-6 mt-2">
                                <h2>{{ $data->product_name }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Detail</td>
                                            <td>:</td>
                                            <td>{{ $data->desc }}</td>
                                        </tr>
                                        <tr>
                                            <td>@lang('public.price')</td>
                                            <td>:</td>
                                            <td>IDR {{ number_format($data->price) }}</td>
                                        </tr>

                                        <tr>
                                            <td>@lang('public.quantity')</td>
                                            <td>:</td>
                                            <td>
                                                <form action="/order/{{ $data->id }}" method="post">
                                                    @csrf
                                                    <input type="text" name="qty" class="form-control" required>
                                                    <button type="submit"
                                                        class="btn btn-warning mt-4">@lang('public.buy')</button>
                                                </form>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
