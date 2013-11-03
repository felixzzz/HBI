<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />        
        
        <script type="text/javascript" src="<?=base_url()?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugin/bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <table>
            <tr>
                <td></td>
                <td><h1><?=$title?></h1></td>
            </tr>
            <tr>
                <td style="vertical-align: top"><?=$menu?></td>
                <td><?=$content?></td>
            </tr>
        </table>
    </body>
</html>