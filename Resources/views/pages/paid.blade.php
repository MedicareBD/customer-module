@extends('core::layouts.admin.app')

@section('title', __('Paid Customers'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>@lang('Paid Customer')</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> @lang('Add Customer')</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-align-justify"></i> @lang('Customer List')</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-align-justify"></i> @lang('Credit Customer')</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="CustomerList_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr role="row">
                                        <th>@lang('S/N')</th>
                                        <th>@lang('Customer Name')</th>
                                        <th>@lang('Address 1')</th>
                                        <th>@lang('Mobile No')</th>
                                        <th>@lang('Email')</th>
                                        <th>@lang('City')</th>
                                        <th>@lang('State')</th>
                                        <th>@lang('Country')</th>
                                        <th>@lang('Balance')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
