@extends("layouts.spacedcustomlayout")

@section("body")


<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('assets/images/location.png')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>What We Invest in</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>

    <!--about us page content start-->
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
{{$compd? $compd->companyname :"company name"}} makes it possible for you to achieve your financial purpose in life and live the lifestyle you’ve always craved for. By investing in Real Estate, Forex, Crypto Currency, Stocks, and Cannabis, we guarantee our clients substantial monthly profit for two years. We are a purpose-driven company, bound together by our commitment to what we do and how we work together. We come to this business from many different perspectives, but we all hold common values that we bring to our work. We are constantly engaged in research and development. This is a necessity in the world of relentlessly changing global financial markets. By utilizing our group of experts in all aspect of investment, we can carefully identify investment opportunities that can generate maximum profit for our client over a long period. Our team of licensed fiduciary advisors understands that every investor is unique. With the dynamic tools used by both you and your financial advisor, we are able to identify and alert you to opportunities so you can act on them.  </p>
                    <p>
                      After a client has successfully registered, verified and made a deposit into his or her account, we carefully allocate the funds and analyze the markets, define the most attractive asset categories and then select which assets to add to your portfolio, such as cryptocurrencies, stocks, REITs, cannabis or others. Over time, the client portfolio changes according to our vision of the market. In this way we can protect ourselves from market fluctuations and volatility.   </p>
                    
                    <p>
                      The goal of portfolio management is to maximize profits, but also minimize risks. It's a balancing act to get the return investor's need without taking undue risk. This is accomplished through careful analysis of asset allocation, diversification, and regularly scheduled rebalancing in some portfolio management styles.  </p>
                </div>
            </div>
            
            
  <div class="row">
      <div class="col-md-4">
      <div class="card card-profile text-center"style="margin:10px;">
        <div class="card-header card-avatar">
          <a href="{{route('crypto')}}">
            <img class="img" style="border: 2px solid white;width:100%;" src="assets/images/CRYPT.jpg">
          </a>
        </div>
        <div class="card-body ">
          <br>
          <a href="{{route('crypto')}}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    
     <div class="col-md-4">
      <div class="card card-profile text-center"style="margin:10px;">
        <div class="card-header card-avatar">
          <a href="forex">
            <img class="img" style="border: 2px solid white;width:100%; " src="assets/images/FOREX.jpg">
          </a>
        </div>
        <div class="card-body">
          <br>
          <a href="forex" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    
    
    
      <div class="col-md-4">
      <div class="card card-profile text-center">
        <div class="card-header card-avatar">
          <a href="stocks">
            <img class="img" style="border: 2px solid white;width:100%;" src="assets/images/STOCKS.jpg">
          </a>
        </div>
        <div class="card-body ">
          <br>
          <a href="stocks" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
  </div>
   
 


          
  <div class="row">
   
    <div class="col-md-4">
      <div class="card card-profile text-center">
        <div class="card-header card-avatar">
          <a href="cannabis">
            <img class="img" style="border: 2px solid white;width:100%;" src="assets/images/CANNABIS.jpg">
          </a>
        </div>
        <div class="card-body">
          <br>
          <a href="cannabis" class="btn btn-primary">Read more</a>
  
        </div>
      </div>
    </div>
    
    <div class="col-md-4" >
      <div class="card card-profile text-center"style="margin:10px;">
        <div class="card-header card-avatar">
          <a href="realestate">
            <img class="img" style="border: 2px solid white;width:100%;" src="assets/images/REALESTATE.jpg">
          </a>
        </div>
        <div class="card-body">
          <br>
          <a href="realestate" class="btn btn-primary">Read more</a>
          
        </div>
      </div>
    </div>
  
  
   <div class="col-md-4">
      <div class="card card-profile text-center"style="margin:10px;">
        <div class="card-header card-avatar">
          <a href="specialtrades">
            <img class="img" style="border: 2px solid white;width:100%; " src="assets/images/spetrades.jpg">
          </a>
        </div>
        <div class="card-body">
          <br>
          <a href="specialtrades" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>

        </div>
    </section>
</div>

<!-- Online Section End -->

<div class="clearfix"></div>
@endsection