   <div class="modal fade" id="addWarehouseModal" tabindex="-1" aria-labelledby="addWarehouseModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content border-0 shadow-sm">
               <div class="modal-header">
                   <h5 class="modal-title" id="addWarehouseModalLabel">Add New Warehouse</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form>
                       <div class="row g-3">
                           <div class="col-md-6">
                               <label class="form-label">Warehouse Name</label>
                               <input type="text" class="form-control" placeholder="e.g. Lagos Depot" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Region</label>
                               <input type="text" class="form-control" placeholder="e.g. West Africa" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Capacity (m²)</label>
                               <input type="number" class="form-control" placeholder="18000" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Temperature Control</label>
                               <input type="text" class="form-control" placeholder="e.g. +15°C to +18°C" />
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Warehouse Manager</label>
                               <input type="text" class="form-control" placeholder="e.g. Amina Yusuf" />
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Address</label>
                               <textarea class="form-control" rows="3" placeholder="Facility address and access notes"></textarea>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                   <button type="button" class="btn btn-primary">Save Warehouse</button>
               </div>
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
                   <form>
                       <div class="row g-3">
                           <div class="col-md-6">
                               <label class="form-label">Warehouse Name</label>
                               <input type="text" class="form-control" value="Lagos Depot" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Region</label>
                               <input type="text" class="form-control" value="West Africa" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Capacity (m²)</label>
                               <input type="number" class="form-control" value="18000" />
                           </div>
                           <div class="col-md-6">
                               <label class="form-label">Temperature Control</label>
                               <input type="text" class="form-control" value="+15°C to +18°C" />
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Warehouse Manager</label>
                               <input type="text" class="form-control" value="Amina Yusuf" />
                           </div>
                           <div class="col-md-12">
                               <label class="form-label">Address</label>
                               <textarea class="form-control" rows="3">Plot 24, Industrial Road, Lagos</textarea>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                   <button type="button" class="btn btn-primary">Update Warehouse</button>
               </div>
           </div>
       </div>
   </div>

   <div class="modal fade" id="warehouseDetailModal" tabindex="-1" aria-labelledby="warehouseDetailModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-xl modal-dialog-centered">
           <div class="modal-content border-0 shadow-sm">
               <div class="modal-header">
                   <div>
                       <h5 class="modal-title" id="warehouseDetailModalLabel">Lagos Depot Details</h5>
                       <p class="text-muted small mb-0">Comprehensive facility overview, capacity metrics, and recent
                           logs.</p>
                   </div>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <div class="row g-4">
                       <div class="col-12 col-xl-5">
                           <div class="card card-soft h-100">
                               <div class="card-body">
                                   <div class="mb-3">
                                       <span class="badge bg-success">Stable</span>
                                   </div>
                                   <h6 class="mb-3">Facility summary</h6>
                                   <div class="row g-3 mb-4">
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Capacity</p>
                                           <p class="fw-semibold mb-0">18,000 m²</p>
                                       </div>
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Utilization</p>
                                           <p class="fw-semibold mb-0">76%</p>
                                       </div>
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Manager</p>
                                           <p class="fw-semibold mb-0">Amina Yusuf</p>
                                       </div>
                                       <div class="col-6">
                                           <p class="text-muted small mb-1">Temp range</p>
                                           <p class="fw-semibold mb-0">+15°C to +18°C</p>
                                       </div>
                                   </div>
                                   <div>
                                       <h6 class="mb-2">Recent activity</h6>
                                       <div class="timeline">
                                           <div class="timeline-item mb-3">
                                               <div class="timeline-dot bg-primary"></div>
                                               <div>
                                                   <p class="mb-1"><strong>12 pallets moved</strong> to outbound
                                                       staging.</p>
                                                   <span class="text-muted small">May 4, 2024 • 09:14</span>
                                               </div>
                                           </div>
                                           <div class="timeline-item mb-3">
                                               <div class="timeline-dot bg-success"></div>
                                               <div>
                                                   <p class="mb-1"><strong>Inventory audit</strong> completed for
                                                       zone
                                                       B.</p>
                                                   <span class="text-muted small">May 3, 2024 • 15:22</span>
                                               </div>
                                           </div>
                                           <div class="timeline-item">
                                               <div class="timeline-dot bg-warning"></div>
                                               <div>
                                                   <p class="mb-1"><strong>Temperature alert</strong> resolved in
                                                       cold
                                                       storage.</p>
                                                   <span class="text-muted small">May 2, 2024 • 11:05</span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-12 col-xl-7">
                           <div class="card border-0 shadow-sm h-100">
                               <div class="card-body">
                                   <h6 class="mb-3">Operational metrics</h6>
                                   <div class="row g-3 mb-4">
                                       <div class="col-6">
                                           <div class="small text-muted">Receiving Efficiency</div>
                                           <div class="d-flex align-items-center gap-2">
                                               <span class="fw-semibold">92%</span>
                                               <span class="badge bg-success bg-opacity-10 text-success">On
                                                   target</span>
                                           </div>
                                       </div>
                                       <div class="col-6">
                                           <div class="small text-muted">Order Pick Rate</div>
                                           <div class="fw-semibold">510 picks/hr</div>
                                       </div>
                                       <div class="col-6">
                                           <div class="small text-muted">Available Slots</div>
                                           <div class="fw-semibold">4,250</div>
                                       </div>
                                       <div class="col-6">
                                           <div class="small text-muted">Critical Items</div>
                                           <div class="fw-semibold">8</div>
                                       </div>
                                   </div>
                                   <h6 class="mb-3">Contact</h6>
                                   <p class="mb-2"><strong>Phone:</strong> +234 901 234 5678</p>
                                   <p class="mb-0"><strong>Email:</strong> aminay@cargomax.com</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Open warehouse inventory</button>
               </div>
           </div>
       </div>
   </div>
