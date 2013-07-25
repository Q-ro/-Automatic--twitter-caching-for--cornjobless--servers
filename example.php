<?php
/*
  Document   : example.php
  Created on : Jul 25, 2013, 5:08:44 PM
  Author     : Andres Mrad (Q-ro)
  Description:
  An examle of how to use the "conrjobless" php script

  License    : Creative-Commons Attribution-ShareAlike 3.0 Unported (CC BY-SA 3.0).
  Creadits   : Based of a work by Tom Elliott  at "Web Dev Door".
 */

include_once('PHP/cache_tweets_auto.php');
?>
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <title>Example page for "Conrjobless" twitter caching</title>
        <link rel="stylesheet" href="style.css">        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="JS/Twitter.js"></script>
    </head>
    <body>

        <aside id="side_Bar" class="side_Bar span_2_of_3 clearfix">

            <div class="header twitter_Header">
                <h3>Latest Tweets</h3>
            </div>
            <div id="twitter_Feed" class="twitter">
            </div>

        </aside>

    </body>
</html>