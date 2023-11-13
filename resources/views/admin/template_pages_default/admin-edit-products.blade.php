<x-layouts.layout-template0>

    <div class="container my-5">
        <div class="card">

            <div class="card-body">


                <div class="card-title">
                    <h2>Edit Product</h2>
                </div>


                <form action="{{ route('admin.products.update', ['product' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')




                    <div class="form-group">
                        <label for="product_title">Product Title:</label>
                        <input type="text" value="{{ $data->product_title }}" class="form-control" id="product_title"
                            name="product_title">
                    </div>

                    <div class="form-group">
                        <label for="product_description">Product Description:</label>
                        <textarea class="form-control" rows="3" id="product_description"
                            name="product_description">{{ $data->product_description }}</textarea>
                    </div>



                    <div class="form-group">
                        <label for="product_price">Price:</label>
                        <input type="text" value="{{ $data->product_price }}" class="form-control" id="product_price"
                            name="product_price">
                    </div>

                    <div class="form-group">
                        <label for="product_quantity">Quantity:</label>
                        <input type="text" value="{{ $data->product_quantity }}" class="form-control"
                            id="product_quantity" name="product_quantity">
                    </div>


                    <div class="form-group">
                        <label for="product_image">Image:</label>
                        <input type="text" value="{{ $data->product_image }}" class="form-control" id="product_image"
                            name="product_image">
                        <input type="file" class="form-control" id="product_image_upload" name="product_image_upload">

                        <div class="card flex d-flex">
                            <span>Current image:</span>
                            <img style="width: 80px; height:90px" src="{{ $data->getImage() }}" alt="image">
                            <span>New image uploaded:</span>
                            {{-- <img id="image_upload_preview" style="width: 80px; height:90px" src="#" alt="image">
                            --}}

                            <img id="preview-image-before-upload"
                                src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image"
                                style="display: none;">





                        </div>
                    </div>


                    <div class="form-group">
                        <label for="product_status">Status:</label>
                        <input type="text" value="{{ $data->product_status }}" class="form-control" id="product_status"
                            name="product_status">
                    </div>


                    <div class="form-group">
                        <label for="product_category">Category:</label>
                        <input type="text" value="{{ $data->product_category }}" class="form-control"
                            id="product_category" name="product_category">
                    </div>




                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-danger" href="{{ route('admin.products.index') }}">Cancel</a>
                    </div>

                </form>

            </div>
            {{-- End Card Body --}}
        </div>
        {{-- End Card --}}
    </div>
    {{-- End Container --}}






</x-layouts.layout-template0>