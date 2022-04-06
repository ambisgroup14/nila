<?php 
include('header.php');
?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
     <div>
        <div class="row align-items-end mb-3">
          <div class="col-sm mb-2 mb-sm-0">            
            <h1 class="page-header-title">Attribute List</h1>
          </div>
        
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <!-- Nav -->   
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">         
          <!-- Card -->
      <div class="card">
        <!-- Header -->
        
          <!-- End Col -->

          <div class="d-grid d-sm-flex align-items-sm-center gap-2">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="fs-5 me-3">
                  <span id="datatableCounter">0</span> Selected
                </span>

                <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                  <i class="bi-trash"></i> Delete
                </a>
              </div>
            </div>
            <!-- End Datatable Info -->

            
          </div>
        </div>
        <!-- End Header -->

        <!-- Filter Search Collapse -->
        <div class="collapse" id="filterSearchCollapse">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-sm-12 col-lg-4">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="teamsFilterLabel" class="form-label">Teams</label>

                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend input-group-text">
                        <i class="bi-people-fill"></i>
                      </div>
                      <input class="form-control" id="teamsFilterLabel" placeholder="Name, role, department" aria-label="Name, role, department">
                    </div>
                  </div>
                  <!-- End Form -->
                </div>
                <!-- End Col -->              
              </div>
              <!-- End Row -->

              <div class="d-flex justify-content-end gap-3">
                <button type="button" class="btn btn-white">Cancel</button>
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Filter Search Collapse -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable" class="table table-borderless table-thead-bordered card-table" data-hs-datatables-options='{
                   "autoWidth": false,
                   "columnDefs": [{
                      "targets": [0, 6],
                      "orderable": false
                    }],
                   "columns": [
                      null,
                      null,
                      { "width": "35%" },
                      null,
                      null,
                      null,
                      null
                    ],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 8,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                
                <th scope="col">S No</th>
                <th scope="col">Category </th>
                <th scope="col">Attribute</th>
                <th scope="col">Edit</th>  
                <th scope="col">Delete</th>  
                               
              </tr>
            </thead>

            <body>
              <tr>
               
                <td>01</td>
                <td>Ring</td>
                <td>Size</td>
                
                <td>
                <div class="btn-group" role="group">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".exampleModalCenter">
                      <i class="bi-pencil-fill me-1"></i> Edit
                    </a>                  
                  </div>
                </td>
                <td>
                <div class="btn-group" role="group">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".exampleModal" >
                      <i class="bi-trash-fill me-1"></i> Delete
                    </a>                  
                  </div>
                </td>
                
              </tr>
              <tr>
               
               <td>02</td>
               <td>Bracelet</td>
               <td>Stone Color</td>
               
               <td>
               <div class="btn-group" role="group">
                   <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".exampleModalCenter">
                     <i class="bi-pencil-fill me-1"></i> Edit
                   </a>                  
                 </div>
               </td>
               <td>
               <div class="btn-group" role="group">
                   <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".exampleModal" >
                     <i class="bi-trash-fill me-1"></i> Delete
                   </a>                  
                 </div>
               </td>
               
             </tr>
             <tr>
               
               <td>03</td>
               <td>Chain</td>
               <td>Size Color</td>
               
               <td>
               <div class="btn-group" role="group">
                   <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".exampleModalCenter">
                     <i class="bi-pencil-fill me-1"></i> Edit
                   </a>                  
                 </div>
               </td>
               <td>
               <div class="btn-group" role="group">
                   <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".exampleModal" >
                     <i class="bi-trash-fill me-1"></i> Delete
                   </a>                  
                 </div>
               </td>
               
             </tr>
              

                 
            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected>8</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->
    </div>
          </div>
          <!-- End Card -->

         

         
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->

     
    </div>
    <!-- End Content -->

    <!-- Footer -->

    
    <!-- End Footer -->
  </main>
<?php 
include('footer.php');
?>
