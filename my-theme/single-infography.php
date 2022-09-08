<?php get_header()?>
<div>
    <img src = "<?php the_field('infographie')?>">
</div>
<p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
        traduction textuelle
    </a>

</p>

    <div class="collapse" id="collapse">
        <div class="card card-body"> <?php the_field('descriptif_infographie'); ?></div>
        </div>
    </div>



<?php

get_footer() ?>