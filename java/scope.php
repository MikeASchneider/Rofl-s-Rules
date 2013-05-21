<?php
include "includes.php";
makeHeader("Variable Scope");
 ?>
	<p>By now, you may have seen an Eclipse error or Java exception something along the lines of "variableName could not be resolved to a variable." Let's talk about how to prevent issues like this. Here's a code example of some broken code:</p>
<pre class="prettyprint linenums">
public static int addNumbers(int x, int y) {
  //Let's say we want to define a variable.
  String banana = "banananananananana";
  
  return x + y;
}

public static void main(String[] args) {
  //We can call the method, obviously...
  System.out.println(addNumbers(2, 5));
  
  //But if we try to print banana...
  System.out.println(banana);
}
</pre>
	<p>Try the above code in Eclipse. You should see an error that looks something like this:</p>
	<pre class="error">banana cannot be resolved to a variable</pre>
	<p>So: what caused this error? This is due to a concept called <em>scope</em>. In the above example, we defined the variable <code>banana</code> inside the <code>addNumbers()</code> method. When we did this, we created a local variable. Let's talk a bit about the different places we can declare variables:</p>
	<ol>
		<li>Class fields: If you declare a variable in a class outside of all the methods using a modifier like <code>public</code> or <code>private</code>, you create a class field. Class fields are accessible in the whole class.</li>
		<li>Method and constructor parameters: We've talked about parameters before. Parameters are accessible only within the method or constructor for which they are defined.</li>
		<li>Variables defined within a code block: By "code block" I'm referring to the bodies of for loops, while loops, and if/else if/else statements. Variables defined within these code blocks are not accessible outside of them. This includes the iterators of for loops (usually <code>i</code>).</li>
	</ol>
	<p>An easy way to understand scope is to look at the braces: Variables are accessible only inside the set of braces in which they are defined.</p>
<?php
	makeFooter();
?>