# ***CSCI E-15 Dynamic Web Applications***
# ***Project P4/Course Project: Braddock Heights Community Association website ***
 
# **Live URL**
*http://braddockheights.dynamicweb.me*

# **Description sentences**
P4/Braddock Heights Community Association website: This final course project project brings together all of the aspects of
dynamic web development that we've been studying this fall in CSCI-E15.  These skills include planning the website pages 
and corresponding routes, installing Composer, incorporating dependencies obtained from packagist.org and/or github, 
committing modifications to github.com, setting up facades, 
adjusting environment settings, coding the routes, creating views and templates, using Blade syntax, using models, 
planning, configuring, creating, modifying, and accessing a database, passing data to views, testing the URLs, and 
deploying the new website to the server.

# **Demo information** 
My demo is a Jing capture at http://screencast.com/t/YdNIJczgb .  I did have to create this three
times, and when I go to the link that it put on my clipboard, it brings me to Jing, but I don't see the screen cast, 
which I thought I would.  If you can't see it, please email me at bucknbeck@verizon.net.  I'll try to compress my 
local copy and send it to you.  Thanks.

# **Details for Teaching Team**

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

A big part of the work I did for this was getting this site into Laravel format, using controllers, routes, a model, etc. 
It was tough because I'd implemented the site last spring using an iframe that stays on the page and holds all the changing
content, and that was tricky to get to work with the routes.

Database seeders  - my one seeder, BraddockheightsSeeder.php, is called by DatabaseSeeder.php, and that seeds
my three tables: users, bhca_members, and committee_members.

I did create a /truncate route, which you can use to clean out my tables if you need to.

I'm having some trouble on the server side, but hopefully by the time you get this, I'll have it resolved.

# **Outside Code**
Outside code snippets from online are documented within the software with links to their sourse.
Vintage social media icons on the home page were obtained from:
    http://webtoolkit4.me/2012/06/03/36-free-vintage-social-icons/  