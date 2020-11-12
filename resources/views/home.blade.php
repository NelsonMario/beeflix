@extends('master')

@section('content')
    <section >
        <div class="container">
            @foreach ($data as $d)
                <div class="title" style="text-align: center">{{ $d->name }}</div>
                <div class="movie-container">
                    @foreach ($d->movies as $m)
                        <div class="thumbnail">
                            <img src="{{$m->photo}}" alt="" width="300" height="400">
                            <div class="thumbnail-title">
                                {{ $m->title }}
                            </div>
                            <a href="{{route('movie', $m->id)}}" type="button" class="btn btn-dark btn-lg btn-block">Lihat film</a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
