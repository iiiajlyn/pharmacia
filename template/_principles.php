<section data-wow-delay="0.5s" class="principles base wow animate__animated animate__fadeInUp">
    <div class="container">
        <div>
            <h2><?= $principlesTitle ?></h2>
            <ol class="principles__box"><? foreach ($principlesArr as $item) : ?><li class="principles__box-item <?= $theme ?>"><?= $item ?></li><? endforeach;
                                                                                                                                                    ?></ol>
        </div>
    </div>
</section>
