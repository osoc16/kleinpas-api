<!DOCTYPE html>
<html>
    <head>
        <title>Kleinpas API</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 150%;
            }

            #content {
                width: 960px;
                margin: 0 auto;
            }

            h1 {
                text-align: center;
                font-family: 'Lato', Arial, sans-serif;
                font-size: 3rem;
                border-bottom: 1px solid #555;
                padding-bottom: 40px;
                width: 80%;
                margin: 50px 10%;
            }

            table {
                border: 1px solid #b6b6b6;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }

            tr.top {
                font-weight: bolder;
                background: #ebebeb;
            }

            tr:nth-child(even) { background: #fafafa; }

            tr.top td { border: 0; }

            td {
                border-right: 1px solid #ebebeb;
                padding: 10px 20px;
            }

            p.quote {
                background: #f4f4f4;
                border-radius: 10px;
                padding: 20px;
                font-family: Courier, Arial, serif;
            }

            p.quote strong { color: red; }
        </style>
    </head>
    <body>
        <div id="content">
            <h1>Kleinpas API</h1>
            <h2>GET</h2>
            <p>
                <strong>getEvents</strong>: Gets all the events.<br>
                Returns: id, phonenumber, email, date, start and end.
            </p>
            <p class="quote">
                &emsp;var settings = {<br>
                &emsp;&emsp;"crossDomain": true,<br>
                &emsp;&emsp;"url": "http://95.85.15.210:4000/events",<br>
                &emsp;&emsp;"method": "GET"<br>
                &emsp;}<br>
                <br>
                &emsp;$.ajax(settings).done(function (response) {<br>
                &emsp;&emsp;console.log(JSON.parse(response));<br>
                &emsp;});
            </p>
            <p>
                <strong>getEvent</strong>: Gets the event with a certain ID.<br>
                Returns: id, phonenumber, email, date, start and end.
            </p>
            <p class="quote">
                &emsp;var settings = {<br>
                &emsp;&emsp;"crossDomain": true,<br>
                &emsp;&emsp;"url": "http://95.85.15.210:4000/events/<strong>ID</strong>",<br>
                &emsp;&emsp;"method": "GET"<br>
                &emsp;}<br>
                <br>
                &emsp;$.ajax(settings).done(function (response) {<br>
                &emsp;&emsp;console.log(JSON.parse(response));<br>
                &emsp;});
            </p>
            <h2>POST</h2>
            <p>
                <strong>getEvents</strong>: Gets all the events.<br>
                Returns: id, phonenumber, email, date, start and end.
            </p>
            <p class="quote">
                var settings = {<br>
                &emsp;"crossDomain": true,<br>
                &emsp;"url": "http://95.85.15.210:4000/add",<br>
                &emsp;"method": "POST",<br>
                &emsp;"headers": {<br>
                &emsp;&emsp;"content-type": "application/x-www-form-urlencoded"<br>
                &emsp;},<br>
                &emsp;"data": {<br>
                &emsp;&emsp;"email": "<strong>EMAIL</strong>",<br>
                &emsp;&emsp;"phonenumber": "<strong>PHONENUMBER</strong>",<br>
                &emsp;&emsp;"date": "<strong>DATE</strong>",<br>
                &emsp;&emsp;"start": "<strong>START</strong>",<br>
                &emsp;&emsp;"end": "<strong>END</strong>"<br>
                &emsp;}<br>
                }<br>
                <br>
                $.ajax(settings).done(function (response) {<br>
                &emsp;console.log(response);<br>
                });
            </p><h1></h1><br><br><br><br><br>
        </div>
    </body>
</html>
