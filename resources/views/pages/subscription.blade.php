@extends('layouts.app')
@section('content')
    
      <div class="modal-content">
        <div class="modal-body3">
        <div class="pricing-table">
            <div class="details">
                <h2>Subscription Plans</h2>
                <p>Choose an ideal plan that suits for you.</p>
                <p>Don't sleep for a good offer!</p>
            </div>
    
            <div class="grid">
                <div class="box">
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
                    <div class="button5">
                        <a href="/silver" class="btn mt-5">Buy Now!</a>
                    </div>
                </div>
                <div class="box vip">
                    <div class="title1">VIP</div>
                    <div class="price">
                        <b>$83.99</b>
                        <span>$6.99/per month</span>
                    </div>
                    <div class="features">
                        <div>12 Months</div>
                        <div>Geolocation</div>
                        <div>Expiry Reminder</div>
                        <div>Technical Support</div>
                        <div>Cancel Anytime</div>
                        <div>Real-time Weather Updates</div>
                        <div><i class="fa-solid fa-arrow-up"></i> 1 Free Month</div>
                    </div>
                    <div class="button5">
                        <a href="/vip" class="btn mt-5">Buy Now!</a>
                    </div>
                </div>
                <div class="box gold">
                    <div class="title1">Gold</div>
                    <div class="price">
                        <b>$53.94</b>
                        <span>$8.99/per month</span>
                    </div>
                    <div class="features">
                        <div>6 Months</div>
                        <div>Geolocation</div>
                        <div>Expiry Reminder</div>
                        <div>Technical Support</div>
                        <div>Cancel Anytime</div>
                        <div>Real-time Weather Updates</div>
                    </div>
                    <div class="button5">
                        <a href="/gold" class="btn mt-5">Buy Now!</a>
                    </div>
                </div>
    
            </div>
    
        </div>
        </div>
      </div>
    
  @endsection