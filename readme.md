# ***CSCI E-15 Dynamic Web Applications***
# ***Project P4/Course Project: Braddock Heights Community Association website ***
 
# **Live URL**
*http://braddockheights.dynamicweb.me*

# **Description sentences**
P3/Developer's BFF: This Laravel Basics project introduces the student developer to and immerses them 
in learning the industry-standard skills needed to develop a Laravel-based website.  These skills include 
planning the website pages and corresponding routes, installing Composer, incorporating dependencies 
obtained from packagist.org and/or github, committing modifications to github.com, setting up facades, 
adjusting environment settings, coding the routes, creating views and templates, using Blade syntax, 
passing data to views, testing the URLs, and deploying the new website to the server.

# **Demo information** 
My demo is a Jing capture at http://screencast.com/t/kbVPiToljvyJ .  I did have to create this three
times, and when I go to the link that it put on my clipboard, it brings me to Jing, but I don't see the screen cast, 
which I thought I would.  If you can't see it, please email me at bucknbeck@verizon.net.  I'll try to compress my 
local copy and send it to you.  Thanks.

# **Details for Teaching Team**
<!--
No login is required.
Extra Challenges:
Make it look nice.
Input validation was implemented by using radio buttons and select boxes containing only valid values.
(If nothing is selected, the defaulted settings are used).
-->
User table is only used to store the email and password for the webmaster (which are bucknbeck@verizon.net and bnb123).
The site is for the Braddock Heights Community Association.  I live in Braddock Heights, and created the first part of 
this site last spring for CSCI-E12 Fundamentals of Website Development, taught by Professor David Heitmeyer.  This is a 
website with an audience made up mostly of residents of my neighborhood Braddock Heights, MD, who are members of the 
Braddock Heights Community Association and/or members of the Braddock Heights community pool.  Additionally, there is a 
small audience of people who just wish to learn more about Braddock Heights before visiting or moving here.  Because of this,
only the webmaster has access for creating, updating, and deleting.  Here's a link to their old website, if you 
want to compare: www.braddockheights.org.  The one entry (or possibly several eventually) is just entered into the users
table via seeding.  There are log in and log out features provided for the webmaster, but not sign up.  That code is there
but commented out.  Additionally, some of the warning/alert-type messages are worded more for a webmaster than a regular
user, e.g., referring to actual table names, as long as it's something only the webmaster would see, such as during the 
create of committee members.

Database seeders  - my one seeder, BraddockheightsSeeder.php, is called by DatabaseSeeder.php, and that seeds
my three tables: users, bhca_members, and committee_members.

I did create a /truncate route, which you can use to clean out my tables if you need to.

In BHCA_style.css, there is code that generates a CSS error.  I left it in to get the desired
level of sepia.

# **Outside Code**
