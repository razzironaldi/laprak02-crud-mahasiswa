<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('nim')->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => [
                'required',
                'string',
                'max:20',
                'unique:mahasiswas,nim',
            ],

            'nama_mahasiswa' => [
                'required',
                'string',
                'max:255',
            ],

            'tempat_lahir' => [
                'required',
                'string',
                'max:255',
            ],

            'tanggal_lahir' => [
                'required',
                'date',
            ],

            'jenis_kelamin' => [
                'required',
                Rule::in([
                    'Laki-laki',
                    'Perempuan',
                ]),
            ],

            'alamat' => [
                'required',
                'string',
            ],

            'program_studi' => [
                'required',
                'string',
                'max:255',
            ],

            'nomor_hp' => [
                'required',
                'string',
                'max:20',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:mahasiswas,email',
            ],
        ]);

        Mahasiswa::create($validated);

        return redirect()
            ->route('mahasiswa.index')
            ->with(
                'success',
                'Data mahasiswa berhasil ditambahkan.'
            );
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view(
            'mahasiswa.show',
            compact('mahasiswa')
        );
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view(
            'mahasiswa.edit',
            compact('mahasiswa')
        );
    }

    public function update(
        Request $request,
        Mahasiswa $mahasiswa
    ) {
        $validated = $request->validate([
            'nim' => [
                'required',
                'string',
                'max:20',
                Rule::unique(
                    'mahasiswas',
                    'nim'
                )->ignore($mahasiswa->id),
            ],

            'nama_mahasiswa' => [
                'required',
                'string',
                'max:255',
            ],

            'tempat_lahir' => [
                'required',
                'string',
                'max:255',
            ],

            'tanggal_lahir' => [
                'required',
                'date',
            ],

            'jenis_kelamin' => [
                'required',
                Rule::in([
                    'Laki-laki',
                    'Perempuan',
                ]),
            ],

            'alamat' => [
                'required',
                'string',
            ],

            'program_studi' => [
                'required',
                'string',
                'max:255',
            ],

            'nomor_hp' => [
                'required',
                'string',
                'max:20',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique(
                    'mahasiswas',
                    'email'
                )->ignore($mahasiswa->id),
            ],
        ]);

        $mahasiswa->update($validated);

        return redirect()
            ->route('mahasiswa.index')
            ->with(
                'success',
                'Data mahasiswa berhasil diperbarui.'
            );
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with(
                'success',
                'Data mahasiswa berhasil dihapus.'
            );
    }
}