<?php if(empty($errors)):?>
   <h4 class="text-success text-center" >Enregistrement reussi avec success</h4>
<?php else:?>
   <?php foreach($errors as $e):?>
    <h4 class="text-danger text-center" ><?= $e?></h4>
    <?php endforeach?>
<?php endif?>



      <div class="container">
   <div class="row justify-content-between align-items-center">
      <div class="col-auto">
         <form class="input-group">
            <input type="text" class="form-control" placeholder="Recherche">
            <button type="submit" class="btn btn-primary">Rechercher</button>
         </form>
      </div>
      <div class="col-auto mr-3">
         <form class="row g-3" method="POST" action="http://localhost:3011/annee/insertData">
            <div class="col-auto">
               <input type="text" class="form-control" name="libelle" id="inputPassword2"
               placeholder="Ajouter une Année Scolaire">
            </div>
            <div class="col-auto">
               <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
         </form>
      </div>
   </div>
</div>



      <h2 class="text-center text-uppercase">Liste des Années</h2>
      <table class="table table-striped table-bordered">
         <tr>
            <td class="text-center text-uppercase">id</td>
            <td class="text-center text-uppercase">Année Scolaire</td>
            <td class="text-center text-uppercase">Modifier une année</td>
            <td class="text-center text-uppercase">suppimer une année</td>
         </tr>
         <?php foreach ($data as $row): ?>
         <tr>
            <td class="text-center">
               <?php $row['id_annee_scolaire']; echo $row['id_annee_scolaire'] ?>
            </td>
            <td class="text-center">
               <?php if(isset($row['libelle'])) echo $row['libelle']; ?>
            </td>
            <td class="text-center">
               <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
               class="btn btn-info btn-sm text-light font-weight-bold"  id="button-modifier" data-id="<?= $row['id_annee_scolaire']?>">Modifier</a>
            </td>
            <td class="text-center">
               <a data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
               class="btn btn-danger btn-sm text-light font-weight-bold"  id="button-supprimer" data-id="<?= $row['id_annee_scolaire']?>" data-libelle="<?= $row['libelle']?>">Supprimer</a>
            </td>
         </tr>
         

   
         <?php endforeach; ?>
      </table>




<!-- Modal -->




      <!-- modal modifier -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
         <h1 class="modal-title fs-5" id="staticBackdropLabel">Conf Modification</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
         Etes vous sure de vouloir modifier

         <form action="http://localhost:3011/annee/updateData" method="post">
            <input type="hidden" name="id"  value="" class="id-value">
            <input type="text" name="libelle">
         </div>
         <div class="modal-footer">

         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary" id="validate-modal">Valider</button>
         </form>
         </div>
      </div>
   </div>
   </div>


            <!-- modal supprimer -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression de l'année</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <h6 id="msg-sup">

                           Êtes vous de vouloir supprimer l'année ?
                        </h6>
                     <form action="http://localhost:3011/annee/deleteData" method="POST">
                        <input type="hidden" name="id"  value="" class="id-valueM">
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                           <button type="submit" class="btn btn-primary" id="validate-supprimer">Valider</button>
                        </form>
                     </div>
                    </div>
                     </div>
                  </div>
               </div>
            </div>

 

