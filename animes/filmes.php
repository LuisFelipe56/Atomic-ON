<?php
include_once "./includes/header.php";
?>


<?php
include_once "./includes/header.php";
?>
<style>
    body {
  background-image: url("./imagens/teste2.jpg");
   background-color: black; 
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
}
</style>

<table>
    <th>
        <h1 style="color: white;">Filmes</h1>
    </th>
    <tr>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/harry1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Harry Potter</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/assistir-harry-potter-e-a-pedra-filosofal-online-gratis-em-hd/" class="btn btn-outline-primary">Assistir</a>
                    <a href="./filmes/harry.php"><button type="button" class="btn btn-outline-secondary">Relacionados</button></a>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/deadpool.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Deadpool</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/deadpool/" class="btn btn-outline-primary">Assistir</a>
                    <a href="./filmes/deadpool.php"><button type="button" class="btn btn-outline-secondary">Relacionados</button></a>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/homem1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Homem de ferro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/homem-de-ferro/" class="btn btn-outline-primary">Assistir</a>
                    <a href="./filmes/iron.php"><button type="button" class="btn btn-outline-secondary">Relacionados</button></a>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/spider1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Homem Aranha</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/assistir-homem-aranha-sem-volta-para-casa/" class="btn btn-outline-primary">Assistir</a>
                    <a href="./filmes/spider.php"><button type="button" class="btn btn-outline-secondary">Relacionados</button></a>
                </div>
            </div>
        </td>
    </tr>
   
    <tr>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/hobbit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Hobbit</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/o-hobbit-uma-jornada-inesperada/" class="btn btn-outline-primary">Assistir</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/aquaman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Aquaman</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/assistir-aquaman-2-o-reino-perdido-hd-2023/" class="btn btn-outline-primary">Assistir</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/dupla.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Dupla Explosiva</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/dupla-explosiva/" class="btn btn-outline-primary">Assistir</a>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 22rem;">
                <img src="./imagens/Transporter_3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Carga Explosiva</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="https://superflix.mov/filme/carga-explosiva-3/" class="btn btn-outline-primary">Assistir</a>
                </div>
            </div>
        </td>
    </tr>
</table>
<a href="https://superflix.mov/"><button type="button" class="btn btn-outline-secondary">Ver mais Filmes</button></a>
<p></p>
<p></p>
<?php
// footer
include_once "./includes/footer.php";
?>