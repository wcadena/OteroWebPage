<link href='../fullcalendar.min.css' rel='stylesheet' />
<link href='../fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<?php
$categories = ProductData::getAllEventos();
if(count($categories)>0):?>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '2016-12-12',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                <?php foreach($categories as $cat):?>
                <?php if(true):?>
                {
                    title: '<?php echo $cat->name; ?>',
                    start: '<?php echo $cat->fecha_ini_evento; ?>',
                    end: '<?php echo $cat->fecha_fin_evento; ?>'
                },
                <?php endif; ?>
                <?php endforeach; ?>

            ]
        });

    });

</script>
<?php else:?>
    <div class="panel-body">
        <p class="alert alert-warning">No hay productos, puedes empezar agregando tu lista de productos.</p>
    </div>
<?php endif; ?>
<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>
<h1>Calendario de Actividades</h1>
<div id='calendar'></div>
