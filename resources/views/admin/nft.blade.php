<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>NFTs</title>
</head>
<body>
    @include('includes.adminNav')<br>
    
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <div class="w3-container w3-card w3-white">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h3 style="display: inline-block">NFTs<h3>  
            <form class="w3-container" action="/NFTs/searchNFT" method="post" style="float:right">
              @csrf
              <input type="text" placeholder="Search NFT " name="search">
              <button type="submit"><i class="fa fa-search"></i></button><br>
              </form><br><br><br>

              <div class="row">
              @foreach ($nftList as $nfts) 
              <tr>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="/details"  target="_blank"> 
                      <img src="{{asset('upload/'.session('image'))}}" alt="Avatar" style="width:100%">
                      <div class="caption">
                        <p>{{$nfts->name}}</p>
                        
                      </div>
                    </a>
                  </div>
                </div>
               
                @endforeach
              
            </tr>
              </div>
              
              </div>
            </div>
   
    </div>
    @include('includes.footer')
</body>
</html>     