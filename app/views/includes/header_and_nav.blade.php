<div id="header_wrapper">
    <div class="masthead sepia">
        <div class="left">
            <p id="BHCA_logo_1st_line">Braddock Heights Community Association</p>
            <p id="BHCA_logo_2nd_line">A Community with an Altitude...</p>
        </div>
        <div class="right">
            <img id="BH_postcard" src="/images/postcards/md_braddock_heights01.gif" alt="Bird's eye view of Braddock Heights, MD, showing Middletown at distance." width="160" height="100">
        </div>
    </div>

    <nav id="page_nav">
        <ul>
            <li <?php print(($thisPage=="Home" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href='/'>Home</a>
            </li>
            <li <?php print(($thisPage=="Then and Now" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">Then and Now</a>
                <!--Class below added so dropdown shadow for parents   
                        near right side of screen will align to right side 
                        of parent.   -->
                <ul class="align_right">
                 <li <?php print(($thisPage=="Vintage Maps" ) ? 'id="iamhere"' : ""); ?>>
                     <a class="sepia" href="#">Vintage Maps</a>
                 </li>
                 <li <?php print(($thisPage=="Historical Postcards" ) ? 'id="iamhere"' : ""); ?>>
                     <a class="sepia" href='/postcard'>Historical Postcards</a>
                 </li>
                </ul>
            </li>
            <li <?php print(($thisPage=="Map" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="#">Map</a>
            </li>
            <li <?php print(($thisPage=="Calendar of Events" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href='/calendar'>Calendar of Events</a>
            </li>
            <li <?php print(($thisPage=="BHCA_Board" ) ? 'id="iamhere"' : ""); ?>>
                <a class="sepia" href="/board">BHCA Board</a>
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

            <?php
                if (Auth::check()) {
                   /* <li><a href='/logout'>Log out {{ Auth::user()->email; }}</a></li>*/
                    print "<li><a href='/logout'>Webmaster Log out</a></li>";
                }
                else {
                    print "<li><a href='/login'>Webmaster Log in</a></li>"; 
                }
                /*else {
                    print "<li class='auth_check id='iamhere'><a href='/login'>Webmaster Log in</a><span class='small_white_text'> or </span><a href='/login'>Webmaster Log in</a></li>"; 
                }*/
            ?>
        </ul>
    </nav>
</div>

