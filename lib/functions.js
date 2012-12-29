//*******************  UI  *******************//
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });
	
				// Tabs
				$('#tabs').tabs();

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() { 
							$(this).dialog("close"); 
						}, 
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				$('#inline-datepicker').datepicker({
					inline: true
				});
				
				// Slider
				$( "#slider" ).slider(
					{
						slide: function( event, ui ) {
							$( "#amount" ).val( "$" + ui.value );
						}
					}
				);
				
				$( "#slider2" ).slider({
						value:100,
						min: 0,
						max: 500,
						step: 1,
						slide: function( event, ui ) {
							$( "#amount" ).val( "$" + ui.value );
						}
					});
				$( "#amount" ).val( "$" + $( "#slider" ).slider( "value" ) );
				$( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ],
					slide: function( event, ui ) {
						$( "#amount2" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
					}
				});
				$( "#amount2" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
					" - $" + $( "#slider-range" ).slider( "values", 1 ) );
					// setup graphic EQ
				$( "#eq > span" ).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true,
						orientation: "vertical"
					});
				});
				$( "#slider-range-min" ).slider({
					range: "min",
					value: 23,
					min: 23,
					max: 500,
					slide: function( event, ui ) {
						$( "#amount3" ).val( "$" + ui.value );
					}
				});
				$( "#amount3" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
				$( "#slider-range-max" ).slider({
					range: "max",
					value: 56,
					min: 1,
					max: 350,
					slide: function( event, ui ) {
						$( "#amount4" ).val( "$" + ui.value );
					}
				});
				$( "#amount4" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
				// Progressbar
				$("#progressbar").progressbar({
					value: 20
				});
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});

			
//*******************  MENU LEFT  *******************//
jQuery.fn.initMenu = function() {  
    return this.each(function(){
        var theMenu = $(this).get(0);
        $('.acitem', this).hide();
        $('li.expand > .acitem', this).show();
        $('li.expand > .acitem', this).prev().addClass('active');
        $('li a', this).click(
            function(e) {
                e.stopImmediatePropagation();
                var theElement = $(this).next();
                var parent = this.parentNode.parentNode;
                if($(parent).hasClass('noaccordion')) {
                    if(theElement[0] === undefined) {
                        window.location.href = this.href;
                    }
                    $(theElement).slideToggle('normal', function() {
                        if ($(this).is(':visible')) {
                            $(this).prev().addClass('active');
                        }
                        else {
                            $(this).prev().removeClass('active');
                        }    
                    });
                    return false;
                }
                else {
                    if(theElement.hasClass('acitem') && theElement.is(':visible')) {
                        if($(parent).hasClass('collapsible')) {
                            $('.acitem:visible', parent).first().slideUp('normal', 
                            function() {
                                $(this).prev().removeClass('active');
                            }
                        );
                        return false;  
                    }
                    return false;
                }
                if(theElement.hasClass('acitem') && !theElement.is(':visible')) {         
                    $('.acitem:visible', parent).first().slideUp('normal', function() {
                        $(this).prev().removeClass('active');
                    });
                    theElement.slideDown('normal', function() {
                        $(this).prev().addClass('active');
                    });
                    return false;
                }
            }
        }
    );
});
};

$(document).ready(function() {$('.menu').initMenu();});
	
//*******************  MENU HEADER  *******************//
	$(document).ready(function(){
				$('#login-trigger').click(function(){
					$(this).next('#login-content').slideToggle();
					$(this).toggleClass('active');					
					
					})
	});
	
	
	
//*******************  Placeholder for all browsers  *******************//

	$(function() {
	$("input").each(
		function(){
			if($(this).val()=="" && $(this).attr("placeholder")!=""){
			$(this).val($(this).attr("placeholder"));
			$(this).focus(function(){
				if($(this).val()==$(this).attr("placeholder")) $(this).val("");
			});
			$(this).blur(function(){
				if($(this).val()=="") $(this).val($(this).attr("placeholder"));
			});
		}
	});
	
//*******************  Collapsing blocks jQuery  *******************//

	$(document).ready(function() {
		$('.title-grid').append('<span></span>');
		$('.grid-1 span').each(function() {
			var trigger = $(this), state = false, el = trigger.parent().next('.content-gird');
			trigger.click(function(){
				state = !state;
				el.slideToggle();
				trigger.parent().parent().toggleClass('inactive');
			});
		});
				$('.grid-2 span').each(function() {
			var trigger = $(this), state = false, el = trigger.parent().next('.content-gird');
			trigger.click(function(){
				state = !state;
				el.slideToggle();
				trigger.parent().parent().toggleClass('inactive');
			});
		});
				$('.grid-3 span').each(function() {
			var trigger = $(this), state = false, el = trigger.parent().next('.content-gird');
			trigger.click(function(){
				state = !state;
				el.slideToggle();
				trigger.parent().parent().toggleClass('inactive');
			});
		});
	});
				$('.grid-4 span').each(function() {
			var trigger = $(this), state = false, el = trigger.parent().next('.content-gird');
			trigger.click(function(){
				state = !state;
				el.slideToggle();
				trigger.parent().parent().toggleClass('inactive');
			});
		});
	});
	


