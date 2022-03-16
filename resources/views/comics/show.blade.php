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
   </main>
@endsection
