function changeColorMenuItem () {
	var location = window.location.href;  
	$('.menu-wrapper a').each(function () {  
	    var link = $(this).attr('href');
	    if (location == link) { 
	        $(this).addClass('change-color');                
	    }
	});
}


function sidebarServicesChangeColor () {
	var location = window.location.href;
	var color = '#AE3266';

	// Основные категории
	if ( location.match(/services-laser_cosmetology/) ) { 
		$('#laser-cosmetology').show(); 
		$('#laser-cosmetology').prev().css('color', color);
	} 
	if ( location.match(/services-epilation/) ) { 
		$('#epilation').show(); 
		$('#epilation').prev().css('color', color);
	} 
	if ( location.match(/services-esthetic_cosmetology/) ) { 
		$('#esthetic-cosmetology').show(); 
		$('#esthetic-cosmetology').prev().css('color', color);
	} 
	if ( location.match(/services-figure_correction/) ) { 
		$('#figure-correction').show();
		$('#figure-correction').prev().css('color', color);
	} 
	if ( location.match(/services-injection_cosmetology/) ) { 
		$('#injection-cosmetology').show(); 
		$('#injection-cosmetology').prev().css('color', color);
	} 
	if ( location.match(/services-remove_skin_novelties/) ) { 
		$('#remove-skin-novelties').show(); 
		$('#remove-skin-novelties').prev().css('color', color);
	} 
	// Основные категории


	// Подкатегории

	// Лазерная косметология
	if ( location.match(/services-laser_cosmetology-laser_rejuve_skin_damage/) ) { 
		 $('#rejuve-skin-damage, #rejuve-skin-damage a').css('color', color);
	}
	if ( location.match(/services-laser_cosmetology-laser_rejuve_no_skin_damage/) ) { 
		 $('#rejuve-no-skin-damage, #rejuve-no-skin-damage a').css('color', color);
	}
	if ( location.match(/services-laser_cosmetology-acne_treatment/) ) { 
		 $('#acne-treatment, #acne-treatment a').css('color', color);
	}
	if ( location.match(/services-laser_cosmetology-remove_pigment_spots/) ) { 
		 $('#remove-pigment-spots, #remove-pigment-spots a').css('color', color);
	}
	if ( location.match(/services-laser_cosmetology-removing_stretch/) ) { 
		 $('#removing-stretch, #removing-stretch a').css('color', color);
	}	
	if ( location.match(/services-laser_cosmetology-remove_vessels_on_face/) ) { 
		 $('#remove-vessels-on-face, #remove-vessels-on-face a').css('color', color);
	}
	if ( location.match(/services-laser_cosmetology-photo_rejuve/) ) { 
		 $('#photo-rejuve, #photo-rejuve a').css('color', color);
	}
	// Лазерная косметология


	// Коррекция фигуры, целлюлит
	if ( location.match(/services-figure_correction-weight_loss/) ) { 
		 $('#weight-loss, #weight-loss a').css('color', color);
	}
	if ( location.match(/services-figure_correction-press_therapy/) ) { 
		 $('#press-therapy, #press-therapy a').css('color', color);
	}
	if ( location.match(/services-figure_correction-liposuction/) ) { 
		 $('#liposuction, #liposuction a').css('color', color);
	}	
	if ( location.match(/services-figure_correction-massage/) ) { 
		 $('#massage, #massage a').css('color', color);
	}
	if ( location.match(/services-figure_correction-acupuncture/) ) { 
		 $('#acupuncture, #acupuncture a').css('color', color);
	}
	// Коррекция фигуры, целлюлит


	// Инъекционная косметология
	if ( location.match(/services-injection_cosmetology-biorevitalization/) ) { 
		 $('#biorevitalization, #biorevitalization a').css('color', color);
	}
	if ( location.match(/services-injection_cosmetology-botox_dysport/) ) { 
		 $('#botox-dysport, #botox-dysport a').css('color', color);
	}
	if ( location.match(/services-injection_cosmetology-change_lips/) ) { 
		 $('#change-lips, #change-lips a').css('color', color);
	}
	if ( location.match(/services-injection_cosmetology-contour_plastic/) ) { 
		 $('#contour-plastic, #contour-plastic a').css('color', color);
	}
	if ( location.match(/services-injection_cosmetology-mesotherapy/) ) { 
		 $('#mesotherapy, #mesotherapy a').css('color', color);
	}
	if ( location.match(/services-injection_cosmetology-plazmolifting/) ) { 
		 $('#plazmolifting, #plazmolifting a').css('color', color);
	}
	// Инъекционная косметология

	// Удаление новообразований кожи
	if ( location.match(/services-remove_skin_novelties-cryodestruction/) ) { 
		 $('#cryodestruction, #cryodestruction a').css('color', color);
	}
	if ( location.match(/services-remove_skin_novelties-laser_removal/) ) { 
		 $('#laser-removal, #laser-removal a').css('color', color);
	}
	// Удаление новообразований кожи

	// Эпиляция
	if ( location.match(/services-epilation-laser_epilation/) ) { 
		 $('#laser-epilation, #laser-epilation a').css('color', color);
	}
	if ( location.match(/services-epilation-photo_epilation/) ) { 
		 $('#photo-epilation, #photo-epilation a').css('color', color);
	}
	// Эпиляция

	//Эстетическая косметология
	if ( location.match(/services-esthetic_cosmetology-cosmetic_care/) ) { 
		 $('#cosmetic-care, #cosmetic-care a').css('color', color);
	}
	if ( location.match(/services-esthetic_cosmetology-cryotherapy/) ) { 
		 $('#cryotherapy, #cryotherapy a').css('color', color);
	}
	if ( location.match(/services-esthetic_cosmetology-plazmolifting_gynecology/) ) { 
		 $('#plazmolifting-gynecology, #plazmolifting-gynecology a').css('color', color);
	}
	if ( location.match(/services-esthetic_cosmetology-kontur_intim/) ) { 
		 $('#kontur-intim, #kontur-intim a').css('color', color);
	}
	//Эстетическая косметология
	// Подкатегории
} 

function sidebarEquipmentChangeColor () {
	var location = window.location.href;
	var color = '#AE3266';

	if ( location.match(/equipment-dot_rejuve/) ) { 
		$('#dot-rejuve').css('color', color);
	} 
	if ( location.match(/equipment-dot_therapy/) ) { 
		$('#dot-therapy').css('color', color);
	} 
	if ( location.match(/equipment-fractional_rejuve/) ) { 
		$('#fractional-rejuve').css('color', color);
	} 
	if ( location.match(/equipment-laser_epilation/) ) { 
		$('#laser-epilation').css('color', color);
	} 
	if ( location.match(/equipment-laser_removal_of_vessels/) ) { 
		$('#laser-removal-of-vessels').css('color', color);
	} 
	if ( location.match(/equipment-strii/) ) { 
		$('#strii').css('color', color);
	}
} 