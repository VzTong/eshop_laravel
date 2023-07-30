<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    public function index(){
        $data = Products::orderByDesc("id")->paginate(2);
        return view("admin.products.index", compact("data"));
    }

    public function create(){
        return view("admin.products.create");
    }

    public function edit(string $id){
        $data = Products::findOrFail($id);
        return view("admin.products.edit", compact("data"));
    }

    public function upsert(Request $request, $id = null){
        $data = $request->all();
        unset($data["_token"]);

        $this->customValidate($request);

        if($id == null){
            $filename = "";
            $file = $request->file("prd_cover");
            if(!empty($file)){
                $filename = $file->hashName();
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["prd_cover"] = $filename;
            $msg = "Thêm sản phẩm " . $data["prd_names"] . " thành công!!!";
        } else{
            $file = $request->file("prd_cover");
            if(!empty($file)){
                $filename = $file->hashName();
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["prd_cover"] = $filename;
            $msg = "Cập nhật sản phẩm " . $data["prd_names"] . " thành công!!!";
        }

        Products::updateOrCreate(["id" => $id], $data);
        return redirect()
                ->back()
                ->with("_success_msg", $msg);
    }

    public function destroy(string $id){
        $prd = Products::findOrFail($id);
        $prd_names = $prd->prd_names;
        Products::destroy($id);
        $msg = "Xóa sản phẩm " . $prd["prd_names"] . " thành công!!!";

        return redirect()
                ->back()
                ->with("_destroy_msg", $msg);
    }

    private function customValidate(Request $request)
    {
        // Ràng buộc dữ liệu
        $rules = [
            "prd_names" => "required|min:3|max:100"
        ];

        $request->validate($rules);
    }
}
