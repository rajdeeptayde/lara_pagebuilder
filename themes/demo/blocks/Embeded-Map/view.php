<section>
        <div>
            <h1 style="
            margin-top:<?= e($block->setting('top')) ?>;
            margin-right:<?= e($block->setting('right')) ?>;
            margin-bottom:<?= e($block->setting('bottom')) ?>;
            margin-left:<?= e($block->setting('left')) ?>;
            color:<?= e($block->setting('text_color')) ?>;
            text-align:<?= e($block->setting('text_align')) ?>;

            "><?= e($block->setting('map_title')) ?></h1>
            <div>
            <iframe 
            src="<?= e($block->setting('map_src')) ?>"
                    width="100%"
                    height="400"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                
                    tabindex="0"
                    >
            </iframe>
            </div>
        </div>
</section>