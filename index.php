<?php 
get_header();
if(is_home()){
  echo '<mark>Estoy en el home</mark>';
} elseif (is_category()) {
  echo '<mark>Estoy mostrando resultados de categorías</mark>';
} elseif (is_tag()) {
  echo '<mark>Estoy mostrando resultados de etiquetas</mark>';
}
get_template_part('content');
get_sidebar();
get_footer();
