<x-layouts.layout-template0>



    <div class="container my-5">
        {{-- Start Row --}}
        <div class="row">
            {{-- Column --}}
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Create Discounts</h2>
                        </div>

                        <form action="{{ route('admin.discounts.store') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="discount_title">Discount Title:</label>
                                <input type="text" class="form-control" id="discount_title" name="discount_title"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="discount_percent">Discount Percent:</label>
                                <input type="number" min="0" max="95" class="form-control" id="discount_percent"
                                    name="discount_percent" value="0" required>
                            </div>


                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-danger" href="{{ route('admin.discounts.index') }}">Cancel</a>
                        </form>


                    </div>
                    {{-- End Card body --}}
                </div>
                {{-- End Card --}}
            </div>
            {{-- END Column --}}
            {{-- Scroll source: https://www.geeksforgeeks.org/making-a-div-vertically-scrollable-using-css/ --}}


        </div>
        {{-- End Row --}}
    </div>



    @include('admin.template_pages_default.view-discounts')





</x-layouts.layout-template0>