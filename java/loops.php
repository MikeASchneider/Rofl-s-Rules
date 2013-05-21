<?php
include "includes.php";
makeHeader("Loops");
 ?>
	<p>Sometimes, you'll need to run pieces of code multiple times. To do this, programmers use something called <em>loops</em>.</p>
	<h3><code>while</code> loops</h3>
	<p>While loops are the simplest type of loops in Java. They look something like this.</p>
<pre class="prettyprint linenums">int x = 0;
while(x < 5) {
  System.out.println("The value of x right now: " + x);
  x++;
}</pre>
	<p>What do you think the code above does? Don't paste it into Eclipse! Think about it first.</p>
	<p>Think you know what it will do? Try running it. How many items does it print? What is the last value that it prints? What if you wanted to make it print different values? What if you wanted it to print more values?</p>
	<h4>The anatomy of a while loop</h4>
<pre class="prettyprint">while(x < 5)</pre>
	<p>The first line of a while loop contains two things. First, we tell Java that we're writing a while loop with the keyword <code>while</code>. Second, inside the parentheses, we provide a conditional. This is very similar to the first line of an if statement - Anything that goes in an <code>if</code> conditional can go inside a <code>while</code> conditional. The while loop continues to execute, checking the conditional each time, until the conditional stops being <code>true</code>.</p>
<pre class="prettyprint">  System.out.println("The value of X right now: " + x);
  x++;</pre>
	<p>In between the curly braces, we put the block of code that will execute until the while loop stops being true.</p>
	
	<h3><code>for</code> loops</h3>
	<p>For loops are like more specific and more streamlined while loops. Let's start with a brief code example:</p>
<pre class="prettyprint linenums">for(int i = 0; i < 5; i++) {
  System.out.println("The value of i right now is: " + i);
}</pre>
	<p>What will this do? What will be the highest number that it will print? How many lines will be printed? What are the similarities and differences between this for loop and the above while loop?</p>
	<h4>Anatomy of a for loop</h4>
	<p>Let's break apart the first line of our for loop into several lines, so we can understand how it works better.</p>
<pre class="prettyprint linenums">for(       // Telling Java that we're in a for loop
int i = 0; // making a new variable called i, initializing it at zero
i < 5;     // keep going as long as i is less than 5
i++;)      // increment i after each run through the code block
</pre>
	<p>Try writing a few for loops of your own. Make the loop iterate to a higher number. Make it start with a different number. Try making a backwards loop that starts at 10 and counts down to 0.</p>
	<h3>Breaks and continues</h3>
	<p>If you need to stop all execution of any loop (for or while), use the <code>break</code> statement. If you need to end this run through the loop and skip to the next one, use the <code>continue</code> statement.</p>
<?php
	makeFooter();
?>