<div class="btn-group btn-group-sm">
    @can('customers-update')
        <a href="{{ route('admin.customers.edit', $id) }}" class="btn btn-success">
            <i class="fas fa-edit"></i>
        </a>
    @endcan
    @can('customers-delete')
            <a href="{{ route('admin.customers.destroy', $id) }}" class="btn btn-danger confirm-delete">
                <i class="fas fa-trash"></i>
            </a>
    @endcan
</div>
