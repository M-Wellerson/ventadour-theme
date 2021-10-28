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
            src: url("./FuturaLT-Bold.ttf") format("opentype");
            font-weight: normal;
            font-style: normal;
        }
        .style-text {
            font-family: 'FuturaT', sans-serif;
            text-transform: uppercase;
            font-weight: bolder;
            -webkit-text-stroke: 2px #645c5b;
            -webkit-text-fill-color: transparent;
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
    >
        <?= $texto ?>
    </text>
</svg>


 
