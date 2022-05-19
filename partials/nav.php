<link rel="stylesheet" href="static//styles.css">

<style>
    nav li
    {
        display: inline;
    }
    nav ul
    {
        list-style-type: none;
    }
    nav
    {
	vertical-align: middle;
	height: 40px;
	background-image: linear-gradient(#73BC2D, #355600);
	border-radius: 9px;
	box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    }
    nav   a
    {
	vertical-align: middle;
        color: white;
        text-align: center;
        padding: 10px 18px;
        text-decoration: none;
	border-radius: 9px;
    }
    nav a:hover 
    {
	background-image: linear-gradient(#FDC956, #f9982b);
        color: #305D00;
	box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    }
    nav-right {
	float: right;
    }

    .dropbtn 
    {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown 
    {
        position: relative;
        display: inline-block;
    }

    .dropdown-content 
    {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a 
    {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content 
    {
        display: block;
    }

    .dropdown:hover .dropbtn 
    {
        background-color: #3e8e41;
    }
</style>

<nav>
    <ul>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="about.php">About</a></li>
	        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>