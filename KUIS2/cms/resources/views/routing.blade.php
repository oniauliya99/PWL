@extends('layouts.idx') 

@section('header', 'Konfigurasi Routing Mikrotik') 

@section('konten')
            <h3>Konfigurasi Routing pada Mikrotik</h3>
            <h4>Probolinggo, 1 Oktober 2020</h4>
            <p>Routing static adalah menambahkan jalur routing tertentu secara manual. Mikrotik secara default akan membuat jalur routing otomatis (dynamic route) ketika kita menambahkan ip address pada interface. Lalu kenapa kita memerlukan static routing? Karena untuk menghubungkan perangkat network yang memilik ip segment (subnet) yang berbeda memerlukan sebuah perangkat yang mampu melakukan proses static routing</p>
			<p>Alat dan Bahan</p>
            <p>1) 2 router mikrotik</p>
            <p>2) 3 kabel UTP</p>
            <p>2 Laptop sebagai client</p>
           
            <p>Tahap pelaksanaan</p>
            <p>Pertama kita login ke mikrotik dengan winbox</p>
            <p>setelah masuk ke winbox, kita masuk ke ip --> address lalu kita atur ipnya router 1</p>
            <p>eth3, ip address 10.10.50.1/28</p>
            <p>eth2, ip address 192.168.80.2/28</p>
            <p>lalu kita masuk ke ip --> route --> klik add(+), lalu pada Dst.Address isikan 172.16.2.0/24 (ip network client yang ada pada router2) dan pada gateway isikan 10.10.50.2 (ip yang terhubung dari router2 ke router1), klik apply --> ok</p>
            <p>jika sudah maka akan reachable eth3</p>
            <p>sekarang kita konfigurasi pada DHCP servernya untuk client yang akan terhubung </p>
            <p>kita coba untuk ping</p>
            <p><b>Konfigurasi router2</b></p>
            <p>seperti langkah diatas kita masuk dulu ke mikrotik dengan winbox</p>
            <p>setelah masuk kita masuk ke ip --> address lalu kita atur ipnya router 2</p>
            <p>eth3, ip address 10.10.50.2/28</p>
            <p>eth2, ip address 192.168.80.2/28</p>
            <p>lalu kita masuk ke ip --> route --> klik add(+), lalu pada Dst.Address isikan 192.168.80.0/28 (ip network client yang ada pada router1) dan pada gateway isikan 10.10.50.1 (ip yang terhubung dari router1 ke router2), klik apply --> ok</p>
            <p>jika sudah maka akan reachable eth3</p>
            <p>sekarang kita konfigurasi pada DHCP servernya untuk client yang akan terhubung</p>
            <p>Sumber : <a href="https://qwords.com/blog/apa-itu-mikrotik/">mikrotik</a></p>
@endsection

@section('copyright', 'Auliya Oni Priyandika')