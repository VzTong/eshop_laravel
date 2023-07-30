<x-admin-layout title="Edit Product">

    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Edit Product</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            {{-- Truyền file báo lỗi khi User nhập sai --}}
            @include("includes/errors")
            <form action="{{ route('admin.products.upsert', ['id' => $data->id]) }}" method="POST">
                @csrf
                <input name="prd_cover" type="file" label="Ảnh sản phẩm" value="{{$data->prd_cover}}" />

                <input name="prd_names" label="Tên sản phẩm" value="{{$data->prd_names}}" />

                <x-app-select name="ctg_code" label="Danh mục sản phẩm" model="Category" displayMember="ctg_names" valueMember="ctg_code" selected="{{$data->ctg_code}}" />

                <input name="prd_heft" label="Trọng lượng sản phẩm" value="{{$data->prd_heft}}" />

                <x-app-select name="id" label="Đơn vị trọng lượng" model="Cental" displayMember="centals_name" valueMember="id" selected="{{$data->id}}" />

                <input name="prd_original_price" type="number" label="Giá sản phẩm" value="{{$data->prd_original_price}}" />

                <input name="prd_selling_price" type="number" label="Giá sản phẩm" value="{{$data->prd_selling_price}}" />

                <input name="prd_details" label="Mô tả sản phẩm" value="{{$data->prd_details}}" />



                <div class="mt-3 mb-3">
                    <input type="submit" class="btn btn-outline-success" value="Cập nhật sản phẩm"/>
                </div>

            </form>
        </div>
    </div>

</x-admin-layout>