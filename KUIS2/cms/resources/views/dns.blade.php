@extends('layouts.idx') 

@section('header', 'Domain Name System') 

@section('konten')
            <h3>Konfigurasi DNS pada Mikrotik</h3>
            <h4>Probolinggo, 1 Oktober 2020</h4>
			<p>Seperti yang telah kita ketahui, apabila kita mempunyai sebuah usaha yaitu penyedia jasa internet, seperti RT/RW Net, Internet Cafe (Warnet), atau bisa juga sebagai administrator jaringan di sebuah perusahaan. Maka sesuai dengan peraturan pemerintah atau juga kebijakan dari masing-masing pengelola untuk melakukan filtering akses dari situs-situs yang mengandung unsur SARA, Pornografi, dan situs yang memiliki konten 'negatif'.</p>
			<p>Nah, untuk membuat sebuah 'Internet Positif' kita akan melakukan konfigurasi pada router gateway dengan menambahkan DNS Server yang memiliki Content Filtering, seperti DNS Nawala, Comodo Secure DNS, Norton ConnectSafe DNS. Namun seiring dengan perkembangan informasi teknologi, para pengguna internet pun juga tidak ketinggalan untuk update. Sebagian pengguna internet mencari cara untuk menembus dari 'Internet Positif'. Salah satunya dengan mengganti alamat DNS yang telah tersetting di perangkat si pengguna menggunakan alamat DNS tanpa Content Filtering.
            </p>
            <p>Untuk mengatasi hal ini kita bisa menerapkan Forwarding DNS Server atau dengan kata lain kita 'memaksa' pengguna internet untuk melakukan resolve DNS ke DNS Server kita walaupun di perangkat si pengguna disetting dengan DNS Server yang lain. Sebelumnya kita harus melakukan konfigurasi pada DNS Sever di Mikrotik dan pastikan opsi �Allow Remote Request� dicentang. Hal ini dilakukan supaya IP Address yang ada pada interface Router selain untuk gateway juga bisa dijadikan sebagai alamat DNS Server bagi client.</p>
            <p>Dalam membuat Forwarding DNS Server caranya pun cukup mudah. Kita bisa memanfaatkan fitur Firewall-NAT pada MikroTik.
            </p>
            <p>Untuk script rulenya adalah sebagai berikut:</p>
            <p>Pada /ip firewall nat</p>
            <p>add chain=dstnat action=dst-nat to-addresses=192.168.1.1 to-ports=53 protocol=tcp dst-port=53</p>
            <p>add chain=dstnat action=dst-nat to-addresses=192.168.1.1 to-ports=53 protocol=udp dst-port=53</p>
            <p>Jadi rule ini akan meredirect semua trafik yang resolve DNS (port 53) menuju ke DNS Server lokal kita. Pastikan untuk menempatkan rule tersebut diurutan paling atas.</p>
            <p>Sumber : <a href="https://qwords.com/blog/apa-itu-mikrotik/">mikrotik</a></p>
            <p>Kita juga bisa melakukan kombinasi antara rule firewall NAT dengan fitur 'DNS Static' untuk membuat filtering akses suatu alamat website. Fitur tersebut juga terdapat pada Menu /ip DNS. Untuk konfigurasinya pun juga cukup mudah. Pilih pada tombol command 'Static' kemudian 'Add (+)' dan tentukan DNS Static Entry. Misal, kali ini kita akan filtering akses dari situs www.youtube.com.</p>
@endsection

@section('copyright', 'Auliya Oni Priyandika')