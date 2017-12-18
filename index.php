<?php
ini_set('display_errors', '1');

//echo $_GET["page"];
?>
<h1>Hello world</h1>

<a href="home.html">home.html</a></br>
<a href="page/1.php">page1.php</a></br>
<a href="page/2.html">page2.html</a></br>
<a href="page/3.html">page3.html</a></br>


<form action="Output.php" method="POST">
    Введите х: <input type=text name=x><br/>
    Введите у: <input type=text name=y><br/>
    Выбирете действие:
    <select name="action" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="Submit" value="Result">
</form>