//*******************  Fancybox  *******************//

	$(document).ready(function() {
				$("a.fancybox").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.8
			});
	});
	
//*********************  Information messages   (Alerts)  *********************//
	$(document).ready(function() {
		$(".hideit").click(function() {
			$(this).fadeOut(1000);
		});
		
	});

//********************* Color Picker  *********************//
	$(document).ready(function() {
	$('#colorpickerField1, #colorpickerField2, #colorpickerField3').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	}
	})
	.bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});
	});
	
//*********************  CALENDAR  *********************//			
	$(document).ready(function() {
		
		
			$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		})
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
				
			}
		});
		
	});
	
	
	
//*********************  File explorer  *********************//
	$(document).ready(function(){
			
			var f = $('#finder').elfinder({
				url : 'lib/elfinder/connectors/php/connector.php',
				lang : 'en',
				docked : true

				// dialog : {
				// 	title : 'File manager',
				// 	height : 500
				// }

				// Callback example
				//editorCallback : function(url) {
				//	if (window.console && window.console.log) {
				//		window.console.log(url);
				//	} else {
				//		alert(url);
				//	}
				//},
				//closeOnEditorCallback : true
			})
			// window.console.log(f)
			$('#close,#open,#dock,#undock').click(function() {
				$('#finder').elfinder($(this).attr('id'));
			})
			
		});
//*********************   EDITOR   *********************//
		$(document).ready(function(){
			$('#editor').wysiwyg({
				controls:"bold,italic,|,undo,redo,image"
			});
		});
		
		
//*********************  FORMS   *********************//
	//select
	$(document).ready(function() {
	 $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
	});
	
	$(document).ready(function(){
	$("input[type=file]").change(function(){$(this).parents(".uploader").find(".filename").val($(this).val());});
	$("input[type=file]").each(function(){
	if($(this).val()==""){$(this).parents(".uploader").find(".filename").val("No file selected...");}
	});
	});
	
//********************* Tooltip *********************//	
	$(function(){
		
		$(".tip-top").tipTip({defaultPosition: "top", delay: 1000});
		$(".tip-bottom").tipTip({defaultPosition: "bottom", delay: 1000});
		$(".tip-left").tipTip({defaultPosition: "left", delay: 1000});
		$(".tip-right").tipTip({defaultPosition: "right", delay: 1000});
	});
//*********************   HTML5 Player   *********************//

      
		
		
//********************* Select all Checkbox *********************//
	function setChecked(obj) 
		{
	
		var check = document.getElementsByName("id[]");
		for (var i=0; i<check.length; i++) 
		   {
		   check[i].checked = obj.checked;
		   }
	}
	
//********************* TABLE (NEWS) *********************//
$(document).ready(function() {
    $('#example').dataTable( {
        "sPaginationType": "full_numbers"
    } );
} );
	
//********************* autorisize *********************//	

	$(document).ready(function() {
	$('textarea.resize-text').autoResize({});
	});
	
//********************* Contact list *********************//	
	 $(document).ready(function(){
         $('#slider-contact').sliderNav();
     });
	 

//********************* Dialogs *********************//
$(document).ready( function() {
				
				$("#alert_button").click( function() {
					jAlert('This is a custom alert box', 'Alert Dialog');
				});
				
				$("#confirm_button").click( function() {
					jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {
						jAlert('Confirmed: ' + r, 'Confirmation Results');
					});
				});
				
				$("#prompt_button").click( function() {
					jPrompt('Type something:', 'Prefilled value', 'Prompt Dialog', function(r) {
						if( r ) alert('You entered ' + r);
					});
				});
				
				$("#alert_button_with_html").click( function() {
					jAlert('You can use HTML, such as <strong>bold</strong>, <em>italics</em>, and <u>underline</u>!');
				});
				
				$(".alert_style_example").click( function() {
					$.alerts.dialogClass = $(this).attr('id'); // set custom style class
					jAlert('This is the custom class called &ldquo;style_1&rdquo;', 'Custom Styles', function() {
						$.alerts.dialogClass = null; // reset to default
					});
				});
			});
//********************* Auto TAB (Input) *********************//
	$(document).ready(function() {
		$('#autotab_example').submit(function() { return false; });
		$('#autotab_example :input').autotab_magic();
		// Number example
		$('#area_code, #number1, #number2').autotab_filter('numeric');
		$('#ssn1, #ssn2, #ssn3').autotab_filter('numeric');
		// Text example
		$('#text1, #text2, #text3').autotab_filter('text');
		// Alpha example
		$('#alpha1, #alpha2, #alpha3, #alpha4, #alpha5').autotab_filter('alpha');
		// Alphanumeric example
		$('#alphanumeric1, #alphanumeric2, #alphanumeric3, #alphanumeric4, #alphanumeric5').autotab_filter({ format: 'alphanumeric', uppercase: true });
		$('#regex').autotab_filter({ format: 'custom', pattern: '[^0-9\.]' });
	});
	

//////////////////////