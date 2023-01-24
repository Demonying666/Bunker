@extends('layouts.app')

@section('content')
<div class="silver-container m-auto">
    <div class="py-4 text-center"></div>
        <div class="row">
                <!-- Cart -->
            <div class="col-md-4 order-md-2 mb-4">
                <div class="pricing-table">
                    <div class="grid">
                    <div class="box vip">
                        <div class="title1">Silver</div>
                        <div class="price">
                        <b>$9.99</b>
                        <span>$9.99/per month</span>
                    </div>
                    <div class="features">
                        <div>1 Month</div>
                        <div>Geolocation</div>
                        <div>Expiry Reminder</div>
                        <div>Technical Support</div>
                        <div>Cancel Anytime</div>
                        <div>Real-time Weather Updates  
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-8 order-md-1">
        <!-- Billing Address -->
        <h4 class="mb-3">Billing address</h4>
        <form id="form" action="#">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>
          
          <div class="mb-3">
            <label for="username">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="email" class="form-control" id="userName" placeholder="Username" required>
              <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>
  
          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>
        <div class="row">
            <div class="col-md-3 mb-3">
              <label for="zip">Zip</label>
              <input type="number" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
        </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
          </div>
          <hr class="mb-4">
          <!-- PAYMENT -->
          <h4 class="mb-3">Payment</h4>
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Credit card</label>
              <i class="fa-solid fa-credit-card"></i>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
              <i class="fa-solid fa-credit-card"></i>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
              <i class="fa-brands fa-paypal"></i>
            </div>
          </div>
          <hr class="mb-4">
          <a href="/confirmation" class="btn btn-lg btn-block w-100" type="submit"><i class="fa-solid fa-cart-shopping"></i>Complete Purchase</a>
        </form>
      </div>
    </div>
    
  </div>
@endsection