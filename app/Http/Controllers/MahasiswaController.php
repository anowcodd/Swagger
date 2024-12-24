<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/mahasiswa",
     *     summary="Dapatkan daftar semua mahasiswa",
     *     description="Mengembalikan daftar semua mahasiswa",
     *     operationId="getMahasiswa",
     *     tags={"Mahasiswa"},
     *     @OA\Response(
     *         response=200,
     *         description="Daftar mahasiswa",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Mahasiswa")
     *         )
     *     )
     * )
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    }
}
