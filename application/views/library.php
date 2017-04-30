<h2>La meva biblioteca / La biblioteca de Pepito de los Palotes</h2>
<p>Llistat de llibres ordenats per ordre alfabètic amb buscador i poder seleccionar l'ordre</p>

<!-- ADD ACTION -->
<div class="action-buttons">
    <i class="fa fa-plus-circle"></i>
    <i class="fa fa-sliders"></i>
</div>

<div class="col-lg-8 padding-none">
    <div class="input-group search">
        <input type="text" class="form-control" name="search" placeholder="Buscar llibre o autor...">
        <span class="input-group-addon">
            <button type="submit">
                <span class="glyphicon glyphicon-search"></span>
            </button>  
        </span>
    </div>
</div>
<div class="col-lg-4">
    <div class="form-group">
        <select class="form-control">
            <option value="">Tots els gèneres</option>
            <?php foreach ($genders as $gender){
                echo '<option>'.$gender->name.'</option>';
            } ?>
        </select>
    </div>
</div>
<div class="clear"></div>
<?php foreach ($books as $book){ ?>

    <div class="col-lg-3 book-column">
        <img src="<?=base_url();?>uploads/books/<?=$book->photo;?>">
        <h3><?=$book->name;?></h3>
        <h4><?=$book->author;?></h4>
    </div>
<?php } ?>