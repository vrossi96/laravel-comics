@php
$comics = config('comics');
@endphp

@extends('layout.main')

@section('title-name', 'Home')

@section('main')
   <main class="main-characters">
      <div class="card-section container position-relative">
         <div class="row">
            <div class="col-12">
               {{-- CARD ROW --}}
               <div class="row">
                  {{-- CARD COMIC --}}
                  @forelse ($comics as $comic)
                     <div class="col-2">
                        <div role="button" class="comic-card">
                           <div class="title d-flex align-items-center pt-2">
                              <h5>{{ $comic['series'] }}</h5>
                           </div>
                           <div class="description">
                              <p>{{ $comic['description'] }}</p>
                           </div>
                        </div>
                     </div>
                  @empty
                     <h1 class="text-center">Nessun Fumetto selezionato</h1>
                  @endforelse
               </div>
               {{-- BUTTON BOTTOM --}}
               <div class="row">
                  <div class="col-2 offset-5">
                     <div class="text-uppercase dc-button" role="button">
                        load more
                     </div>
                  </div>
               </div>
            </div>
         </div>
         {{-- LABEL --}}
         <div class="label">
            <h3 class="text-uppercase">description</h3>
         </div>
      </div>
   </main>
@endsection
