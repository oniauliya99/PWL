<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h5>Laporan User</h4>
    </center>
    <table class='table table-bordered'>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Gambar</th>
            </tr>
            @php $i=1 @endphp
            @foreach($user as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->roles}}</td>
                                    @if(Auth::user()->featured_image != null)
                                    <td><img src="{{public_path('/storage/'.$a->featured_image)}}" width="50px" alt=""></td>
                                    @else
                                    <td><img src="{{public_path('/img/akun.png')}}" width="50px" alt=""></td>
                                     @endif
               
            </tr>
            @endforeach
    </table>
</body>
</html>
