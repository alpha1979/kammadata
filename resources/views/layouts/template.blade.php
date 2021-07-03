<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name',"KAMMADATA")}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

     
        <style>
           
            .v-divider {
                border-right: 1px solid #34485c;
                height:15px;
                
                margin-top:14px;
            }
            .shadow{
                box-shadow: -1px 1px 5px 9px rgba(0,0,0,0.90);
            }
            .ui-middle{
                padding:40px;
                margin-top:250px;
            }
            .svg-logo path ,polygon{
                fill:#34485c;
            }
            .svg-logo{
                width : 160px;
            }
            
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>