<html>

<body>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php
    include 'vars.php';
    echo "I have a $color $car.";
    ?>
    <?php
    include 'footer.php';
    ?>
    <?php
    include 'noneExistFile.php';
    echo "With error. Not executed.";
    ?>
</body>

</html>