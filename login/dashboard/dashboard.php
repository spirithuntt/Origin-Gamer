<!DOCTYPE html>
<html>
<body>

<?php
include 'component.php';
include 'scripts.php';
?>
        <!-- ***********title and add button*************** -->
        <div class="test col py-3">
			     <div class="row">
             <h3 class=" text-end col-7 my-5">Products table</h3>
          <div class=" col text-end">
				     <button class="btn btn-primary btn-rounded rounded-pill m-5" href="#modal-task" data-bs-toggle="modal" type="button" >Add Game <i class="fa-solid fa-plus"></i></button>
         </div>
			</div>
      <!-- ***********table of all games******************* -->
     <div class="col-lg-10 col-md-9 col-sm-6 text-center overflow-auto mx-5">
		 <table class="table" id=productstable >
  <thead>
    <tr>
      <th scope="col">img</th>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>
      <th scope="col">Stock</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
								//PHP CODE HERE
								//DATA FROM get() FUNCTION
								get()
							?> 
  </tbody>
</table>
			</div>
  <!-- <div class="tableau w-75 m-5 w-100 shadow">
        <table class="table table-hover" id=productstable > -->

        <!-- END #table -->

	</div>
  
  	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="scripts.php" method="POST" id="form-task" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
              <div class="mb-3">
            <label for="brand" class="col-form-label">img</label>
            <input type="file" class="form-control" id="img" name="img">
          </div>
							<input type="hidden" id="product-id" name="product-id">
							<div class="mb-3">
								<label class="form-label">products name</label>
								<input type="text" class="form-control" id="name" name= "name" data-parsley-trigger="keyup" required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Category </label required>
								<select class="form-select" id="category" name="category">
									<option value="1">CPU</option>
									<option value="2">GPU</option>
									<option value="3">monitor</option>
									<option value="4">pc case</option>
								</select>
							</div>
              <div class="mb-3">
            <label for="brand" class="col-form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" data-parsley-trigger="keyup" required>
          </div>
          <div class="mb-3">
            <label for="brand" class="col-form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" data-parsley-type="integer" data-parsley-trigger="keyup" required>
          </div>
          <div class="mb-3">
            <label for="brand" class="col-form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price"data-parsley-type="integer" data-parsley-trigger="keyup" required>
          </div>

							<div class="mb-3">
								<label class="form-label">Description</label>
								<input class="form-control" rows="10" id="description" name="description"></input>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save" class="btn btn-primary action-btn" id="save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

  	<!-- ================== BEGIN core-js ================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  	<!-- ================== BEGIN core-js ================== -->
	  <script src="scripts.js"></script>

</body>
</html>