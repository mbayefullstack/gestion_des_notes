
    <!-- Button trigger modal -->
    

    <div class="container">
        <!-- Button trigger modal -->
        <div class="row">
            <button type="button" class="btn btn-primary col-2 pl-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Ajouter un élève
            </button>
        </div>
        </div>

        <!-- table -->
        <table class="table table-striped tex-center table-bordered">
            <thead class="bg-dark text-light ">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date de Naissance</th>
                <th scope="col">Lieu de Naissance</th>
                <th scope="col">Sexe</th>
                <th scope="col">numero</th>
                <th scope="col">Type d 'élève</th>
                <th scope="col" >Modifier</th>
                <th scope="col" >Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr class="text-center" >
                        <td><?php $row['id_eleve']; echo $row['id_eleve']; ?></td>
                        <td><?php $row['nom']; echo $row['nom']; ?></td>
                        <td><?php $row['prenom']; echo $row['prenom']; ?></td>
                        <td><?php $row['date_de_naisssance']; echo $row['date_de_naisssance']; ?></td>
                        <td><?php $row['lieu_de_naisssance']; echo $row['lieu_de_naisssance']; ?></td>
                        <td><?php $row['sexe']; echo $row['sexe']; ?></td>
                        <td><?php $row['numero']; echo $row['numero']; ?></td>
                        <td><?php $row['type_eleve']; echo $row['type_eleve']; ?></td>
                        
                        <td>      <td><i class="fa-solid fa-trash" style="color: #ff0a0a;"></i></td>
                            
                       
                        
                    </tr>
            
                 <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>


    

<!-- Modal Ajout -->
<div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-center fs-5" id="staticBackdropLabel">Ajouter un élève.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="http://localhost:3011/eleve/insertData" method="POST">
                <div class="form-row row">
                    <div class="form-group col-5">
                        <label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="input-prenom">
                    </div>
                    <div class="form-group col-5">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" id="input-nom">
                    </div>
                    <div class="form-row row">
                    <div class="form-group col-5">
                        <label>Date de Naissance</label>
                        <input type="text" name="datedenaissance" class="form-control"id="inputdatedenaissance" >
                    </div>
                    <div class="form-group col-5">
                        <label>Lieu de Naissance</label>
                        <input type="text" name="lieudenaissance" class="form-control" id="inputlieudenaissance">
                    </div>
                    <div class="form-group col-5">
                        <label>Numéro</label>
                        <input type="number" name="numero" class="form-control" id="inputnumero">
                    </div>
                    <div class="form-group col-5">
                        <label>Sexe</label>
                        <input type="text" name="sexe" class="form-control" id="inputsexe">
                    </div>
                    <div class="form-group col-5">
                        <label>Type d 'élève</label>
                        <input type="text" name="typeeleve" class="form-control" id="inputtypeeleve">
                    </div>
                </div>
                <div class="modal-footer text-center">
                <button type="submit" class="btn btn-primary" id="button-enregistrer"
                data-id="<?= $row['id_eleve']; ?>">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>





   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>