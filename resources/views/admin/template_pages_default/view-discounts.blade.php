<div class="container my-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>View Discounts</h2>
            </div>

            <div style="
                       height: 375px;
overflow-x: hidden;
overflow-y: auto;" class="mycontent">
                <div class="table-responsive1">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Percent</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php($count = 1)
                            @foreach ($discount_data as $data)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $data->discount_title }}</td>
                                <td>{{ $data->discount_percent }}%</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.discounts.edit', ['discount' => $data->id]) }}">Edit</a>
                                </td>
                            </tr>
                            @php($count++)
                            @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- End Card body --}}
    </div>
    {{-- End Card --}}
</div>