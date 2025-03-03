
<div class="container mt-5">
    
    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des livres</h2>
        </div>
        <div class="col-3"><a href="index.php?uc=livres&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un livre</a> </div>
        
    </div>

    <table class="table table-hover table-striped">
        <thead>
            <tr class="d-flex">
            <th scope="col" class="col-md-1">Numéro</th>
            <th scope="col" class="col-md-2">ISBN</th>
            <th scope="col" class="col-md-3">Titre</th>
            <th scope="col" class="col-md-1">Prix</th>
            <th scope="col" class="col-md-1">Editeur</th>
            <th scope="col" class="col-md-1">Année</th>
            <th scope="col" class="col-md-1">Langue</th>
            <th scope="col" class="col-md-2">Auteur</th>
            <th scope="col" class="col-md-1">Genre</th>
        </tr>
        </thead>
    <tbody>
        <?php
        foreach($lesLivres as $livre){
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-1'>".$livre->getNum()."</td>";
            echo "<td class='col-md-2'>".$livre->getIsbn()."</td>";
            echo "<td class='col-md-3'>".$livre->getTitre()."</td>";
            echo "<td class='col-md-1'>".$livre->getPrix()."</td>";
            echo "<td class='col-md-1'>".$livre->getEditeur()."</td>";
            echo "<td class='col-md-1'>".$livre->getAnnee()."</td>";
            echo "<td class='col-md-1'>".$livre->getLangue()."</td>";
            echo "<td class='col-md-2'>".$livre->getAuteur()."</td>";
            echo "<td class='col-md-1'>".$livre->getGenre()."</td>";

            echo "<td class='col-md-2'>
                <a href='index.php?uc=livres&action=update&num=".$livre->getNum()."' class='btn btn-primary'><i class='fas fa-pen'></i></a>
                <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer ce livre ?' data-suppression='index.php?uc=livres&action=delete&num=".$livre->getNum()."' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
            </td>";
            echo "</tr>";
        }

        ?>
            
    </tbody>
    </table>

</div>