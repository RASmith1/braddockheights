<div id="header_wrapper">
    <div class="masthead sepia-light">
        <div class="left">
            <p id="BHCA_logo_1st_line">Braddock Heights Community Association</p>
            <p id="BHCA_logo_2nd_line">A Community with an Altitude...</p>
        </div>
        <div class="right">
            <img id="BH_postcard" src="images/postcards/md_braddock_heights01.gif" alt="Bird's eye view of Braddock Heights, MD, showing Middletown at distance." width="160" height="100">
        </div>
    </div>

    <nav id="page_nav">
        <ul>
            <li <?php print(($thisPage=="Home" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="index.php">Home</a>
            </li>
            <li <?php print(($thisPage=="Then and Now" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">Then and Now</a>
                <!--Class below added so dropdown shadow for parents   
                        near right side of screen will align to right side 
                        of parent.                     -->
                <ul class="align_right">
                    <li <?php print(($thisPage=="Vintage Maps" ) ? 'id="iamhere"' : ""); ?>>
                        <a class="sepia" href="#">Vintage Maps</a>
                    </li>
                    <li <?php print(($thisPage=="Historical Postcards" ) ? 'id="iamhere"' : ""); ?>>
                        <a class="sepia" href="BH_slideshow_page.php">Historical Postcards</a>
                    </li>
                </ul>
            </li>
            <li <?php print(($thisPage=="Map" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">Map</a>
            </li>
            <li <?php print(($thisPage=="Calendar of Events" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="BHCA_calendar_of_events.php">Calendar of Events</a>
            </li>
            <li <?php print(($thisPage=="BHCA_Board" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">BHCA Board</a>
            </li>
            
            <li <?php print(($thisPage=="Pool" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">Pool</a>
                <ul>
                    <li <?php print(($thisPage=="BHCA Pool Committee" ) ? 'id="iamhere"' : ""); ?>>
                        <a class="sepia" href="#">BHCA Pool Committee</a>
                    </li>
                    <li <?php print(($thisPage=="Join the pool" ) ? 'id="iamhere"' : ""); ?>>
                        <a class="sepia" href="#">Join the pool</a>
                    </li>
                    <li <?php print(($thisPage=="Swim lessons" ) ? 'id="iamhere"' : ""); ?>>
                        <a class="sepia" href="#">Swim lessons</a>
                    </li>
                    <li <?php print(($thisPage=="Swim Team" ) ? 'id="iamhere"' : ""); ?>>
                        <a class="sepia" href="#">Swim Team</a>
                    </li>
                </ul>
            </li>
            <li <?php print(($thisPage=="Facility Reservations" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">Facility Reservations</a>
            </li>
        </ul>
    </nav>
</div>
