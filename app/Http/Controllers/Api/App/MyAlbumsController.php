<?php

namespace App\Http\Controllers\Api\App;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MyAlbumsController extends Controller
{
    final public function getMyAlbums(): JsonResponse
    {
        return response()->json(Album::all()->map->only(['album_name', 'album_cover', 'id']), 200);
    }

    final public function getAlbumNameAndCover(Album $album): JsonResponse
    {
        return response()->json(['cover' => $album->album_cover, 'name' => $album->album_name], 200);
    }

    final public function authenticateAlbumPassword(Request $request, Album $album): JsonResponse
    {
        if (Hash::check($request->input('password'), $album->album_password)) {
            $album->update(['temp_access_token' => Hash::make($album->album_password)]);
            return response()->json($album->temp_access_token, 200);
        }

        return response()->json('Wrong Password', 403);
    }

    final public function closeAlbum(Album $album): JsonResponse
    {
        $album->update(['temp_access_token' => null]);
        return response()->json('Album Closed', 200);
    }

    final public function getAlbumPictures(Request $request, Album $album): JsonResponse
    {
        if ($request->input('temp_access_token') === $album->temp_access_token) {
            $album_cover = $album->album_cover;
            $album_pictures = $album->pictures()->get()->map->only(['id', 'album_id', 'display_path', 'original_path'])->paginate(6);
            return response()->json(['cover' => $album_cover, 'pictures' => $album_pictures], 200);
        }

        return response()->json('Access Denied', 403);
    }
}
