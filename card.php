<?php

function createCard($title, $img, $href, $details){
    ?>
        <div class="card">

            <img src="img/<?php echo $img ?>" class="card-img-top" alt="...">

            <div class="card-body">
                <div>
                    <h5 class="card-title"><?php echo $title ?></h5>
                    <p class="card-text"><?php echo $details ?></p>
                </div>
                <div>
                    <a href="<?php echo $href ?>" class="btn btn-outline-primary">Ver</a>
                </div>
            </div>
 
        </div>
<?php
}
?>