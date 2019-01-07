<?php
include "config.php";
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .container{ width: 350px; padding: 100px; }
    </style>
</head>
<body>
    <div class="container">
            <div class="form-group">
            	<div class="row">
            		
               <form action="/add.php">
                   <input type="submit" value="Add teacher" />
               
               <form action="/view.php">
                   <input type="submit" value="View class" />
               
               <form action="/logout.php">
                   <input type="submit" value="Logout" />
               </form>
             </form>
           </form>
              </div>
          
        <html lang="en">
        <head>
         
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>

        <div class="container">
          <h2>List of teachers</h2>
          
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Username</th>
                <th>name</th>
                <th>post</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr> <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              
            </tbody>
          </table>
        </div>

        </body>
        </html>

    </div>    
</body>
</html>