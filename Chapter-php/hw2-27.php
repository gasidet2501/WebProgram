<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <link rel="stylesheet" href="hw2-27.css" />
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap');
</style>
  </head>

  <body>

    <div class="form">

    <h1 id="title">Student Information Form</h1>
    <!-- <p id="description">_____________________________________________________________</p> -->
    <hr>
    <form action="hw2-27cal.php" method="post" name="form2" id="form2">
      
        <label> <h3>Username</h3>
            <input class="write-area" type="text" maxlength="10" name="username" placeholder="Enter your Username" required> 
        </label>
        <label> <h3>Password</h3>
            <input class="write-area" type="password" maxlength="6" size="6" name="pass" placeholder="Enter your Password" required> 
        </label>
        <label > <h3>Email</h3> 
            <input class="write-area" name="email" type="email" placeholder="Enter your email" required> 
        </label>

      <label><h3>Sex</h3>
        <label> <input type="radio" name="sex" value="1" /> Male </label>
        <label> <input type="radio" name="sex" value="2" /> Female </label>
      </label>
      
      <label><h3>Hobby</h3></span>
        <label> <input type="checkbox" value="Read a book" name="hobby1"/> Read a book </label>
        <label> <input type="checkbox" value="Watch Tv" name="hobby2"/> Watch Tv </label>
        <label> <input type="checkbox" value="Play Football" name="hobby3"/> Play Football </label>
        <!-- <label> <input type="checkbox" value="Read" name="hobby[]"/> Read a book </label>
        <label> <input type="checkbox" value="Watch" name="hobby[]"/> Watch Tv </label>
        <label> <input type="checkbox" value="Play" name="hobby[]"/> Play Football </label> -->
      </label>

      <label><h3>Color</h3></span>
        <label> <input type="checkbox" value="Red" name="color[]"/> Red</label>
        <label> <input type="checkbox" value="Green" name="color[]"/> Green</label>
        <label> <input type="checkbox" value="Blue" name="color[]"/> Blue
      </label>

      
      <label><h3>Upload File</h3>
        <input type="file" name="file"/>
      </label>

      <input type="submit" id="submit" >
      <input type="reset" id="reset" >

    </form>
  </div>

  </body>

</html>