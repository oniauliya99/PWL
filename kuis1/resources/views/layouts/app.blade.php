<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auliya Oni Priyandika | @yield('header')</title>

    <style>
        * {
            margin: 0;
            padding: 0;

            font: 25px/22px arial sans-serif;
            box-sizing: border-box;
        }

        .container {
            width: 900px;
            margin: 20px auto;
        }

        h1 {
            background: yellow;
            color: black;
            font-size: 15px;
            font-weight: normal;
            text-align: center;          
            padding: 10px;
        }

        .sidebar { 
            width: 30%;
            background: white;
            text-align: center;
        }

        .content {
             width: 70%; 
             background: white;
        }

        .content p { text-align: justify; }

        .sidebar, .content {
            float: left;
            padding: 20px;
            height: 300px;
            overflow: hidden;
        }

        .footer {
            color: black;
            background: yellow;
            text-align: center;
            padding: 10px;
            clear: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- header -->
        <h1>
            Pemrograman Web Lanjut - <span style="font-weight: bold; text-transform: capitalize;">@yield('header')</span>
        </h1>

        <!-- sidebar -->
        <div class="sidebar">
            @section('sidebar')
            
            @show
        </div>

        <!-- konten -->
        <div class="content">
            @yield('konten')
        </div>

        <!-- footer -->
        <p class="footer">Hak cipta oleh <span style="font-weight: bold;"></span> cachemgr@auliya</p>
    </div>
</body>
</html>