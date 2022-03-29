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
/*$chiavi=array();
$nomeChiavi=array();
for($i=0;$i<$_POST["num"];$i+=1){
    $nomeChiavi[]=$_POST["nomeChiave$i"];
    $chiavi[''.$_POST["nomeChiave$i"].'']=$_POST["ChiaveCod$i"];
}*/
?>
<br>
<b>codifica o decodifica la frase</b>
<div class="row g-3">
    <div class="col pagSinistra">
        <form action="./codifica.php" method="post" class="formSetting">
            <b>codifica</b>
            <input type="text" class="form-control" placeholder="numero chiavi che vuoi inserire" name="fraseDaModificare" required>
            <?php 
            $chiavi=array();
            $nomeChiavi=array();
            for($i=0;$i<$_POST["nChiavi"];$i+=1){
                $nomeChiavi[]=$_POST["nomeChiave$i"];
                echo '<input type="hidden" id="nomeChiave'.$i.'" name="nomeChiave'.$i.'" value="'.$_POST["nomeChiave$i"].'">';
                $chiavi[''.$_POST["nomeChiave$i"].'']=$_POST["ChiaveCod$i"];
                echo '<input type="hidden" id="ChiaveCod'.$i.'" name="ChiaveCod'.$i.'" value="'.$_POST["ChiaveCod$i"].'">';
                echo '<input type="hidden" id="nChiavi" name="nChiavi" value="'.$_POST["nChiavi"].'">';
            }
            ?>
            <br>
            <input type="submit" value="Codifica" class="btn btn-success">
        </form>
    </div>
    <div class="col pagDestra">
        <form action="./decodifica.php" method="post" class="formSetting">
            <b>decodifica</b>
            <input type="text" class="form-control" placeholder="numero chiavi che vuoi inserire" name="fraseDaModificare" required>
            <?php 
            for($i=0;$i<$_POST["nChiavi"];$i+=1){
                echo '<input type="hidden" id="nomeChiave'.$i.'" name="nomeChiave'.$i.'" value="'.$_POST["nomeChiave$i"].'">';
                echo '<input type="hidden" id="ChiaveCod'.$i.'" name="ChiaveCod'.$i.'" value="'.$_POST["ChiaveCod$i"].'">';
                echo '<input type="hidden" id="nChiavi" name="nChiavi" value="'.$_POST["nChiavi"].'">';
            }
            ?>
            <br>
            <input type="submit" value="Decodifica" class="btn btn-success">
        </form>
    </div>
</div>


</body>
</html>