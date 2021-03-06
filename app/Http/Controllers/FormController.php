<?php

namespace App\Http\Controllers;
use App\Jobs\SendEmail;
use App\Models\Slide;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use App\Providers\AppServiceProvider;

class FormController extends Controller
{
    public function getIndex(){
        $slide = Slide ::all();
        $new_product = Product::where('new',1)->paginate(8);
        $noibat_pro = Product::where('new',0)->paginate(8);
        $countnoibat_Pro = Product::where('new',0)->count();
        $countNewPro = Product::where('new',1)->count();
        return view('Page.trangchu', compact('slide','new_product','countNewPro','countnoibat_Pro','noibat_pro'));
    }
    public function getLoaiSp($type){
        $type_product = ProductType::all();
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac =  Product::where ('id_type','<>',$type)->paginate(3);
        return view ('Page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));
    }
    public function getAdminAdd()
    {
     return view('pageadmin.formAdd');
    }
    
    public function getIndexAdmin(){
        $products = product ::all();
        return view('pageadmin.admin', compact('products')); 
    }
    public function postAdminAdd(Request $request){
        $product= new Product();
        if ($request->hasFile('inputImage')){
            $file = $request -> file ('inputImage');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/image/product',$fileName);
        }
        $fileName=null;
        if ($request->file('inputImage')!=null){
            $file_name=$request->file('inputImage')->getClientOriginalName();

        }
        $product->name=$request->inputName;
        $product->image=$file_name;
        $product->description=$request->inputDescription;
        $product->unit_price=$request->inputPrice;
        $product->promotion_price=$request->inputPromotionPrice;
        $product->unit=$request->inputUnit;
        $product->new=$request->inputNew;
        $product->id_type=$request->inputType;
        $product->save();
        return redirect('/showadmin')->with('success', '????ng k?? th??nh c??ng');
    
    }
    public function Editform(){
        return view ('pageadmin.formEdit');
    }
    
    public function getAdminEdit($id){
        $product = product::find($id);
        return view('pageadmin.formEdit')->with('product',$product);
    }
    
    public function postAdminEdit(Request $request){
        $id = $request->editId;

        $product = product::find($id);
        if($request->hasFile('editImage')){
            $file = $request -> file ('editImage');
            $fileName=$file->getClientOriginalName('editImage');
            $file->move('source/image/product',$fileName);
        }
        if ($request->file('editImage')!=null){
            $product ->image=$fileName;
        }
        $product->name=$request->editName;
        // $product->image=$file_name;
        $product->description=$request->editDescription;
        $product->unit_price=$request->editPrice;
        $product->promotion_price=$request->editPromotionPrice;
        $product->unit=$request->editUnit;
        $product->new=$request->editNew;
        $product->id_type=$request->editType;
        $product->save();
        return redirect('/showadmin');
    }
    public function postAdminDelete($id){
        $product =product::find($id);
        $product->delete();
        return redirect('/showadmin');
}
public function getDetail(Request $request){
    $sanpham = product::where('id',$request->id)->first();
    $splienquan = product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);
    $comments = Comment::where('id_product',$request->id)->get();
    return view('page.Detail',compact('sanpham','splienquan','comments'));
}



}



//     public function getIndex(){    
//         $slide= Slide::all();       
//         $new_product=Product::where('new',1)->paginate(8);
//         return view('Page.trangchu',compact('slide','new_product'));
//         }
//         public function getLoaiSp($type){
//             $type_product=ProductType::all();
    
//             $sp_theoloai=Product::where('id_type',$type)->get();
//             $sp_khac=Product::where('id_type','<>',$type)->paginate(3);
//             return view('Page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));
//         }
//    public function getAdminAdd()
//    {
//     return view('pageadmin.formAdd');
//    }
//    public function postAdminAdd(Request $request)
//    {
//     $product =new Product();
//     if ($request->hasFile('inputImage')){
//         $file = $request->file('inputImage');
//         $fileName =$file->getClientOriginalName('inputImage');
//         $file->move('source/image/product',$fileName);
//     }
//     $file_name=null;
//     if ($request->file('inputImage')!=null){
//         $file_name=$request->file('inputImage')->getClientOriginalName();

//     }
//     $product->name=$request->inputName;
//     $product->image=$file_name;
//     $product->description=$request->inputDescription;
//     $product->unit_price=$request->inputPrice;
//     $product->promotion_price=$request->inputPromotionPrice;
//     $product->unit=$request->inputUnit;
//     $product->new=$request->inputNew;
//     $product->id_type=$request->inputType;
//     $product->save();
//     return $this->getIndexAdmin();

//    }
//    public function postAdminDelete($id){
//     $product=Product::find($id);
//     $product->delete();
//     return $this->getIndexAdmin();
//    }
//     //
// }
