$(document).ready(function(){       
    calendar = $('#box-calendar'),
    tool = $('#tool');
    navToggleBtn = $('#nav-toggle-btn');
    divCentral = $('#central-div');
    toogleCalendar = $('#toogle-calendar');
    closeBtn = $('#close-toggle-btn');
            
    navToggleBtn.click(function() {
    	divCentral.removeClass('col-md-11');
    	divCentral.addClass('col-md-8');
    	toogleCalendar.removeClass('col-md-1');
    	toogleCalendar.addClass('col-md-4');
        calendar.addClass('calendar-before');
        tool.addClass('tool-before');

     });

    closeBtn.click(function(){
    	divCentral.removeClass('col-md-8');
    	divCentral.addClass('col-md-11');
    	toogleCalendar.removeClass('col-md-4');
    	toogleCalendar.addClass('col-md-1');
        calendar.removeClass('calendar-before');
        tool.removeClass('tool-before');
    });

 });   
   