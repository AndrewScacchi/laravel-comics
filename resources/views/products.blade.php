@extends('template.base')

@section('pageTitle', 'Comics')

@section('pageMain')
    <main>
        <!-- jumbotron -->
        <div id="jumbo">
        </div>
        <div class="blueBarTop"></div>
        <div id="comicCard">

            <section class="comicCardMain">
                <div class="cardInfo">
                    <img src="{{$comic['thumb']}}" alt="">
                    <div class="buyingInfo">
                        <div>
                            <span>U.S. Price:</span>
                            <span class="right">{{$comic['price']}}</span>
                        </div>
                        <div class="checkAvailable">Check Availability</div>
                    </div>
                    <h1>{{$comic["title"]}}</h1>
                    <p>{{$comic["description"]}}</p>
                </div>
                <div class="ads">
                    <img  src="/img/adv.jpg" alt="">
                </div>



            </section>
            <section class="comicCardData">
                <div class="dataInner">
                    <h3>Talents</h3>
                    <ul>
                        <li>
                            <span>Art by:</span>
                            <span class="right">
                                @foreach ($comic['artists'] as $artist)
                                <a class="authorWriter" href="*">{{$artist}}</a>,
                                @endforeach
                            </span>
                        </li>
                        <li>
                            <span>Written by:</span>
                            <span class="right">
                                @foreach ($comic['writers'] as $writer)
                                    <a class="authorWriter" href="*">{{$writer}}</a>,
                                @endforeach
                            </span>
                        </li>
                    </ul>

                </div>
                <div class="dataInner">
                    <h3>Specs</h3>
                    <ul>
                        <li>
                            <span>Series:</span>
                            <span class="right"><a href="">{{$comic['series']}}</a></span>

                        </li>
                        <li>
                            <span>U.S. Price:</span>
                            <span class="right">{{$comic['price']}}</span>

                        </li>
                        <li>
                            <span>On Sale Date:</span>
                            <span class="right">{{$comic['sale_date']}}</span>
                        </li>
                    </ul>
                </div>
            </section>


        </div>
        <div id="grey-bar">

          <div class="icons">
            <p>DC MERCHANDISE</p>
            <img src="/img/buy-comics-merchandise.png" alt="">
          </div>
          <div class="icons">
            <p>SUBSCRIPTION</p>
            <img src="/img/buy-comics-subscriptions.png" alt="">
          </div>
          <div class="icons">
            <p>COMIC SHOP LOCATOR</p>
            <img src="/img/buy-comics-shop-locator.png" alt="">
          </div>
          <div class="icons">
            <p>DC POWER VISA</p>
            <img src="/img/buy-dc-power-visa.svg" alt="">
          </div>

        </div>
    </main>
@endsection
