<x-app-layout>

    <x-slot name="header">

        <div>
            <h2 style="font-size:22px; font-weight:700; color:#111827; margin:0;">
                Detail Mahasiswa
            </h2>

            <p style="margin:5px 0 0; color:#6b7280; font-size:14px;">
                Informasi lengkap mahasiswa
            </p>
        </div>

    </x-slot>

    <div style="padding:32px 16px;">

        <div style="max-width:850px; margin:auto;">

            <div style="
                background:white;
                border-radius:10px;
                box-shadow:0 2px 8px rgba(0,0,0,.08);
                padding:28px;
            ">

                <div style="
                    display:grid;
                    grid-template-columns:1fr 1fr;
                    gap:24px;
                ">

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            NIM
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->nim }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Nama Mahasiswa
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->nama_mahasiswa }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Tempat Lahir
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->tempat_lahir }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Tanggal Lahir
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->tanggal_lahir->format('d-m-Y') }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Jenis Kelamin
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->jenis_kelamin }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Program Studi
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->program_studi }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Nomor HP
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->nomor_hp }}
                        </p>
                    </div>

                    <div>
                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Email
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->email }}
                        </p>
                    </div>

                    <div style="grid-column:1 / -1;">

                        <p style="margin:0 0 6px; color:#6b7280; font-size:13px;">
                            Alamat
                        </p>

                        <p style="margin:0; font-weight:700;">
                            {{ $mahasiswa->alamat }}
                        </p>

                    </div>

                </div>

                <div style="
                    margin-top:30px;
                    display:flex;
                    gap:12px;
                ">

                    <a
                        href="{{ route('mahasiswa.edit', $mahasiswa) }}"
                        style="
                            display:inline-block;
                            background:#d97706;
                            color:white;
                            text-decoration:none;
                            padding:11px 22px;
                            border-radius:7px;
                            font-weight:600;
                        "
                    >
                        Edit
                    </a>

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

            </div>

        </div>

    </div>

</x-app-layout>