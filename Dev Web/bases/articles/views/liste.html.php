<div>
    <form action="http://localhost:8000/" method="post"
        style="margin-bottom:10px ;height:25px; width:100px;display: flex; width:20%">
        <select name="etat" id="" style="height:25px; width:100px; margin-right:10px">
            <option value="all">All</option>
            <option value="0">Rupture</option>
            <option value="1">Disponible</option>
        </select>
        <button type="submit">Ok</button>
    </form>

</div>
<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Libelle</td>
            <td>Prix</td>
            <td>Qte Stock</td>
            <td>Rupture</td>
        </tr>
    </thead>
    <tbody>
        <h3>Liste des Articles</h3>
        <?php 
           $articleShow=$articles;
                if(isset($_POST['etat'])){
                    if($_POST['etat']!='all'){
                    $articleShow=[];
                    foreach ($articles as $key=> $article) {
                        if($article['rupture']==$_POST['etat']){
                            $articleShow[]=$article;
                        }
                    }
                } 
                }  
         
            foreach ($articleShow as $key=> $article) {
               
                ?>
        <tr>
            <td><?php echo $article["id"]; ?></td>
            <td><?php echo $article["libelle"]; ?></td>
            <td><?php echo $article["prix"]; ?></td>
            <td><?php echo $article["qte_stock"]; ?></td>
            <td><?=$article["rupture"]==1?'Disponible':'Rupture'; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>