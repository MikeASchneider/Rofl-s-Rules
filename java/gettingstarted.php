<?php
include "includes.php";
makeHeader("Getting Started");
 ?>
	<p>In this lesson, you're going to write your first Java program. This is super exciting, trust me.</p>
	<p>To make our Java programs, we'll be using Eclipse. Eclipse is a piece of software called an IDE (Integrated Development Environment). This means that Eclipse has lots of useful tools you might need built in to help you to make your own software. Some developers prefer to use a simpler text editor and the Java command line tool to compile and run their software, but I think you'll find that Eclipse is a lot easier to learn for new programmers.</p>
	<h3>Hello World</h3>
	<p>Create a new project, and create a new class in that project called <code>Hello</code>. Once you've got that set up, write your Hello World program. Your whole document should look something like this:</p>
<pre class="prettyprint linenums">public class Hello {
  public static void main(String[] args) {
    System.out.println("Hello world!");
  }
}</pre>
	<p>Now press run. Did it work? Congrats! You've written your first program in Java. Excited yet? No? Let's make it a little more exciting.</p>
	<h3>Changing the (hello) world</h3>
	<p>Make a new class in your Hello project:</p>
<pre class="prettyprint linenums">public class HelloName {
  public static void main(String[] args) {
    String name = "Rofl";
    System.out.println("Hello, " + name + "!");
  }
}</pre>
	<p>Change the value of <code>name</code> to be your name. What happens when you run it?</p>
	<h3>A simple calculator</h3>
	<p>Let's try something a little more exciting, now. Make a new class called <code>Calculator</code>.</p>
<pre class="prettyprint linenums">public class Calculator {
  public static void main(String[] args) {
    int x = 5;
    int y = 4;
    int z = x + y;
    System.out.println("Result: " + z);
  }
}</pre>
	<p>What do you get when you press run? Try changing the values of <code>x</code> and <code>y</code>. Did the result change? Try replacing the plus (+) sign with a different sign to do a different mathematical operation:</p>
	<ul>
		<li>Addition: <code>+</code></li>
		<li>Multiplication: <code>*</code></li>
		<li>Subtraction: <code>-</code></li>
		<li>Division: <code>/</code></li>
	</ul>
<?php makeFooter(); ?>