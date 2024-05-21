
<?php
session_start();
?>

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
?>