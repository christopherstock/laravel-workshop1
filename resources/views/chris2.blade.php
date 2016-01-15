<!DOCTYPE html>
<html>
    <head>
        <title>Chris Testpage</title>

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
                <div class="title">Chris 2 Testpage</div>
                <div class="title">{{$acclaim}}</div>

{{ Form::open(array('route' => 'contact_store', 'class' => 'form')) }}

{{ Form::close() }}

            </div>
        </div>
    </body>
</html>
