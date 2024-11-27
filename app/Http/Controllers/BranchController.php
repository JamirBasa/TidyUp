<?php

namespace App\Http\Controllers;

use App\Models\ShopGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BranchController extends Controller
{
    //
    public function uploadImages(Request $request)
    {
        try {
            $request->validate([
                'branch_id' => 'required|exists:shop_branch,id',
                'branch_img' => 'required|array',
                'branch_img.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:25048'
            ]);

            if (!$request->hasFile('branch_img')) {
                return response()->json([
                    'success' => false,
                    'message' => 'No images uploaded'
                ], 400);
            }

            $uploadedImages = [];
            $branchId = $request->branch_id;

            foreach ($request->file('branch_img') as $image) {
                // Generate unique filename with timestamp and random string
                $fileName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                // Include branch ID in path
                $storagePath = "uploads/shop-gallery/branch_{$branchId}";
                // Store the file using 'public' disk
                $path = $image->storeAs($storagePath, $fileName, 'public');

                if (!$path) {
                    throw new \Exception('Failed to store image');
                }

                // Generate proper URL with storage prefix
                $url = Storage::url($path);

                $shopGallery = ShopGallery::create([
                    'branch_id' => $branchId,
                    'filename' => $fileName,
                    'path' => $path,
                    'url' => $url
                ]);

                $uploadedImages[] = $shopGallery;
            }

            return response()->json([
                'success' => true,
                'message' => 'Images uploaded successfully',
                'images' => $uploadedImages
            ]);
        } catch (\Exception $e) {
            Log::error('Upload error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error uploading images: ' . $e->getMessage()
            ], 500);
        }
    }
    public function reloadPage()
    {
        return response()->json([
            'success' => true,
            'reload' => true
        ]);
    }
}
