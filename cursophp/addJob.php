<?php
    
    use Illuminate\Database\Capsule\Manager as Capsule;

    $capsule = new Capsule;

    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'database',
        'username'  => 'root',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
    
    var_dump($_GET);
    var_dump($_POST);
?>

<html>
    <head>
        <title>Add Job</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">      
    </head>
    <body>
        <h2>Add Job</h2>
        <form action="addJob.php">
            
            <br>
            <label for="">Title:</label>
            <input type="text" name="txtTitle">
            <br>
            <label for="">Description:</label>
            <input type="text" name = "txtDescription">
            <br>
            <button type="submit"  name = "btnSave">Save</button>
        </form>
    </body>
</html>