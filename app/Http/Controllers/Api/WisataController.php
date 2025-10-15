<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Http\Resources\WisataResource;

class WisataController extends Controller
{
    // Menampilkan daftar wisata (dengan filter dan pencarian)
    public function index(Request $request)
    {
        $query = Wisata::query();

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where('nama', 'like', "%{$q}%");
        }

        $perPage = (int) $request->get('per_page', 10);
        $result = $query->paginate($perPage);

        return WisataResource::collection($result);
    }

    // Menampilkan detail wisata berdasarkan ID
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return new WisataResource($wisata);
    }
}
