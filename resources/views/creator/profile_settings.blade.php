<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Settings</title>
</head>
<body>
    @include('includes.nav')
    <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">
    
      <!-- Left Column -->
      <div class="w3-third">
      
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://i2.wp.com/techarx.com/wp-content/uploads/2018/03/mikael-gustafsson-wallpaper-mikael-gustafsson.jpg?fit=1920%2C1080&ssl=1" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
                <h2 style="color:white">Jane Doe</h2>
            </div>
          </div>
          <br>
          <div class="w3-container">
            <a href=''>On Sell</p>
            <a href=''>Life Offers</p>
            <a href=''>Sell History</p>
            <a href=''>Send Creations</p>
            <a href=''>About</p>
            <a href=''>Payment Settings</p>
            <a href=''>Account Settings</p>
       
            </div>
        </div><br>
  
      <!-- End Left Column -->
      </div>
  
      <!-- Right Column -->
      <div class="w3-twothird">
      
        <div class="w3-container w3-card w3-white w3-margin-bottom">


  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Profile Picture</label>
      <input type="file" class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Username</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Save</button><br>
  </form>

</div>
 </div>
 </div>
    </div>
  </div>
  @include('includes.footer')
</body>
</html>     