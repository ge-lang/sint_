<?php
include("includes/header.php");
/*if (!$session->is_signed_in()){
    redirect('login.php');
}*/

$categorie = new Categorie();



if(isset($_POST['submit'])){
    if($categorie){
        $categorie->title= $_POST['title'];
        $categorie->categorie_id= $_POST['id'];
        $categorie->save();
        redirect("categories.php?id={$categorie->id}");
    }
}
?>

<?php include("includes/sidebar.php"); ?>
<?php include("includes/content-top.php"); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <td><a href="add_categorie.php" class="btn btn-danger rounded-0 mb-3"><i class="fas fa-fw fa-plus-square "></i><span>Categorie</span></a></td>
            <td><a href="categories.php" class="btn btn-outline-danger rounded-0 mb-3"><i class="fas fa-fw fa-palette"></i><span>All Categories</span></a></td>

            <form action="add_categorie.php" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="id">Categorie</label>
                        <input type="text" name="id" class="form-control" value="">
                    </div>


                    <input type="submit" name="submit" value="Add Categorie" class="btn btn-danger rounded-0">
                </div>

            </form>
        </div>
    </div>
</div>


<?php include ("includes/footer.php"); ?>





