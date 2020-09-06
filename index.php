<form method="post">
    Inventment Amount: <input type="text" name="first" placeholder="VND"><br>
    Yesrly Interrest Rate: <input type="text" name="year" placeholder="%"><br>
    Number of Years: <input type="text" name="count" placeholder="number"><br>
    <input type="submit" value="Find">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['first'];
    $b = $_POST['year'];
    $c = $_POST['count'];
}
$result = $a + ($a * $b/100);
echo $result . " VND";