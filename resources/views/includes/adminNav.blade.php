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
    <a href="/admin/artType" class="w3-bar-item w3-button w3-padding-16">Art Type</a>
    <a href="/admin/viewCollector" class="w3-bar-item w3-button w3-padding-16">Collectors</a>
    <a href="/admin/viewCreator" class="w3-bar-item w3-button w3-padding-16">Creators</a>      
      <a href="/logout" style="float:right" class="w3-bar-item w3-button w3-padding-16">Log Out</a>
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