<?php

namespace App\Http\Controllers\Api\Admin;

ini_set('max_execution_time', '7200');
ini_set('max_input_time', '7200');
ini_set('post_max_size', '0');
ini_set('upload_max_filesize', '100M');
ini_set('max_file_uploads', '1000');
ini_set('memory_limit', '1G');

use App\Models\SalePicture;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\SalePictureInquirer;
use App\Http\Controllers\Controller;

class SalePictureController extends Controller
{
    final public function getSalePictures(): JsonResponse
    {
        return response()->json(['pictures' => SalePicture::select('id', 'display_path')->get()], 200);
    }

    final public function addSalePicture(Request $request): JsonResponse
    {
        $request = new Request($request->all());
        foreach ($request->input('sale_pictures') as $sale_picture) {
            $original_path = uploadFile($sale_picture, 'admin/sale', 'original');
            $display_path = editAndUploadImage($sale_picture, $original_path, ['width' => 800, 'maintain_ratio' => true], 'admin/sale', 'edited');
            SalePicture::create(['original_path' => $original_path, 'display_path' => $display_path]);
        }
        return response()->json('Pictures Added', 200);
    }

    final public function getAllSalePicturesInquirers(): JsonResponse
    {
        return response()->json(['inquirers' => SalePictureInquirer::all()], 200);
    }

    final public function getInquiredPicturesForInquirer(SalePictureInquirer $inquirer): JsonResponse
    {
        return response()->json(['pictures' => $inquirer->inquiries()->get(['display_path']), 'inquirer' => $inquirer->inquirer_name], 200);
    }

    final public function deleteSalePictureInquirer(SalePictureInquirer $inquirer): JsonResponse
    {
        try {
            $inquirer->delete();
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }
        return response()->json('Inquirer Deleted', 200);
    }

    final public function deleteSalePicture(SalePicture $picture): JsonResponse
    {
        try {
            $picture->delete();
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }
        return response()->json('Picture Deleted', 200);
    }

    final public function deleteAllSalePictures(): JsonResponse
    {
        try {
            SalePicture::query()->delete();
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }
        return response()->json('All Pictures Deleted', 200);
    }
}
