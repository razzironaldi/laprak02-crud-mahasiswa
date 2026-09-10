<x-app-layout>

    <x-slot name="header">

        <div style="display:flex; justify-content:space-between; align-items:center; gap:20px;">

            <div>
                <h2 style="font-size:22px; font-weight:700; color:#111827; margin:0;">
                    Data Mahasiswa
                </h2>

                <p style="margin:5px 0 0; color:#6b7280; font-size:14px;">
                    Kelola data mahasiswa
                </p>
            </div>

            <a
                href="{{ route('mahasiswa.create') }}"
                style="
                    display:inline-block;
                    background:#2563eb;
                    color:white;
                    text-decoration:none;
                    padding:10px 16px;
                    border-radius:7px;
                    font-weight:600;
                "
            >
                + Tambah Mahasiswa
            </a>

        </div>

    </x-slot>

    <div style="padding:32px 16px;">

        <div style="max-width:1400px; margin:auto;">

            @if(session('success'))

                <div style="
                    margin-bottom:20px;
                    padding:14px 16px;
                    background:#dcfce7;
                    border:1px solid #86efac;
                    color:#166534;
                    border-radius:8px;
                ">
                    {{ session('success') }}
                </div>

            @endif

            <div style="
                background:white;
                border-radius:10px;
                box-shadow:0 2px 8px rgba(0,0,0,.08);
                overflow:hidden;
            ">

                <div style="padding:24px;">

                    <div style="overflow-x:auto;">

                        <table style="
                            width:100%;
                            border-collapse:collapse;
                            font-size:14px;
                        ">

                            <thead>

                                <tr style="background:#f3f4f6;">

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        No
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        NIM
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Nama
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Tempat Lahir
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Tanggal Lahir
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Jenis Kelamin
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Alamat
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Program Studi
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Nomor HP
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:left;">
                                        Email
                                    </th>

                                    <th style="border:1px solid #d1d5db; padding:12px; text-align:center;">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse($mahasiswa as $index => $mhs)

                                    <tr>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $index + 1 }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->nim }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px; font-weight:600;">
                                            {{ $mhs->nama_mahasiswa }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->tempat_lahir }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->tanggal_lahir->format('d-m-Y') }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->jenis_kelamin }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->alamat }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->program_studi }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->nomor_hp }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">
                                            {{ $mhs->email }}
                                        </td>

                                        <td style="border:1px solid #d1d5db; padding:12px;">

                                            <div style="
                                                display:flex;
                                                flex-direction:column;
                                                gap:7px;
                                                min-width:90px;
                                            ">

                                                <a
                                                    href="{{ route('mahasiswa.show', $mhs) }}"
                                                    style="
                                                        display:block;
                                                        background:#4b5563;
                                                        color:white;
                                                        padding:8px;
                                                        border-radius:6px;
                                                        text-decoration:none;
                                                        text-align:center;
                                                    "
                                                >
                                                    Detail
                                                </a>

                                                <a
                                                    href="{{ route('mahasiswa.edit', $mhs) }}"
                                                    style="
                                                        display:block;
                                                        background:#d97706;
                                                        color:white;
                                                        padding:8px;
                                                        border-radius:6px;
                                                        text-decoration:none;
                                                        text-align:center;
                                                    "
                                                >
                                                    Edit
                                                </a>

                                                <form
                                                    action="{{ route('mahasiswa.destroy', $mhs) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        style="
                                                            display:block;
                                                            width:100%;
                                                            background:#dc2626;
                                                            color:white;
                                                            border:none;
                                                            padding:8px;
                                                            border-radius:6px;
                                                            cursor:pointer;
                                                        "
                                                    >
                                                        Hapus
                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="11"
                                            style="
                                                border:1px solid #d1d5db;
                                                padding:40px;
                                                text-align:center;
                                                color:#6b7280;
                                            "
                                        >
                                            Belum ada data mahasiswa.
                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>