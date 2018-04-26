<html>

<head>
    <title>View Student Records</title>

    <style>
        html, body {
            backgrounwsd-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
<div class="flex-center position-ref full-height">
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->Id }}</td>
                <td>{{ $user->Name }}</td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>