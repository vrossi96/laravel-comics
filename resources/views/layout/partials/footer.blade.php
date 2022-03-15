@php
$link_blocks = config('footer_menu');
@endphp

<footer>
   {{-- TOP FOOTER --}}
   <div class="top-footer">
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="footer-lists d-flex flex-column flex-wrap w-75">
                  @foreach ($link_blocks as $column)
                     <div>
                        <h3 class="text-uppercase">{{ $column['title'] }}</h3>
                        <ul class="list-group">
                           @foreach ($column['links'] as $link)
                              <li>
                                 {{-- TODO aggiungere route --}}
                                 <a href="{{ $link['route'] }}">{{ $link['text'] }}</a>
                              </li>
                           @endforeach
                        </ul>
                     </div>
                  @endforeach
               </div>
               <div class="rights-disclaimer">
                  <p>All Site Content TM and C 2022 DC Entertainment, unless otherwhise <a
                        href="{{ route('home') }}">noted here.</a> All rights reserved.</p>
                  <p><a href="{{ route('home') }}">Cookies Settings</a></p>
               </div>
            </div>
            <div class="col-6"></div>
         </div>
      </div>
   </div>
   {{-- BOTTOM FOOTER --}}
</footer>
