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
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body>
    <header class="d-flex justify-content-center py-3 bg-dark text-white">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/search-magang" class="nav-link">Magang</a></li>
            <li class="nav-item"><a href="/search-studi-independen" class="nav-link active">Studi Independen</a></li>
        </ul>
    </header>
    <div class="container">
        <div class="header">
            <h2 id="title"><strong>Input position_id kamu!</strong></h2>
        </div>
        <form id="survey-form" method="POST" action="/getDataSI">
            @csrf
            <div class="textarea-form-group">
                <textarea name="experience" id="experience"
                    placeholder="Cth : 8909ef7b-7c8a-11ee-8410-5e77d93a739d, 6c7f0ba5-6f46-11ee-b783-1e4fc00d2885, 6df88b4f-6e66-11ee-883c-badd859af60d,..."
                    class="form-control" rows="4"></textarea>
            </div>
            <input type="submit" id="submit" value="SUBMIT" />
        </form>
    </div>
</body>

</html>
