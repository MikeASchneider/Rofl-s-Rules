<?php
include "includes.php";
makeHeader("Bank Account");
 ?>
 	<p>Make a class (BankAccount.java) that meets all of the following:</p>
 	<ul>
 		<li>A constructor that takes in the user's name (assume they start with $0)</li>
 		<li>A property called <code>name</code> that holds the account holder's name (<code>String</code>).</li>
 		<li>A property called <code>balance</code> that holds the account holder's current balance (<code>int</code>)</li>
 		<li>A method called <code>deposit</code> that increases the account holder's balance by a given amount.</li>
 		<li>A method called <code>withdraw</code> that decreases the account holder's balance by a given amount.</li>
 		<li>A method called <code>getBalance</code> that return's the user's balance.</li>
 		<li>A method called <code>getName</code> that returns the account holder's name.</li>
 	</ul>
 	<p>Make a second class (BankTest.java) to be your test class. This will be similar to TestFoods.java - You'll have a main method, create three accounts, print their balance, do some deposits and withdrawals, and print their balances again. Make sure you test every method you've written!</p>
<?php
	makeFooter();
?>