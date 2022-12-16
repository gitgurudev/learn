<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class detail
    {
        public $name, $age;
        //constructor created
        function __construct($name = "no name", $age = 0) //default parameters set
        {
            $this->name = $name;
            $this->age = $age;
        }
        function show()
        {
            echo $this->name . " " . $this->age . "\n";
        }
    }
    $d1 = new detail();
    // $d1->name = "raj";
    // $d1->age = 22;
    $d1->show();
    ?>
</body>

</html>