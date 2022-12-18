<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\SuccessAttr;
use Illuminate\Http\Request;
use App\Models\SuccessHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SuccessHistoryController extends Controller
{
    public function indexSuccess()
    {
        $success = SuccessHistory::get();
        return view('admin.success', ['success' => $success]);
    }

    public function indexAddSuccess()
    {
        return view('admin.add-success');
    }

    public function storeSuccess(Request $request)
    {
        DB::beginTransaction();
        try {
            $success = new SuccessHistory();
            $success->ss_title = $request->input('ss_title');
            $success->adveritser_name = $request->input('adveritser_name');
            $success->platform_name = $request->input('platform_name');
            $success->placement = $request->input('placement');
            $success->campaign_objective = $request->input('campaign_objective');
            $success->campaign_module = $request->input('campaign_module');
            $success->campaign_duration = $request->input('campaign_duration');
            $success->status = $request->input('status');
            $success->created_at = Carbon::now()->timestamp;
            // $success->created_at = $adminInfo->username;
            if($request->hasFile('content_video')){
                $file =$request->file('content_video');
                $ext =$file->getClientOriginalExtension();
                $fileNames =time().'.'.$ext;
                $file->move('upload/content/',$fileNames);
                }
                $success->content_video =$fileNames;
    
                if($request->hasFile('ss_card')){
                    $file =$request->file('ss_card');
                    $ext =$file->getClientOriginalExtension();
                    $fileNamess =time().'.'.$ext;
                    $file->move('upload/sscard/',$fileNamess);
                    }
                    $success->ss_card =$fileNamess;
    
                    if($request->hasFile('content_image')){
                        $file =$request->file('content_image');
                        $ext =$file->getClientOriginalExtension();
                        $fileNamea =time().'.'.$ext;
                        $file->move('upload/advertiserlogo/',$fileNamea);
                        }
                        $success->content_image =$fileNamea;

            if ($success->save()) {
                DB::commit();
                return redirect('admin/success');
            }
        } catch (Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function indexEditSuccess($id)
    {
        $success = SuccessHistory::where('id', $id)->first();
        return view('admin/edit-success', ['success' => $success]);
    }

    public function updateSuccess(Request $request)
    {

        DB::beginTransaction();
        $success = new SuccessHistory();
        try {
            if ($request->hasFile('content_video')) {
                $path = 'upload' . $success->content_video;
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
            if ($request->hasFile('content_image')) {
                $path = 'upload' . $success->content_image;
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            if ($request->hasFile('ss_card')) {
                $path = 'upload' . $success->ss_card;
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            //for image
            $file = $request->file('content_image');
            $ext = $file->getClientOriginalExtension();
            $fileName_image = time() . '.' . $ext;
            $file->move('upload/', $fileName_image);
            // $data->video_file =$fileName;
            //for video

            $file = $request->file('content_video');
            $ext = $file->getClientOriginalExtension();
            $fileName_video = time() . '.' . $ext;
            $file->move('upload/', $fileName_video);

            $file = $request->file('ss_card');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('upload/', $fileName);

            SuccessHistory::where('id', $request->id)->update([
                'ss_title' => $request->ss_title,
                'adveritser_name' => $request->adveritser_name,
                'platform_name' => $request->platform_name,
                'campaign_objective' => $request->campaign_objective,
                'campaign_module' => $request->campaign_module,
                'campaign_duration' => $request->campaign_duration,
                'ss_card' => $fileName,
                'content_image' => $fileName_image,
                'content_video' => $fileName_video
            ]);
            DB::commit();
            return redirect('admin/success');
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function successDelete($id)
    {
        SuccessHistory::findOrFail($id)->delete();
        return redirect('admin/success');
    }


    public function indexAddSuccessAttribute()
    {
        $success = SuccessHistory::get();
        return view('admin/add-success_atrrtibute', ['success' => $success]);
    }
    public function storeSuccessAttr(Request $request)
    {

        $request->validate([
            'addMoreInputFields.*.title' => 'required',
            'addMoreInputFields.*.dynamic_field' => 'required'
        ]);

        foreach ($request->addMoreInputFields as $key => $value) {
            SuccessAttr::create($value);
        }
        return back();             
    }

    public function indexSuccessAttr()
    {
        $success_attr = SuccessAttr::with('success')->get();

        return view('admin/success-attribute', ['success_attr' => $success_attr]);
    }

    public function successAttrDelete($id)
    {
        SuccessAttr::findOrFail($id)->delete();
        return redirect('admin/success-attribute');
    }
    public function test()
    {
        $test = SuccessHistory::with('successattr')->get();
        return response()->json(
            $test
        );
    }
}
