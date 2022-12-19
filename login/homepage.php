<html lang="en">
<head>
<title>HOME PAGE</title>
<style>
  * {
    box-sizing: border-box;
  }
  body {

    margin: 20px;
    background-color: #dfc6c6;
  }
.row{
  margin:10px;
  float: left;
  }
  /* Style the header */
  .header {
    background-color: #c09c9c;
    padding: 20px;
    text-align: center;
    font-size: 30px;
  }

  /*Style the navigation bar */
  .topnav {
    overflow: hidden;
    background-color: #333;
  }
  /* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
/*text align */
p{
  text-align: left;
  float: left;
}

  </style>
  </head>
  <body>
  
  <div class="header">
    <h1><u>CODOSHALA</u></h1>
  </div>
  <div class="topnav">
    <!--giving the link of home page in top navigation bar--> 
    <a href="http://localhost/Project%20development/login/homepage.php">HOME</a>
         <!--giving the link of log out at home page in top navigation bar--> 
 <a style="float: right;" onclick="window.location.href = 'logout.php';">LOG OUT</a>
    <a></a>
   <!-- desining the web development heading-->
</div>
  <div class="row">
  <div class="leftcolumn">
  <div class="card">
  <h2>What is Web Develpoment ?</h2>
  <p><big>Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design,
   web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. 
  websites.</big></p>
  </div>
  <!-- giving the image of web develpoment-->
      <img name="webdev" alt="webdev" src="webdev.jpeg" height="300px">
      <!--giving the other theory portion here-->
     <p><h2><u>»The word Web Development is made up of two words, that is:</u></h2></p>
     <ul>
     <li><u><h3>Web:</h3></u> <big>It refers to websites, web pages or anything that works over the internet.</big></li><br>
     <li><u><h3>Development:</h3></u> <big>It refers to building the application from scratch.</big></li><br>
     <h2><u>»Web Development can be classified into two ways:</u></h2>
        <ul>
        <li><h3>Frontend Development</h3> <big>It is the development of the graphical user interface of a
           website, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that website</big></li>
        <li><h3>Backend Development</h3> <big>Back-end development means working on server-side software, which focuses on everything you can't see on a website.</big></li>
        </ul>
        <p><h2><u>»Some Web Develpoment Launguages are :</h2></u></p>
        <ul>
          <li>HTML</li><br>
          <li>CSS</li><br>
          <li>JAVASCRIPT</li>
        </ul><br>
        <!-- Creating a navigation bar at bottom for different web pages-->
        <div class="topnav">
          <a onclick="window.location.href ='html.php';">HTML</a>
          <a onclick="window.location.href ='css.php';">CSS</a>
          <a onclick="window.location.href ='JSpage.php';">JAVASCRIPT</a>
        
     </body>
</html>