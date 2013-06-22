Rofl's Rules
============
Rofl's Rules is a site I created to teach children programming in Java. Use it at your own risk. It requires a server on PHP 5 (it might work on PHP 4, but I've never tested it), and does not use databases. To add a new page, create a new PHP file and add this to the top:

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
    
Rofl's Rules uses Less.js to render sexy LESS stylesheets in the browser. This happens automatically. For more informatio about LESS, check out [http://lesscss.org/](lesscss.org/).

All content is Creative Commons Attribution-ShareAlike 3.0 Unported licensed, which means you can copy, reuse, remix,and do whatever you like with Rofl's Rules (even if you intend to profit, but good luck with that) so long as you share it with the same license and give me ("Rofl," "Mike Schneider," or "@MikeASchneider" will suffice) credit. The code is MIT licensed, I guess? Do whatever you want with the code examples; I don't think they're substantial enough to get their own license.

The latest version of Rofl's Rules as of summer 2012 is viewable online at [http://roflsrules.com/](http://roflsrules.com/).

If you have any questions, open a GitHub Issue or hit me up on Twitter [@MikeASchneider](http://twitter.com/mikeaschneider).


License:
Copyright (C) 2013 Mike Schneider

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

