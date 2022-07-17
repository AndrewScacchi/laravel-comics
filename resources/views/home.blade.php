@extends('template.base')

@section('pageTitle', 'Comics')

@section('pageMain')
    <main>
        <div>
            <!-- jumbotron -->
           <div id="jumbo">
           </div>

           <!-- blocco fumetti -->
            <div id="content">
                <div class="comix">
                    @foreach ($comicsArr as $item)
                        <a class="comic" href="{{ route('product', ['id' => $item['id']]) }}">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            <h5>{{ $item['series'] }}</h5>
                        </a>
                    @endforeach


                </div>
            </div>
         </div>
         <div id="blue-bar">
            {{--
                <div v-for="(promo, i) in promos" :key="i" class="icons">
                    <img :src="promo.img" alt="">
                    <p>{{promo.text}}</p>
                </div>
                --}}

          <div class="icons">
            <img src="/img/buy-comics-merchandise.png" alt="">
            <p>DC MERCHANDISE</p>
          </div>
          <div class="icons">
            <img src="/img/buy-comics-subscriptions.png" alt="">
            <p>SUBSCRIPTION</p>
          </div>
          <div class="icons">
            <img src="/img/buy-comics-shop-locator.png" alt="">
            <p>COMIC SHOP LOCATOR</p>
          </div>
          <div class="icons">
            <img src="/img/buy-dc-power-visa.svg" alt="">
            <p>DC POWER VISA</p>
          </div>

        </div>
    </main>
@endsection
