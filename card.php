<?php

function createCard($title, $img, $href){
    ?>
        <div class="card">

            <img src="img/<?php echo $img ?>" class="card-img-top" alt="...">

            <div class="card-body">
                <div>
                    <h5 class="card-title"><?php echo $title ?></h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consecteturm dolor sit amet consecteturm</p>
                </div>
                <div>
                    <a href="<?php echo $href ?>" class="btn btn-outline-primary">Ver</a>
                </div>
            </div>

        </div>
<?php
}
?>