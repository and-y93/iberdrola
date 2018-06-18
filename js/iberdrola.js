$(document).ready(function(){
    $("#img2").click(function(){
        $("#img2").transition('pulse');
    });

    $('#main-carousel').flickity({
		  // options
		  cellAlign: 'left',
		  contain: true,
		  wrapAround: true,
		  autoPlay: 3100,
		  // prevNextButtons: false,
		  pageDots: false
		});
});

		$('.ui.dropdown').dropdown();

		$(function() {

		  // page is now ready, initialize the calendar...

		  $('#calendar').fullCalendar({
		    events: [
			    {
			      title  : 'event1',
			      start  : '2018-06-01'
			    },
			    {
			      title  : 'event2',
			      start  : '2018-06-05',
			      end    : '2018-06-07'
			    },
			    {
			      title  : 'event3',
			      start  : '2018-06-09T12:30:00',
			      allDay : false // will make the time show
			    }
			  ]
		  })

		});



	