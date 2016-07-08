$(document).ready(function() {

    // initialize calendar
    $('#calendar').fullCalendar({
        defaultView: 'agendaWeek',
        contentHeight: 600,
        scrollTime: '8:00:00',
        defaultTimedEventDuration: '01:00:00',
        eventOverlap: false,
        editable: true,
        droppable: true,
        drop: function(date) {
          var originalEventObject = $(this).data('eventObject');
          var copiedEventObject = $.extend({}, originalEventObject);
          copiedEventObject.start = date;
          $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        },
    })

    // initialize draggable events
    var eventObject = {
      title: 'Zoo',
    };
    $('.calendar-pin')
      .data(
        'eventObject', eventObject
      )
      .draggable({
        revert: true,
        revertDuration: 0,
        helper: 'clone'
      });
      

});