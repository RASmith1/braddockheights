<!DOCTYPE html>
<html>

<head>

    <?php $thisTitle="Calendar of Events" ; include( "htmlhead.php"); ?>
    
</head>

<body>


    <div id="calendar_wrapper">

        <?php $thisPage="Calendar of Events" ; include( "header_and_nav.php"); ?>

        <div id="frame_wrapper">

            <iframe id="calendar_frame" src="https://www.google.com/calendar/embed?title=Braddock%20Heights%20Calendar%20of%20Events&amp;showTz=0&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bucknbeck%40verizon.net&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FNew_York" width="960" height="615"></iframe>
        </div>
        
        <!-- the footer -->
         <?php include( "footer.php"); ?>

    </div>

</body>

</html>





