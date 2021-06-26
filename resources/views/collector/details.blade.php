<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/details.css')}}">
    
    @include('includes.head')
    <title>
        Marketplace
    </title>
</head>
<body>
    
    @include('includes.nav')

    <div class="container bootdey">
        <div class="col-md-12">
        <section class="panel">
              <div class="panel-body">
                  <div class="col-md-6">
                      <div class="pro-img-details">
                          <img src="/images/{{$item->image}}" width="80%" alt="Art {{$item->id}}">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <h4 class="pro-d-title">
                          <a href="#" class="">
                            {{$item->name}}
                          </a>
                      </h4>
                      <p id="txt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    <p id="txt">
                          <br>
                          Creator : {{$item->creator}}
                          <br>
                          Edition : {{$item->edition}}
                          <br>
                          <a href="/proof" class=""><h4>See proof of authenticity</h4></a>
                    </p>
                      <div class="product_meta">
                        <p id="txt">
                          <span class="posted_in"> <strong>Categories: </strong>
                             <a rel="tag" href="#">Digital Art </a>
                        </p>
                          
                      </div>
                      <div class="m-bot15"> <strong> Initial Price : </strong> <span class="amount-old">{{$item->value}} ETH<br></span>
                      <div class="form-group">
                         <label Class="makeoffer">Make an Offer</label><br>
                          <input type="quantiy" placeholder="Min:0.05 ETH" class="form-control quantity">
                      </div>
                      <p>
                          <button class="btn btn-round btn-danger" type="button"></i> Submit</button>
                      </p>
                  </div>
              </div>
          </section>
          </div>

                    <!-- Classic tabs -->
                    <div class="w3-bar w3-white" align="center">
                      <button class="w3-bar-item w3-button" onclick="openCity('London')">Comments</button>
                      <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Additional Details</button>
                      <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Recent Activity</button>
                    </div>
                    
                    <div id="London" class="w3-container city" method="post">
                      <textarea name="comment" id="comment" cols="40" rows="3"></textarea></><br>
                      <a href="#comment" class="button">Comment</a>
                      {{--Comments--}}
                      <p>Raihan Mahmud</p>
                      <p>Awesome &#128558; &#128558;</p>
                    </div>
                    
                    <div id="Paris" class="w3-container city" style="display:none">
                      <h2>{{--Additional Details--}}</h2>
                      <p>2528 x 2606 px, JPEG (1.3 MB) <br>
                        This is a signed and limited edition digital creation. What does this mean?
                        You're purchasing the full non-commercial rights to this creation. Learn more.
                        Upon purchase, this creation will be transferred to your digital wallet. If you don't have one, we'll provide one for you.
                        You may download the full-sized creation to display or even print for personal use.
                        All sales are final.</p> 
                    </div>
                    
                    <div id="Tokyo" class="w3-container city" style="display:none">
                      <h2>{{--Activity--}}</h2>
                      <p>This artwork has no sale or offer activity at this time.</p>
                    </div>
                    
                    <script>
                    function openCity(cityName) {
                      var i;
                      var x = document.getElementsByClassName("city");
                      for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                      }
                      document.getElementById(cityName).style.display = "block";  
                    }
                    </script>

          </div>


          

</body>
@include('includes.footer')
</html>