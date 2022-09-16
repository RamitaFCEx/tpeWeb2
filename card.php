<?php

function createCard($title, $img, $href){
    ?>
        <div class="card">
            <img src="img/<?php echo $img ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $title ?></h5>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi quaerat laboriosam eum exercitationem, veniam fugit vero, architecto amet totam beatae obcaecati dolorum, sed eligendi numquam? Laudantium ducimus eius tempore vel!</p>
            <a href="<?php echo $href ?>" class="btn btn-outline-primary">Ver</a>
            </div>
        </div>
<?php
}
?>