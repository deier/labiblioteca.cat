<h2>Crear llibre a la biblioteca</h2>
<div class="clear" style="margin-top:20px;"></div>
<form action="<?=base_url();?>library/create-book">
    <div class="form-group col-lg-6">
        <input class="form-control" type="text" placeholder="Nom llibre" name="name">
    </div>
    <div class="form-group col-lg-6">
        <input class="form-control" type="text" placeholder="Autor" name="author">
    </div>
    <div class="form-group col-lg-6">
        <select class="form-control" name="gender_id">
            <option value="">Tots els gèneres</option>
            <?php foreach ($genders as $gender){
                echo '<option value="'.$gender->gender_id.'">'.$gender->name.'</option>';
            } ?>
        </select>
    </div>
    <div class="form-group col-lg-6">
        <input class="form-control" type="text" placeholder="Vegades llegit" name="times_read">
    </div>
    <div class="form-group col-lg-6">
        <div id="review-form">
        <input type="hidden" name="review">
    </div>
    <div class="form-group col-lg-12">
        <textarea class="form-control" placeholder="Comentaris" name="comments"></textarea>
    </div>
    <div class="col-lg-12">
        <input type="button" class="btn" value="Tornar" onclick="location.href='<?=base_url()?>library'">
        <input type="button" class="btn btn-success" value="Crear llibre">
    </div>
</form>