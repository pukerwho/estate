<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Common'), array(
        
    ) )
    ->add_tab( __('Шапка'), array(
        Field::make( 'text', 'crb_header_top_text', 'Текст перед номером телефона' ),
        Field::make( 'text', 'crb_header_top_phone', 'Номер телефона' ),
        Field::make( 'image', 'crb_header_logo', 'Логотип' )->set_value_type( 'url'),
    ) )
    ->add_tab( __('Блок О НАС'), array(
        Field::make( 'rich_text', 'crb_aboutus_text', 'Текст О НАС' ),
    ) );
}

?>