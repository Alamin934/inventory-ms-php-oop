<!-- Brand Modal -->
<div class="modal fade" id="addNewBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Brands</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <form id="add_brand">
                    <div class="form-group mb-3">
                        <label>Brand Name</label>
                        <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
                        <small id="brand_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" name="add_brand" class="btn btn-primary">Add Brand</button>
                </form>
            </div>
            <!-- Modal Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Update Brand Modal -->
<div class="modal fade" id="updateBrand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Brand</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <form id="update_brand_form" onsubmit="return false">
                    <div class="form-group mb-3">
                        <label>Brand Name</label>
                        <input type="hidden" name="bid" id="bid" value=""/>
                        <input type="text" class="form-control" name="update_brand" id="update_brand" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="brand_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Brand</button>
                </form>
            </div>
            <!-- Modal Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>