<div class="container mt-5">
<h2 class='pt-3 text-center'><?php echo $mode ?> un livre</h2>
    <form action="index.php?uc=livres&action=valideForm" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
            <div class="form-group">
                <label for='isbn' > ISBN </label>
                <input type="text" class='form-control' id='isbn' placehoder='Saisir ISBN' name='isbn' 
                value="<?php if($mode == "Modifier") {echo $livre->getIsbn() ;} ?>">
                
                <label for='titre' > Titre </label>
                <input type="text" class='form-control ' id='titre' placehoder='Saisir le titre' name='titre' 
                value="<?php if($mode == "Modifier") {echo $livre->getTitre() ;} ?>">
                
                <label for='Prix' > Prix </label>
                <input type="text" class='form-control ' id='prix' placehoder='Saisir le prix' name='prix' 
                value="<?php if($mode == "Modifier") {echo $livre->getPrix() ;} ?>">
                
                <label for='Editeur' > Editeur </label>
                <input type="text" class='form-control ' id='editeur' placehoder="'Saisir l'editeur'" name='editeur' 
                value="<?php if($mode == "Modifier") {echo $livre->getEditeur() ;} ?>">
                
                <label for='Annee' > Année </label>
                <input type="text" class='form-control ' id='annee' placehoder="'Saisir l'annee'" name='annee' 
                value="<?php if($mode == "Modifier") {echo $livre->getAnnee() ;} ?>">

                <label for='Langue' > Langue</label>
                <input type="text" class='form-control ' id='langue' placehoder="Saisir la langue" name='langue' 
                value="<?php if($mode == "Modifier") {echo $livre->getLangue() ;} ?>">

                <label for='Auteur' > Auteur</label>
                <input type="text" class='form-control ' id='auteur' placehoder="Saisir l'auteur" name='auteur' 
                value="<?php if($mode == "Modifier") {echo $livre->getAuteur() ;} ?>">

                <label for='Genre' > Genre</label>
                <input type="text" class='form-control ' id='genre' placehoder="Saisir le genre" name='genre' 
                value="<?php if($mode == "Modifier") {echo $livre->getGenre() ;} ?>">


                

            </div>
            <input type="hidden" id="num" name="num" value="<?php if($mode == "Modifier") {echo $livre->getNum();} ?>">
            <div class="row">
                <div class="col"> <a href="index.php?uc=livres&action=list" class='btn btn-warning btn-block'>Revenir à la liste</a> </div>
                <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $mode ?> </button> </div>
            </div>
    </form>
</div>
