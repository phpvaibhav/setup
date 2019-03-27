<div class="wraper light-bg">
	<div class="mt-78 pb-20 newsfeed-section">	
		<div class="container">	
			<div class="row pt-40 mb-3">
				<div class="col-lg-4">
					<form role="form"  name="categoryForm" ng-submit="submitCategory();" novalidate>
						<div class="form-group">
							<label for="category">Category name</label>
							<input type="hidden" name="categoryId" ng-model="categoryData.id">
							<input type="text" limit-to="15" name="categoryName" ng-model="categoryData.categoryName" class="form-control main-control" id="category" placeholder="Category name" required>
							<span class="text-red" ng-show="categoryForm.categoryName.$touched && categoryForm.categoryName.$invalid">Please enter category name.</span>
						</div>
					
						<button type="submit"  ng-disabled="categoryForm.$invalid" class="btn btn-primary">Save</button>
					</form>
				</div>
				<div class="col-lg-8">
					<h2>Category</h2>
					<!-- table -->
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Category</th>
								<th scope="col">Status</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr dir-paginate="category in categoryList |itemsPerPage:5">
								<th scope="row">1</th>
								<td>{{category.categoryName}}</td>
								<td>{{category.status}}</td>
								<td>
									<a href="javascript:void(0);"  ng-click="confirmationDialogDelete(category.categoryId,'deleteCategory');" >delete</a>
									<a href="javascript:void(0);"  ng-click="editCategory(category.categoryId);" >edit</a>
								</td>
							</tr>
							
						</tbody>
					</table>
					     <dir-pagination-controls
                max-size="5"
                direction-links="true"
                boundary-links="true" >
            </dir-pagination-controls>
					<!-- table -->
				</div>
				
			</div>
		</div>
	</div>
</div>
