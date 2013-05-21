<?php
include "includes.php";
makeHeader("Objects");
 ?>
	<p>Understanding objects is without a doubt the hardest obstacle that faces aspiring programmers. As always, if you have any questions, please do not hesitate to ask.</p>
	<p>The dictionary definition of an object (within the context of programming) is "an instance of a class." Classes can have fields and methods. This seems a bit confusing, and it may be hard to see why it's useful, so let's jump right in with a code example.</p>
	<h5>FoodItem.java</h5>
<pre class="prettyprint linenums">
public class FoodItem {
  private String name;
  private double price;
  
  public FoodItem(String name, double price) {
    this.name = name;
    this.price = price;
  }
  
  public String getName() {
    return name;
  }
  
  public void setName(String name) {
    this.name = name;
  }
  
  public double getPrice() {
    return price;
  }
  
  public void setPrice(double price) {
    this.price = price;
  }
}
</pre>
	<h5>TestFoods.java</h5>
<pre class="prettyprint linenums">
public class TestFoods {
  public static void main(String[] args) {
    FoodItem food1 = new FoodItem("banana", 1.29);
    System.out.println("Food item 1: " + food1.getName());
    System.out.println("Price: " + food1.getPrice());
  }
}
</pre>
	<p>Try running this code in Eclipse. Remember that there are two classes - remember to put each class in its own file.</p>
	<p>Do you understand how this works? You've seen some of this already; which parts do you not recognize? Let's analyze the anatomy of the FoodItem class.</p>
<h5>FoodItem.java (annotated)</h5>
<pre class="prettyprint linenums">
public class FoodItem {
  // First, our instance variables:
  private String name;
  private double price;
  
  // This is a constructor.
  public FoodItem(String name, double price) {
    this.name = name;
    this.price = price;
  }
  
  // This is a "getter" method.
  // It returns the value of the "name" instance variable.
  public String getName() {
    return name;
  }
  
  // This is a "setter" method.
  // It changes the value of the "name" instance variable.
  public void setName(String name) {
    this.name = name;
  }
  
  // Another getter
  public double getPrice() {
    return price;
  }
  
  // Another setter
  public void setPrice(double price) {
    this.price = price;
  }
}
</pre>
	
	<p>Let's talk about the new concepts introduced here.</p>
	<ul>
		<li><em>Constructors</em> are pieces of code that look a bit like method declarations, but they do not have a name of their own and they never return a value.</li>
		<li><em>Instance variables</em>, also called <em>non-static fields</em> are available for use throughout the class. Unlike <em>static fields</em>, they can have different values in each instance of a class (that's called an object, remember?).</li>
		<li>If you don't remember what a <em>method</em> is, you should re-read my section on <a href="methods.php">methods</a>.</li>
	</ul>
	<p>So why are objects useful? My feelings on this are pretty in line with <a href="http://docs.oracle.com/javase/tutorial/java/concepts/object.html">Oracle's</a>: Modularity, information hiding, code re-use, and "pluggability". Basically, these are just different ways of saying that objects allow you to store information in a very programmer-friendly way. Some things you'll do with the Java library would be either impossible or very difficult without object-oriented programming.</p>
	
	<p></p>
	
<?php
	makeFooter();
?>
