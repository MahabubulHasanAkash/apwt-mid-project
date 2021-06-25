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
                        
          </div><br>
          
          
          <div class="w3-container w3-padding "><br>
            <h6 class="w3-opacity">Collectors</h6>
            <table>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Action</th>
                <th></th>
              </tr>
              <tr>
                
                <td>Anik</td>
                <td>Anik@gmail.com</td>
                <td>0177777777</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>

              </tr>
              <tr>
                
                <td>Akash</td>
                <td>Akash@gmail.com</td>
                <td>01888888888</td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>

              </tr>
            </table><br><br>
            <button class="w3-button w3-green"style="float: right;"><i class="fa fa-plus-square-o w3-margin-right"></i>Add Collector</button><br><br><br><br>
          </div>
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



