@php
$comics = config('comics');
@endphp

@extends('layout.main')

@section('title-name', 'Home')

@section('main')
   <main>
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="row">
                  {{-- CARD COMIC --}}
                  @forelse ($comics as $comic)
                     <div class="col-2">
                        <div role="button" class="comic-card">
                           <div>
                              <img class="d-block" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                           </div>
                           <p>{{ $comic['series'] }}</p>
                        </div>
                     </div>
                  @empty
                     <h1 class="text-center">Nessun Fumetto selezionato</h1>
                  @endforelse
               </div>
            </div>
         </div>
      </div>
   </main>
@endsection
