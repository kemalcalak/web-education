<?php
    //$degisken adi = deger ;
    // yazdirma -> echo;
    // dizi tanimlama ve tum diziyi yazdirma->   $array=[1,"asd"];  print_r($array);
    // dizi icinde dizi-> $array=[[1,2,3],"asd"];   echo $array[0][0];
    //7ile 15 arası aynıd 15  7 dahil
     $kullaniciBilgileri=[
         'name'=>"ali kemal",
         'age'=>18,
         'surname'=>"calak"
        
     ];
    // echo $kullaniciBilgileri['name'].'<br>';
    // echo $kullaniciBilgileri['surname'].'<br>';
    // echo $kullaniciBilgileri['age'].'<br>';
    // echo json_encode($kullaniciBilgileri);
    //17 ve 21 arası ayni
    // if(kosul){
    //     calisacak kod
    // }else{
    //     kosul saglanmazsa calisacak kod
    // }
    //23 29 arasi ayni
    // if($kullaniciBilgileri['age']>18){
    //     echo "girebilirsin";
    // }elseif($kullaniciBilgileri['age']=18){
    //    echo "sinir ile gecer";
    // }else{
    //     echo "gecemez";
    // }
    
    
        // $pageTitle="form";
    
    if($_GET){
        if(@isset($_GET["name"]) && @$_GET["gender"] != null &&  @isset($_GET["age"])){
            echo "tum kontrol gecildi"."<br>";
        }else{
            echo "tum alanlar doldurulmalıdır"."<br>";
        }
        if(@$_GET["age"]>17){
            echo "yas kabul edildi"."<br>";
        }else{
            echo"yas kabul edilmedi 18 yasindan buyuk olmanız gerekiyor"."<br>";
        }
        if(@isset($_GET["password"]) && strlen(@$_GET["password"]) >=8){
            echo "sifre girildi"."<br>";
            if(@($_GET["password"]==$_GET["passwordTekrar"])){
                echo "sifre uyusuyor"."<br>";
            }else{
                echo "sifreler uyusmuyor"."<br>";
            }
        }else{
            echo "sifre girilmesi zorunlu ve 8 karakter den esit yada buyuk"."<br>";
        }
        
    }
    
    
    
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php //echo $pageTitle; 
    ?></p>
    <form action="" method="get">
        <div class="form-group">
            <label for="">Ad Soyad:</label>
            <input type="text" value="<?php if(isset($_GET["name"])){echo $_GET["name"];} ?>" name="name">
        </div>
        <div class="form-group">
            <label for="">Yaş :</label>
            <input type="number" value="<?php if(isset($_GET["age"])){echo $_GET["age"];} ?>" name="age">
        </div>
        <div class="form-group">
            <label for="">Şifre :</label>
            <input type="password"  name="password">
        </div>
        <div class="form-group">
            <label for="">Şifre tekrar :</label>
            <input type="password"  name="passwordTekrar">
        </div>
        
        <div class="form-group">
            <label for="">Cinsiyet :</label>
            <br>
            <label for="">Erkek</label>
            <input type="checkbox" name="gender"  value="male" <?php if(isset($_GET["gender"]) && $_GET["gender"]=="male"){echo "checked"; } ?>>
            <br>
            <label for="">Kadın</label>
            <input type="checkbox" name="gender" value="female" <?php if(isset($_GET["gender"]) && $_GET["gender"]=="female"){echo "checked"; } ?> >
        </div>
        <div class="form-group">
            <input type="submit" value="Gönder">
        </div>

    </form>

</body>
</html>
