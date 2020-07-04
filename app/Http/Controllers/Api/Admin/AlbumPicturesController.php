<?php

namespace App\Http\Controllers\Api\Admin;

ini_set('max_execution_time', '7200');
ini_set('max_input_time', '7200');
ini_set('post_max_size', '0');
ini_set('upload_max_filesize', '100M');
ini_set('max_file_uploads', '1000');
ini_set('memory_limit', '1G');

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\AlbumPictures;
use Illuminate\Http\JsonResponse;

class AlbumPicturesController extends Controller
{
    final public function index(Album $album): JsonResponse
    {
        $pictures = $album->pictures()->select('id', 'display_path')->get();
        return response()->json($pictures, 200);
    }

    final public function addPictures(Request $request): JsonResponse
    {
        $request = new Request($request->all());
        foreach ($request->input('images') as $image) {
            $original_path = uploadFile($image, 'admin/albums/pictures', 'original');
            $display_path = editAndUploadImage($image, $original_path, ['width' => 800, 'maintain_ratio' => true], 'admin/albums/pictures', 'edited');
            Album::findOrFail($request->input('album_id'))->pictures()->create(['original_path' => $original_path, 'display_path' => $display_path]);
        }
        return response()->json('Pictures Added Successfully', 200);
    }

    final public function deleteAlbumPicture (AlbumPictures $picture): JsonResponse
    {
        try {
            $picture->delete();
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }

        return response()->json('Picture Deleted', 200);
    }

    final public function deleteAllSelectedAlbumPictures(Album $album): JsonResponse
    {
        $album->pictures()->delete();
        return response()->json('All Pictures Deleted', 200);
    }
}
