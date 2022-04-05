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

            <h1 class="page-header-title">Category</h1>

           
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
            
            <div class="col-sm-6 ">                
              <div class="mb-6">
                     
                <div class="card">
                <div class="card-body">
                <label for="files" class="form-label">Select Images:</label>

                <form action="/action_page.php">
                  
                  <input type="file" id="files" name="files" multiple="multiple"><br><br>

                </form>
             
                </div>
                </div>
             </div>
            </div>
            </div>

            <center><button type="button" class="btn btn-primary">Submit</button></center>

  </main>
<?php 
include('footer.php');
?>
