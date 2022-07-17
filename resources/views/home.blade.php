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
                        <a class="comic" href="">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            <h5>{{ $item['series'] }}</h5>
                        </a>
                    @endforeach


                </div>
            </div>
         </div>
    </main>
@endsection
