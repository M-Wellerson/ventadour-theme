<?php echo '<?xml version="1.0" standalone="no"?>';
header('Content-type: image/svg+xml');
$texto = $_GET['texto'] ?? 'I love SVG!';
$total_caracter = strlen($texto);
$font_size = $_REQUEST['size'] ?? 50;
$top = $_REQUEST['top'] ?? 0;
$gap_top = $top;
$largura = $total_caracter * ($font_size - 15 ) + 2;
?>
<svg xmlns='http://www.w3.org/2000/svg' viewBox="0 0 <?= $largura ?> 100" version='1.1'>
    <style>


        @font-face {
            font-family: 'FuturaT';
            src: url("../../../FuturaStd-CondensedBold.otf");
        }
        svg{
            font-family: 'FuturaStd CondensedBold', serif;
            font-weight: 900;
        }
    </style>
    <text
        font-size="<?= $font_size ?>" 
        stroke="#ccc" 
        stroke-width=".3"
        x="0" 
        y="<?= $gap_top ?>"
        class="style-text"
        fill="none"
        letter-spacing="0" 
        word-spacing="0"
        style="font-family: 'FuturaT';"
        font-family="FuturaT"
        
    >
        <?= $texto ?>
    </text>
</svg>


 
