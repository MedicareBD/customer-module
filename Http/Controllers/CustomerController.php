<?php

namespace Modules\Customer\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Modules\Customer\DataTables\Admin\CustomerDataTable;
use Modules\Customer\Http\Requests\StoreCustomerRequest;
use Modules\Customer\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:customers-create')->only('create', 'store');
        $this->middleware('permission:customers-read')->only('index', 'show');
        $this->middleware('permission:customers-update')->only('edit', 'update');
        $this->middleware('permission:customers-delete')->only('destroy');
    }

    public function index(CustomerDataTable $dataTable)
    {
        return $dataTable->render('customer::index');
    }

    public function create()
    {
        return view('customer::create');
    }

    public function store(StoreCustomerRequest $request)
    {
        $validated = $request->validated();
        $customer = User::create([
            'name' => $validated['customer_name'],
            'email' => $validated['customer_email'],
            'password' => bcrypt('password'),
            'avatar' => 'https://avatars.dicebear.com/api/adventurer/'.str($validated['customer_name'])->slug().'.svg',
            'mobile' => $validated['customer_mobile'],
            'phone' => $validated['phone'],
            'secondary_email' => $validated['secondary_email'],
            'contact' => $validated['contact'],
            'address' => $validated['address_1'],
            'address_2' => $validated['address_2'],
            'fax' => $validated['fax'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['state'],
            'country' => $validated['contact'],
            'wallet' => $validated['previous_balance'],
        ]);

        $customer->assignRole('Customer');

        return response()->json([
            'message' => __('Customer Created Successfully'),
            'redirect' => route('admin.customers.index'),
        ]);
    }

    public function show(User $customer)
    {
        return view('customer::show');
    }

    public function edit(User $customer)
    {
        return view('customer::edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, User $customer)
    {
        $validated = $request->validated();
        $customer->update([
            'name' => $validated['customer_name'],
            'email' => $validated['customer_email'],
            'avatar' => 'https://avatars.dicebear.com/api/adventurer/'.str($validated['customer_name'])->slug().'.svg',
            'mobile' => $validated['customer_mobile'],
            'phone' => $validated['phone'],
            'secondary_email' => $validated['secondary_email'],
            'contact' => $validated['contact'],
            'address' => $validated['address_1'],
            'address_2' => $validated['address_2'],
            'fax' => $validated['fax'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['state'],
            'country' => $validated['contact'],
        ]);

        return response()->json([
            'message' => __('Customer Updated Successfully'),
            'redirect' => route('admin.customers.index'),
        ]);
    }

    public function destroy(User $customer)
    {
        if (! $customer->hasRole('Customer')) {
            return response()->json([
                'message' => __('This user is not a valid customer'),
            ], 403);
        }

        $customer->delete();

        return response()->json([
            'message' => __('Customer Deleted Successfully'),
            'redirect' => route('admin.customers.index'),
        ]);
    }

    public function creditCustomer()
    {
        return view('customer::pages.credit');
    }

    public function creditPaid()
    {
        return view('customer::pages.paid');
    }

    public function creditLedger()
    {
        return view('customer::pages.ledger');
    }
}
