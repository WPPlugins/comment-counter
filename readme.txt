=== Comment Counter ===
Contributors: ocean90
Tags: comment, count, commentator, email, url, author, ip
Requires at least: 2.6
Tested up to: 2.9-rare
Stable tag: 0.22

Comment Counter -  Count comments by a commentator.

== Description ==

= Everybody like numbers =
Comment Counter is a plugin which count the comments by a commentator.
You can define different parameters for the count:

* the URL
* the authorname
* the email address
* the userid
* the author IP


Please visit the [Comment Counter homepage](http://blog.ocean90.ath.cx/wordpress/wp-plugin-comment-counter/"Comment Counter homepage") for more information.

== Installation ==
1. Download *Comment Counter* plugin
1. Unzip the archive
1. Upload the folder *comment_count* into *../wp-content/plugins/*
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php comment_counter();?>` in your templates
1. Have fun!

Info: If you use `<?php wp_list_comments(); ?>` in your template you should read [this article](http://ottodestruct.com/blog/2008/09/29/wordpress-27-comments-enhancements/"Information for wp_list_comments()").

= Parameters =

The following is standard, so you didn't need it really.

`<?php comment_counter('email');?>`
Count comments with the same email adress.

`<?php comment_counter('url');?>`
Count comments with the same URL.

`<?php comment_counter('author');?>`
Count comments with the same name of the commentator

`<?php comment_counter('id');?>`
Count comments with the same userid, for example admin is number 1.

`<?php comment_counter('ip');?>`
Count comments with the same IP.

You can also style the output with $before and $after; example:

`<?php comment_counter('ip','<strong>', '</strong'>);?>`


New at 0.21: Now you can exclude a person by ID or authorname; example:

`<?php comment_counter('email','(',')',array("ocean90","email@web.com","189.234.255"));?>`


Bitte besuch die [Comment Counter Seite](http://blog.ocean90.ath.cx/wordpress/wp-plugin-comment-counter/"Comment Counter Seite") fuer eine deutsche Anleitung.

== Screenshots ==

1. Comment number per title attribut

2. Comment number in round brackets

== Changelog ==

= version 0.22 =
* fix bug with trackbacks; now pingbacks and trackbacks are excluded

= version 0.21 =
* add exclude option
* no more beta status

= version 0.2 beta =
* add parameters for count: id,ip,email,author,userid
* add parameters before and after for styling
* add check for pingbacks and comments

= version 0.1 beta =
* release