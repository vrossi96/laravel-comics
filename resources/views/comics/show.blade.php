@php
$comics = config('comics');
@endphp

@extends('layout.main')

@section('specific-style')
   <link rel="stylesheet" href="{{ asset('css/comics-show.css') }}">
@endsection

@section('title-name', 'Home')

@section('main')
   <main class="comics-show">
      <div class="blue-bar"></div>
      <div class="card-section container position-relative">
         <div class="row">
            <div class="col-10 offset-1">
               <div class="row">
                  {{-- LEFT PART DESC --}}
                  <div class="col-8">
                     <div class="comic-desc">
                        <h2 class="text-uppercase">{{ $single_comic['title'] }}</h2>
                        {{-- PRICING GREEN BAR --}}
                        <div class="pricing">
                           <div class="pricing-details">
                              <p>U.S. Price: <span>{{ $single_comic['price'] }}</span></p>
                              <span>AVAILABLE</span>
                           </div>
                           <div class="availability">
                              <p>Check Availability</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- ADVERTISING --}}
                  <div class="col-4"></div>
               </div>
            </div>
         </div>
         {{-- LABEL --}}
         <div class="label-img">

         </div>
      </div>
   </main>
@endsection
