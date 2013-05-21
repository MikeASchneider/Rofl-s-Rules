<?php
include "includes.php";
makeHeader("Arrays");
 ?>
	<p>There are times where we need to store lots of related variables at once. For example, if you have a bunch of names you need to store, you could use a program like this:</p>
<pre class="prettyprint linenums">
public class ArrayExample {
  public static void main(String[] args) {
    //define the array
    String[] names = {
      "Anthony", "Jack", "$C-MONEY$", "Justin",
      "Kevin", "Jerome", "Ben", "2am"
    };
    
    //if we need to print the first value out... 
    System.out.println(names[0]);
    
    //let's loop through the array and print out every name
    for(int i = 0; i < names.length; i++) {
      System.out.println(names[i]);
    }
  }
}
</pre>
	<p>This is just one way to create an array. Here's another way:</p>
	
<pre class="prettyprint linenums">
//add this code to your main method from before.
int[] numbers = new int[8];
for(int i = 0; i < numbers.length; i++) {
  numbers[i] = i;
}
</pre>
	<p>What do you think this array looks like? What are the values? Once you think you understand it, try writing your own loop to print out the values and check if you are right.</p>
	<p>A few things to keep in mind about arrays:</p>
	<ul>
		<li>You can make an array of any type. I used <code>int</code> and <code>String</code> in these examples, but you could use anything else, like a <code>JButton</code> or even objects of a class you create yourself.</li>
		<li>Arrays have a fixed length. If you need to be able to add or remove items from an array, consider using an <code>ArrayList</code> instead. (More info on ArrayLists can be found in the Java docs <a href="http://docs.oracle.com/javase/7/docs/api/java/util/ArrayList.html">here</a>.</li>
	</ul>
	<p>What are some situations where you would need to use an array? Will you need it for your game?</p>
	<p>Some other useful array resources:</p>
	<ul>
		<li><a href="http://www.willamette.edu/~gorr/classes/cs231/lectures/chapter9/arrays2d.htm">2 dimensional arrays</a></li>
	</ul>
<?php
	makeFooter();
?>