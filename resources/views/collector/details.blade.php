<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @include('includes.head')
    <title>
        Marketplace
    </title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="{{asset('css/details.css')}}">
    @include('includes.nav')

    <div class="container bootdey">
        <div class="col-md-12">
        <section class="panel">
              <div class="panel-body">
                  <div class="col-md-6">
                      <div class="pro-img-details">
                          <img src="/images/{{$item->image}}" width="80%" alt="Art {{$item->id}}">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <h4 class="pro-d-title">
                          <a href="#" class="">
                            {{$item->name}}
                          </a>
                      </h4>
                      <p id="txt">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                    <p id="txt">
                          <br>
                          Creator : {{$item->creator}}
                          <br>
                          Edition : {{$item->edition}}
                          <br>
                          <a href="/proof" class=""><h4>See proof of authenticity</h4></a>
                    </p>
                      <div class="product_meta">
                        <p id="txt">
                          <span class="posted_in"> <strong>Categories: </strong>
                             <a rel="tag" href="#">Digital Art </a>
                        </p>
                          
                      </div>
                      <div class="m-bot15"> <strong> Initial Price : </strong> <span class="amount-old">{{$item->value}} ETH<br></span>
                      <div class="form-group">
                         <label Class="makeoffer">Make an Offer</label><br>
                          <input type="quantiy" placeholder="Min:0.05 ETH" class="form-control quantity">
                      </div>
                      <p>
                          <button class="btn btn-round btn-danger" type="button"></i> Submit</button>
                      </p>
                  </div>
              </div>
          </section>
          </div>
          </div>

          <!-- Classic tabs -->
<div class="classic-tabs border rounded px-4 pt-1">

    <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
      </li>
    </ul>
    <div class="tab-content" id="advancedTabContent">
      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
        <h6>##</h6>
        <p class="pt-1">2605 x 3131 px, JPEG (1.8 MB)<br>
            This is a signed and limited edition digital creation. What does this mean?<br>
            You're purchasing the full non-commercial rights to this creation. <br>Learn more.<br>
            Upon purchase, this creation will be transferred to your digital wallet. If you don't have one, we'll provide one for you.
            You may download the full-sized creation to display or even print for personal use.
            All sales are final.</p>
      </div>
      <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
        <h5>Additional Information</h5>
        <table class="table table-striped table-bordered mt-3">
          <thead>
            <tr>
              <th scope="row" class="w-150 dark-grey-text h6">Owner</th>
              <td><em>Mr Afridi</em></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="w-150 dark-grey-text h6">Price</th>
              <td>1.60 ETH</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
        <h5><span>1</span> review for <span></span></h5>
        <div class="media mt-3 mb-4">
          <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" width="62" alt="Generic placeholder image">
          <div class="media-body">
            <div class="d-sm-flex justify-content-between">
              <p class="mt-1 mb-2">
                <strong>Marthasteward </strong>
                <span>– </span><span>January 28, 2020</span>
              </p>
            </div>
            <p class="mb-0">Awesome!</p>
          </div>
        </div>
        <hr>
        <h5 class="mt-4">Add a review</h5>
        <p>Your email address will not be published.</p>
        <div>
          <!-- Your review -->
          <div class="md-form md-outline">
            <textarea id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
            <label for="form76">Your review</label>
          </div>
          <!-- Name -->
          <div class="md-form md-outline">
            <input type="text" id="form75" class="form-control pr-6">
            <label for="form75">Name</label>
          </div>
          <!-- Email -->
          <div class="md-form md-outline">
            <input type="email" id="form77" class="form-control pr-6">
            <label for="form77">Email</label>
          </div>
          <div class="text-right pb-2">
            <button type="button" class="btn btn-primary">Add a review</button>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <!-- Classic tabs -->

</body>
@include('includes.footer')
</html>