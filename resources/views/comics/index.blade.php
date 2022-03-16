@php
$comics = config('comics');
@endphp

@extends('layout.main')

@section('specific-style')
   <link rel="stylesheet" href="{{ asset('css/comics-index.css') }}">
@endsection

@section('title-name', 'Home')

@section('main')
   <main class="comics-index">
      <div class="card-section container position-relative">
         <div class="row">
            <div class="col-12">
               {{-- CARD ROW --}}
               <div class="row">
                  {{-- CARD COMIC --}}
                  @forelse ($comics as $index => $comic)
                     <div class="col-2">
                        <div class="comic-card">
                           <a href="{{ route('comics.show', ['id' => $index]) }}">
                              <div>
                                 <img class="d-block" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                              </div>
                              <p class="text-uppercase">{{ $comic['series'] }}</p>
                           </a>
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
            <h3 class="text-uppercase">current series</h3>
         </div>
      </div>
   </main>
   @include('includes.services_bar')
@endsection
