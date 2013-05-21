<?php
include "includes.php";
makeHeader("If statements");
 ?>
	<p>The if statement is one of the most fundamental ways to control how programs work. Let's start with a code example, as always.</p>
<pre class="prettyprint linenums">
public class Conditionals {
  public static void main(String[] args) {
   if(5 < 10) {
     System.out.println("Five is less than ten!");
   }
  }
}</pre>
	<p>This example is pretty simplistic - your code will probably be a little more meaningful - but the concept of how an if statement works is the same. If the condition between the parentheses is true, everything between the braces will execute. Otherwise, it will not.</p>
	<p>Here are some examples of conditions you might test for in an if statement.</p>
	<ul>
		<li>Any <code>boolean</code> variable. E.g., <code>isEnabled</code>, <code>isTrue</code>, etc.</li>
		<li>Any method that returns a boolean. E.g., <code>isEnabled()</code>.</li>
		<li>Comparisons. E.g. <code>3 < 10</code>, <code>itemPrice < 10.5</code>.</li>
	</ul>
	<em>Alert! In Java, <code>=</code> is used to set or change values. We use <code>==</code> to check the value. You should never use <code>=</code> in an if statement conditional!</em>
	<h3><code>else</code> statements</h3>
	<p>What if you want to execute a little bit of code only if the previous if statement was not true? Then you use an else statement. Here comes another code example! <strong>Add this one to the main method from the previous example.</strong></p/>
<pre class="prettyprint linenums">if(isEnabled) {
  System.out.println("It's enabled!");
} else {
  System.out.println("It is not enabled.");
}</pre>
	<p>Pretty simple, no? Now, you could just do <code>if(!isEnabled)</code> if you wanted, but it's a lot easier for you or other programmers to read and understand if you use an else statement.</p>
	<p><em>(Psst! In Java, the ! means "not", as in "not isEnabled". You might need that in your project!)</em></p>
	<h3><code>else if</code> statements</h3>
	<p>There are situations where you need to check multiple related things at the same time. For these situations, we use an <code>else if</code> statement. This code example checks if the variable <code>price</code> is within the range of $5-$20, and tells the user if the price is too high or too low.</p>
<pre class="prettyprint linenums">if(price < 5) {
  System.out.println("The price is too cheap!");
} else if(price > 20) {
  System.out.println("The price is too expensive!");
} else {
  System.out.println(price + " is a fine price.");
}</pre>
	<p>So, now you might be asking yourself: Why would you use <code>else if</code> statements rather than just if statements?</p>
	<p>There are times where you'll see different results if you try to write your code with several if statements rather than else if statements, but even in situations where that is not the case, it is more efficient to use else if statements when you can, because once one of your tests "passes", Java stops checking, so your code will run quicker.</p>
<?php
	makeFooter();
?>