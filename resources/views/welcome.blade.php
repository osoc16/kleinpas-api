<!DOCTYPE html>
<html>
    <head>
        <title>Kleinpas API</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            #content {
                width: 960px;
                margin: 0 auto;
            }

            h1 {
                text-align: center;
                font-family: 'Lato', Arial, sans-serif;
                font-size: 3rem;
                border-bottom: 1px solid #555;
                padding-bottom: 20px;
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
        </style>
    </head>
    <body>
        <div id="content">
            <h1>Kleinpas API</h1>
            <table>
                <tr class="top">
                    <td style="width: 60px;">ID</td>
                    <td style="width: 300px;">Phonenumber</td>
                    <td style="width: 300px;">E-Mail</td>
                    <td style="width: 200px;">Date</td>
                    <td style="width: 100px;">Start</td>
                    <td style="width: 100px; border: 0;">End</td>
                </tr>
<?php $events = DB::table('events')->get(); ?>
<?php foreach ($events as $event) : ?>
                <tr>
                    <td><?=$event->id;?></td>
                    <td><?=$event->phonenumber;?></td>
                    <td><?=$event->email;?></td>
                    <td><?=$event->date;?></td>
                    <td><?=$event->start;?></td>
                    <td style="border: 0;"><?=$event->end;?></td>
                </tr>
<?php endforeach; ?>
            </table>
        </div>

    </body>
</html>
