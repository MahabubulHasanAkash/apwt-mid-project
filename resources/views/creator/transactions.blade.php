<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Transactions</title>
</head>
<body>
    @include('includes.nav')
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
         <div class="w3-row-padding">
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
      </div>

    <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h3>Transactions</h3>
            <table class="w3-table-all w3-hoverable">
                <thead>
                  <tr class="w3-light-grey">
                    <th>Creation</th>
                    <th>Purchace date</th>
                    <th>Price</th>
                    <th>Wallet Address</th>
                  </tr>
                </thead>
                <tr>
                  <td>zxdeeadfasdwtyfh</td>
                  <td>08/06/2021</td>
                  <td>.15 eth</td>
                  <td>zxdeeadfasdasdawtyfh</td>
                </tr>
              </table>
              <br>
        </div>
    </div>   
</div> 
</div> 

    @include('includes.footer')
</body>
</html>     