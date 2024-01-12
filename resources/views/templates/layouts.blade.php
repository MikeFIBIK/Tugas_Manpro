<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PW-IBIK</title>
    <link rel="stylesheet" href="{{ url('./assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('./assets/bootstrapicons/font/bootstrap-icons.css') }}">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column; /* Align children vertically */
            align-items: stretch; /* Stretch children vertically */
        }

        .container-fluid,
        .row {
            flex: 1; /* Allow container to grow and take available space */
            margin: 0;
            padding: 0;
            display: flex;
        }

        .col-md-3,
        .col-md-9 {
            height: 100%;
            padding: 0;
            display: flex;
        }

        .col-md-3 {
            flex: 0 0 230px; /* Fixed width for sidebar */
        }

        .col-md-9 {
            flex: 1; /* Allow the main content to take the remaining space */
            flex-direction: column; /* Align children vertically */
            padding-top: 20px;
            padding-bottom: 20px;
        }

        main {
            display: flex;
            flex-direction: column;
            padding: 50px;
            height: 100%; /* Allow main content to take full height */
        }
    </style>
</head>
<body class="bg-body-tertiary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('templates.sidebar.navigation')
            </div>
            <div class="col-md-9">
                <main class="pt-1" >
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{ url('./assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
