<!DOCTYPE HTML>
<html>
  <body>
     <script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
     <script charset="utf-8">
        var apiKey = '45531972';
        var sessionId = '2_MX40NTUzMTk3Mn5-MTQ1OTk0NDE5NDI3Nn5zOXp2Um9xTzZEQ3htWUlPMXI5bHhjL1l-UH4';
        var token = 'T1==cGFydG5lcl9pZD00NTUzMTk3MiZzaWc9MjMxNTk4MDliN2M3YmQ0NDEwNDkxNTczODViNGVhM2FjOWJmYTk2NDpyb2xlPXB1Ymxpc2hlciZzZXNzaW9uX2lkPTJfTVg0ME5UVXpNVGszTW41LU1UUTFPVGswTkRFNU5ESTNObjV6T1hwMlVtOXhUelpFUTNodFdVbFBNWEk1YkhoakwxbC1VSDQmY3JlYXRlX3RpbWU9MTQ1OTk0NDIwNSZub25jZT0wLjE4MjEzMDY5NjUxNjQ5ODcmZXhwaXJlX3RpbWU9MTQ2MjUzNjE2MSZjb25uZWN0aW9uX2RhdGE9';
        var session = OT.initSession(apiKey, sessionId)
           .on('streamCreated', function(event) {
             session.subscribe(event.stream);
           })
           .connect(token, function(error) {
             var publisher = OT.initPublisher('publisher', {
                insertMode: 'append',
                width: '20%',
                height: ''
              });

             session.publish(publisher);
           });
     </script>
  </body>
</html>