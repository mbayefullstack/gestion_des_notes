<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">libelle</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
            
            </tr>
        </thead>
            <tbody class="table-group-divider">
                <?php foreach ($data as $row): ?>
                    <tr class="text-center" >
                        <td><?php $row['id_classe']; echo $row['id_classe']; ?></td>
                        <td><?php $row['libelle']; echo $row['libelle']; ?></td>
                      
                        <td><i class="fa-solid fa-trash" style="color: #ff0a0a;"></i></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>