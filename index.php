<?php

function menghitungHari ($jumlahHari)
{

    $namaHari = date('l', strtotime(date("Y-m-d")."+".$jumlahHari."days"));

    switch ($namaHari){
        case 'Monday' :
            $translateHari = "Senin" ;
            break;
        case 'Tuesday' :
            $translateHari = "Selasa" ;
            break;
        case 'wednesday' :
            $translateHari = "Rabu" ;
            break;
        case 'Thursday' :
            $translateHari = "Kamis" ;
            break;
        case 'friday' :
            $translateHari = "Jumat" ;
            break;
        case 'Saturday' :
            $translateHari = "Sabtu" ;
            break;
        case 'Sunday' :
            $translateHari = "Minggu" ;
            break;
        default :
            $translateHari = "Hari tidak Valid";
            break;
    }
    return $translateHari;
}

$jumlahHari = 120;
echo "$jumlahHari Hari setelah hari ini adalah hari". menghitungHari($jumlahHari);
?>