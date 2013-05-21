<?php
include "includes.php";
makeHeader("User Input");
 ?>
	<p>So far, we haven't actually been interacting with our programs. Let's spice things up a bit with a Java class called Scanner. Code example time!</p>
<pre class="prettyprint linenums">
import java.util.*;
public class InputTest {
  public static void main(String[] args) {
  	//Make a Scanner object:
    Scanner s = new Scanner(System.in);
    
    //Print a message to the user:
    System.out.println("What's your name?");
    
    //Sets name to be the user's next inputted String
    String name = s.nextLine();
    System.out.println("Nice to meet you, " + name + "!");
  }
}
</pre>
	<p>Try running the above example. Did it work?</p>
	<p>If you need to take a number instead of a String, use nextInt() instead.</p>
<pre class="prettyprint">
int i = s.nextInt();
</pre>
	<p>For more information on Scanner, check out <a href="http://docs.oracle.com/javase/7/docs/api/java/util/Scanner.html">the Javadocs for Scanner</a>.</p>
<?php
	makeFooter();
?>