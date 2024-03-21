@extends('layouts.app')

@section('title', 'Action Comics')

@section('main-content')

<section class="bg-dark">

    <div class="row py-5 container m-auto d-flex align-items-center">
      
        <div class="col-6">
          <div>
            <img src="@yield('comic-thumb')" alt="" class="comic-thumb">
          </div>

          
        </div>
    
        <div class="text-white col-6"> 
            <div class="py-2">
                <div>Title:</div>
                @yield('comic-title')
            </div>

            <div class="py-2">
                <div>Description:</div>
                @yield('comic-description')
            </div>

            <div class="py-2">
                <div>Price:</div>
                @yield('comic-price')
            </div>

            <div class="py-2">
                <div>Series:</div>
                @yield('comic-series')
            </div>

            <div class="py-2">
                <div>Sale Date:</div>
                @yield('comic-sale_date')
            </div>

            <div class="py-2">
                <div>Type:</div>
                @yield('comic-type')
            </div>
        </div>

    </div>

</section>

@endsection