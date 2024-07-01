<!DOCTYPE html>
<html>

<head>
    <title>tes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
    <a class="btn btn-primary mt-2" href="{{ route('generate-pdf') }}">Generate Invoice PDF</a> <br>
    <a class="btn btn-primary  mt-2" href="{{ route('po') }}">Generate PO PDF</a>
    <p>This PDF document is generated using domPDF in Laravel.</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
