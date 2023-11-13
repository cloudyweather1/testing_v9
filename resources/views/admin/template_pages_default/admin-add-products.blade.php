<x-layouts.layout-template0>

    <div class="container my-5">
        <div class="card">

            <div class="card-body">
                <div class="card-title">
                    <h2>Add Product</h2>
                </div>

                <div class="container1">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf





                        <div class="form-group">
                            <label for="product_title">Product Title:</label>
                            <input type="text" value="" class="form-control" id="product_title" name="product_title"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="product_description">Product Description:</label>
                            <textarea class="form-control" rows="3" id="product_description" name="product_description"
                                required></textarea>
                        </div>


                        <div class="form-group">
                            <label for="product_price">Price:</label>
                            <input type="text" value="" class="form-control" id="product_price" name="product_price"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="product_quantity">Quantity:</label>
                            <input type="text" value="" class="form-control" id="product_quantity"
                                name="product_quantity" required>
                        </div>

                        <div class="form-group">
                            <label for="product_image_path">Image Path:</label>
                            <input type="text" value="images/products/" class="form-control" id="product_image_path"
                                name="product_image_path" required disabled>
                        </div>
                        <div class="form-group">
                            <label for="product_image">Image:</label>
                            <input type="text" value="" class="form-control" id="product_image" name="product_image">
                            <input type="file" class="form-control" id="product_image_upload"
                                name="product_image_upload" required>

                            <div class="card flex d-flex">
                                <img id="preview-image-before-upload"
                                    src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                    alt="preview image" style="display: none;">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="product_status">Status:</label>
                            <input type="text" value="" class="form-control" id="product_status" name="product_status"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="product_category">Category:</label>
                            <input type="text" value="" class="form-control" id="product_category"
                                name="product_category" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-danger" href="{{ route('admin.products.index') }}">Cancel</a>
                        </div>

                    </form>
                </div>

            </div>
            {{-- End Card Body --}}
        </div>
        {{-- End Card --}}
    </div>
    {{-- End Container --}}






</x-layouts.layout-template0>