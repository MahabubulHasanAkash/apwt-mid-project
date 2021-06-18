<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include('includes.head')
        <title>Marketplace</title>
    </head>
    <style> 

    .container
  {
    position: absolute;
    left: 40%;
    top: 65.5%;
    height: 200px;
    margin-top: -100px /* half of you height */
    width: 300px;
    margin-left: -200px /* half of you width */
  }
  

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.scrollmenu {
  
  overflow: auto;
  white-space: nowrap;
}

.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.scrollmenu a:hover {
  background-color: #777;
}
</style>

<body class="w3-theme-l5">
    @include('includes.nav');
    
<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
  
    <!-- The Grid -->
    <div class="w3-row-padding">
    
      <!-- Left Column -->
      @include('includes.adminSideBar');
  
      <!-- Right Column -->
      <div class="w3-twothird">
  
        @include('includes.adminButton')
          
            
            
            
                        
          </div><br><br>
          
            <h4 class="w3-opacity">Add Creator</h4><br>
            
          <form action="registration" method="post" >
            
            @csrf
            
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="FullName" name="name" placeholder="Full name" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="Email" name="email" placeholder="Email address" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="ContactNumber" name="contactNumber" placeholder="Contact Number" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="Password" name="password" placeholder="Password" type="password" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input autocomplete="off" class="form-control" id="ConPassword" name="conpassword" placeholder="Confirm password" type="password" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input type="submit" class="btn " style="float: right;background: #008B8B; color: white;font-weight:bold" value="Registration"   >
                </div>
            </div>
            
            
        </form>
                
    </div>
          
            
          </div><br>
          
          
        </div>
  
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <!-- End Page Container -->
  </div><br>



<!-- Footer -->
@include('includes.footer')
 

</body>
</html> 



