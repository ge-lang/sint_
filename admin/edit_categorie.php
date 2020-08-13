<?php
include("includes/header.php");
if (!$session->is_signed_in()){
redirect('login.php');
}
if(empty($_GET['id'])){
    redirect('categories.php');
}
$categorie = Categorie::find_by_id($_GET['id']);

if (isset($_POST['update'])) {
    if ($categorie) {
        var_dump($categorie);

        $categorie->id = $_POST['id'];
        $categorie->title = $_POST['title'];

        $categorie->update();
        $categorie->save();

        redirect("edit_categorie.php?id={$categorie->id}");
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

            <form action="edit_categorie.php?id=<?php echo $categorie->id; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="id">Categorie_id</label>
                            <input type="text" name="id" class="form-control"
                                   value="<?php echo $categorie->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control"
                                   value="<?php echo $categorie->title; ?>" >
                        </div>
                        <div class="form-group">
                            <input class="btn btn-danger rounded-0" type="submit" value="Update categorie" name="update"
                                   class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include ("includes/footer.php"); ?>





