<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">

        @if (count($users) == 0)

            <p>Es sind gar keine User angelegt!</p>

        @else

            <table border="1px" cellspacing="0px" cellpadding="0px">
                <tr style="background-color: #ff7700; color: #ffffff;">
                    <td>Vorname</td>
                    <td>Nachname</td>
                    <td>Telefon</td>
                    <td>E-Mail</td>
                </tr>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['surname'] }}</td>
                    <td>{{ $user['phone'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>
            @endforeach
            </table>

        @endif

    </div>
</div>
</body>
</html>
