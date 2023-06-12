<div class="container">
    <table class="table table-striped">
        <thead>
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
            <tbody class="table-group-divider">
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
                        <td><i class="fa-solid fa-trash" style="color: #ff0a0a;"></i></td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
</div>