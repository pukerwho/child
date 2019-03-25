<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Common'), array(
        
    ) )
    ->add_tab( __('Загальні налаштування'), array(
        Field::make( 'image', 'crb_common_img', 'Велике горизонтальне фото на головній сторінці' )->set_value_type( 'url'),
    ) )
    ->add_tab( __('Про нас'), array(
        Field::make( 'rich_text', 'crb_aboutus_p_text', 'Короткий текст на сторінці ПРО НАС' ),
        Field::make( 'image', 'crb_aboutus_p_thumb', 'Зображення в шапці на сторінці ПРО НАС' )->set_value_type( 'url'),
        Field::make( 'rich_text', 'crb_aboutus_b_text', 'Короткий текст на головній сторінці МИ ДОПОМАГАЄМО ДІТЯМ' ),
        Field::make( 'image', 'crb_aboutus_b_thumb', 'Зображення на головній сторінці МИ ДОПОМАГАЄМО ДІТЯМ' )->set_value_type( 'url'),
    ) )
    ->add_tab( __('Партнери'), array(
        Field::make( 'complex', 'crb_partners', 'Партнери' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'image', 'crb_partners_img', 'Логотип партнера' )->set_value_type( 'url'),
        ) ),
    ) )
    ->add_tab( __('Новини'), array(
        Field::make( 'image', 'crb_news_p_thumb', 'Зображення в шапці на сторінці НОВИНИ' )->set_value_type( 'url'),
    ) )
    ->add_tab( __('Блог'), array(
        Field::make( 'image', 'crb_blogs_p_thumb', 'Зображення в шапці на сторінці БЛОГ' )->set_value_type( 'url'),
    ) )
    ->add_tab( __('Контакти'), array(
        Field::make( 'text', 'crb_contact_email', 'Email' ),
        Field::make( 'complex', 'crb_contact_phones', 'Телефони' )
            ->set_layout( 'tabbed-horizontal')
            ->add_fields( array(
                Field::make( 'text', 'crb_contact_phone', 'Номер телефона' ),
        ) ),
        Field::make( 'text', 'crb_contact_facebook', 'Посилання на Facebook' ),
        Field::make( 'text', 'crb_contact_instagram', 'Посилання на Instagram' ),
        Field::make( 'text', 'crb_contact_youtube', 'Посилання на Youtube' ),
    ) )
    ->add_tab( __('Копірайт'), array(
        Field::make( 'text', 'crb_copyright', 'Текст у подвалі' ),
    ) );
}

?>