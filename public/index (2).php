<!DOCTYPE html>
<html>

<head>

    <?php $thisTitle="Braddock Heights Home Page" ; include( "htmlhead.php"); ?>

</head>

<body>

    <div id="wrapper">

        <?php $thisPage="Home" ; include( "header_and_nav.php"); ?>
        
        <div id="spacer">
            <p>  </p>
        </div>

        <div id="updates_wrapper">
            <div id="updates_row">
                <div id="newsletter">
                    <a href="http://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=7&amp;ved=0CFUQFjAG&amp;url=http%3A%2F%2Fwww.braddockhistory.org%2Fwinter2013.pdf&amp;ei=c59uU-bCEafLsATMvYHwDQ&amp;usg=AFQjCNGFeiRaM1T8k2uzWrgwc1385LD-1A&amp;sig2=JNUOWiJAWz0VrhByfOqXyQ&amp;bvm=bv.66111022,d.cWc&amp;cad=rja" target="_blank">Braddock Heights Historical Society Newsletter</a>
                </div>

                <div id="social_media_icons" class="sepia">
                    <ul id="icon_list">
                        <li>
                            <a href="#">
                                <img src="images/social/facebook.png" alt="Vintage social media icon for Facebook" width="40" height="40">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/social/google.png" alt="Vintage social media icon for Google" width="40" height="40">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/social/twitter.png" alt="Vintage social media icon for Twitter" width="40" height="40">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/social/yahoo.png" alt="Vintage social media icon for Yahoo" width="40" height="40">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/social/youtube.png" alt="Vintage social media icon for YouTube" width="40" height="40">
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="weather">
                    <a href="http://classic.wunderground.com/cgi-bin/findweather/getForecast?query=Braddock%20Heights,%20Maryland&amp;wuSelect=WEATHER" target="_blank">Braddock Heights Current &amp; Forecast Weather</a>
                </div>

            </div>
        </div>

        <!-- the sidebar -->
        <div id="sidebar">

            <iframe id="framed_info" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showTabs=0&amp;showTz=0&amp;mode=AGENDA&amp;height=800&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bucknbeck%40verizon.net&amp;color=%23865A5A&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%2328754E&amp;ctz=America%2FNew_York" width="300" height="800"></iframe>

            <br/>
        </div>

        <!-- the content -->
        <div id="content" class="sepia">
            <h2 id="content_header">"Hie on up to Braddock"</h2>
            <br/>
            <p>The Braddock Heights Community Association is a not-for-profit organization with a mission that includes:</p>
            
            <!-- Don't embed ul within paragraph, as that will cause an HTML5 validation error in W3C Markup validation -->
            <ul class="inside_list">
                <li>increasing pride in Braddock Heights, and surrounding communities</li>
                <li>improving the educational, recreational, social, and civic environment in the community</li>
                <li>furthering the common good and general welfare of residents within the community</li>
                <li>operating and maintaining the community park, community center and pool complex owned by the BHCA.</li>
            </ul>
           
           
            <p>Interested in joining the BHCA?
                <a href="http://braddockheights.org/brochures/MemberServices_brochure14.pdf">Download the Members Services brochure.</a>
            </p>
            <br/>
            <p>The community park includes a playground, basketball court, pavilion, patio area and a little league baseball field. The Braddock Generals teams use the baseball field three seasons of the year, and public use of the pavilion is subject to existing member reservations.</p>
            <br/>
            <p>Annual events at the park include a spring sports parade and picnic, held in early May. The spring event includes live music, a clown, and a moon bounce. Other activities include a fall family picnic, and spring and fall cleanup days to keep the park looking its best.</p>
            <br/>
            <p>The community center houses a large meeting room, which can be reserved for a nominal usage fee (BHCA membership required). It includes a full kitchen and restrooms, and is an ideal location for small gatherings and meetings.</p>
            <br/>
            <p>The Braddock Heights pool is really three pools in one – baby pool, adult pool, and diving pool. It is the oldest operational pool in Frederick county at 80+ years old! Pool membership is open to all, and we typically have a limited number of openings for new families each season. It is a great location to relax and cool off on hot summer days!</p>
            <br/>
            <p>Want more information? Want to
                <a href="#">join the pool</a> or reserve the pavilion or community center? Want to get involved to help? Please contact Tom Dixon, BHCA Secretary, at president@braddockheights.org.</p>
            <br/>


        </div>
    
        <!-- the footer -->
         <?php include( "footer.php"); ?>
    
    </div>

</body>

</html>