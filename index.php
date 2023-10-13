<?php
include "conexao.php";


    $sql="SELECT * FROM tb_enquete";
    $result = mysqli_query($conexao,$sql);
    while($dados = mysqli_fetch_assoc($result)){
        $menino = $dados['menino'];
        $menina = $dados['menina'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Chá revelação</title>
</head>
<body>

    
    <div class="section top">
        <div class="icone-top">
            <img class="foto_some" src="./img/ursa_menina.png" alt="">
            <img class="foto_principal" src="./img/foto2.jpeg" alt="">
            <img class="foto_some" src="./img/urso_menino.png" alt="">
        </div>
        <div class="titulo">
            <a href="index.php#meio">
                <h1><span class="texto_azul">Play no Ch</span><span class="texto_rosa">á Revelação</span></h1>
            </a>
        </div>
    </div>
    <div class="section meio" id="meio">
        <div class="container-meio">
            <div class="titulo">
                <h1>
                    De qual lado você está ?
                </h1>
                <h4>
                    Clique em cima do nome para opinar...
                </h4>
            </div>
            <div class="icone">
                <div>
                    <img src="./img/urso_menino2.png" alt="">
                    <form action="processa.php" method="post">
                        <button type="submit" value="menino" name="button-processa" class="btn btn-primary menino">Arthur</button>
                    </form>
                </div>
                <div>
                    <img src="./img/ursa_menina2.png" alt="">
                    <form action="processa.php" method="post">
                        <button type="submit" value="menina"  name="button-processa"class="btn btn-primary menina">Beatriz</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="section bottom" id="bottom">
        <div class="container-bottom">
            <div class="titulo">
                <h1>
                    Vamos descobrir juntos quem vem por ai ?
                </h1>
            </div>
            <div class="icone">
                <h2><span class="texto_azul">Domingo </span><span class="texto_rosa">12 </span>de <span class="texto_azul">Novembro</span> às  <span class="texto_rosa"> 12:00</span></h2>
                <h2>Local: Rua Lino Angi 172, Jd.Floresta - Jaguariúna - SP</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.077434907834!2d-46.95658322386378!3d-22.688161130095818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8e79126aa5fc9%3A0xad220e09b97e8dcd!2sR.%20Lino%20Angi%2C%20172%2C%20Jaguari%C3%BAna%20-%20SP%2C%2013820-000!5e0!3m2!1spt-BR!2sbr!4v1697075478563!5m2!1spt-BR!2sbr" width="80%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <div>
                    <p>Venha com a roupa na cor do seu palpite !</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section mimo">
        <div class="container-mimo">
            <div class="titulo">
                <h1>Dica de Presente</h1>
            </div>
            <div class="icone">
                <h2>Uma fralda P, M ou G e um mimo</h2>
                <img src="./img/crianca.png" alt="">
            </div>
        </div>
    </div>


    <?php
        if(isset($_GET['voto'])){
    ?>
        <script>    
            $(document).ready(function(){
            $('#exampleModal').modal('show');
            });
        </script>
    <?php
        }
    ?>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Obrigado por opinar !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="progress">
                        <label for="">Arthur </label>
                        <div class="progress-bar progress-bar-striped progress-bar-animate" role="progressbar" style="width: <?php echo $menino;?>%;" aria-valuenow="<?php echo $menino;?>" aria-valuemin="0" aria-valuemax="100"> <?php echo $menino;?></div>
                    </div>
                    <br>
                    <div class="progress">
                        <label for="">Beatriz </label>
                    <div class="progress-bar progress-bar-striped progress-bar-animate bg-danger" role="progressbar" style="width: <?php echo $menina;?>%;" aria-valuenow="<?php echo $menino;?>" aria-valuemin="0" aria-valuemax="100"> <?php echo $menina;?></div>
                    </div>
                </div>
                </div>
            </div>
            </div>

    <footer>
        <p>Quer criar um sistema personlizado <a href="https://wa.me/5511957069657?text=Gostaria+de+criar+um+sistema+personalizado">Clique Aqui</a></p>
    </footer>
</body>
</html>