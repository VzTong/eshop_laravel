<x-admin-layout title="List of products">

    <h1>List of products</h1>
    <a class="btn btn-primary my-2" href="{{ route('admin.products.index') }}">
        <i class="bi bi-plus"></i>Create products</a>

    <div class="row">
        <div class="col-12 table-resposive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Product code</th>
                        <th>Product's name</th>
                        <th>Product cover</th>
                        <th>Product heft</th>
                        <th>Product cental</th>
                        <th>Original price</th>
                        <th>Selling price</th>
                        <th>The detail</th>
                        <th>The status</th>
                        <th>Date created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->prd_code }}</td>
                            <td>{{ $item->prd_names }}</td>
                            <td><img src="{{ $item->prd_cover }}" width="100" height="100" alt="Ảnh sản phẩm"></td>
                            <td>{{ $item->prd_heft }}</td>
                            <td>{{ $item->centals->centals_name ?? "" }}</td>
                            <td>{{ number_format($item->prd_original_price) }}</td>
                            <td>{{ number_format($item->prd_selling_price) }}</td>
                            <td>{{ $item->prd_details }}</td>
                            <td>{{ $item->prd_status }}</td>

                            {{-- <td>{{ $item->created_at->format('d-M-Y') }}</td>
                            <td>{{ $item->updated_at->format('d-M-Y') }}</td> --}}
                            <td>
                                <a href="{{ route("admin.products.edit", ["id" => $item->id]) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>

                                <form action="{{ route('admin.products.destroy', ['id' => $item->id]) }}"
                                    method="post" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>
