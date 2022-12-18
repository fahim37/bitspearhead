<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index()
    {

        $brand = Brand::get();
        return view('admin/brand', compact('brand'));
    }

    public function indexAddBrand()
    {
        return view('admin/add-brand');
    }

    public function storeBrand(BrandRequest $request)
    {
        DB::beginTransaction();
        try {
            $brand = new Brand();
            if ($request->hasFile('brand_logo')) {
                $file = $request->file('brand_logo');
                $ext = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $ext;
                $file->move('upload/brand', $fileName);
            }
            $brand->brand_logo = $fileName;

            if ($brand->save()) {
                DB::commit();
                return redirect('admin/brand');
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function indexEditBrand($id)
    {
        $brand= Brand::where('id', $id)->first();
        return view('admin/edit-brand',compact('brand'));
    }

    public function updateBrand(BrandRequest $request)
    {

        DB::beginTransaction();
        $brand = new Brand();
        try{
            if($request->hasFile('brand_logo')){
                $path ='upload/brand'.$brand->brand_logo;
                if(File::exists($path)){
                    File::delete($path);
                }
            }

            $file =$request->file('brand_logo');
            $ext =$file->getClientOriginalExtension();
            $fileName =time().'.'.$ext;
            $file->move('upload/brand/',$fileName);

        Brand::where('id', $request->id)->update([
        'brand_logo'=>$fileName
        ]);
            DB::commit();
            return redirect('admin/brand');
        }catch(\Exception $e){
            DB::rollback();
            return $e;
        }

    }

    public function brandDelete($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect('admin/brand');
    }
}
