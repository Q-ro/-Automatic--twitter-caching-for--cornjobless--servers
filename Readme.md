Twitter for "conrjobless" server
================================

A small script created by Andres Mrad (Q-ro) based of an article by *[Tom Elliott](http://www.webdevdoor.com/php/jquery-twitter-feed-part2-caching-tweets/).* This script will "automatically" cache the tweets retrieved form twitter using a server side script in compliance with twitter API ver 1.1. For this, the script sit on top of the *"PHP Library to support OAuth for Twitter's REST API" created by [Abraham Williams](https://github.com/abraham/twitteroauth).*

How to use this ?
-------------------------

Fisr of all download the files and place them wherevere you want, then, fill in the information on the files 

`````
PHP/Twitter/twitter.php
JS/Twitter.JS
`````

Onces you have donde that decide the interval/rate_of_refresh for the script to cache your tweets, onces you have donde so, go ahead and edit the file

`````
PHP/cache_tweets_auto.php
`````

Last but not least, include this file whereever you are goign to use your twitter feed

`````
require_once("PHP/cache_tweets_auto.php")
`````

And you are pretty much set, if you have any doubs, check out the provided example file

`````
example.php
`````

License of this software ?
-------------------------
All files, unless otherwise specified on at folder or file level, are under a Creative Commons license (CC BY-SA).
