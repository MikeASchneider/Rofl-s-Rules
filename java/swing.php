<?php
	include "includes.php";
	makeHeader("GUIs with Swing");
?>
	<p>Bored with doing everything in the command line? Text is fun, but graphical interfaces are way easier for humans to interact with.</p>
	<p>Let's start with a basic example, as always.</p>
<pre class="prettyprint linenums">
import javax.swing.*;

public class Swingset {
  public static void main(String[] args) {
    //first, make a window object...
    JFrame window = new JFrame("My window has a title!");
    
    //set the size of the window to a 500-pixel square
    window.setSize(500, 500);
    
    //now let's make a button...
    JButton helloButton = new JButton("Hello, Swing!");
    
    //add the button to the window
    window.add(helloButton);
    
    //by default, your program won't actually stop when
    //you close the window. Let's fix that.
    window.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    
    //now make the window actually appear
    window.setVisible(true);
  }
}
</pre>
	<p>When you run this, you should see a window with a large button.</p>
	<p>Do you understand how this works? Swing forces you to have a solid understanding of how to work with objects. You don't always have to write your own classes, but you'll have to manipulate and work with objects quite a bit.</p>
	<p>So far, our example is pretty boring. Let's make our button do stuff. See if you can find the right place to add this code. (Roll over this box for a hint:)</p>
	<p class="hint">After you create the JButton and before you add it to the JFrame</p>
<pre class="prettyprint linenums">
//add an action listener
helloButton.addActionListener(new ActionListener() {
  public void actionPerformed(ActionEvent e) {
    ((JButton) e.getSource()).setText("Button clicked!");
  }
});
</pre>
	<p>Here are some more resources for Swing that might help you:</p>
	<ul>
		<li><a href="http://docs.oracle.com/javase/tutorial/uiswing/layout/using.html">Using layout managers</a></li>
		<li><a href="http://docs.oracle.com/javase/tutorial/uiswing/layout/visual.html">Visual guide to layout managers</a></li>
		<li><a href="http://docs.oracle.com/javase/tutorial/uiswing/layout/grid.html">GridLayout</a></li>
		<li><a href="http://docs.oracle.com/javase/tutorial/uiswing/components/index.html">Using Swing components</a></li>
		<li><a href="http://docs.oracle.com/javase/tutorial/uiswing/components/tabbedpane.html">Tabbed Panes</a></li>
		<li><a href="http://stackoverflow.com/questions/31127/java-swing-displaying-images-from-within-a-jar">Displaying images from within a jar</a></li>
	</ul>
<?php
	makeFooter();
?>
