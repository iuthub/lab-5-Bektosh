<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Received Using POST</title>
  </head>
  <body>
    <?php if($_SERVER["REQUEST_METHOD"]=="GET") { ?>
        <h1>HTTP GET is forbidden. Use HTTP POST to access this page.</h1>
    <?php } else { ?>
        <h1>Values Received</h1>
        <table>
          <tr>
            <td>Name</td>
            <td><?= $_GET["Nmae"] ?></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><?= $_POST["q"] ?></td>
          </tr>
        </table>
    <?php } ?>
  </body>
</html>
