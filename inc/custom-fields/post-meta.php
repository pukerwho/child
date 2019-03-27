<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'members' )
    ->add_fields( array(
      Field::make( 'text', 'crb_members_position', 'Посада' ),
      Field::make( 'checkbox', 'crb_members_rada', 'Опікунська рада?' )->set_option_value('no'),
  	));
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'news' )
    ->add_fields( array(
      Field::make( 'checkbox', 'crb_news_newsroom', 'У Newsroom?' )->set_option_value('no'),
      Field::make( 'checkbox', 'crb_news_podii', 'Подія?' )->set_option_value('no'),
      Field::make( 'media_gallery', 'crb_news_photos', 'Галерея' )->set_type( array( 'image' ) )
  	));
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'blogs' )
    ->add_fields( array(
      Field::make( 'media_gallery', 'crb_blogs_photos', 'Галерея' )->set_type( array( 'image' ) )
    ));
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'reports' )
    ->add_fields( array(
      Field::make( 'checkbox', 'crb_reports_finreport', 'Фінансові звіти' )->set_option_value('no'),
      Field::make( 'checkbox', 'crb_reports_finstructura', 'Структура фінансування' )->set_option_value('no'),
      Field::make( 'file', 'crb_reports_file', 'Завантажити файл (xls)' )->set_value_type( 'url' )
    ));
}

?>