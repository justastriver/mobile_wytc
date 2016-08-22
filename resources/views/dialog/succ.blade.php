<!DOCTYPE html>
<html>
    <head>
        <title>我要跳槽－成功啦！</title>


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
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
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @if(is_null($message)) 
                    <div class="title">成功！</div>
                @else
                    <div class="title">{{$message}}</div>
                @endif
            </div>
        </div>
    </body>
</html>
