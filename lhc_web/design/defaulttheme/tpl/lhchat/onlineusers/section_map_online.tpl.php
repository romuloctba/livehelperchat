<section>
	    <p class="title" data-section-title><a id="map-activator" href="#map" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','Online users on map');?>"><i class="icon-globe"></i></a></p>
	    <div class="content" data-section-content data-slug="map">

				<div class="row">
					<div class="columns large-6">
						<img data-tooltip class="tip-right" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','User is chatting');?>" src="<?php echo erLhcoreClassDesign::design('images/icons/home-chat.png')?>" />
	    				<img data-tooltip class="tip-right" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','User does not have any message from operator');?>" src="<?php echo erLhcoreClassDesign::design('images/icons/home-unsend.png')?>" />
	    				<img data-tooltip class="tip-right" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','User has message from operator');?>" src="<?php echo erLhcoreClassDesign::design('images/icons/home-send.png')?>" />
					</div>
					<div class="columns large-3">
					<?php echo erLhcoreClassRenderHelper::renderCombobox( array (
				                    'input_name'     => 'department_map_id',
									'optional_field' => erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select department'),
				                    'selected_id'    => $omapDepartment,
				                    'list_function'  => 'erLhcoreClassModelDepartament::getList'
				    )); ?>
				    </div>
					<div class="columns large-3">
						<select id="markerTimeout" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','Marker timeout before it dissapears from map');?>">
			    			<option value="30" <?php echo $omapMarkerTimeout == 30 ? 'selected="selected"' : ''?> >30 <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','seconds');?></option>
			    			<option value="60" <?php echo $omapMarkerTimeout == 60 ? 'selected="selected"' : ''?> >1 <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','minute');?></option>
			    			<option value="120" <?php echo $omapMarkerTimeout == 120 ? 'selected="selected"' : ''?> >2 <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','minutes');?></option>
			    			<option value="300" <?php echo $omapMarkerTimeout == 300 ? 'selected="selected"' : ''?> >5 <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','minutes');?></option>
			    			<option value="600" <?php echo $omapMarkerTimeout == 600 ? 'selected="selected"' : ''?> >10 <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','minutes');?></option>
		    			</select>
	    			</div>
				</div>

			<div id="map_canvas" style="height:600px;width:100%;"></div>
			<script type="text/javascript">
			var GeoLocationData = {zoom:<?php echo $geo_location_data['zoom']?>,lat:<?php echo $geo_location_data['lat']?>,lng:<?php echo $geo_location_data['lng']?>};
			</script>
		    <script src="https://maps-api-ssl.google.com/maps/api/js?v=3&sensor=false&callback=gMapsCallback"></script>

	    </div>
	  </section>