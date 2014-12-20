# ***CSCI E-15 Dynamic Web Applications***
# ***Project P4/Course Project: Braddock Heights Community Association website ***
 
# **Live URL**
*http://braddockheights.dynamicweb.me*

# **Description sentences**

Braddock Heights Community Association website: This final course project project brings together all of the aspects of
dynamic web development that we've been studying this fall in CSCI-E15.  These skills include planning the website pages 
and corresponding routes; installing and using Composer; incorporating dependencies obtained from packagist.org and/or github; 
committing modifications to github.com; setting up facades; adjusting environment settings; coding the routes; creating views 
and templates; using Blade syntax; using models; planning, configuring, creating, modifying, and accessing a database (MySQL), 
passing data to views; testing the URLs; deploying the new website to the server and testing on the server.

# **Demo information** 

My demo is a Jing capture at http://screencast.com/t/osnBpgfm5BuT

# **Details for Teaching Team**

User table is only used to store the email and password for the webmaster (which are bucknbeck@verizon.net and bnb123).
The site is for the Braddock Heights Community Association.  I live in Braddock Heights, and created the first part of 
this site last spring for CSCI-E12 Fundamentals of Website Development, taught by Professor David Heitmeyer.  This is a 
website with an audience made up mostly of residents of my neighborhood Braddock Heights, MD, who are members of the 
Braddock Heights Community Association and/or members of the Braddock Heights community pool and various BHCA committees.  
Additionally, there is a small audience of people who just wish to learn more about Braddock Heights before visiting or 
moving here.  Because of this, only the webmaster has access for creating, updating, and deleting.  Here's a link to their 
old website, as it stood before I began my website in the spring, in case you want to compare: www.braddockheights.org.  
The one entry for the webmaster (or possibly several eventually) is just entered into the users table via seeding.  There 
are login and logout features provided for the webmaster in this site, but not sign up.  That code is there but commented 
out.  Additionally, some of the warning/alert-type messages are worded more for a webmaster than a regular user, e.g., 
referring to actual table names, as long as it's something only the webmaster would see, such as during the create of 
committee members.

A big part of the work I did for this was getting this site into Laravel format, using controllers, routes, a model, etc. 
It was tough because I'd implemented the site last spring using an iframe that stays on the home page and holds all the 
changing content while maintaining the masthead and navigation bar at the top, and that was tricky to get that to work 
with the routes and includes.

Database seeders  - my one seeder, BraddockheightsSeeder.php, is called by DatabaseSeeder.php, and that seeds
my three tables: users, bhca_members, and committee_members.  bhca_members --> committee_members is a one-to-many relationship.
So bhca_members is like authors in foobooks, and committee_members is like books in foobooks.

I did create a /truncate route, which is , which you can use to clean out my tables if you need to.

# **Outside Code**
Several outside code snippets from online are documented within the software with links to their source.
Vintage social media icons on the home page were obtained from:
http://webtoolkit4.me/2012/06/03/36-free-vintage-social-icons/  