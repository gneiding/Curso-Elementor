<?php
function listar_categorias_posts() {
    // Obter todas as categorias
    $categories = get_categories();
    $output = '';

    // Loop através de cada categoria e cria um parágrafo com o link para a categoria
    foreach ($categories as $category) {
        $output .= '<p><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></p>';
    }

    return $output;
}
add_shortcode('listar_categorias', 'listar_categorias_posts');
?>
