<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Summary</span>
            <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
            @if (Session::has('checkout'))
                <li class="list-group-item d-flex justify-content-between">
                    <span>Subtotal (Tooman)</span>
                    <strong>{{ Session::get('checkout')['subtotal'] }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (Tooman)</span>
                    <strong>{{ Session::get('checkout')['total'] }}</strong>
                </li>
            @endif
        </ul>
    </div>


    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form wire:submit.prevent="placeOrder">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="bill-firstName">First name</label>
                    <input type="text" class="form-control" id="bill-firstName" placeholder="First Name" value=""
                        required="" wire:model="first_name">
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bill-lastName">Last name</label>
                    <input type="text" class="form-control" id="bill-lastName" placeholder="Last Name" value=""
                        required="" wire:model="last_name">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="bill-email">Email</label>
                <input type="email" class="form-control" id="bill-email" placeholder="you@example.com"
                    wire:model="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bill-phone">Phone</label>
                <input type="text" class="form-control" id="bill-phone" placeholder="Phone Number"
                    wire:model="mobile">
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bill-address">Address</label>
                <input type="text" class="form-control" id="bill-address" placeholder="1234 Main St" required=""
                    wire:model="line1">
                @error('line1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="bill-address2">Address 2 <span class="text-muted">(Optional)</span></label>
                <input type="text" class="form-control" id="bill-address2" placeholder="Apartment or suite"
                    wire:model="line2">
            </div>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="bill-country">Country</label>
                    <input type="text" class="form-control" id="bill-country" placeholder="Country"
                        wire:model="country">
                    @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mb-3">
                    <label for="bill-state">State</label>
                    <input type="text" class="form-control" id="bill-state" placeholder="State" wire:model="province">
                    @error('province')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mb-3">
                    <label for="bill-city">City</label>
                    <input type="text" class="form-control" id="bill-city" placeholder="City" wire:model="city">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mb-3">
                    <label for="bill-zip">Zip</label>
                    <input type="text" class="form-control" id="bill-zip" placeholder="Zip Code" required=""
                        wire:model="zipcode">
                    @error('zipcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="different-address" value="1"
                    wire:model="ship_to_different">
                <label class="custom-control-label" for="different-address">Shipping address is different from my
                    billing address</label>
            </div>

            @if ($ship_to_different)
                <hr class="mb-4" />
                <div id="shipping-address">

                    <h4 class="mb-3">Shipping address</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="shipp-firstName">First name</label>
                            <input type="text" class="form-control" id="shipp-firstName" placeholder="First Name"
                                value="" required="" wire:model="s_first_name">
                            @error('s_first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="shipp-lastName">Last name</label>
                            <input type="text" class="form-control" id="shipp-lastName" placeholder="Last Name"
                                value="" required="" wire:model="s_last_name">
                            @error('s_last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="shipp-email">Email</label>
                        <input type="email" class="form-control" id="shipp-email" placeholder="you@example.com"
                            wire:model="s_email">
                        @error('s_email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="shipp-phone">Phone</label>
                        <input type="text" class="form-control" id="shipp-phone" placeholder="Phone Number"
                            wire:model="s_mobile">
                        @error('s_mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="shipp-address">Address</label>
                        <input type="text" class="form-control" id="shipp-address" placeholder="1234 Main St"
                            required="" wire:model="s_line1">
                        @error('s_line1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="shipp-address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="shipp-address2" placeholder="Apartment or suite"
                            wire:model="s_line2">
                        @error('s_line2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="shipp-country">Country</label>
                            <input type="text" class="form-control" id="shipp-country" placeholder="Country"
                                wire:model="s_country">
                            @error('s_country')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="shipp-state">State</label>
                            <input type="text" class="form-control" id="shipp-state" placeholder="State"
                                wire:model="s_province">
                            @error('s_province')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="shipp-city">City</label>
                            <input type="text" class="form-control" id="shipp-city" placeholder="City"
                                wire:model="s_city">
                            @error('s_city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="shipp-zip">Zip</label>
                            <input type="text" class="form-control" id="shipp-zip" placeholder="Zip Code" required=""
                                wire:model="s_zipcode">
                            @error('s_zipcode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>
            @endif

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>
