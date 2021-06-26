<style>
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}


</style>

<div class="w3-bar w3-theme header" id="myHeader">
    
    <a href="/creation" class="w3-bar-item w3-button w3-padding-16">Creation</a>
    <a href="/collection" class="w3-bar-item w3-button w3-padding-16">Collection</a>
    <div class="w3-dropdown-hover">
      <button class="w3-button w3-padding-16">
        Collector <i class="fa fa-caret-down"></i>
      </button>
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="/admin/addCollector" class="w3-bar-item w3-button">Add Collector</a>
        <a href="/admin/viewCollector" class="w3-bar-item w3-button">View Collectors</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
        <button class="w3-button w3-padding-16">
          Creator <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
            <a href="/admin/addCreator" class="w3-bar-item w3-button">Add Creator</a>
            <a href="/admin/viewCreator" class="w3-bar-item w3-button">View Creators</a>
        </div>
      </div>
      <div class="w3-dropdown-hover">
        <button class="w3-button w3-padding-16">
          Category <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="#" class="w3-bar-item w3-button">Add Category</a>
          <a href="#" class="w3-bar-item w3-button">View Category</a>
        </div>
      </div>
      <a href="/login" style="float:right" class="w3-bar-item w3-button w3-padding-16">Log Out</a>
  </div>
  <script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    </script>