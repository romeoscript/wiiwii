@extends("layouts.spacedcustomlayout")

@section("body")


<div class="uk-section uk-section-secondary uk-preserve-color uk-background-contain uk-background-center in-equity-15" data-src="./home/img/in-equity-decor-1.svg" data-uk-img>
  <div class="uk-container">
  <div class="uk-width-3-3@m">
  <div data-uk-grid="" class="uk-grid">
  <div class="uk-width-1-2@s uk-width-2-3@m uk-first-column">
  <h1 class="uk-margin-remove myWhite">Contact support</h1>
  <p class="uk-text-lead uk-text-muted uk-margin-small-top">
  Send us a message </p>
  </div>
  </div>
  </div>
  </div>
  </div>
  <main>
  <div class="uk-section">
  <div class="uk-container uk-margin-small-top uk-margin-bottom">
  <div class="uk-grid uk-flex uk-flex-center in-contact-6">
  <div class="uk-width-3-5@m">
  <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
  <div class="uk-first-column">
  <h5 class="uk-margin-remove-bottom"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
  <p class="uk-margin-small-top">4224 Drainer Avenue, Pensacola FL, Florida 32505</p>
  </div>
  <div>
  <h5 class="uk-margin-remove-bottom"><i class="fas fa-envelope fa-sm uk-margin-small-right"></i>Email</h5>
  <p class="uk-margin-small-top uk-margin-remove-bottom"><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="0a63646c654a68637e6c6566636524696567">[email&#160;protected]</a></p>
  </div>
  </div>
  <hr class="uk-margin-medium">
  <p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Have a questions?</p>
  <h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in touch</span></h1>
  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script language=javascript>
  
  function checkform() {
    if (document.mainform.name.value == '') {
      alert("Please type your full name!");
      document.mainform.name.focus();
      return false;
    }
    if (document.mainform.email.value == '') {
      alert("Please enter your e-mail address!");
      document.mainform.email.focus();
      return false;
    }
    if (document.mainform.message.value == '') {
      alert("Please type your message!");
      document.mainform.message.focus();
      return false;
    }
    return true;
  }
  
  </script>
  <form method=post name=mainform onsubmit="return checkform()" class="uk-form uk-grid-small uk-margin-medium-top uk-grid"><input type="hidden" name="form_id" value="16695140139662"><input type="hidden" name="form_token" value="400cfc9c402f306b25b3e8d21985a432"><input type="hidden" name="form_id" value="16650822455958"><input type="hidden" name="form_token" value="1e6ae34e78025faea2c4a9ab63a4d814">
  <input type=hidden name=a value=support>
  <input type=hidden name=action value=send>
  <div class="uk-width-1-2@s uk-inline uk-first-column">
  <span class="uk-form-icon fas fa-user fa-sm"></span>
  <input class="uk-input uk-border-rounded" type="text" name="name" value="" placeholder="Full name">
  </div>
  <div class="uk-width-1-2@s uk-inline">
  <span class="uk-form-icon fas fa-envelope fa-sm"></span>
  <input class="uk-input uk-border-rounded" type="text" name="email" value="" placeholder="Email address">
  </div>
  <div class="uk-width-1-1 uk-grid-margin uk-first-column">
  <textarea class="uk-textarea uk-border-rounded" name=message cols=45 rows=4 placeholder="Briefly tell us what you want... "></textarea>
  </div>
  <div class="uk-width-1-1 uk-grid-margin uk-first-column">
  <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" type="submit" name="send">Send Message</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </main>
  <div class="uk-section uk-section-primary uk-preserve-color in-equity-14 uk-background-contain uk-background-top-center" data-src="./home/img/in-equity-14-bg.svg" data-uk-img="">
  <div class="uk-container uk-margin-small-bottom">
  <div class="uk-child-width-1-2@m uk-flex uk-flex-middle uk-grid" data-uk-grid="">
  <div class="uk-first-column">
  <div class="uk-flex uk-flex-left uk-flex-middle">
  <div class="uk-margin-right in-award-logo">
  <img src="home/img/in-lazy.gif" data-src="./home/img/in-equity-5-award-3.svg" alt="award" width="128" data-height="" data-uk-img="">
  </div>
  <div class="in-award-badge">
  <h3 class="uk-margin-remove">Investors #1 Choice</h3>
  <h4 class="uk-margin-remove-top uk-margin-small-bottom uk-text-uppercase in-heading-thin">Wiiwiiprotrade</h4>
  </div>
  </div>
  </div>
  <div class="uk-flex uk-flex-right uk-flex-middle right-content">
  <span class="uk-margin-large-left">
  <a href="{{ route('register') }}" class="uk-button uk-button-secondary uk-button-large uk-border-rounded">Open your account</a>
  </span>
  </div>
  </div>
  </div>
  </div>

@endsection()
