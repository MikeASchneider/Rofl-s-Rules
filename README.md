Rofl's Rules
============
Rofl's Rules is a site I created to teach children programming in Java. Use it at your own risk. It requires a server
on PHP 5 (it might work on PHP 4, but I've never tested it), and does not use databases. To add a new page, create a 
new PHP file and add this to the top:

     <?php
     include "includes.php";
     makeHeader("Page title");
     ?>
     
and this to the bottom:

    <?php
    makeFooter();
    ?>
    
To make it show up on the sidebar, add a line like this...

    "filename.php" => "Link title"
    
...to the `$pages` array in `includes.php`.

Rofl's Rules Java Tutorials includes Google Code Prettify. To add a code example to a page, just add this bit of HTML:

    <pre class="prettyprint linenums">
    //code goes here
    </pre>
    
Rofl's Rules uses Less.js to render sexy LESS stylesheets in the browser. This happens automatically. For more information
about LESS, check out [http://lesscss.org/](lesscss.org/).

If you have any questions, open a GitHub Issue or hit me up on Twitter 
[@MikeASchneider](http://twitter.com/mikeaschneider).
