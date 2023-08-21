<table style="margin-top:20px;">
    <thead>
        <tr>
            <td>ID</td>
            <td>Libelle</td>
            <td>Prix</td>
            <td>Qte Stock</td>
        </tr>
    </thead>
    <tbody>
        <h3>Affichage les articles dont la qte seuil > qteStock</h3>

        <?php foreach ($articles as $key => $article):?>
        <?php if($article["qte_seuil"]>$article["qte_stock"]):?>
        <tr>
            <td><?=$article["id"]; ?></td>
            <td><?=$article["libelle"]; ?></td>
            <td><?=$article["prix"]; ?></td>
            <td><?=$article["qte_stock"]; ?></td>
        </tr>
        <?php endif?>
        <?php endforeach?>