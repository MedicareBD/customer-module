<?php

use Modules\Customer\Http\Controllers\CustomerController;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function (){
    Route::resource('customers', CustomerController::class);

    Route::get('paid-customers', [CustomerController::class, 'creditPaid'])->name('customers.paid');
    Route::get('credit-customers', [CustomerController::class, 'creditCustomer'])->name('customers.credit');
    Route::get('ledger-customers', [CustomerController::class, 'creditLedger'])->name('customers.ledger');
});
