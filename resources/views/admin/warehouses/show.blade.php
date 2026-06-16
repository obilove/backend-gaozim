   <div class="modal fade" id="addWarehouseModal" tabindex="-1" aria-labelledby="addWarehouseModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content border-0 shadow-sm">
               <div class="modal-header">
                   <h5 class="modal-title" id="addWarehouseModalLabel">Add New Warehouse</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form method="POST" action="{{ route('admin.warehouses.store') }}">
                       @csrf
                       <div class="row g-3">
                           <div class="col-md-6">
                               <label class="form-label">Warehouse Name</label>
                               <input name="name" type="text" class="form-control" placeholder="e.g. Lagos Depot"
                                   required />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Code</label>
                               <input name="code" type="text" class="form-control" placeholder="e.g. WH-001" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Capacity</label>
                               <input name="warehouse_capacity" type="text" class="form-control"
                                   placeholder="18,000 m²" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Warehouse Manager</label>
                               <input name="username" type="text" class="form-control"
                                   placeholder="e.g. Amina Yusuf" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Business</label>
                               <input name="business" type="text" class="form-control"
                                   placeholder="e.g. Cold Storage" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Status</label>
                               <select name="status" class="form-select">
                                   <option value="active">Active</option>
                                   <option value="inactive">Inactive</option>
                               </select>
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Location</label>
                               <input name="location" type="text" class="form-control"
                                   placeholder="e.g. West Africa" />
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Address</label>
                               <textarea name="address" class="form-control" rows="3" placeholder="Facility address and access notes"></textarea>
                           </div>
                       </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                   <button type="submit" class="btn btn-primary">Save Warehouse</button>
               </div>
               </form>
           </div>
       </div>
   </div>

   <div class="modal fade" id="editWarehouseModal" tabindex="-1" aria-labelledby="editWarehouseModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content border-0 shadow-sm">
               <div class="modal-header">
                   <h5 class="modal-title" id="editWarehouseModalLabel">Edit Warehouse</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form id="editWarehouseForm" method="POST">
                       @csrf
                       @method('PUT')
                       <div class="row g-3">
                           <div class="col-md-6">
                               <label class="form-label">Warehouse Name</label>
                               <input id="editWarehouseName" name="name" type="text" class="form-control"
                                   required />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Code</label>
                               <input id="editWarehouseCode" name="code" type="text" class="form-control" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Capacity</label>
                               <input id="editWarehouseCapacity" name="warehouse_capacity" type="text"
                                   class="form-control" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Warehouse Manager</label>
                               <input id="editWarehouseManager" name="username" type="text"
                                   class="form-control" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Business</label>
                               <input id="editWarehouseBusiness" name="business" type="text"
                                   class="form-control" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Status</label>
                               <select id="editWarehouseStatus" name="status" class="form-select">
                                   <option value="active">Active</option>
                                   <option value="inactive">Inactive</option>
                               </select>
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Location</label>
                               <input id="editWarehouseLocation" name="location" type="text"
                                   class="form-control" />
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Address</label>
                               <textarea id="editWarehouseAddress" name="address" class="form-control" rows="3"></textarea>
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Badge</label>
                               <input id="editWarehouseBadge" name="badge" type="text" class="form-control" />
                           </div>
                       </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                   <button type="submit" class="btn btn-primary">Update Warehouse</button>
               </div>
               </form>
           </div>
       </div>
   </div>

   <div class="modal fade" id="warehouseDetailModal" tabindex="-1" aria-labelledby="warehouseDetailModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-xl modal-dialog-centered">
           <div class="modal-content border-0 shadow-sm">
               <div class="modal-header">
                   <div>
                       <h5 class="modal-title" id="warehouseDetailModalLabel"><span
                               id="viewWarehouseName">Warehouse</span> Details</h5>
                       <p class="text-muted small mb-0">Comprehensive facility overview and location details.</p>
                   </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="row g-4">
                       <div class="col-12 col-xl-5">
                           <div class="card card-soft h-100">
                               <div class="card-body">
                                   <div class="mb-3">
                                       <span class="badge bg-success" id="viewWarehouseStatus">Active</span>
                                   </div>
                                   <h6 class="mb-3">Facility summary</h6>
                                   <div class="row g-3 mb-4">
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Code</p>
                                           <p class="fw-semibold mb-0" id="viewWarehouseCode">N/A</p>
                                       </div>
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Capacity</p>
                                           <p class="fw-semibold mb-0" id="viewWarehouseCapacity">N/A</p>
                                       </div>
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Manager</p>
                                           <p class="fw-semibold mb-0" id="viewWarehouseManager">N/A</p>
                                       </div>
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Badge</p>
                                           <p class="fw-semibold mb-0" id="viewWarehouseBadge">N/A</p>
                                       </div>
                                   </div>
                                   <div>
                                       <h6 class="mb-2">Warehouse details</h6>
                                       <div class="row g-3">
                                           <div class="col-12">
                                               <p class="text-muted small mb-1">Business</p>
                                               <p class="fw-semibold mb-0" id="viewWarehouseBusiness">N/A</p>
                                           </div>
                                           <div class="col-12">
                                               <p class="text-muted small mb-1">Location</p>
                                               <p class="fw-semibold mb-0" id="viewWarehouseLocation">N/A</p>
                                           </div>
                                           <div class="col-12">
                                               <p class="text-muted small mb-1">Address</p>
                                               <p class="fw-semibold mb-0" id="viewWarehouseAddress">N/A</p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-12 col-xl-7">
                           <div class="card border-0 shadow-sm h-100">
                               <div class="card-body">
                                   <h6 class="mb-3">Action</h6>
                                   <p class="text-muted mb-4">Use the warehouse action panel to inspect inventory or
                                       update the facility profile.</p>
                                   <a id="viewWarehouseInventoryLink" href="#" class="btn btn-primary">View
                                       inventory</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
