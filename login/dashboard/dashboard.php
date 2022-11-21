<!DOCTYPE html>
<html>
<body>

<?php
include 'component.html';
?>



<div class="col-sm-10">
<h1 class="container page-header p-4">
						Products table
					</h1>
          <div class="ms-auto col-sm-2">
				<a href="#modal-task" id="addBtn" data-bs-toggle="modal" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Task</a>
				</div>
        <div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="in-progress-tasks">
 <div class="card shadow" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="product pic">
  <div class="card-body">
  <h6 class="font-weight-bolder text-primary">2500dh</h6>
    <h6 class="card-title">Product Name</h6>
    <p class="card-subtitle mb-2 text-muted">Category</p>
    <p class="card-subtitle mb-2 text-muted">Brand</p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary btn-sm">Edit</a>
    <a href="#" class="btn btn-danger btn-sm">Delete</a>
  </div>
</div>
</div>
  <!-- <div class="tableau w-75 m-5 w-100 shadow">
        <table class="table table-hover" id=productstable > -->

        <!-- END #table -->

	</div>
  
  	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="task-id" name="task-id">
							<div class="mb-3">
								<label class="form-label">products name</label>
								<input type="text" class="form-control" id="task-title" name= "title" required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Category </label required>
								<select class="form-select" id="category" name="category">
									<option selected disabled >Please select</option>
									<option value="1">CPU</option>
									<option value="2">GPU</option>
									<option value="3">monitor</option>
									<option value="4">pc case</option>
								</select>
							</div>
              <div class="mb-3">
            <label for="brand" class="col-form-label">Brand</label>
            <input type="text" class="form-control" id="brand">
          </div>
          <div class="mb-3">
            <label for="brand" class="col-form-label">Stock</label>
            <input type="text" class="form-control" id="Stock">
          </div>
          <div class="mb-3">
            <label for="brand" class="col-form-label">Price</label>
            <input type="text" class="form-control" id="price">
          </div>
          <div class="mb-3">
            <label for="brand" class="col-form-label">img</label>
            <input type="file" class="form-control" id="img">
          </div>
							<div class="mb-3">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="10" id="description" name="description"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete"  class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

  	<!-- ================== BEGIN core-js ================== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  	<!-- ================== BEGIN core-js ================== -->

</body>
</html>