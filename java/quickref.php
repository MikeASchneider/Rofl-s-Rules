<?php
include "includes.php";
makeHeader("Quick reference");
 ?>
	<p>Learning programming can be overwhelming at first. There can be a lot to remember! I've put this page together as a quick reference for some things you might forget. Some of these are just useful code snippets, while others are simple examples of syntax. As always, fill out a feedback form if you think something's missing from this page!</p>

	<h3>Eclipse keyboard shortcuts</h3>
	<ul>
		<li>Auto format (fix indenting and such): Ctrl+Shift+F</li>
	</ul>
	<h3>Main method</h3>
<pre class="prettyprint linenums">
public static void main(String[] args) {
  //main method code body
}</pre>
	<h3>Printing to the console</h3>
<pre class="prettyprint linenums">
System.out.println("Hello, world!");
//now, with some variables...
System.out.println("Your favorite food is " + food + ". Have a nice day!");
</pre>
	<h3>Variables</h3>
<pre class="prettyprint linenums">
//defining variables
String cheese = "Cheddar"; //Strings are little bits of text
int count = 19;            //ints are whole numbers, positive or negative
double price = 2.49;       //doubles can have decimals
boolean isTasty = true;    //booleans can be true or false

//using variables
</pre>
	<h3>Conditions</h3>
<pre class="prettyprint linenums">
//a condition is any statement that is equal to a boolean
//conditions go inside declarations of if statements, while loops, and for loops
cost < 15            //true if cost is less than 15
cost > 15            //true if cost is greater than 15
cost == 15           //true if cost is exactly 15
cost != 15           //true if cost is not exactly 15
!isTasty             //the opposite of the value of the boolean variable isTasty
isTasty || cost < 5  //true if it is tasty OR if the cost is less than 5
isTasty && cost < 5  //true if it is tasty AND the cost is less than 5
</pre>
	<!--<h3>Operations</h3>-->
	<h3>If statements</h3>
<pre class="prettyprint linenums">
if(someCondition) {
  //code body here
} else if(someOtherCondition) {
  //second code body here
} else {
  //else code body here
}</pre>

	<h3>While loops</h3>
<pre class="prettyprint linenums">
while(someCondition) {
  //code body here
}
</pre>
	<h3>For loops</h3>
<pre class="prettyprint linenums">
for(int i = 0; i < 10; i++) {
  //code body here
  //i counts from 0 to 9, inclusive
}

//for each loop:
for(String s : stringlist) {
  System.out.println("This string: " + s);
}
</pre>
<h3>Shuffling an array</h3>
<pre class="prettyprint linenums">
Collections.shuffle(Arrays.asList(array));
</pre>
<h3>Set native look and feel</h3>
<pre class="prettyprint linenums">
UIManager.setLookAndFeel(UIManager.getSystemLookAndFeelClassName());
</pre>
<!--
	<h3>User input</h3>
	<h3>Methods</h3>
	<h3>Arrays</h3>
-->
<?php
	makeFooter();
?>
