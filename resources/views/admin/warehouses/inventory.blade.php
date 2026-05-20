@extends('layouts.app')

@section('content')
    <main class="p-3 p-lg-4">
        <div class="section-header">
            <div>
                <h1 class="h2 mb-1">Inventory Levels</h1>
                <p class="text-muted">See stock levels, warehouse allocations, and restock thresholds.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="warehouse-items.html" class="btn btn-primary btn-sm"><i class="bi bi-box-seam me-1"></i>
                    View Warehouse Inventory</a>
                <a href="restock.html" class="btn btn-outline-primary btn-sm"><i class="bi bi-cart-plus me-1"></i>
                    Restock Requests</a>
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Total SKUs</p>
                                <h3 class="mb-0">1,204</h3>
                            </div>
                            <div class="metric-badge bg-primary-soft text-primary"><i class="bi bi-box-seam"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Tracked items</p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Low Stock</p>
                                <h3 class="mb-0">28</h3>
                            </div>
                            <div class="metric-badge bg-warning-soft text-warning"><i class="bi bi-exclamation-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Needs restock</p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Backordered</p>
                                <h3 class="mb-0">15</h3>
                            </div>
                            <div class="metric-badge bg-danger-soft text-danger"><i class="bi bi-arrow-down-circle"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-0">Awaiting arrival</p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-xl-3">
                <div class="card card-soft h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-1">Optimal</p>
                                <h3 class="mb-0">84%</h3>
                            </div>
                            <div class="metric-badge bg-success-soft text-success"><i class="bi bi-check-circle"></i></div>
                        </div>
                        <p class="text-muted small mb-0">Inventory health</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="card border-0 shadow-sm mt-3">
            <div class="card-body">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-0 overflow-auto">
                        <table class="table table-hover mb-0">
                            <thead class="bg-surface-strong">
                                <tr>
                                    <th class="py-3 px-3 text-start text-muted small">Item</th>
                                    <th class="py-3 px-3 text-start text-muted small">SKU</th>
                                    <th class="py-3 px-3 text-start text-muted small">Warehouse</th>
                                    <th class="py-3 px-3 text-start text-muted small">Stock</th>
                                    <th class="py-3 px-3 text-start text-muted small">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle">Pallet Wrap</td>
                                    <td class="py-3 px-3 align-middle">SK-3001</td>
                                    <td class="py-3 px-3 align-middle">Lagos</td>
                                    <td class="py-3 px-3 align-middle">120</td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-success">Healthy</span>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle">Pallets</td>
                                    <td class="py-3 px-3 align-middle">SK-3012</td>
                                    <td class="py-3 px-3 align-middle">Abuja</td>
                                    <td class="py-3 px-3 align-middle">45</td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-warning text-dark">Low
                                            stock</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="py-3 px-3 align-middle">Pallet Labels</td>
                                    <td class="py-3 px-3 align-middle">SK-3050</td>
                                    <td class="py-3 px-3 align-middle">Kano</td>
                                    <td class="py-3 px-3 align-middle">0</td>
                                    <td class="py-3 px-3 align-middle"><span class="badge bg-danger">Backordered</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
