@extends('layouts.idx') 

@section('header', 'Konfigurasi Queue Mikrotik') 

@section('konten')
            <h3>Konfigurasi Queue pada Mikrotik</h3>
            <h4>Probolinggo, 1 Oktober 2020</h4>
			<p>Pada sebuah jaringan yang mempunyai banyak client, diperlukan sebuah mekanisme pengaturan bandwidth dengan tujuan mencegah terjadinya monopoli penggunaan bandwidth sehingga semua client bisa mendapatkan jatah bandwidth masing-masing. QOS(Quality of services) atau lebih dikenal dengan Bandwidth Manajemen, merupakan metode yang digunakan untuk memenuhi kebutuhan tersebut.
Pada RouterOS Mikrotik penerapan QoS bisa dilakukan dengan fungsi Queue. </p>
			<p>Cara paling mudah untuk melakukan queue pada RouterOS adalah dengan menggunakan Simple Queue. Kita bisa melakukan pengaturan bandwidth secara sederhana berdasarkan IP Address client dengan menentukan kecepatan upload dan download maksimum yang bisa dicapai oleh client.
Contoh :
Kita akan melakukan limitasi maksimal upload : 128kbps dan maksimal download : 512kbps terhadap client dengan IP 192.168.10.2 yang terhubung ke Router. Parameter Target Address adalah IP Address dari client yang akan dilimit. Bisa berupa :</p>
            <p>Single IP (192.168.10.2)</p>
            <p>Network IP (192.168.10.0/24)</p>
            <p>Beberapa IP (192.168.10.2,192.168.10.13) dengan menekan tombol panah bawah kecil di sebelah kanan kotak isian.</p>
            <p>Penentuan kecepatan maksimum client dilakukan pada parameter target upload dan target download max-limit. Bisa dipilih dengan drop down menu atau ditulis manual. Satuan bps (bit per second).</p>
            <p>Dengan pengaturan tersebut maka Client dengan IP 192.168.10.2 akan mendapatkan kecepatan maksimum Upload 128kbps dan Download 256kbps dalam keadaan apapun selama bandwidth memang tersedia. </p>
            <p><b>Metode Pembagian Bandwidth Share</b></p>
            <p>Selain digunakan untuk melakukan manajemen bandwidth fix seperti pada contoh sebelumnya, kita juga bisa memanfaatkan Simple Queue untuk melakukan pengaturan bandwidth share dengan menerapkan Limitasi Bertingkat. Konsep Limitasi Bertingkat  bisa anda baca pada artikel Mendalami HTB pada QOS RouterOS Mikrotik</p>
            <p>Contoh :</p>
            <p>Kita akan melakukan pengaturan bandwidth sebesar 512kbps untuk digunakan 3 client.</p>
            <p>Konsep:</p>
            <p>1. Dalam keadaan semua client melakukan akses, maka masing-masing client akan mendapat bandwidth minimal 128kbps.</p>
            <p>2. Jika hanya ada 1 Client yang melakukan akses, maka client tersebut bisa mendapatkan bandwidth hingga 512kbps.</p>
            <p>3. Jika terdapat beberapa Client (tidak semua client) melakukan akses, maka bandwidth yang tersedia akan dibagi rata ke sejumlah client yg aktif.</p>
            <p>Router kita tidak tahu berapa total bandwidth real yang kita miliki, maka kita harus definisikan pada langkah pertama. Pendefinisian ini bisa dilakukan dengan melakukan setting Queue Parent. Besar bandwidth yang kita miliki bisa diisikan pada parameter Target Upload Max-Limit dan Target Download Max-Limit.</p>
            <p>Langkah selanjutnya kita akan menentukan limitasi per client dengan melakukan setting child-queue.
Pada child-queue kita tentukan target-address dengan mengisikan IP address masing-masing client. Terapkan Limit-at (CIR) : 128kbps dan Max-Limit (MIR) : 512kbps. Arahkan ke Parent Total Bandwidth yang kita buat sebelumnya.</p>
            <p>Sumber : <a href="https://qwords.com/blog/apa-itu-mikrotik/">mikrotik</a></p>
            
@endsection

@section('copyright', 'Auliya Oni Priyandika')