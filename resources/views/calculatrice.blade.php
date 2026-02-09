<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <form action="/calculer" methode="post">
        @csrf
         <h2> Calculatrice </h2>
        <input type="number" name="a" id="">
        <input type="number" name="b" id="">

        <select name="op" id="">
                <option  value ="+"> +<option>
                <option  value ="-"> -<option>
                <option  value ="*"> *<option>
                <option  value ="/"> /<option>
</select>
         <button type="sumbit">OK</button>
</form>

<h3> Résultat : </h3>
</body>
</html>

