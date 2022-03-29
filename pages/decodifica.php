<!doctype html>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="paginaDoppia">
<?php 
//include_once '../phpOggetti/alfabeto.php';
$alfabeto=array(' ', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A',
                'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N',
                'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a',
                'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
                'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$chiavi=array();
$nomeChiavi=array();
for($i=0;$i<$_POST["nChiavi"];$i+=1){
    $nomeChiavi[]=$_POST["nomeChiave$i"];
    $chiavi[''.$_POST["nomeChiave$i"].'']=$_POST["ChiaveCod$i"];
}

/*$alf=new Alfabeto();               prova di utilizzo di un oggetto per gestire l'alfabeto fallita
$alfabeto=$alf->getAlfabeto();*/
$stringaModificata="";
$charParola=str_split($_POST["fraseDaModificare"]);
$k=0;
$tmp;
for($i=0;$i<sizeof($charParola);$i+=1){
    for($t=0;$t<sizeof($alfabeto);$t+=1){
        if($alfabeto[$t]==$charParola[$i]){
            $tmp=$nomeChiavi[$k];
            $chiavetmp=$chiavi["$tmp"];
            $stringaModificata.=$alfabeto[(sizeof($alfabeto)+($t-$chiavetmp)) % sizeof($alfabeto)];
            $k+=1;
            if($k==sizeof($nomeChiavi)){
                $k=0;
            }
        }
    }
}
echo '<b>'.$stringaModificata . '</b><br>';
?>
<div class="row g-3">
    <div class="col">
        <div class="formSetting">
            <button type="button" class="btn btn-secondary" onclick="location.href='../index.php'">HOME</button>
        </div>
    </div>
    <div class="col">
    <form action="./pag2.php" method="post" class="formSetting">
        <?php 
            for($i=0;$i<$_POST["nChiavi"];$i+=1){
                echo '<input type="hidden" id="nomeChiave'.$i.'" name="nomeChiave'.$i.'" value="'.$_POST["nomeChiave$i"].'">';
                echo '<input type="hidden" id="ChiaveCod'.$i.'" name="ChiaveCod'.$i.'" value="'.$_POST["ChiaveCod$i"].'">';
                echo '<input type="hidden" id="nChiavi" name="nChiavi" value="'.$_POST["nChiavi"].'">';
            }
        ?>
        <input type="submit" value="torna alla codifica e decodifica" class="btn btn-success">
        </form>
    </div>
</div>

</body>
</html>