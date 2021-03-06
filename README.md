# wptheme
Custom Wordpress theme.

#
# README
#

A custom Wordpress theme with the features outlined below.
• A dynamic header menu with a depth of 􏚲.
• A two column widget that can be populated with a dynamic image in one column,
and dynamic heading and subheading in the other column.

Step 0.1: Install WordPress...
Step 0.2: Setup Database...
Step 0.3: Setup WebServer....
Step 0.4: ....

Step 1: Copy & paste mytwentywp/ folder to pathTo/wordpress/wp-content/themes folder.

Step 2: Activate your theme from the WordPress Dashboard.
Step 3: ...
Step 4: README...
Step 5: ...

Step 0.1:
Welcome to WordPress.
Before getting started, we need some information on the database.
You will need to know the following items before proceeding.

    Database name
    Database username
    Database password
    Database host
    Table prefix (if you want to run more than one WordPress in a single database)

"""
mysql> -- ##################
mysql> -- # wpthemedb.sql
mysql> -- # 2021
mysql> -- ##################
mysql>
mysql> CREATE DATABASE wpthemedb;
Query OK, 1 row affected (0.63 sec)
mysql>
mysql> USE wpthemedb;
Database changed
mysql>
mysql> GRANT ALL ON wpthemedb.* TO wpdb@localhost IDENTIFIED BY "myp2020l.1w";
Query OK, 0 rows affected (0.72 sec)
mysql>
mysql> \s
"""

Below you should enter your database connection details.
If you’re not sure about these, contact your host.

"""
Database Name: wpthemedb  //The name of the database you want to use with WordPress.
Username: wpdb   		      //Your database username.
Password:  myp2020l.1w    //Your database password.
Database Host: locahost   //You should be able to get this info from your web host, if localhost doesn’t work.
Table Prefix: wp_ 		    //If you want to run multiple WordPress installations in a single database, change this.
"""

All right, sparky! You’ve made it through this part of the installation.
WordPress can now communicate with your database.
If you are ready, time now to…
"""
[Run the installation]
"""
Welcome

Welcome to the famous five-minute WordPress installation process!
Just fill in the information below and you’ll be on your way
to using the most extendable and powerful personal publishing
platform in the world.

Information needed
Please provide the following information.
Don’t worry, you can always change these settings later.

"""
Site Title: My202106theme
Username: @Theme2106
//Usernames can have only alphanumeric characters, spaces, underscores,
//hyphens, periods, and the @ symbol.
Password: q901.xLtheme
//Strong
//Important: You will need this password to log in.
//Please store it in a secure location.
Your Email: themes@tm.io
//Double-check your email address before continuing.
//Search Engine Visibility
Search Engine Visibility: [] Discourage search engines from indexing this site
//It is up to search engines to honor this request.

[Install WordPress]
"""

