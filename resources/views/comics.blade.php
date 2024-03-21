@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')

<section class="bg-dark">

    <div class="row py-5 container m-auto">
      @foreach ($comics as $comic)
        <div class="col-3 py-3">
          <div>
            <div>
              <img src="{{ $comic['thumb']}}" alt="" class="comic-thumb">
            </div>

            <div class="text-white text-center">
              {{ $comic['title']}}
            </div>

          </div>
        </div>
      @endforeach
    </div>

</section>


@endsection