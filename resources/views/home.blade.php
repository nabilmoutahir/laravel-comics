@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section class="jumbotron">
  </section>

  <section class="bg-dark">

    <div class="row py-5 container m-auto">
      @foreach ($comics as $comic)
        <div class="col-2 py-3">
          <div>
            <img src="{{ $comic['thumb']}}" alt="" class="comic-thumb">
          </div>

          <div class="text-white text-center">
            {{ $comic['title']}}
          </div>
        </div>
      @endforeach
    </div>
    
    <div class="text-center pb-3">
      <button class="border border-primary text-white bg-primary px-5">LOAD MORE</button>
    </div>
  </section>
@endsection
