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
            <h1 class="page-header-title">Attribute</h1>           
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
            <div class="col-sm-6">
                    <div class="mb-6">                 
                        <label for="Name" class="form-label">Name</label>
                      <div class="input-group">
                        <input type="Text" class="form-control" name="Name" id="Name" placeholder="Name" aria-label="Name">
                      </div>   
                    </div> 
            </div>
            
            <div class="col-sm-6">                
                 <div class="mb-6">
                     <label for="Attribute" class="form-label">Attribute</label> 
                     <select class="form-control js-example-basic-single" name="attribute[]" multiple="multiple">                        
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                     </select>
                 </div>
             </div>
             
            <div class="content container-fluid" style="width:75%">
    
      <!-- End Page Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table class="table table-borderless table-thead-bordered card-table">
            <thead class="thead-light" style="white-space:nowrap"> 
                <th scope="col">S No</th>  
                <th scope="col">Attribute</th>
                <th scope="col"><button type="button" class="btn btn-success">+</button></th>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">#</td>
                <td>
                  <input type="Text" class="form-control" name="value[]"  placeholder="Attribute" aria-label="Attribute">
                </td>
                <td>
                  <button type="button" class="btn btn-outline-danger">-</button>
                </td>
            </tbody>
          </table>
        </div>
        <!-- End Col -->
      </div>
      <center><button type="button" class="btn btn-primary">Submit</button></center>
      <!-- End Row -->
     </div>

  </main>
<?php 
include('footer.php');
?>
