<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>CreatorPlace</title>
</head>
@include('includes.header')
<body>
    <div class="w3-row-padding w3-center w3-margin-top">
        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:320px">
          <h3>Create your collection</h3><br>
          <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          <p>Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
          </div>
        </div>
        
        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:320px">
          <h3>Add your NFTs</h3><br>
          <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          <p>Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats, and unlockable content.</p>
          </div>
        </div>
        
        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:320px">
          <h3>List them for sale</h3><br>
          <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
          <p>Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs, and we help you sell them!</p>
          </div>
        </div>
    </div>
                                  
        
</body>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
@include('includes.footer')