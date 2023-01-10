<!DOCTYPE html>
<head>
    
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    <div id=halaman class="container-fluid">
        <h3 id=judul>Permohonan Peminjaman Ruangan</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>

        <table>
            <tr>
                <td style="width: 30%;">Hal</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">Permohonan Peminjaman Ruangan</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Nama Ruang</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td>{{ $nama_ruang }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Pinjam</td>
                <td style="width: 5%;">:</td>
                <td>{{ $tgl_pinjam }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jam Mulai Pinjam</td>
                <td style="width: 5%;">:</td>
                <td>{{ $jam_mulaipinjam }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jam Pinjam</td>
                <td style="width: 5%;">:</td>
                <td>{{ $jam_selesaipinjam }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Skala Acara</td>
                <td style="width: 5%;">:</td>
                <td>{{ $tingkat }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Email</td>
                <td style="width: 5%;">:</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>

                <td style="width: 30%;">Deskripsi Acara</td>
                <td style="width: 5%;">:</td>
                <td>{{ $deskripsi_pinjam }}</td>
            </tr>
        </table>

        <p>Demikian Surat Permohonan ini kami buat, atas perhatian dan kerjasamanya kami sampaikan terimakasih.</p>

</body>

</html>