<form name="form" action="" method="get"> 
    <h1>Shopping List Wow</h1>
    <label for="input">Input item</label><br>
    <input type="text" id="itemText" name="item">
    <button id="add">Add</button><br>
</form>
<?php

    $name = $_GET['item'];

    class Item {
        //properties
        public $itemName;
        public $important;

        function __construct($itemName) {
            $this->itemName = $itemName;
            $this->important = 'false';
        }
    }
    $x = 0;
    $list = [];

    if (isset($name)) {
        $it = new Item($name);
        $list[$x] = $it;
        $x++;
    }
    // $newItem = new Item($name);
    //first, add the input into an array. Maybe add the input as a name property and add it to an array.

    // $list[] = $newItem;
    // array_push($list, $newItem);
    print_r($list);

    $countries = array();

    $x = 0;

    do {
        $countries[$x] = 
            [
                "name" => $jsonData["features"][$x]["properties"]["name"],
                "iso_a2" => $jsonData["features"][$x]["properties"]["iso_a2"],
                "iso_a3" => $jsonData["features"][$x]["properties"]["iso_a3"],
                "iso_n3" => $jsonData["features"][$x]["properties"]["iso_n3"],
            ];
        $x++;
    } while ($x < $numCountries);

    echo json_encode($countries);
?>