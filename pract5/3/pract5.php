<head>
    <title>Калькулятор</title>
    <style>
        .headerColor {
            color: #F2B189;
        }

        .label1Color {
            color: #D2F0D8;
        }

        .label2Color {
            color: #BD5F1F;
        }

        * {
            margin: 0;
        }

        .cool {
            width: 100%;
            height: 100%;
            background-color: #406870;
            font-size: 5vw;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="cool">
        <h1 class="headerColor">Калькулятор</h1>
        <br>
        <form action="" method="post" class="form-example">
            <div class="form-group">
                <label for="name">Выражение: </label>
                <input type="text" name="a" id="name" class="form-control">
                <div>
                    <input type="submit" value="Вычислить" class="btn btn-primary">
                </div>
                <div>
                    <?php if (isset($_POST['a'])) : ?>
                        <div>
                            <?php $expression = substr($_POST['a'], 0, 1);
                            for ($i = 1; $i <= strlen($_POST['a']) - 1; $i++) {
                                if ($_POST['a'][$i] === "+" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $expression = $expression + $_POST['a'][$i + 2];
                                }
                                if ($_POST['a'][$i] === "/" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    if ((int)$_POST['a'][$i + 2] !== 0) {
                                        $expression = $expression / $_POST['a'][$i + 2];
                                    } else {
                                        echo ("На ноль делить нельзя");
                                        break;
                                    }
                                }
                                if ($_POST['a'][$i] === "*" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $expression = $expression * $_POST['a'][$i + 2];
                                }
                                if ($_POST['a'][$i] === "-" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $expression = $expression - $_POST['a'][$i + 2];
                                }
                                if ($_POST['a'][$i] === "^" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $expression = $expression ** $_POST['a'][$i + 2];
                                }
                            }
                            Результат: echo ($expression); ?>
                        </div>
                    <?php endif; ?>
                </div>
        </form>
    </div>
</body>