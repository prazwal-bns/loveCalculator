<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-color: #010026;
        color: #fff;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 10rem;
    }

    .form-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    h1 {
        display: flex;
        margin-top: 2rem;
        justify-content: center;
        align-items: center;
    }

    .form-control {
        width: 300px;
        margin-right: 10px;
    }

    .rounded-img {
        border-radius: 50%;
        height: 100px;
        width: 100px;
    }
</style>

<body>
    <form method="POST">
        <div class="container">
            <h1>Love Calculator !! 💙👀 </h1>
            <div class="form-container">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAt3KIGA8h4N2FuC-6Ac4GyDVnxVNEnxRMxg&usqp=CAU"
                    alt="boy" class="rounded-img me-3">
                <input type="text" class="form-control" placeholder="Boy Name" name="boyName">
                <button type="submit" class="btn btn-primary mx-3">Calculate</button>
                <input type="text" class="form-control" placeholder="Girl Name" name="girlName">
                <img src="https://png.pngtree.com/png-vector/20220725/ourmid/pngtree-surprised-redhead-young-woman-talking-on-the-phone-png-image_6053911.png"
                    alt="girlImg" class="rounded-img">
            </div>
        </div>
    </form>
    <?php
    ini_set('display_errors', 0);
    $boy = strtolower($_POST['boyName']);
    $girl = strtolower($_POST['girlName']);

    $boyArr = str_split($boy);
    $girlArr = str_split($girl);

    $intersection = array_intersect($boyArr, $girlArr);
    $girlArr = str_split($girl);

    $countSame = count(($intersection));
    $countBoy = count(($boyArr));
    $totalPercentage = floor($countSame / $countBoy * 100);
    echo "<h1>You are matched by $totalPercentage %.";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>