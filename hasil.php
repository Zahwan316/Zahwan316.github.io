

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <main>
        <div class="box boxhasil">
            <!--  -->
            <div class="title-box">
                <h2>Hasilnya</h2>
            </div>
            <!--  -->

            <!--Pengecekan -->
            
            
            <?php
                $weight = htmlspecialchars($_POST["weight"]);
                $height = htmlspecialchars($_POST["height"]);

                if(!empty($weight) && !empty($height)){
                    $heightmeter = $height / 100;
                    $eval = round($weight / ($heightmeter * $heightmeter),2) ;
                    if($eval < 18){
                        echo "<div class='hasil-box' style='background-color:orange'>
                                <h2> Bmi : $eval </h2>
                                <h2> Badan Anda Kurus Kek Tengkorak </h2>
                            </div>
                            <div class='img-meme'>
                                <img src='img/mem1.jpg'>
                            </div>";
                    }
                    else if($eval > 18 && $eval < 25){
                        echo "<div class='hasil-box' style='background-color:green'>
                                <h2> Bmi : $eval </h2>
                                <h2> Badan Anda Normal Cuy </h2>
                    </div>
                    <div class='img-meme'>
                                <img src='img/mem5.jpg'>
                    </div>;
                    ";
                    }
                    else if($eval > 25 && $eval < 27){
                        echo "<div class='hasil-box' style='background-color:orange'>
                                <h2> Bmi : $eval </h2>
                                <h2> Agak Gemuk Cuy,Kurangin Dikit Lah</h2>
                            </div>
                            <div class='img-meme'>
                                <img src='img/mem12.jpg'>
                            </div>;
                            ";
                    }
                    else{
                        echo "<div class='hasil-box' style='background-color:red'>
                                    <h2> Bmi : $eval </h2>
                                    <h2> Gede Bat Ancrit Badan Anda</h2>
                             </div>
                             <div class='img-meme'>
                                <img src='img/mem13.jpg'>
                            </div>
                            <audio src='sound/Danger.mp3' id='danger'></audio>
                            <div class='meme-pack2'>
                                <img src='img/mem9.jpg' id='mem1' class='mem1'>
                                <img src='img/mem6.jpg' id='mem2' class='mem2'>
                                <img src='img/mem11.jpg' id='mem3' class='mem3'>
                            </div>
                            <script>
                                const danger = document.getElementById('danger');
                                const mem1 = document.getElementById('mem1');
                                const mem2 = document.getElementById('mem2');
                                const mem3 = document.getElementById('mem3');

                                setTimeout(
                                    ()=>{
                                        mem1.style.visibility = 'visible'
                                    },1000
                                );

                                setTimeout(
                                    ()=>{
                                        mem2.style.visibility = 'visible'
                                    },1100
                                );

                                setTimeout(
                                    ()=>{
                                        mem3.style.visibility = 'visible'
                                    },1200
                                );

                                danger.play();
                            </script
                             ";
                    }
                }
                else{
                    echo "<div class='hasil-box' style='background-color:blue'>
                                    <h2> Isi Dulu Inputnya Ya Ngab </h2>
                                   
                             </div>
                             <div class='img-meme'>
                                <img src='img/mem14.jpg'>
                            </div>";
                }

?>    
          
            <!--  End  -->

            <!--  -->
            <div class="btn-back">
                <a href="index.php">
                    <button id='btn-back'>Kembali </button>
                </a>
            </div>
            <!--  -->
        </div>
    </main>
    <audio src="sound/Vineboom.mp3" id='sfx'></audio>
    <script>
        const sfx = document.getElementById('sfx');
        window.onload = () => {
            sfx.play()
        }
    </script>
   
</body>
</html>