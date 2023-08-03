<x-admin-layout title="Edit Product">

    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Edit Product</h2>
        </div>
        <div class="col-md-6 offset-md-3 main-agileits">
            {{-- Truyền file báo lỗi khi User nhập sai --}}
            @include("includes/errors")
            <form action="{{ route('admin.products.upsert', ['id' => $data->id]) }}" method="POST">
                @csrf
                <x-app-input name="prd_cover" type="file" label="Ảnh sản phẩm" value="{{$data->prd_cover}}" />

                <x-app-input name="prd_names" label="Tên sản phẩm" value="{{$data->prd_names}}" />

                <x-app-select name="ctg_code" label="Danh mục sản phẩm" model="Category" displayMember="ctg_names" valueMember="ctg_code" selected="{{$data->ctg_code}}" />

                <div style="display:flex">
                    <x-app-input name="prd_heft" type="number" step="any" pattern="[-+]?[0-9]*[.,]?[0-9]+" label="Trọng lượng sản phẩm" value="{{$data->prd_heft}}" />
                    <span class="ms-3 mt-3">G, Kg, L, Ml, Pc</span>
                </div>

                <x-app-select name="id" label="Đơn vị trọng lượng" model="Cental" displayMember="centals_name" valueMember="id" selected="{{$data->id}}" />

                <x-app-input name="prd_original_price" type="number" step="any" pattern="[-+]?[0-9]*[.,]?[0-9]+" label="Giá sản phẩm" value="{{$data->prd_original_price}}" />

                <x-app-input name="prd_selling_price" type="number" step="any" pattern="[-+]?[0-9]*[.,]?[0-9]+" label="Giá sản phẩm" value="{{$data->prd_selling_price}}" />

                <x-app-input name="prd_details" label="Mô tả sản phẩm" value="{{$data->prd_details}}" />

                <x-app-input name="quantity_prd" type="number" label="Số lượng sản phẩm" value="{{$data->quantity_prd}}" />

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-outline-success">Cập nhật sản phẩm</button>
                </div>

            </form>
        </div>
    </div>

</x-admin-layout>