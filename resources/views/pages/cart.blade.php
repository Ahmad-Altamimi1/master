@extends('layouts.master')
	<!-- Start About -->
  @section('content')

    <style> 
    .navbar a {
      font-size: 15px !important;
    }
     .navbar-nav{
      margin-left: 353px !important;
     }
    .top-navbar .container{
      margin:  0 20px !important;
    }
    </style>
  </head>
  <body>
    

	<!-- Start header -->


	<!-- End header -->



    
      <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted">3 items</div>
                        </div>
                    </div>    
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="images/health.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">بندوره</div>
                                <div class="row">بلدي</div>
                            </div>
                            <div class="col">
                                                        <div id="counter">
      
      <span id="minus">-</span> <span id="number">0</span> <span id="plus">+</span>
                                                        </div>
                            </div>
                            <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="images/health.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">عنب</div>
                                <div class="row">عنب عجلوني </div>
                            </div>
                            <div class="col">
                                <div id="counter">
      
      <span id="minus">-</span> <span id="number">0</span> <span id="plus">+</span></div>
                            </div>
                            <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="images/health.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">خوخ</div>
                                <div class="row">خوخ أحمر </div>
                            </div>
                            <div class="col">
                                                         <div id="counter">
      
      <span id="minus">-</span> <span id="number">0</span> <span id="plus">+</span>
                                                         </div>
                            </div>
                            <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&euro; 132.00</div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&euro; 137.00</div>
                    </div>
                   <a href="cheack.html" class="hrefch"> <button class="btn CHECKOUT" style="background-color: #eee;">CHECKOUT</button></a>
                </div>
            </div>
            
        </div>
        
  
</body>
</html>
@endsection