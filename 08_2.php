
<form acction="courier.php" method="post">
    <select class="form-select" name="select" multiple aria-label="multiple select example">
        <option selected>Выбери число</option>
        <option value="1">1</option>
        <option value="3">3</option>
        <option value="5">5</option>
        <option value="7">7</option>
        <option value="19">19</option>
        <option value="70">70</option>
        <option value="90">90</option>
        <option value="155">155</option>
    </select>
    <button type="submit" class="btn btn-primary">Посмотреть</button>

</form>

<hr>
<?php


$select = $_POST['select'];

function diamond($num)
{
    if ($num < 0 || !($num % 2)) {
        return 'Число не простое';
    }
        for ($i = 1; $i < $num + 1; $i += 2) {
            $space = $num - $i;
            echo str_repeat('&nbsp;', $space);
            echo  str_repeat('*', $i) . "<br>";

        }
        for($i = $num -2; $i > 0; $i -=2){
            $space = $num - $i;
            echo str_repeat('&nbsp;', $space);
            echo str_repeat('*', $i). '<br>';
        }
}


print_r(diamond($select));
