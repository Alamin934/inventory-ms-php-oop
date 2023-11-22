<!-- Product Modal -->
<div class="modal fade" id="addNewProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <form id="product_form">
                    <div class="form-group mb-3">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Category</label>
                        <select class="form-control" id="select_cat" name="select_cat" required/>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Brand</label>
                        <select class="form-control" id="select_brand" name="select_brand" required/>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Product Price</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Price of Product" required/>
                    </div>
                    <div class="form-group mb-3">
                        <label>Quantity</label>
                        <input type="text" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Quantity" required/>
                    </div>
                    <button type="submit" class="btn btn-success">Add Product</button>
                </form>
            </div>
            <!-- Modal Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Update Product Modal -->
<div class="modal fade" id="updateProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Content -->
            <div class="modal-body">
                <form id="product_form">
                    <div class="form-group mb-3">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Category</label>
                        <select class="form-control" id="select_cat" name="select_cat" required/>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Brand</label>
                        <select class="form-control" id="select_brand" name="select_brand" required/>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>Product Price</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Price of Product" required/>
                    </div>
                    <div class="form-group mb-3">
                        <label>Quantity</label>
                        <input type="text" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Quantity" required/>
                    </div>
                    <button type="submit" class="btn btn-success">Update Product</button>
                </form>
            </div>
            <!-- Modal Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>