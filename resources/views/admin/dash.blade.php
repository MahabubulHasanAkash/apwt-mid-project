{{-- <!DOCTYPE html>
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

    <!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
           <h4 class="w3-center">My Profile</h4>
           <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
           <hr>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
           <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
          </div>
        </div>
        <br>
        
        <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
            <div id="Demo2" class="w3-hide w3-container">
              <p>Some other text..</p>
            </div>
            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
            <div id="Demo3" class="w3-hide w3-container">
           <div class="w3-row-padding">
           <br>
             <div class="w3-half">
               <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
           </div>
            </div>
          </div>      
        </div>
        <br> 
        
      
      <!-- End Left Column -->
      </div>

      <div class="w3-col m7">
    
        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <h6 class="w3-opacity">Social Media template by w3.css</h6>
                <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
                <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
              </div>
            </div>
          </div>
        </div>
      </div>

    
</body>
@include('includes.footer')
</html> --}}

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('includes.head')
        <title>Marketplace</title>
    </head>
<body class="w3-theme-l5">
    @include('includes.nav');

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:10px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://images.clipartlogo.com/files/istock/previews/9339/93397305-vector-user-icon-of-man-in-business-suit.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <p style="text-align: center">ABU BAKAR SIDDIQ </p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Admin</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Dhaka, Bangladesh</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-dashboard fa-fw w3-margin-right"></i> Dash Board</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-street-view fa-fw w3-margin-right"></i> Buyer</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-suitcase fa-fw w3-margin-right"></i> Products</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-shopping-cart fa-fw w3-margin-right"></i> Orders</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-child fa-fw w3-margin-right"></i> Seller</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-puzzle-piece fa-fw w3-margin-right"></i> Collector</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-user-secret fa-fw w3-margin-right"></i> Creator</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-wrench fa-fw w3-margin-right"></i> Settings</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
        
  
          
    <!-- End Left Column -->
    </div>
    <hr>
    
    <!-- Middle Column -->
    <div class="w3-section w3-bottombar w3-padding-16" style="margin-left:300px">
            
        <button style="margin-left:60px"class="w3-button w3-white"><i class="fa fa-dashboard w3-margin-right"></i>Dash Board</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-suitcase w3-margin-right"></i>Products</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-shopping-cart w3-margin-right"></i>Orders</button>
        <button class="w3-button w3-white"><i class="fa fa-street-view w3-margin-right"></i>Buyer</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-child w3-margin-right"></i>Seller</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-puzzle-piece w3-margin-right"></i>Collector</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-user-secret w3-margin-right"></i>Creator</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-wrench w3-margin-right"></i>Settings</button>
      </div>

    <div class="w3-row-padding w3-margin-bottom">
        
        <div class="w3-quarter" style="margin-left:340px;margin-top:-500px">
          <div class="w3-container w3-blue w3-padding-16">
            <div class="w3-left"><i class="fa fa-paint-brush w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>99</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Art</h4>
          </div>
        </div>
        <div class="w3-quarter" style="margin-left:660px;margin-top:-500px">
          <div class="w3-container w3-teal w3-padding-16">
            <div class="w3-left"><i class="fa fa-music w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>23</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Music</h4>
          </div>
        </div>
        <div class="w3-quarter" style="margin-left:980px;margin-top:-500px">
          <div class="w3-container w3-orange w3-text-white w3-padding-16">
            <div class="w3-left"><i class="fa fa-film w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>50</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Videos</h4>
          </div>
        </div>
      </div>
    
        
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      
        <div class="w3-container">
            <button style="background-color:rgba(56, 52, 52, 0.274)" class="w3-button w3-block  w3-center-align"><i class="fa fa-tasks fa-fw w3-margin-right"></i> Category</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-paint-brush fa-fw w3-margin-right"></i> Art</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-music fa-fw w3-margin-right"></i> Music</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-film fa-fw w3-margin-right"></i> Video</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>

            
        
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
@include('includes.footer')
 

</body>
</html> 



