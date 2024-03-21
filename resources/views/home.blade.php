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

  <section class="bg-primary">
    <div class="p-5 container text-white d-flex justify-content-between align-items-center">
      <div>
        <img class="home-logo" src="{{url('images/buy-comics-digital-comics.png')}}" alt="">
        <span>DIGITAL COMICS</span>
      </div>

      <div>
        <img class="home-logo" src="{{url('images/buy-comics-merchandise.png')}}" alt="">
        <span>DC MERCHANDISE</span>
      </div>

      <div>
        <img class="home-logo" src="{{url('images/buy-comics-subscriptions.png')}}" alt="">
        <span>SUBSCRIPTION</span>
      </div>

      <div>
        <img class="home-logo" src="{{url('images/buy-comics-shop-locator.png')}}" alt="">
        <span>COMIC SHOP LOCATOR</span>
      </div>

      <div>
        <img class="home-logo" src="{{url('images/buy-dc-power-visa.svg')}}" alt="">
        <span>DC POWER VISA</span>
      </div>
    </div>
  </section>
@endsection
