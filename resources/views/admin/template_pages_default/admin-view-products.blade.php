<x-layouts.layout-template0>



    <div class="container my-5">
        <div class="card">
            <div class="card-body">

                <div class="card-title">
                    <h2>View Products</h2>
                </div>

                <a class="btn btn-primary btn-lg btn-block" href="{{ route('admin.products.create') }}"><i
                        class="fa-solid fa-plus"></i> Add new product</a>
                <hr>
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php($count = 1)
                            @foreach ($product_data as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td><img style="width: 70px; height: 80px" src="{{ $data->getImage() }}" alt="image">
                                </td>
                                <td>{{ $data->product_title }}</td>
                                <td>${{ $data->product_price }}</td>
                                <td>




                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('store.details', ['id' => $data->id]) }}"
                                        target="_blank">View</a>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.products.edit', ['product' => $data->id]) }}">
                                        Edit</a>
                                    <a class="btn btn-danger btn-sm" href="#">Delete</a>
                                </td>
                            </tr>
                            @php($count++)
                            @endforeach





                        </tbody>
                    </table>
                </div>

            </div>
            {{-- End Card Body --}}
        </div>
        {{-- End Card --}}
    </div>
    {{-- End Container --}}



</x-layouts.layout-template0>