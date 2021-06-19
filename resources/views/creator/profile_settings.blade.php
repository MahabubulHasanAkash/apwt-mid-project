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
    @include('includes.profile')
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