<div class="b_filter">
	<div class="container">
		<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter-id">
			<div class="row">
				<div class="col-md-4">
					<div class="b_filter__item">
						<div class="b_filter__heading">Категория</div>
						<div class="select">
							<select name="b_filter_category">
								<option value="">Все</option>
								<option value="От застройщика">От застройщика</option>
								<option value="Вторичный рынок">Вторичный рынок</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="b_filter__item">
						<div class="b_filter__heading">Регион</div>
						<div class="select">
							<select name="b_filter_region">
								<option value="">Все</option>
								<option value="Елените">Елените</option>
								<option value="Святой Влас">Святой Влас</option>
								<option value="Солнечный берег">Солнечный берег</option>
								<option value="Несебыр">Несебыр</option>
								<option value="Равда">Равда</option>
								<option value="Поморие">Поморие</option>
								<option value="Сарафово">Сарафово</option>
								<option value="Созополь">Созополь</option>
								<option value="Варна">Варна</option>
								<option value="Золотые пески">Золотые пески</option>
								<option value="Константин">Константин</option>
								<option value="Елена">Елена</option>
								<option value="София">София</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="b_filter__item">
						<div class="b_filter__heading">Тип</div>
						<div class="select">
							<select name="b_filter_type">
								<option value="">Все</option>
								<option value="Студио">Студио</option>
								<option value="1 комната">1 комната</option>
								<option value="2 комнаты">2 комнаты</option>
								<option value="3 комнаты">3 комнаты</option>
								<option value="4 комнаты">4 комнаты</option>
								<option value="Дом">Дом</option>
								<option value="Таунхаус">Таунхаус</option>
								<option value="Отель">Отель</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="b_filter__item">
						<div class="b_filter__heading">Площадь:</div>
						<div class="b_filter__range__square">
					    <div class="range-slider">
				        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
			            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
			            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
			            <span tabindex="500" class="ui-slider-handle ui-corner-all ui-state-default"></span>
				        </div>
				        <div class="b_filter__range__text">
				        	<span id="min-square" data-currency="€" class="slider-price">20</span>
				        	<span>м<sup>2</sup></span>
				        </div>
				        <div class="b_filter__range__text">
					       <span id="max-square" data-currency="€" data-max="200"  class="slider-price">200</span>
					       <span>м<sup>2</sup></span>
				        </div>
					    </div> 
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="b_filter__item">
						<div class="b_filter__heading">Цена:</div>
						<div class="b_filter__range__price">
					    <div class="range-slider">
				        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
			            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
			            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
			            <span tabindex="500" class="ui-slider-handle ui-corner-all ui-state-default"></span>
				        </div>
				        <div class="b_filter__range__text">
				        	<span id="min-price" data-currency="€" class="slider-price">15 000</span>
				        	<span>&euro;</span>
				        </div>
				        <div class="b_filter__range__text">
					       <span id="max-price" data-currency="€" data-max="300000"  class="slider-price">300 000</span>
					       <span>&euro;</span>
				        </div>
					    </div> 
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="b_filter__last">
						<div class="b_filter__item">
							<button class="b_filter__btn">
								Искать
							</button>	
						</div>
					</div>
				</div>
			</div>
			<input type="hidden" id="price_min_value" name="b_filter_price_min" value="15000">
			<input type="hidden" id="price_max_value" name="b_filter_price_max" value="300000">
			<input type="hidden" id="square_min_value" name="b_filter_square_min" value="20">
			<input type="hidden" id="square_max_value" name="b_filter_square_max" value="200">
			<input type="hidden" name="action" value="my_b_filter">
		</form>
	</div>
</div>