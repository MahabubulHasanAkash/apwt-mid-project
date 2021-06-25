<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Marketplace</title>
</head>
<body>
    @include('includes.collectorNav')
    <div class="container">
       <br>
        <div class="w3-right">
            <div class="w3-dropdown-hover">
              <button class="w3-button w3-theme">Sort <i class="fa fa-caret-down"></i></button>
              <div class="w3-dropdown-content w3-bar-block w3-border">
                <a href="#" class="w3-bar-item w3-button">A-Z</a>
                <a href="#" class="w3-bar-item w3-button">Price(Low to Hight)</a>
                <a href="#" class="w3-bar-item w3-button">Price(High to Low)</a>
              </div>
            </div>
          </div>
        <h3 style="display: inline-block">nftPlace<h3>  
        <div class="row">

          @foreach ($item as $items)

            <div class="col-md-3">
              <div class="thumbnail">
                <a href="/details/{{$items->id}}" {{--put link for next page--}} target="_blank"> 

                  <img src="/images/{{$items->image}}" alt="Art{{$items->id}}" style="width:100%">
                  <div class="caption">
                    <p>{{$items->name}}</p>
                  </div>
                </a>
              </div>
            </div>
          
          @endforeach
          
          
        </div>
      </div>
</body>
@include('includes.footer')
</html>