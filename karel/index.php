<?php require_once "appData/scripts/php/function/_init.php"; ?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="appData/style/css/style.min.css">
    <title>Karel</title>
</head>

<body>
    <main>
        <h1> KAREL</h1>

        <div>
            <form>
                <fieldset>
                    <textarea rows="10"></textarea>
                    <button>Proveď</button>
                </fieldset>
            </form>
            <div>
                <table>
                    <?php
                    require_once "appData/scripts/php/function/_gene-table.php";
                    ?>
                </table>
                <h2>Manual</h2>
                <p>vxdfsfafa</p>
            </div>
        </div>

        <?php
        require_once "appData/scripts/php/function/_footer.php";
        ?>
    </main>
</body>

</html>