<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function likes( $names ) {
        $numUsuarios = count($names);

        if($numUsuarios<1){
            return "No one likes this";
        }
        else if($numUsuarios>0 && $numUsuarios<2){
            return $names[0] . " likes this";
        }
        else if($numUsuarios==2){
            return $names[0] . " and " . $names[1] . " likes this";
        }
        else if($numUsuarios==3){
            return $names[0] . "," . $names[1] . " and " . $names[2] . " likes this";
        }
        else return $names[0] . "," . $names[1] . " and " . ($numUsuarios-2) . " others likes this";
    }
    ?>
</body>
</html>