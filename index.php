<!-- SOAL NOMOR 6 -->
<?php 
 
define('DB_HOST', 'localhost'); 
define('DB_USER', 'root'); 
define('DB_PASS', 'root'); 
define('DB_NAME', 'test'); 
 
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
 
if (!$connection) { 
    die("CONNECT FAILED" . mysqli_error($connect)); 
} 
 
    $query = "SELECT * FROM pegawai"; 
    $pegawai = mysqli_query($connection, $query); 
 
    while ($row = mysqli_fetch_assoc($pegawai)) { 
        $total = 0; 
        $bonus = 0; 
        $tunjangan = 0; 
        echo  $row['id'] . '</br>'; 
        echo  $row['nama'] . '</br>'; 
        echo  $row['gaji'] . '</br>'; 
        echo $level = $row['level'] . '</br>'; 
        echo $region = $row['region'] . '</br>'; 
 
        if ($row['gaji'] > 15000000) { 
            echo $tunjangan = $row['gaji'] * 0.1; 
        echo  '</br>'; 
        } elseif ($row['gaji'] > 10000000 && $row['gaji'] < 15000000) { 
            echo $tunjangan = $row['gaji'] * 0.12; 
        echo  '</br>'; 
        } else { 
            echo $tunjangan = $row['gaji'] * 0.15; 
        echo  '</br>'; 
        } 
 
 
        if ($level == 'Manager') { 
            echo $bonus = 250000;  
            echo  '</br>'; 
        } elseif ($level == 'Ass. Manager') { 
            echo $bonus = 175000; 
        echo  '</br>'; 
        } elseif ($level == 'Senior Officer') { 
            echo $bonus = 150000; 
        echo  '</br>'; 
        } elseif ($level == 'Middle Officer') { 
            echo $bonus = 125000; 
        echo  '</br>'; 
        } elseif ($level == 'Junior Officer') { 
            echo $bonus = 100000; 
        echo  '</br>'; 
        } 
 
    echo $total = $row['gaji'] + $tunjangan + $bonus; 
    echo  '</br>'; 
 
    if ($region == 'Jakarta') { 
        echo $potongan = ($row['gaji'] + $tunjangan + $bonus) * 0.025; 
        echo  '</br>'; 
    } elseif ($region == 'Bandung') { 
        echo $potongan = ($row['gaji'] + $tunjangan + $bonus) * 0.02; 
        echo  '</br>'; 
    } else { 
        echo $potongan = ($row['gaji'] + $tunjangan + $bonus) * 0.018; 
        echo  '</br>'; 
    }    
 
    echo $total - $potongan; 
    echo  '</br>'; 
 
 
        echo '</br>'; 
 
}