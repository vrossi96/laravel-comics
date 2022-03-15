@php
$services = config('dc_services');
@endphp

<section class="services">
   <div class="container">
      <div class="row py-5">
         @foreach ($services as $service)
            <div class="col">
               <div role="button" class="d-flex align-items-center justify-content-center">
                  <img src="{{ asset('images/' . $service['img']) }}" alt="">
                  <p class="text-uppercase">{{ $service['text'] }}</p>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>
