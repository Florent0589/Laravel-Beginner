
var JavaManager = {

  /**
  *function used to drill down to next select box
  *
  */
  drillDown: function(region_id){

	$.ajax({

	url: 'sub-region',

	method: 'GET',

	data: {region_id:region_id},

		success: function(data) {

			console.log(data);

			$("select[name='sub_region_id'").html('');

			$("select[name='sub_region_id'").html(data.options);

		}

	});

	},

	 /**
  *function used to drill down to next select box
  *
  */
 drillDownPermanent: function(permanent_region_id){

	$.ajax({

	url: 'permanent-sub-region',

	method: 'GET',

	data: {permanent_region_id:permanent_region_id},

		success: function(data) {

			console.log(data);

			$("select[name='permanent_sub_region_id'").html('');

			$("select[name='permanent_sub_region_id'").html(data.options);

		}

	});

	},

	drillToTrip: function(transport_id){

			$.ajax({
		
			url: 'trip-load',
		
			method: 'GET',
		
			data: {transport_id:transport_id},
		
				success: function(data) {

					console.log(data);
		
					$("select[name='trip_load_id'").html('');
		
					$("select[name='trip_load_id'").html(data.options);
		
				}
		
			});
	
		},

		drillToTripAlias: function(trip_load_id){

			$.ajax({
		
			url: 'alias-trips',
			method: 'GET',
			data: {trip_load_id:trip_load_id},
		
				success: function(data) {
					
					$("select[name='trip_id'").html('');
		
					$("select[name='trip_id'").html(data.options);
		
				}
		
			});
	
		},
	/**
	 * show div with other required field
	 */
	ShowOtherFields : function (box, id) {
		// get reference to related content to display/hide
		var el = document.getElementById(id);
		
		if ( box.checked === true ) {
				el.style.display = 'block';
		} else {
				el.style.display = 'none';
		}
	},
	/**
	 * funciton to put residential address on permenent address
	 */
	sameAddress:function(){

		var region_id = $('#region_id').val();
		var sub_region_id = $('#sub_region_id').val();
		var city_id = $('#city_id').val();
		var physical_address = $('#physical_address').val();

		$('#permanent_region_id').val(region_id);
		$('#permanent_sub_region_id').val(sub_region_id);
		$('#permanent_city_id').val(city_id);
		$('#permanent_physical_address').val(physical_address);

	},

	searchCustomer: function(barcode)
	{
		$.ajax({
		
			url: '/customers/get-customer',
			method: 'GET',
			data: {barcode:barcode},
		
				success: function(data) {
					console.log(data);
					$("#customers").html('');
		
					$("#customers").html(data);
		
				}
		
			});
	},

	/**
	* format amount as money
	*
	* @param string mnt
	*
	* @return string
	**/
	formatAsMoney  : function (mnt) {
	    mnt -= 0;
	    mnt = (Math.round(mnt*100))/100;
	    return (mnt == Math.floor(mnt)) ? mnt + '.00' 
	              : ( (mnt*10 == Math.floor(mnt*10)) ? 
	                       mnt + '0' : mnt);
	},

	calculateChange : function(){

			var amount_paid = $('#amount_tendered').val();
			var amount_due  = $('#debit_amount').val();
			
			var change = 0;
			
			change = JavaManager.formatAsMoney(amount_paid) - JavaManager.formatAsMoney(amount_due);
			
			$('#change_amount').val(JavaManager.formatAsMoney(change));

			if(change < 0){
				alert('Please check the Amounts, Invalid Change Amount!');
			}
	},

	Customers: function(stats){


		var total = stats['customers'];
		/* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  // -----------------------
  // - MONTHLY SALES CHART -
  // -----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var customersChartCanvas = $('#customersChart').get(0).getContext('2d');
  // This will get the first returned node in the jQuery collection.
  var customersChart       = new Chart(customersChartCanvas);

  var customersChartData = {
    labels  : stats['labels'],
    datasets: [
      {
        label               : 'Electronics',
        fillColor           : 'rgb(210, 214, 222)',
        strokeColor         : 'rgb(210, 214, 222)',
        pointColor          : 'rgb(210, 214, 222)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgb(220,220,220)',
        data                : [65, 59, 80, 81]
      },
      {
        label               : 'Digital Goods',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [28, 48, 40, 19]
      }
    ]
  };

  var customersChartOptions = {
    // Boolean - If we should show the scale at all
    showScale               : true,
    // Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : false,
    // String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    // Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    // Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    // Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    // Boolean - Whether the line is curved between points
    bezierCurve             : true,
    // Number - Tension of the bezier curve between points
    bezierCurveTension      : 0.3,
    // Boolean - Whether to show a dot for each point
    pointDot                : false,
    // Number - Radius of each point dot in pixels
    pointDotRadius          : 4,
    // Number - Pixel width of point dot stroke
    pointDotStrokeWidth     : 1,
    // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius : 20,
    // Boolean - Whether to show a stroke for datasets
    datasetStroke           : true,
    // Number - Pixel width of dataset stroke
    datasetStrokeWidth      : 2,
    // Boolean - Whether to fill the dataset with a color
    datasetFill             : true,
    // String - A legend template
    legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio     : true,
    // Boolean - whether to make the chart responsive to window resizing
    responsive              : true
  };

  // Create the line chart
  customersChart.Line(customersChartData, customersChartOptions);
	},
}

window.onload = function() {
	var ref = document.forms['transact'].elements['friend'];
	var rel = document.forms['transact'].elements['relative'];
	ref.checked = false; // for soft reload
	rel.checked = false; // for soft reload
	
	// attach function that calls toggleSub to onclick property of checkbox
	// toggleSub args: checkbox clicked on (this), id of element to show/hide
	ref.onclick = function() { JavaManager.ShowOtherFields(this, 'reference'); };
	rel.onclick = function() { 

		var barcode = $('#barcode').val();

		JavaManager.ShowOtherFields(this, 'relative-form'); 

		$.ajax({
		
			url: '/transact/dependants',
		
			method: 'GET',
		
			data: {barcode:barcode},
		
				success: function(data) {

					console.log(data);
				
					$("#dependants").html(data);
		
				}
		
			});

		
	};

	$(function () {
          
		/* initialize the external events
		 -----------------------------------------------------------------*/
		function init_events(ele) {
		  ele.each(function () {
	
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
			  title: $.trim($(this).text()) // use the element's text as the event title
			}
	
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject)
	
			// make the event draggable using jQuery UI
			$(this).draggable({
			  zIndex        : 1070,
			  revert        : true, // will cause the event to go back to its
			  revertDuration: 0  //  original position after the drag
			})
	
		  })
		}
	
		init_events($('#external-events div.external-event'))
	
		/* initialize the calendar
		 -----------------------------------------------------------------*/
		//Date for the calendar events (dummy data)
		var date = new Date()
		var d    = date.getDate(),
			m    = date.getMonth(),
			y    = date.getFullYear()
		$('#calendar').fullCalendar({
		  header    : {
			left  : 'prev,next today',
			center: 'title',
			right : 'month,agendaWeek,agendaDay'
		  },
		  buttonText: {
			today: 'today',
			month: 'month',
			week : 'week',
			day  : 'day'
		  },
		  //Random default events
		  events    : [
			{
			  title          : 'All Day Event',
			  start          : new Date(y, m, 1),
			  backgroundColor: '#f56954', //red
			  borderColor    : '#f56954' //red
			},
			{
			  title          : 'Long Event',
			  start          : new Date(y, m, d - 5),
			  end            : new Date(y, m, d - 2),
			  backgroundColor: '#f39c12', //yellow
			  borderColor    : '#f39c12' //yellow
			},
			{
			  title          : 'Meeting',
			  start          : new Date(y, m, d, 10, 30),
			  allDay         : false,
			  backgroundColor: '#0073b7', //Blue
			  borderColor    : '#0073b7' //Blue
			},
			{
			  title          : 'Lunch',
			  start          : new Date(y, m, d, 12, 0),
			  end            : new Date(y, m, d, 14, 0),
			  allDay         : false,
			  backgroundColor: '#00c0ef', //Info (aqua)
			  borderColor    : '#00c0ef' //Info (aqua)
			},
			{
			  title          : 'Birthday Party',
			  start          : new Date(y, m, d + 1, 19, 0),
			  end            : new Date(y, m, d + 1, 22, 30),
			  allDay         : false,
			  backgroundColor: '#00a65a', //Success (green)
			  borderColor    : '#00a65a' //Success (green)
			},
			{
			  title          : 'Click for Google',
			  start          : new Date(y, m, 28),
			  end            : new Date(y, m, 29),
			  url            : 'http://google.com/',
			  backgroundColor: '#3c8dbc', //Primary (light-blue)
			  borderColor    : '#3c8dbc' //Primary (light-blue)
			}
		  ],
		  editable  : true,
		  droppable : true, // this allows things to be dropped onto the calendar !!!
		  drop      : function (date, allDay) { // this function is called when something is dropped
	
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject')
	
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject)
	
			// assign it the date that was reported
			copiedEventObject.start           = date
			copiedEventObject.allDay          = allDay
			copiedEventObject.backgroundColor = $(this).css('background-color')
			copiedEventObject.borderColor     = $(this).css('border-color')
	
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true)
	
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
			  // if so, remove the element from the "Draggable Events" list
			  $(this).remove()
			}
	
		  }
		})
	
		/* ADDING EVENTS */
		var currColor = '#3c8dbc' //Red by default
		//Color chooser button
		var colorChooser = $('#color-chooser-btn')
		$('#color-chooser > li > a').click(function (e) {
		  e.preventDefault()
		  //Save color
		  currColor = $(this).css('color')
		  //Add color effect to button
		  $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
		})
		$('#add-new-event').click(function (e) {
		  e.preventDefault()
		  //Get value and make sure it is not null
		  var val = $('#new-event').val()
		  if (val.length == 0) {
			return
		  }
	
		  //Create events
		  var event = $('<div />')
		  event.css({
			'background-color': currColor,
			'border-color'    : currColor,
			'color'           : '#fff'
		  }).addClass('external-event')
		  event.html(val)
		  $('#external-events').prepend(event)
	
		  //Add draggable funtionality
		  init_events(event)
	
		  //Remove event from text input
		  $('#new-event').val('')
		})
	  })
};