<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Calcule</title>
    </head>
    <body class="antialiased">
        <div><?= isset($result) && $result['type'] == "error" ? $result['message'] : ''?></div>
        <h2>Somme de deux Nombres</h2>
        <form action="/" method="post">
            @csrf
            <label for="first_number">First Number:</label>
            <input type="text" id="first_number" name="first_number" ><br>

            <label for="second_number">Second Number:</label>
            <input type="text" id="second_number" name="second_number" ><br>

            <input type="submit" value="Calculer">
        </form>
        <div><?= isset($result) && $result['type'] == "success" ? $result['message'] : ''?></div>
    </body>
</html>
