@extends('core::layouts.admin.app')

@section('title', __('Manage Customers'))

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>{{ __("Customer List") }}</h4>
                    <div class="card-header-action">
                        <div class="btn-group">
                            <a href="{{ route('admin.customers.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> {{ __("Add Customer") }}</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-align-justify"></i> {{ __("Credit Customer") }}</a>
                            <a href="#" class="btn btn-primary"><i class="fas fa-align-justify"></i> {{ __("Paid Customer") }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('pageScripts')
    {{ $dataTable->scripts() }}
@endpush
