@php
$nav_links = config('nav_menu');
@endphp

<header>
   {{-- TOP NAV --}}
   <div class="upper-nav"></div>
   {{-- NAV --}}
   <nav>
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="d-flex align-content-center justify-content-between">
                  {{-- LOGO LEFT --}}
                  <div class="logo-nav">
                     <a href="{{ route('comics.index') }}">
                        <img class="d-block py-3" src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">
                     </a>
                  </div>
                  {{-- NAV --}}
                  <ul class="nav d-flex align-items-center">
                     @foreach ($nav_links as $link)
                        <li>
                           {{-- TODO aggiungere route --}}
                           <a class="text-uppercase" href="{{ $link['route'] }}">{{ $link['text'] }}</a>
                        </li>
                     @endforeach
                  </ul>
                  {{-- SEARCH RIGHT --}}
                  <div class="search-nav d-flex align-items-center">
                     <input class="search" type="text" placeholder="Search">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>
</header>
