@extends("layouts.spacedcustomlayout")

@section("body")
<div class="uk-section uk-section-secondary uk-preserve-color uk-background-contain uk-background-center in-equity-15" data-src="./wiwi/img/in-equity-decor-1.svg" data-uk-img>
    <div class="uk-container">
    <div class="uk-width-3-3@m">
    <div data-uk-grid="" class="uk-grid">
    <div class="uk-width-1-2@s uk-width-2-3@m uk-first-column">
    <h1 class="uk-margin-remove myWhite">Buy Digital Currency</h1>
    <p class="uk-text-lead uk-text-muted uk-margin-small-top">
    Where to Buy Bitcoin, Ethereum, Litecoin... </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <main>
    
    <div class="uk-section uk-section-secondary in-equity-8">
    <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
    <div class="uk-grid uk-flex uk-flex-center">
    <div class="uk-text-center">
    <h1>Invest on <span class="in-highlight">Forex</span> Market</h1>
    <p class="uk-text-lead uk-margin-medium-bottom">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>
    <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
    
    
     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
    {
    "width": "100%",
    "height": "100%",
    "currencies": [
      "EUR",
      "USD",
      "JPY",
      "GBP",
      "CHF",
      "AUD",
      "CAD",
      "NZD",
      "CNY"
    ],
    "isTransparent": false,
    "colorTheme": "light",
    "locale": "en"
  }
    </script>
  </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="uk-section uk-section-secondary in-equity-8">
    <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
    <div class="uk-grid uk-flex uk-flex-center">
    <div class="uk-text-center">
    <h1>Invest on <span class="in-highlight">Cryptocurrency</span> Market</h1>
    <p class="uk-text-lead uk-margin-medium-bottom">Invest on our extensive range of CFDs on FX, Commodities, Cryptocurrencies, Shares, ETFs and more. Low costs, fast execution and 24/7 support.</p>
    <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-box-shadow-large widget-card">
    
    
     <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
    {
    "width": "100%",
    "height": "100%",
    "defaultColumn": "overview",
    "screener_type": "crypto_mkt",
    "displayCurrency": "USD",
    "colorTheme": "light",
    "locale": "en"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
    
    </div>
     <p class="uk-text-small uk-text-muted"></p>
    </div>
    </div>
    </div>
    </div>
    </main>

@endsection
