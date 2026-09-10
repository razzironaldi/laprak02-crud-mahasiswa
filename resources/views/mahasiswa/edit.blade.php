<x-app-layout>

    <x-slot name="header">

        <div>
            <h2 style="font-size:22px; font-weight:700; color:#111827; margin:0;">
                Edit Data Mahasiswa
            </h2>

            <p style="margin:5px 0 0; color:#6b7280; font-size:14px;">
                Perbarui informasi mahasiswa
            </p>
        </div>

    </x-slot>

    <div style="padding:32px 16px;">

        <div style="max-width:950px; margin:auto;">

            <div style="
                background:white;
                border-radius:10px;
                box-shadow:0 2px 8px rgba(0,0,0,.08);
                padding:28px;
            ">

                @if($errors->any())

                    <div style="
                        margin-bottom:24px;
                        padding:16px;
                        background:#fee2e2;
                        border:1px solid #fca5a5;
                        border-radius:8px;
                        color:#991b1b;
                    ">

                        <strong>Periksa kembali data:</strong>

                        <ul style="margin:8px 0 0; padding-left:20px;">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form
                    action="{{ route('mahasiswa.update', $mahasiswa) }}"
                    method="POST"
                >

                    @csrf
                    @method('PUT')

                    <div style="
                        display:grid;
                        grid-template-columns:1fr 1fr;
                        gap:20px;
                    ">

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                NIM
                            </label>

                            <input
                                type="text"
                                name="nim"
                                value="{{ old('nim', $mahasiswa->nim) }}"
                                required
                                maxlength="20"
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Nama Mahasiswa
                            </label>

                            <input
                                type="text"
                                name="nama_mahasiswa"
                                value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Tempat Lahir
                            </label>

                            <input
                                type="text"
                                name="tempat_lahir"
                                value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Tanggal Lahir
                            </label>

                            <input
                                type="date"
                                name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir->format('Y-m-d')) }}"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Jenis Kelamin
                            </label>

                            <select
                                name="jenis_kelamin"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                    background:white;
                                "
                            >

                                <option
                                    value="Laki-laki"
                                    {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}
                                >
                                    Laki-laki
                                </option>

                                <option
                                    value="Perempuan"
                                    {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}
                                >
                                    Perempuan
                                </option>

                            </select>
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Program Studi
                            </label>

                            <input
                                type="text"
                                name="program_studi"
                                value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Nomor HP
                            </label>

                            <input
                                type="text"
                                name="nomor_hp"
                                value="{{ old('nomor_hp', $mahasiswa->nomor_hp) }}"
                                required
                                maxlength="20"
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div>
                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $mahasiswa->email) }}"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                "
                            >
                        </div>

                        <div style="grid-column:1 / -1;">

                            <label style="display:block; font-weight:600; margin-bottom:7px;">
                                Alamat
                            </label>

                            <textarea
                                name="alamat"
                                rows="4"
                                required
                                style="
                                    width:100%;
                                    box-sizing:border-box;
                                    padding:11px 12px;
                                    border:1px solid #d1d5db;
                                    border-radius:7px;
                                    resize:vertical;
                                "
                            >{{ old('alamat', $mahasiswa->alamat) }}</textarea>

                        </div>

                    </div>

                    <div style="
                        margin-top:28px;
                        display:flex;
                        gap:12px;
                        align-items:center;
                    ">

                        <button
                            type="submit"
                            style="
                                display:inline-block !important;
                                background:#d97706 !important;
                                color:white !important;
                                border:none !important;
                                padding:11px 22px !important;
                                border-radius:7px !important;
                                font-weight:600 !important;
                                cursor:pointer !important;
                                visibility:visible !important;
                                opacity:1 !important;
                            "
                        >
                            Simpan Perubahan
                        </button>

                        <a
                            href="{{ route('mahasiswa.index') }}"
                            style="
                                display:inline-block;
                                background:#6b7280;
                                color:white;
                                text-decoration:none;
                                padding:11px 22px;
                                border-radius:7px;
                                font-weight:600;
                            "
                        >
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>