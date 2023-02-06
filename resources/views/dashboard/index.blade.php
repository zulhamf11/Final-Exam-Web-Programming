@extends('layouts.main')

@section('container')
    {{-- card --}}
    <div class="container mt-4">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->item_name }}</h5>

                            <a href="{{ route('detail', $item->id) }}" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $data->links() }}
    </div>
@endsection();
