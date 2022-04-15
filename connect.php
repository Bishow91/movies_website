<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="view" content="width=device-width, initial-scale = 1.0" />
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/release/v5.10.0/css/all.css"
    />
  </head>
    <body>
    <section id="header">
      <div>
        <ul id="navbar">
          <li><a class="active" href="Home.html">HOME</a></li>
          <li><a href="connect.php">MOVIES</a></li>
          <li><a href="genre.html">GENRE</a></li>
          <li><a href="tvShows.html">TV SHOWS</a></li>
        </ul>
      </div>
    </section>
    <div id = "title" >Search Movies</div>
    <section>
        <form action="" method="POST">
            <input id ="searchbar"type="text" name = "Name" placeholder="Search movie"><br/>
            <input type = "submit" name = "search" value = "Search">
            <input type = "submit" name = "release" value = "Release Year">

        </form>
        <?php
        $connection = mysql_connect("localhost","root","");
        $db = mysqli_select_db($connection,'dev');
        if(isset($_POST['search'])){
            $Name = $_POST["Name"];
            $query = "SELECT * FROM movies where Name = '$Name'";
            $query_run = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($query_run)){
                ?>
                <tr>
                    <td><?php echo $row["Name"];?><td>
                    <td><?php echo $row["DirectorName"];?><td>
                    <td><?php echo $row["GenreName"];?><td>
                </tr>
                <?php
            }
        } 
        if(isset($_POST['release'])){
            $Name = $_POST["release"];
            $query = "SELECT * FROM movies where ReleaseYear = '$Name'";
            $query_run = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($query_run)){
                ?>
                <tr>
                    <td><?php echo $row["Name"];?><td>
                    <td><?php echo $row["DirectorName"];?><td>
                    <td><?php echo $row["GenreName"];?><td>
                </tr>
                <?php
            }
        } 
        ?>
    </section>
    </body>
</html>