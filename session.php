<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
    <link rel="stylesheet" href="session.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"
    
</head>

<body>
    <div class="main_div">
        <div class="head">
            <dir>
            <i id="icon" class="fa fa-user-circle"></i>
            </dir>
            <h2>Welcome User</h2>
        </div>
        <br>

        <div class="data">
                <div>
                    <form action="">
                        <button type="submit" name="edit"><i class="fa fa-pencil"> Edit infomation</i></button>
                    </form>
    <br>
                    <form action="">
                        <button type="submit" name="save"> <i class="fa fa-cloud"> Save</i></button>
                    </form>
    <br>
                    <form action="delet.php" method="POST">
                        <input type="hidden" name="pickid">
                        <button type="submit" name="delete"> <i class="fa fa-trash"> Delete</i></button>
                    </form>
                </div>
<br>
                <div>
                    <div class="container">                                
                        <table class="table">
                          <thead>
                            <tr>
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Age</th>
                              <th>Tel no</th>
                              <th>Email</th>
                              <th>Subjects Tought</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td id="tdfirstname"></td>
                              <td id="lastname"></td>
                              <td id="email"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>                      
                </div>
        </div>

      

        <div class="logout">
          <form action="session.php" method="POST">
            <a href="session.html"><button id="delete" name="delete" class="fa fa-sign-out">Log Out</button></a>
          </form>
        </div>
    </div>

    
</body>
</html>