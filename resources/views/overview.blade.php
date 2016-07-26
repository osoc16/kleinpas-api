<!DOCTYPE html>
<html>
<head>
    <title>Kleinpas API - Overview</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        body { font-family: 'Arial', sans-serif; }
        #content {
            width: 1140px;
            margin: 0 auto;
        }
        h1 {
            font-family: 'Lato', 'Arial', sans-serif; 
            text-align: center;
            width: 90%;
            margin: 5%;
            padding-bottom: 30px;
            border-bottom: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #a8a8a8;
        }

        tr:nth-child(even) {
            background: #f4f4f4;
        }

        th {
            background: #ebebeb;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        td {
            border-right: 1px solid #ebebeb;
        }
    </style>
</head>
<body>
    <div id="content">
        <h1>Kleinpas API - Overview<br>Upcoming events</h1>
        <table class="events">
            <tr class="top">
                <th style="width: 60px;">ID</th>
                <th style="width: 200px;">Phonenumber</th>
                <th style="width: 400px;">E-Mail</th>
                <th style="width: 200px;">Reminder Date</th>
                <th style="width: 200px;">Date</th>
                <th style="width: 100px;">Start</th>
                <th style="width: 100px; border: 0;">End</th>
            </tr>

<?php $events = DB::table('events')->orderBy('date', 'asc')->get(); ?>
<?php
    foreach ($events as $event)
    {
        if ($event->phonenumber != "" || $event->email != "")
        {
            if (date('Y-m-d') <= date('Y-m-d', strtotime($event->date)))
            {
?>
            <tr>
                <td class="id"><?=$event->id;?></td>
                <td><?=$event->phonenumber;?></td>
                <td><?=$event->email;?></td>
                <td class="clickable" <?php if (date('Y-m-d') == date('Y-m-d', strtotime(date('Y-m-j' , strtotime('-7 days', strtotime($event->date)))))) { echo "style='background: #ffdada;'"; } ?>><?=date('Y-m-j' , strtotime('-7 days', strtotime($event->date)));?></td>
                <td class="clickable" <?php if (date('Y-m-d') == date('Y-m-d', strtotime($event->date))) { echo "style='background: #ffdada;'"; } ?>><?=$event->date;?></td>
                <td><?=$event->start;?></td>
                <td style="border: 0;"><?=$event->end;?></td>
            </tr>
<?php
            }
        }
    }
?>
        </table>

        <h1>Passed events</h1>
        <table>
            <tr class="top">
                <th style="width: 60px;">ID</th>
                <th style="width: 200px;">Phonenumber</th>
                <th style="width: 400px;">E-Mail</th>
                <th style="width: 200px;">Date</th>
                <th style="width: 100px;">Start</th>
                <th style="width: 100px; border: 0;">End</th>
            </tr>

<?php $events = DB::table('events')->orderBy('date', 'asc')->get(); ?>
<?php
    foreach ($events as $event)
    {
        if ($event->phonenumber != "" || $event->email != "")
        {
            if (date('Y-m-d') > date('Y-m-d', strtotime($event->date)))
            {

?>
            <tr>
                <td><?=$event->id;?></td>
                <td><?=$event->phonenumber;?></td>
                <td><?=$event->email;?></td>
                <td><?=$event->date;?></td>
                <td><?=$event->start;?></td>
                <td style="border: 0;"><?=$event->end;?></td>
            </tr>
<?php
            }
        }
    }
?>
        </table>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    
        (function() {

            // if (localStorage.getItem('data') == null)
            // {
            //     localStorage.setItem('data', JSON.stringify([]));
            // }
            // else
            // {
            //     var data = JSON.parse(localStorage.getItem('data'));
            //     var table = $('.events');

            //     {
            //         for (var i = 0; i < table.length; i++) {
            //             console.log(table);
            //         }
            //     }
            // }
            //var local = JSON.parse(localStorage.getItem('data'));

            $(".clickable").on('click', function() {
                if ($(this).css('background-color') == 'rgb(255, 218, 218)')
                {
                    $(this).css('background-color', '#d5ffd1');
                    // local.push({'id': $(this).parent().find('.id').text(), 'location': $(this).index()});
                    // localStorage.setItem('data', JSON.stringify(local));
                }
            });
        
        })();

    </script>
</body>
</html>
