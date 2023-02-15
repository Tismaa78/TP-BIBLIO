    <?php include "header.php";
    ?>
    <div class="container mt-5">
    <form action="valideAjoutNationalite.php">
        <div class="form-grp">
            <label for='libelle' > Libellé </label>
            <input type="text" class='form-control' id='libelle' placeholder='Saisir le libelle'name='libelle'>
        </div>
        <div class="row">
            <div class="col">   <a href="listeNationnalite.php" class='btn btn-warning' > Revenir à la liste </a>    </div>
            <div class="col"><button type='submit'  class='btn btn-success' >  Ajouter la nationalité   </button>   </div>
        </div>



    </form>
    </div>
    <?php include "footer.php";

    ?>

