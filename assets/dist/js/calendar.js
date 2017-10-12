$(function() {

  $('#calendar').fullCalendar({
    aspectRatio: 2.8,
    eventSources: [
      {
          color: '#18b9e6',
          textColor: '#000000',
          events: [
                    {
                        title: 'Event 1',
                        start: '2017-03-13'
                    },
                    {
                        title: 'Event 2',
                        start: '2017-03-19'
                    }

                  ]
      }
    ]
  });

})
