<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname">

            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname">

            <label for="gender">Gender?</label>
            <select id="gender" name="gender">
                <option value = "none">None</option>
                <option value = "male">Male</option>
                <option value = "female">Female</option>
                <option value = "lgbt">LGBT</option>
            </select>
            
            <button type="submit">Submit</button>

        </form>
    </main>
</body>
</html>