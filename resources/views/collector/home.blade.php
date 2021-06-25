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
    @include('includes.nav')
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
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="/details" {{--put link for next page--}} target="_blank"> 

                <img src="https://cdn.pixabay.com/photo/2017/11/20/02/00/fantasy-2964231_960_720.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Title 1</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg" target="_blank">
                <img src="https://lh3.googleusercontent.com/_YyEJjXI8nsPSfQ-9SHgEdddB6P4nVRPp-g_5vNkDkiOLXX9d69VbtSMSLrqFxIpfEdUBFf9qSWpGFD3aEaYnCn_=w640-h400-e365-rj-sc0x00ffffff" alt="Nature" style="width:100%">
                <div class="caption">
                  <p>Title 2</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href=" target="_blank">
                <img src="https://i2.wp.com/techarx.com/wp-content/uploads/2018/03/mikael-gustafsson-wallpaper-mikael-gustafsson.jpg?fit=1920%2C1080&ssl=1" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>Title 3</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="/details" target="_blank">
                <img src="https://i2.wp.com/techarx.com/wp-content/uploads/2018/03/mikael-gustafsson-wallpaper-mikael-gustafsson.jpg?fit=1920%2C1080&ssl=1" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Woman art</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="/w3images/nature.jpg" target="_blank">
                <img src="https://lh3.googleusercontent.com/_YyEJjXI8nsPSfQ-9SHgEdddB6P4nVRPp-g_5vNkDkiOLXX9d69VbtSMSLrqFxIpfEdUBFf9qSWpGFD3aEaYnCn_=w640-h400-e365-rj-sc0x00ffffff" alt="Nature" style="width:100%">
                <div class="caption">
                  <p>Title 5</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <a href=" target="_blank">
                <img src="https://i2.wp.com/techarx.com/wp-content/uploads/2018/03/mikael-gustafsson-wallpaper-mikael-gustafsson.jpg?fit=1920%2C1080&ssl=1" alt="Fjords" style="width:100%">
                <div class="caption">
                  <p>Title 6</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
</body>
@include('includes.footer')
</html>