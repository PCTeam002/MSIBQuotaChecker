<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Dashboard</title>
</head>

<body>
    <header class="d-flex justify-content-center py-3 bg-dark text-white">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/search-magang" class="nav-link active">Magang</a></li>
            <li class="nav-item"><a href="/search-studi-independen" class="nav-link">Studi Independen</a></li>
        </ul>
    </header>
    <div class="main-table">
        <div class="table-responsive">
            @if ($data == null)
                <h1 class="text-center">Data tidak ditemukan</h1>
            @else
                <table
                    class="table table-striped table-sm table-dark table-hover rounded-3 overflow-hidden text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mitra</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Kuota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['mitra']['brand_name'] }}</td>
                                <td>{{ $item['magang']['activity_id']['location'] }}</td>
                                <td>{{ $item['magang']['name'] }}</td>
                                <td>{{ $item['magang']['is_quota_full'] ? 'Penuh' : 'Masih Tersisa' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</body>

</html>
