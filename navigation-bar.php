<!-- 
NAVBAR 
When making a website you might find that you have 500 pages and they all have a navigation bar
if you need to remove or add a page you will have to update all 500 pages so the nav bar is correct.

We can use HTML and CSS/JS to create this nav bar and then paste it in using PHP
and call it where we ant it. 

Within this file you will add your HTML and you can link your CSS like normal. With:
<link rel="stylesheet" href="filename.css"> 
Then within the files where you want your navigation bar you can reference it with something like this:

<php include("navigation-bar.php"); ?> //Include the ?

This means if I was to make a change to the navbar in the navigation-bar.php file it will update it all!

-->

<!-- navigation-bar.php -->

<link rel="stylesheet" href="navbar.css"> 

<nav>
    <ul>
        <li><a href="#">Home</a></li>
         <div class="dropdown">
            <button class="dropbtn">Services <i class="fa-solid fa-chevron-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
                <a href="#">Service 3</a>
            </div>
         </div>
        <li><a href="#">About</a></li>
        <div class="floatright">
            <li>
                <input type="text" class="search-bar" placeholder="Search">
            </li>
            <li><a href="#">Contact</a></li>
        </div>
    </ul>
</nav>
