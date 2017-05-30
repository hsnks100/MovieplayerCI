<html>
    <head>
        <title><?=$page_title?></title>
    </head>
    <body>
        <?php foreach($result as $row):?>
        <h3><?=$row->name?></h3>
        <p><?=$row->email?></p>
        <br />
        <?php endforeach;?>
    </body>
</html>

