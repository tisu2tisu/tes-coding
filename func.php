<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=tescoding", "root", "");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    
    switch($_POST['tipe']){
        case "inputdata":
            checkDuplicate($_POST['nama_klub'],$conn);
            inputData($_POST['nama_klub'], $_POST['kota_klub'],$conn);
            break;
        case "getKlub":
            getKlub($conn);
            break;
        case "inputScoreSingle":
            inputScoreSingle($conn,$_POST['klub1'],$_POST['klub2'],$_POST['skor1'],$_POST['skor2']);
            break;
        
    }

    function inputData($nama_klub,$kota_klub,$conn){                                
            try {
                $stmt = $conn->prepare("INSERT INTO data_klub (nama_klub, kota_klub) VALUES (:nama_klub, :kota_klub)");
  
                $stmt->bindParam(':nama_klub', $nama_klub);
                $stmt->bindParam(':kota_klub', $kota_klub);
            
                $stmt->execute();
                echo "success add data";
            } catch (PDOException $e){
                echo "error: " . $e->getMessage();
            }
        
    }

    function checkDuplicate($nama_klub,$conn){
        try {
            $stmt = $conn->prepare("SELECT * FROM data_klub WHERE nama_klub = :val");
            $stmt->bindParam(':val',$nama_klub);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($results)) {
              
                die("Duplicate");
            }
            
            
        } catch (PDOException $e){
            echo "error: " . $e->getMessage();
        }
    }

    function getKlub($conn){
        try {
            $stmt = $conn->prepare("SELECT * FROM data_klub");
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo json_encode($results);
            
            
        } catch (PDOException $e){
            echo "error: " . $e->getMessage();
        }
    }

    function inputScoreSingle($conn,$klub1,$klub2,$skor1,$skor2){
   
        // kondisi tim 1 menang
        if($skor1 > $skor2){
      
            try {
                $stmt = $conn->prepare("UPDATE data_klub SET main = main + 1, menang = menang + 1, seri = seri + 0, kalah = kalah + 0, goal_menang = goal_menang + :skor1, goal_kalah = goal_kalah + :skor2, point = point + 3 WHERE nama_klub = :nama_klub");
            
       
                $stmt->bindParam(':skor1', $skor1);
                $stmt->bindParam(':skor2', $skor2);
                $stmt->bindParam(':nama_klub', $klub1); // pemenang
            
       
                $stmt->execute();
                echo "success add data";
            } catch (PDOException $e){
                echo "error: " . $e->getMessage();
            }

        } elseif($skor2 > $skor1){ // kondisi tim 1 kalah
    
            try {
                $stmt = $conn->prepare("UPDATE data_klub SET main = main + 1, menang = menang + 1, seri = seri + 0, kalah = kalah + 0, goal_menang = goal_menang + :skor1, goal_kalah = goal_kalah + :skor2, point = point + 3 WHERE nama_klub = :nama_klub");
            
       
                $stmt->bindParam(':skor1', $skor1);
                $stmt->bindParam(':skor2', $skor2);
                $stmt->bindParam(':nama_klub', $klub2); // pemenang
            
       
                $stmt->execute();
                echo "success add data";
            } catch (PDOException $e){
                echo "error: " . $e->getMessage();
            }
        } elseif($skor1 == $skor2){ // kondisi seri
            try {
                $stmt = $conn->prepare("UPDATE data_klub SET main = main + 0, menang = menang + 0, seri = seri + 1, kalah = kalah + 0, goal_menang = goal_menang + :skor1, goal_kalah = goal_kalah + :skor2, point = point + 1 WHERE nama_klub = :nama_klub");
            
       
                $stmt->bindParam(':skor1', $skor1);
                $stmt->bindParam(':skor2', $skor2);
                $stmt->bindParam(':nama_klub', $klub1);
       
                $stmt->execute();
                echo "success add data";
                $stmt = $conn->prepare("UPDATE data_klub SET main = main + 0, menang = menang + 0, seri = seri + 1, kalah = kalah + 0, goal_menang = goal_menang + :skor1, goal_kalah = goal_kalah + :skor2, point = point + 1 WHERE nama_klub = :nama_klub");
            
       
                $stmt->bindParam(':skor1', $skor1);
                $stmt->bindParam(':skor2', $skor2);
                $stmt->bindParam(':nama_klub', $klub2);
       
                $stmt->execute();
                echo "success add data";
                
            } catch (PDOException $e){
                echo "error: " . $e->getMessage();
            }
        }
        
      
    }

?>