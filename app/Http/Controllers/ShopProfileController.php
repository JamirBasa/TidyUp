<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\ShopGallery;

class ShopProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $userRole = DB::table('user_role')->where('user_id', $user->id)->first();
        $userId = $user->id;
        $shopAccount = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopId = $shopAccount->isNotEmpty() ? $shopAccount[0]->shop_id : null;
        $shops = $shopId ? DB::table('shops')->where('id', $shopId)->get() : collect();
        $shopBranches = $shopId ? DB::table('shop_branch')->where('shop_id', $shopId)->get() : collect();
        $shopAccountOwner = DB::table('shop_account')->where('shop_owner_id', $userId)->get();
        $shopOwner = DB::table('users')->where('id', $shopAccountOwner[0]->shop_owner_id)->get();
        $shopGallery = '';
        $appointmentTypes = '';
        $appointmentTypes =  DB::table('appointment_types')->get();
        $branchAppointmentTypes = DB::table('branch_appointment_types');
        return view('shop.shop-profile', ['shops' => $shops, 'user' => $user, 'shopBranches' => $shopBranches, 'userRole' => $userRole, 'shopOwner' => $shopOwner, 'shopGallery' => $shopGallery, 'appointmentTypes' => $appointmentTypes, 'branchAppointmentTypes' => $branchAppointmentTypes]);
    }

    public function uploadImages(Request $request)
    {
        try {
            $request->validate([
                'branch_id' => 'required|exists:shop_branch,id',
                'branch_img' => 'required|array',
                'branch_img.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:25048'
            ]);

            $branchId = $request->branch_id;

            // Check if the branch already has 3 images
            $existingImageCount = ShopGallery::where('branch_id', $branchId)->count();

            if ($existingImageCount >= 3) {
                return response()->json([
                    'success' => false,
                    'message' => 'Maximum of 3 images allowed per branch.'
                ], 400);
            }

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
                'images' => $uploadedImages,
                'reload' => true
            ]);
        } catch (\Exception $e) {
            Log::error('Upload error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error uploading images: ' . $e->getMessage()
            ], 500);
        }
    }
}
