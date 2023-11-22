<!-- Category Modal -->
<div class="modal fade" id="addNewCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <form id="category_form">
                    <div class="form-group mb-3">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="cat_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Parent Category</label>
                        <select class="form-control" id="parent_cat" name="parent_cat">

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
            <!-- Modal Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Update Category Modal -->
<div class="modal fade" id="updateCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <form id="category_form">
                    <div class="form-group mb-3">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="cat_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Parent Category</label>
                        <select class="form-control" id="parent_cat" name="parent_cat">

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
            <!-- Modal Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>