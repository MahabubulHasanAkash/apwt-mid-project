<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.head')
    <title>Ceations</title>
</head>
<body>
    @include('includes.adminNav')<br>
    

    <div class="w3-container w3-card w3-white">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h3 style="display: inline-block">Creations<h3>  
            <form class="w3-container" action="/admin/searchCreation" method="post" style="float:right">
              @csrf
              <input type="text" placeholder="Search Creation " name="search">
              <button type="submit"><i class="fa fa-search"></i></button><br>
              </form><br><br><br>

              <div class="row">
              @foreach ($creationList as $creations) 
              <tr>
                <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="/details"  target="_blank"> 
                      <img src="{{asset('upload/'.session('image'))}}" alt="Avatar" style="width:100%">
                      <div class="caption">
                        <p>{{$creations->name}}</p>
                        
                      </div>
                    </a>
                  </div>
                </div>

                    {{-- <td></td>
                    <td>{{$activities->owner_id}}</td>
                    <td>{{$activities->name}}</td>
                    <td>{{$activities->creation_date}}</td>
                    <td>{{$activities->value}}</td> --}}
                    {{-- <td><p class="w3-center"><img src="{{asset('upload/'.session('image'))}}" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p></td> --}}
                    
                    
                @endforeach
              
            </tr>
              </div>




              
                
                {{-- <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="/w3images/nature.jpg" target="_blank">
                      <img src="https://lh3.googleusercontent.com/_YyEJjXI8nsPSfQ-9SHgEdddB6P4nVRPp-g_5vNkDkiOLXX9d69VbtSMSLrqFxIpfEdUBFf9qSWpGFD3aEaYnCn_=w640-h400-e365-rj-sc0x00ffffff" alt="Nature" style="width:100%">
                      <div class="caption">
                        <p>Title 2</p>
                      </div>
                    </a>
                  </div>
                </div> --}}
                {{-- <div class="col-md-4">
                  <div class="thumbnail">
                    <a href="#" target="_blank">
                      <img src="https://i2.wp.com/techarx.com/wp-content/uploads/2018/03/mikael-gustafsson-wallpaper-mikael-gustafsson.jpg?fit=1920%2C1080&ssl=1" alt="Fjords" style="width:100%">
                      <div class="caption">
                        <p>Title 3</p>
                      </div>
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>
            
         

    @include('includes.footer')
</body>
</html>     