//
//There has been a critical error on your website.
//Learn more about debugging in WordPress.
//https://wordpress.org/support/article/debugging-in-wordpress/
//
//Already Installed
//You appear to have already installed WordPress.
//To reinstall please clear your old database tables //first.
//[Log In]
"""
Username or Email Address:
themes@tm.io
Password:
*******
[]Remember Me
[Login]

Lost your password?
//http://localhost/wordpress/wp-login.php?action=lostpassword
← Back to My202106theme
//http://localhost/wordpress/
"""
//
"""
mysql> show tables;
+-----------------------+
| Tables_in_wpthemedb   |
+-----------------------+
| wp_commentmeta        |
| wp_comments           |
| wp_links              |
| wp_options            |
| wp_postmeta           |
| wp_posts              |
| wp_term_relationships |
| wp_term_taxonomy      |
| wp_termmeta           |
| wp_terms              |
| wp_usermeta           |
| wp_users              |
+-----------------------+
12 rows in set (0.17 sec)

mysql> describe wp_users;
+---------------------+---------------------+------+-----+---------------------+--------------
--+
| Field               | Type                | Null | Key | Default             | Extra
  |
+---------------------+---------------------+------+-----+---------------------+--------------
--+
| ID                  | bigint(20) unsigned | NO   | PRI | NULL                | auto_incremen
t |
| user_login          | varchar(60)         | NO   | MUL |                     |
  |
| user_pass           | varchar(255)        | NO   |     |                     |
  |
| user_nicename       | varchar(50)         | NO   | MUL |                     |
  |
| user_email          | varchar(100)        | NO   | MUL |                     |
  |
| user_url            | varchar(100)        | NO   |     |                     |
  |
| user_registered     | datetime            | NO   |     | 0000-00-00 00:00:00 |
  |
| user_activation_key | varchar(255)        | NO   |     |                     |
  |
| user_status         | int(11)             | NO   |     | 0                   |
  |
| display_name        | varchar(250)        | NO   |     |                     |
  |
+---------------------+---------------------+------+-----+---------------------+--------------
--+
10 rows in set (0.01 sec)
//
mysql> select * from wp_users;
+----+------------+------------------------------------+---------------+--------------+-------
---+---------------------+---------------------+-------------+--------------+
| ID | user_login | user_pass                          | user_nicename | user_email   | user_u
rl | user_registered     | user_activation_key | user_status | display_name |
+----+------------+------------------------------------+---------------+--------------+-------
---+---------------------+---------------------+-------------+--------------+
|  1 | @Theme2106 | $P$Bdq.W5yka6l1UDdlh2VXeTHL76aNe2/ | theme2106     | themes@tm.io |
   | 2021-06-18 12:03:47 |                     |           0 | @Theme2106   |
+----+------------+------------------------------------+---------------+--------------+-------
---+---------------------+---------------------+-------------+--------------+
1 row in set (0.00 sec)

mysql>
"""

Now you are talking...
Visit:
http://localhost/wordpress/wp-admin/index.php
http://localhost/wordpress/wp-admin/themes.php
http://localhost/wordpress/

Index of /wordpress

    Parent Directory
    index.php
    license.txt
    readme.html
    wp-activate.php
    wp-admin/
    wp-blog-header.php
    wp-comments-post.php
    wp-config-sample.php
    wp-config.php
    wp-content/
    wp-cron.php
    wp-includes/
    wp-links-opml.php
    wp-load.php
    wp-login.php
    wp-mail.php
    wp-settings.php
    wp-signup.php
    wp-trackback.php
    xmlrpc.php

Visit:
http://localhost/wordpress/wp-content/

Index of /wordpress/wp-content

    Parent Directory
    index.php
    plugins/
    themes/
    uploads/
//
//Copy and paste mytwentywp/ folder under themes/.
//
Visit:
http://localhost/wordpress/wp-content/themes/

Index of /wordpress/wp-content/themes

    Parent Directory
    index.php
    mytwentywp/
    twentynineteen/
    twentyseventeen/
    twentysixteen/
    twentytwenty/

Visit:
http://localhost/wordpress/wp-admin/themes.php?theme=mytwentywp

Activate our new theme:
mytwentywp
http://localhost/wordpress/wp-admin/themes.php?action=activate&stylesheet=mytwentywp&_wpnonce=9d58237113
//
// Enjoy.
//
One more thing...
"""
mysql> describe wp_options;
+--------------+---------------------+------+-----+---------+----------------+
| Field        | Type                | Null | Key | Default | Extra          |
+--------------+---------------------+------+-----+---------+----------------+
| option_id    | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| option_name  | varchar(191)        | NO   | UNI |         |                |
| option_value | longtext            | NO   |     | NULL    |                |
| autoload     | varchar(20)         | NO   | MUL | yes     |                |
+--------------+---------------------+------+-----+---------+----------------+
4 rows in set (0.03 sec)
"""

Create a new page for testing call it "cool".
http://localhost/wordpress/wp-admin/post-new.php?post_type=page

"""
mysql> select * from wp_options;
UPDATE `wpthemedb`.`wp_options` SET `option_value`='http://localhost/wordpress/cool' WHERE `option_id`='2';
UPDATE `wpthemedb`.`wp_options` SET `option_value`='http://localhost/wordpress/' WHERE `option_id`='1';
"""
// http://localhost/wordpress/wp-admin/options-general.php
//
Visit site:
http://localhost/wordpress/cool/
