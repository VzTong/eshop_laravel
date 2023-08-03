<x-admin-layout title="Thêm mới danh mục">

    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Thêm mới danh mục</h2>
        </div>
        <div class="col-md-6 offset-md-3 main-agileits">
            {{-- @include("includes/errors") --}}
            <form action="{{ route('admin.products.upsert') }}" method="POST">
                @csrf
                <x-app-input name="prd_cover" type="file" label="Ảnh sản phẩm" />

                <x-app-input name="prd_names" type="text" label="Tên sản phẩm" />

                <x-app-select name="ctg_code" label="Danh mục sản phẩm" model="Category" displayMember="ctg_names" valueMember="ctg_code"/>

                <div style="display:flex">
                    <x-app-input name="prd_heft" type="number" step="any" pattern="[-+]?[0-9]*[.,]?[0-9]+" label="Trọng lượng sản phẩm" />
                    <span class="ms-3 mt-3">G, Kg, L, Ml, Pc</span>
                </div>

                <x-app-select name="id" label="Đơn vị trọng lượng" model="Cental" displayMember="centals_name" valueMember="id"/>

                <x-app-input name="prd_original_price" type="number" step="any" pattern="[-+]?[0-9]*[.,]?[0-9]+" label="Giá niên yết sản phẩm" />

                <x-app-input name="prd_selling_price" type="number" step="any" pattern="[-+]?[0-9]*[.,]?[0-9]+" label="Giá sell sản phẩm" />

                <x-app-input name="prd_details" label="Mô tả sản phẩm" />

                <x-app-input name="quantity_prd" type="number" label="Số lượng sản phẩm" />

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-outline-success">Thêm sản phẩm</button>
                </div>

            </form>
        </div>
    </div>

</x-admin-layout>
