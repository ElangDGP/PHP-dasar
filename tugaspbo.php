<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa </title>
    <link rel="stylesheet" href="tugasbiodata.css">
</head>
<body>
    <table border = "1" cellpadding = "5" cellspacing="10" align="center">
        <tr>
               <td colspan="5" align="center"> <H1>Biodata Diri</H1><br></td> 
        </tr>
        <tr>
            <td class="First"> Data diri </td><br>
              <td class="First"> Keterangan </td>
              <td class="First">Foto</td> </tr>
              <td class="second">Nama</td>
              <td class="second"> <?php 
                                    $nama_awal = "Elang ";
                                    $nama_tengah = "Damar Galih";
                                    $nama_akhir = "Pamungkas";
                                    echo $nama_awal . ' '.$nama_tengah . ' '.$nama_akhir;
                                ?></td>
              <td rowspan="7 "><img src="C:\Users\Elang\Downloads\WhatsApp Image 2023-02-24 at 15.25.00.jpeg" alt="foto saya"></td>
        </tr>
        <tr>
            <td class="second">TTL</td>
            <td class="second">Nganjuk,12 Maret 2003</td>
        </tr>
        <tr>
            <td class="second">Hobi</td>
            <td class="second">Bersenang-senang</td>
        </tr>
        <tr>
            <td class="second">Status</td>
            <td class="second">Berkuliah di UPNVJATIMM</td>
        </tr>
        <tr>
            <td class="second">Fakultas</td>
            <td class="second">Ilmu Komputer</td>
        </tr>
        <tr>
            <td class="second">prodi</td>
            <td class="second"><?php
            $prodi = "Informatika";
            echo $prodi; ?></td>
        </tr>
        <tr>
            <td class="second">NPM</td>
            <td class="second"> <?php 
                                        $npm = "21081010218";
                                        echo $npm;
                                    ?></td>
        </tr>
    </table>

</body>
</html>