@extends('core::layouts.admin.app')

@section('title', __('Create customer'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __('Add Customer') }}</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="{{ route('admin.customers.index') }}" class="btn btn-primary"><i class="fas fa-align-justify"></i> {{ __("Customer List") }}</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-align-justify"></i> {{ __('Credit Customer') }}</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-align-justify"></i> {{ __('Paid Customer') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.customers.store') }}" method="post" class="instant_reload_form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="customer_name" class="mb-0 required">{{ __("Customer Name") }}</label>
                                <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="{{ __("Customer Name") }}" required>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="customer_mobile" class="mb-0 required">{{ __("Mobile No") }}</label>
                                <input type="tel" name="customer_mobile" class="form-control" id="customer_mobile" placeholder="{{ __("Mobile No") }}" required>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="customer_email" class="mb-0 required">{{ __("Email Address1") }}</label>
                                <input type="email" class="form-control" name="customer_email" id="customer_email" required>
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="secondary_email" class="mb-0">{{ __("Secondary Email Address") }}</label>
                                <input type="email" class="form-control" name="secondary_email" id="secondary_email" placeholder="{{ __("Email Address") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="phone" class="mb-0">{{ __("Phone") }}</label>
                                <input class="form-control" id="phone" type="tel" name="phone" placeholder="{{ __("Phone") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="contact" class="mb-0">{{ __("Contact") }}</label>
                                <input class="form-control" id="contact" type="text" name="contact" placeholder="{{ __("Contact") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="fax" class="mb-0">{{ __("Fax") }}</label>
                                <input type="text" name="fax" class="form-control" id="fax" placeholder="{{ __("Fax") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="city" class="mb-0">{{ __("City") }}</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="{{ __("City") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="state" class="mb-0">{{ __("State") }}</label>
                                <input type="text" name="state" class="form-control" id="state" placeholder="{{ __("State") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="zip" class="mb-0">{{ __("Zip") }}</label>
                                <input name="zip" type="text" class="form-control" id="zip" placeholder="{{ __("Zip") }}">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="country" class="mb-0">{{ __("Country") }}</label>
                                <input name="country" type="text" class="form-control" placeholder="{{ __("Country") }}" id="country">
                            </div>
                            <div class="col-sm-6 col-md-4 mb-3">
                                <label for="previous_balance" class="mb-0">{{ __("Previous Balance") }}</label>
                                <input name="previous_balance" id="previous_balance" type="number" class="form-control" placeholder="{{ __('Previous Balance') }}" step="any">
                            </div>
                            <div class="col-sm-6">
                                <label for="address1" class="mb-0">{{ __("Address 1") }}</label>
                                <textarea name="address_1" id="address1" class="form-control" placeholder="{{ __('Address 1') }}"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="address2" class="mb-0">{{ __("Address 2") }}</label>
                                <textarea name="address_2" id="address2" class="form-control" placeholder="{{ __("Address 2") }}"></textarea>
                            </div>
                            <div class="col-12 mt-4 text-right">
                                <button type="submit" class="btn btn-primary submit-button"><i class="fas fa-save"></i> {{ __("Save") }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
