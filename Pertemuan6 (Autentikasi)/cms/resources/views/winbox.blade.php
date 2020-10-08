@extends('layouts.idx') 

@section('header', 'Winbox') 

@section('konten')
            <h3>Winbox</h3>
            <h4>Probolinggo, 1 Oktober 2020</h4>
			<p>Winbox adalah utility yang digunakan untuk konektivitas dan konfigurasi MikroTik menggunakan MAC Address atau protokol IP. Dengan winbox kita dapat melakukan konfigurasi MikroTik RouterOS dan RouterBoard menggunakan mode GUI dengan cepat dan sederhana. Winbox dibuat menggunakan win32 binary tapi dapat dijalankan pada Linux, Mac OSX dengan menggunakan Wine. Semua fungsi winbox didesain dan dibuat semirip dan sedekat mungkin dengan fungsi console, sehingga Anda akan menemukan istilah-istilah yang sama pada fungsi console.</p>
            <p>Fungsi Winbox</p>
            <p>1. Setting mikrotik router dalam mode GUI</p>
            <p>2. Setting bandwith atau membatasi kecepatan jaringan</p>
            <p>3. Memblokir sebuah website/situs</p>
            <p>4. Mempercepat pekerjaan</p>
            <p>5. Dapat meremote mikrotik dari jaraj jauh</p>
            <br>
            <p>Fitur-fitur Winbox</p>
            <p>1. Neighbors – Digunakan untuk menemukan dan menunjukkan perangkat MNDP (MikroTik Neighbour Discovery Protocol) atau CDP (Cisco Discovery Protocol). Sederhananya untuk menemukan perangkat MikroTik RouterOS yang terhubung ke jaringan Anda.</p>
            <p>2. Managed – Digunakan untuk menunjukkan Entri yang telah disimpan.</p>
            <p>3. Set Master Password – Membuat sandi untuk memunculkan entri pada jendela Managed.</p>
            <p>4. Connect– Digunakan untuk terhubung ke RouterOS.</p>
            <p>5. Add/Set – Digunakan untuk menyimpan atau mengubah alamat, login, password, catatan, sesi dan grup. Entri yang disimpan akan ditampilkan di jendela Managed.</p>
            <p>6. Tools– Digunakan untuk menjalankan berbagai fungsi, seperti impor alamat dari file WBX atau ekspor ke file WBX, memindahkan folder sesi dan memeriksa pembaharuan.</p>
            <p>7. Connect To – Tujuan IP atau MAC Address dari Router.</p>
            <p>8. Login – Username yang digunakan untuk autentikasi.</p>
            <p>9. Password – Sandi yang digunakan untuk autentikasi.</p>
            <p>10. Session – Digunakan untuk mengubah nama sesi dan menampilkan sesi yang telah disimpan.</p>
            <p>11. Browse.. – Digunakan untuk mencari dan membuka sesi yang telah disimpan dalam format .viw</p>
            <p>12. Note – Deskripsi router yang akan disimpan ke dalam daftar.</p>
            <p>13. Group – Digunakan untuk membuat grup dan mengatur Entri ke dalam grup tertentu</p>
            <p>14. Keep Password – Jika dicentang, sandi akan tetap tersimpan.</p>
            <p>15. Secure Mode – Jika dicentang, winbox akan menggunakan enkripsi TLS untuk mengamankan sesi.</p>
            <p>16. Autosave Session– Jika dicentang, winbox akan otomatis menyimpan sesi.</p>
            <p>17. Open in New Window – Jika dicentang, winbox akan membuka sesi di jendela baru setelah menekan Connect.</p>
            <p>Sumber : <a href="https://qwords.com/blog/apa-itu-mikrotik/">mikrotik</a></p>

@endsection

@section('copyright', 'Auliya Oni Priyandika')
