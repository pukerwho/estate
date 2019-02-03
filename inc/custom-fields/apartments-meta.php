<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', __( 'Дополнительная информация', 'crb' ) )
    ->where( 'post_type', '=', 'apartments' )
    ->add_fields( array(
      Field::make( 'text', 'crb_apartments_price', 'Цена: от ' ),
      Field::make( 'text', 'crb_apartments_square_price', 'Цена за метр квадратный ' ),
      Field::make( 'select', 'crb_apartments_region', __( 'Регион' ) )
	    ->set_options( array(
	        'Елените' => 'Елените',
	        'Святой Влас' => 'Святой Влас',
	        'Солнечный берег' => 'Солнечный берег',
	        'Несебыр' => 'Несебыр',
	        'Равда' => 'Равда',
	        'Поморие' => 'Поморие',
	        'Сарафово' => 'Сарафово',
	        'Бургас' => 'Бургас',
	        'Созополь' => 'Созополь',
	        'Варна' => 'Варна',
	        'Золотые пески' => 'Золотые пески',
	        'Константин' => 'Константин',
	        'Елена' => 'Елена',
	        'София' => 'София',
	    ) )
  ) );
}

?>