<iframe 
src="<?= e($block->setting('video_src')) ?>?autoplay=<?= e($block->setting('autoplay')) ?>&mute=<?= e($block->setting('mute')) ?>&controls=<?= e($block->setting('controls')) ?>&loop=<?= e($block->setting('loop')) ?>"
width="<?= e($block->setting('width')) ?>"
height="<?= e($block->setting('height')) ?>"
style="border:<?= e($block->setting('border')) ?>px <?= e($block->setting('border_type')) ?> <?= e($block->setting('border_color')) ?>;

border-radius:<?= e($block->setting('top')) ?> <?= e($block->setting('right')) ?> <?= e($block->setting('bottom')) ?> <?= e($block->setting('left')) ?> ;"
></iframe>
