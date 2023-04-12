<img
src="<?= e($block->setting('background-image')) ?>"
width="<?= e($block->setting('width')) ?>"

style="
border:<?= e($block->setting('border')) ?>px <?= e($block->setting('border_type')) ?> <?= e($block->setting('border_color')) ?>;

border-radius:<?= e($block->setting('top')) ?>px <?= e($block->setting('right')) ?>px <?= e($block->setting('bottom')) ?>px <?= e($block->setting('left')) ?>px ;

margin-top:<?= e($block->setting('margin_top')) ?>px;
margin-right: <?= e($block->setting('margin_right')) ?>px; 
margin-bottom: <?= e($block->setting('margin_bottom')) ?>px; 
margin-left: <?= e($block->setting('margin_left')) ?>px;">