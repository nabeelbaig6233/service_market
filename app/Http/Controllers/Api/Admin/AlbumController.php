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
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AlbumController extends Controller
{
    // Get All The Albums With Their Respected Owners
    final public function index(): JsonResponse
    {
        $model = Album::searchPaginateAndOrder();
        $columns = array_values(Album::$columns);
        return response()->json(['model' => $model, 'columns' => $columns], 200);
    }

    // Create An Album
    final public function createAlbum(\App\Http\Requests\Api\Admin\CreateAlbumFormRequest $request): JsonResponse
    {
        $request = new Request($request->validated());
        $request->merge([
            'album_cover' => uploadFile($request->input('album_cover'), 'admin/albums/cover'),
            'album_password' => Hash::make($request->input('album_password')),
        ]);
        $created_album_id = \App\Models\User::findOrFail($request->input('user_id'))->albums()->insertGetId($request->all());
        $created_album = Album::with('user:id,first_name,last_name')
            ->where('id', '=', $created_album_id)
            ->select('id', 'user_id', 'album_name', 'album_cover', 'album_pictures_count', 'created_at')
            ->get()->map->only(['id', 'album_name', 'album_cover', 'album_pictures_count', 'created_at', 'user'])->first();
        return response()->json(['message' => 'Album Created Successfully', 'album' => $created_album, 'sNum' => Album::count()], 200);
    }

    // Delete All Albums
    final public function deleteAllAlbums(): JsonResponse
    {
        try {
            Album::query()->delete();
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }
        return response()->json('All Albums Deleted', 200);
    }

    // Delete An Album
    final public function deleteAlbum(Album $album): JsonResponse
    {
        try {
            $album->delete();
            return response()->json('Album Deleted Successfully', 200);
        } catch (\Exception $e) {
            return response()->json('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ' in Line: ' . $e->getLine(), $e->getCode());
        }
    }
}
