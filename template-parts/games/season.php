<?php
$terms = get_terms(array(
    'taxonomy' => 'season', // set your taxonomy here
));
?>
<div class="tool">
    <div class="row align-items-center">
        <div class="col-12 filter-wrap">
            <div class="link-version">
                <p class="filter-title float-start">Tìm kiếm Mu theo phiên bản:</p>
                <div class="float-start">
                    <?php foreach ($terms as $term) {?>
                        <a class="filter-btn filter-btn-season" href="<?= get_term_link($term->term_id) ?>">
                            <?= $term->name ?>
                        </a>
                    <?php } ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>