$(function() {

  $('#calendar').fullCalendar({
    locale: 'id',
    aspectRatio: 2.8,
    views: {
          month: {
              columnFormat: 'dddd'
          }
    },
    eventSources: [
      {
          events: function(start, end, timezone, callback) {
              $.ajax({
              url: 'agenda/get_events',
              dataType: 'json',
              data: {
               // our hypothetical feed requires UNIX timestamps
               start: start.unix(),
               end: end.unix()
               },
               success: function(msg) {
                   var events = msg.events;
                   callback(events);
               }
             });
          }
      },
    ]
  });

})
