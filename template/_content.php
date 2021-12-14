<section data-wow-delay="0.5s" class="content <?= $contentTheme ?> wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="row">
            <?php if ($contentTitle) : ?>
                <h2><?= $contentTitle ?></h2>
            <?php endif; ?>
            <div class="col-6">
                <?= $contentLeft ?>
            </div>
            <div class="col-6">
                <?= $contentRight ?>
            </div>
        </div>
    </div>
</section>
