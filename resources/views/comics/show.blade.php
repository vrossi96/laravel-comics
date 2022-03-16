@extends('layout.main')

@section('specific-style')
   <link rel="stylesheet" href="{{ asset('css/comics-show.css') }}">
@endsection

@section('title-name', 'Home')

@section('main')
   <main class="comics-show">
      <div class="blue-bar"></div>
      {{-- TOP DESC WITH ADV --}}
      <div class="container">
         <div class="row">
            <div class="col-10 offset-1">
               <div class="row mb-5">
                  {{-- LEFT PART DESC --}}
                  <div class="col-8">
                     <div class="comic-desc">
                        {{-- COMIC IMG LABEL --}}
                        <div class="label-img">
                           {{-- TOP LEFT TEXT --}}
                           <p>{{ $single_comic['type'] }}</p>
                           {{-- BOTTOM TEXT --}}
                           <a href="#">view gallery</a>
                           <img src="{{ $single_comic['thumb'] }}" alt="{{ $single_comic['title'] }}">
                        </div>
                        {{-- COMIC TITLE --}}
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
                        {{-- COMIC DESC --}}
                        <p>{{ $single_comic['description'] }}</p>
                     </div>
                  </div>
                  {{-- ADVERTISING --}}
                  <div class="col-4">
                     <div class="adv">
                        <div>
                           <p>ADVERTISEMENT</p>
                           <img src="{{ asset('images/sadv.jpg') }}" alt="ADV">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- BOTTOM DESC --}}
      <div class="bottom-desc">
         <div class="container">
            <div class="row">
               <div class="col-10 offset-1">
                  <div class="row">
                     <div class="col-6">
                        <h4>Talent</h4>
                        {{-- ARTISTS --}}
                        <div class="b-desc-section">
                           <div>
                              <p>Art by:</p>
                           </div>
                           <div>
                              @foreach ($single_comic['artists'] as $artist)
                                 <a href="#">{{ $artist }}</a>
                                 @if (!$loop->last)
                                    ,
                                 @endif
                              @endforeach
                           </div>
                        </div>
                        {{-- WRITERS --}}
                        <div class="b-desc-section">
                           <div>
                              <p>Written by:</p>
                           </div>
                           <div>
                              @foreach ($single_comic['writers'] as $artist)
                                 <a href="#">{{ $artist }}</a>
                                 @if (!$loop->last)
                                    ,
                                 @endif
                              @endforeach
                           </div>
                        </div>
                     </div>
                     <div class="col-6">
                        <h4>Specs</h4>
                        {{-- SERIES --}}
                        <div class="b-desc-section">
                           <div>
                              <p>Series:</p>
                           </div>
                           <div>
                              <a class="text-uppercase" href="#">{{ $single_comic['series'] }}</a>
                           </div>
                        </div>
                        {{-- PRICE --}}
                        <div class="b-desc-section">
                           <div>
                              <p>U.S. Price:</p>
                           </div>
                           <div>
                              <p class="text-uppercase">{{ $single_comic['price'] }}</p>
                           </div>
                        </div>
                        {{-- SALE DATE --}}
                        <div class="b-desc-section">
                           <div>
                              <p>On Sale Date:</p>
                           </div>
                           <div>
                              <p class="text-uppercase">{{ $single_comic['sale_date'] }}</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="services-gray-bar">
            <div class="container">
               <div class="row">
                  <div class="col-10 offset-1">
                     <div class="row">
                        <div class="col-3">
                           <div class="service">
                              <p>DIGITAL COMICS</p>
                              <div class="sprite"></div>
                              {{-- <img src="{{ asset('images/cta-icons.png') }}" alt=""> --}}
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="service">
                              <p>SHOP DC</p>
                              <div class="sprite"></div>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="service">
                              <p>COMIC SHOP LOCATOR</p>
                              <div class="sprite"></div>
                           </div>
                        </div>
                        <div class="col-3">
                           <div class="service">
                              <p>SUBSCRIPTIONS</p>
                              <div class="sprite"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
