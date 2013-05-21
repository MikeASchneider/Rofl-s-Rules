<?php
include "includes.php";
makeHeader("Variables");
?>
	<p>We touched on variables a little bit in the last lesson, but let's talk about them a little more.</p>
	<h3>What is a variable?</h3>
	<p>In programming, a variable is a way to store a piece of information in the computer's memory.</p>
	<h3>Types of variables</h3>
	<p>There are a few different types of variables in Java. Types are more important in Java than some other languages that you may have heard of, like Python or JavaScript. We can talk about that more later, but let's talk about what types of variables there are.</p>
	<h3>Numeric types</h3>
	<p>(Numeric types are variables that are numbers. But you knew that, right?)</p>
	<ul>
		<li><code>int:</code> An int is an integer. Any number, without a decimal, positive or negative. Examples: 7, 0, -600, 350</li>
		<li><code>long:</code> A long is the same as an int, but it can have much larger values. Use int unless you are using <em>really, really big</em> numbers.</li>
		<li><code>double:</code> Any number, positive or negative. Can have a decimal. Examples: 6.83, 500.93215, -32.3, 15.0</li>
		<li><code>float:</code> A float is basically a less precise double. A float can have fewer decimal digits than a double.</li>
	</ul>
	<h3>Other types:</h3>
	<ul>
		<li><code>String:</code> A String is just some text. Examples: "Apples!", "pears", "BANANA", "585-555-3356". Note: <code>String</code> is capitalized when referring to it in Java. The rest of the types on this page are not capitalized.</li>
		<li><code>boolean:</code> A boolean can only have two values: <code>true</code> and <code>false</code>. If you try to set a boolean to anything else, Java will yell at you.</li>
	</ul>
	<h3>Variable über-example</h3>
	<p>This is just an example for your reference. You do not need to copy it into Eclipse.</p>
<pre class="prettyprint linenums">public class VariableExample {
  public static void main(String[] args) {
    String name = "Rofl";
    int favoriteNumber = 7;
    String favoriteFood = "tacos";
    double foodPrice = 3.99;
    double totalPrice = favoriteNumber * foodPrice;
    
    System.out.println("Hi " + name + ", your favorite number is "
                       + favoriteNumber);
    System.out.println("And your favorite food is " +
                       favoriteFood + "!");
    System.out.println("The price of " + favoriteNumber + " " +
                        favoriteFood + " is " + totalPrice);
  }
}</pre>
	<h3>Variable exercise</h3>
	<p>It's time for your first independent exercise!</p>
	<p>Make a new project for exercises. In that project, make a class called <code>VariableExercise</code>.</p>
	<p>In this class, make several different variables of different types and then print out their values. Experiment with naming them different things. What happens if you include special characters like $ or ^ in the variable name? What if it starts with a number? How about if you name a variable after a reserved word in Java, like <code>final</code>, <code>public</code>, or <code>false</code>? Try to run your code after trying these things and see what happens.</p>
	<p>Bring your code back to a working state (rename everything so that Java stops complaning). Now try removing the lines where you define the variables, but keeping the lines where you print them. What happens now?</p>
	<p>Once you've reached this step, raise your flag and explain what happened to ROFL and tell him how you fixed the issue.</p>
	<p>More information about data types is available from Oracle <a href="http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html">here.</a></p>
<?php
makeFooter();
?>