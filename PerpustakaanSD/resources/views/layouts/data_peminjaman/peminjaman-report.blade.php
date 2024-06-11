<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Peminjaman</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }

        .table-data tr th {
            background-color: #2c3e50;
            color: white;
        }

        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-data tr:hover {
            background-color: #f5f5f5;
        }
        .h3 {
            font-size: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3 class="h3">Data Peminjaman</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Pinjam</th>
                <th>ID Buku</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datapinjam as $pinjam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pinjam->id_pinjam }}</td>
                    <td>{{ $pinjam->id_buku }}</td>
                    <td>{{ $pinjam->nama_peminjam }}</td>
                    <td>{{ $pinjam->tanggal_peminjaman }}</td>
                    <td>{{ $pinjam->tanggal_pengembalian }}</td>
                    <td>{{ $pinjam->denda }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
</body>

</html>
