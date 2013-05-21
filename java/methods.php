<?php
include "includes.php";
makeHeader("Methods");
 ?>
	<p>When writing your code, you'll find that there are times where you need to repeat pieces of code over and over. Sometimes you'll do it because you're changing values, and sometimes you'll just need to get a piece of information. Regardless, we accomplish this with a concept called <em>methods</em>.</p>
	<p>In this code example, we define a method called addNumbers:</p>
<pre class="prettyprint linenums">public static int addNumbers(int x, int y) {
  int sum = x + y;
  return sum;
}</pre>
	<p>This method is pretty simple, but let's dissect it a bit.</p>
	<ul>
		<li><code>public</code>: This is an access modifier. The other access modifiers are <code>private</code> and <code>protected</code>, and you'll learn more about how they're important later. More info on access modifiers is available from Oracle <a href="http://docs.oracle.com/javase/tutorial/java/javaOO/accesscontrol.html">here</a>.</li>
		<li><code>static</code>: This means that the method refers to the class, rather than the object. If you don't quite understand what that means yet, that's fine! We haven't gotten there yet. For now, your methods will be static; we'll be dropping the static modifier once we start learning about objects.</li>
		<li><code>int</code>: You've seen this before - <code>int</code> is the return type of this method. This function will return an integer. If you don't want to return a value, you should set your return type to <code>void</code>.</li>
		<li><code>addNumbers</code>: This is the name of the method. In this case, since we're adding two numbers together, we're calling it <code>addNumbers</code>. Method names should always be verbs - "get", "add", "find", are all examples of words that should be in a method name.</li>
		<li><code>(int x, int y)</code>: These are the <em>parameters</em> we're taking into our method. Parameters are just variables that can be used inside the function. In this case, we're taking two <code>int</code>s, and we're calling them x and y.</li>
		<li><code>int sum = x + y</code>: You've seen this before. We're making a new variable (an integer), calling it <code>sum</code>, and we're setting it to be equal to <code>x + y</code>.</li>
		<li><code>return sum</code>: Here, we're returning our value. When we defined the method, we promised Java we would return an integer, and on this line we're fulfilling our promise. When someone calls this method, they'll get the value of <code>sum</code> back.</li>
	</ul>
	<p>Okay, now that we've defined a method, let's test it out, shall we?</p>
<pre class="prettyprint linenums">public static int addNumbers(int x, int y) {
  int sum = x + y;
  return sum;
}

public static void main(String[] args) {
  int x = 8;
  int y = 10;
  int answer = addNumbers(x, y); // should be 18
  System.out.println("The sum of " + x + " and " + y + ":");
  System.out.println(answer);
}</pre>
	<p>See where we called the method? On line 9, we set the new variable <code>answer</code> to the value returned when we run <code>addNumbers</code> with x and y. In Java, we call methods by saying their name and providing the parameters as a comma-separated list within parentheses.</p>
<?php
	makeFooter();
?>