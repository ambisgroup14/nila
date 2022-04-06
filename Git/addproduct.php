<?php 
include('header.php');
?>
<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col-sm mb-2 mb-sm-0">            

            <h1 class="page-header-title">Add Product</h1>

           
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col-lg-12 mb-3 mb-lg-0">
          <!-- Card -->
          <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
              <h4 class="card-header-title">Basic Info</h4>
            </div>
            <!-- End Header -->

            <!-- Body -->
          <div class="card-body">
          <div class="row">
          <div class="col-sm-4">
                  <div class="mb-4">
                      <label for="Name" class="form-label">Name</label>
                      <div class="input-group">
                        <input type="Text" class="form-control" name="Name" id="Name" autocomplete="off" placeholder="Name" aria-label="Name">
                      </div>   
                  </div> 
          </div>
          
          <div class="col-sm-4 ">                
                 <div class="mb-4">
                     <label for="Category" class="form-label">Category</label>
                     <select class="form-control" id="Category" name="Category">
                         <option value="" selected disabled>--Select category--</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                     </select>
                 </div>
          </div>
          
          <div class="col-sm-4 ">                
              <div class="mb-4">
                <label for="files" class="form-label">Select Images</label>
                <div class="input-group">
                  <input type="file" id="files" name="files">
                </div>
              </div>
            </div>
          </div>

          
          <div class="row">
          <div class="col-sm-4">
                    <div class="mb-4">
                      <label for="MRP" class="form-label">MRP</label>
                      <div class="input-group">
                         <input type="Number" class="form-control" name="MRP" id="MRP" placeholder="MRP" aria-label="MRP">
                      </div>   
                    </div> 
          </div> 
            
          <div class="col-sm-4">
                    <div class="mb-4">
                      <label for="Price" class="form-label">Price</label>
                      <div class="input-group">
                        <input type="Number" class="form-control" name="Price" id="Price" placeholder="Price" aria-label="Price">
                      </div>   
                    </div> 
          </div>
            
          <div class="col-sm-4">
                    <div class="mb-4">
                      <label for="originalPrice" class="form-label">Original Price</label>
                      <div class="input-group">
                         <input type="Number" class="form-control" name="originalPrice" id="originalPrice" placeholder="Rs.120" aria-label="originalPrice" readonly>
                      </div>   
                    </div> 
            </div> 
          </div>
         
          <div class="row">
            <div class="col-sm-4">
                  <div class="mb-4">
                    <label for="Tax" class="form-label">Tax</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="Tax" id="Tax" value="" placeholder="Tax" aria-label="Tax" readonly>
                    </div>  
                  </div>
            </div> 
            
            <div class="col-sm-4">                
              <div class="mb-4">
                <label for="files" class="form-label">Select Videos</label>
                <div class="input-group">
                  <input type="file" id="files" name="files">
                </div>
              </div>
            </div>
            
            <div class="col-4">
                    <label class="form-label">Description</label>
                    <div class="input-group">
                      <input class="form-control" name="Description" id="Description" placeholder="Description" aria-label="Description">
                    </div>                    
            </div>
            </div>

             <div class="row">
             <div class="col-sm-6">
                <button type="button" class="btn btn-primary">Back</button>
             </div>
             <div class="col-sm-4">
                <button type="button" class="btn btn-success">Render</button>
             </div>
             </div>                         
  </main>
<?php 
include('footer.php');
?>