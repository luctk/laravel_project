<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function list_category(Request $request){
        $category = new Category();
        $listCategory=$category::all();
        if($request->post() && $request->searchCategory ){
            $listCategory = DB::table('categories')
                ->where('name', 'like', '%'.$request->searchCategory.'%')
                ->get();
        }
        return view('admin.categories.index', compact( 'listCategory'));

    }
    public function add(CategoryRequest $request){
        if($request->isMethod('post')){
            $params=$request->except('_token');
//            dd($params);
            $category=Category::create($params);
            if($category->id){
                Session::flash('success','thêm khách hàng thanh công');
            }
//        dd($params);
//        print_r($params);

        }
        return view('admin.categories.add');
    }
    public function edit(CategoryRequest $request, $id){
        $category=DB::table('categories')
            ->where('id', $id)->first();
        if($request->isMethod('POST')) //check xem có post hay không
        {
            $params=$request->except('_token');
//            if($request->hasFile('image') && $request->file('image')->isValid()){
//                //xóa ảnh cũ khi thực hiện post ảnh mới
//                $resultDL=Storage::delete('/public/'.$customer->image);
//                if($resultDL){
//                    $request->image=uploadFile('image',$request->file('image'));
//                    $params['image']=$request->image;
//                }
//            }
//            else{
//                //nếu không thay hình sẽ là ảnh cũ
//                $params['image']=$customer->image;
//            }
            $result=Category::where('id',$id)->update($params);
            if($result){
                Session::flash('success','sửa khách hàng thành công');
                //chuyển trang sau khi thành công
                return redirect()->route('list-category',['id'=>$id]);
            }
        }
        return view('admin.categories.edit',compact('category'));

    }
}
