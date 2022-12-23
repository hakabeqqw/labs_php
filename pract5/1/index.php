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
                <label class="label1Color" for="name">Значение a:</label>
                <input type="text" name="a" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label class="label2Color" for="email">Значение b:</label>
                <input type="text" name="b" id="email" class="form-control">
            </div>
            <div>
                <label for="*">*</label>
                <input type="radio" name="RadioChoice" value="product" class="btn btn-primary">
                <label for="/">/</label>
                <input type="radio" name="RadioChoice" value="division" class="btn btn-primary">
                <label for="-">-</label>
                <input type="radio" name="RadioChoice" value="minus" class="btn btn-primary">
                <label for="+">+</label>
                <input type="radio" name="RadioChoice" value="plus" class="btn btn-primary">
            </div>
            <div>
                <input type="submit" value="Вычислить" class="btn btn-primary">
            </div>
            <div>
                <?php if (isset($_POST['a']) && isset($_POST['b'])) : ?>
                    <div>
                        <?php $choice = $_POST['RadioChoice'] ?>
                        <?php if ($choice == 'product') : ?>
                            <div>
                                Результат: <?php echo $_POST['a'] * $_POST['b'] ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($choice == 'division') : ?>
                            <div>

                                <?php if ($_POST['b'] != 0) : ?>
                                    <div>Результат: <?php echo $_POST['a'] / $_POST['b'] ?></div>
                                <?php endif; ?>

                                <?php if ($_POST['b'] == 0) : ?>
                                    <div>На ноль делить нельзя</div>
                                <?php endif; ?>
                                
                            </div>
                        <?php endif; ?>

                        <?php if ($choice == 'minus') : ?>
                            <div>
                                Результат: <?php echo $_POST['a'] - $_POST['b'] ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($choice == 'plus') : ?>
                            <div>
                                Результат: <?php echo $_POST['a'] + $_POST['b'] ?>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>
            </div>
        </form>
    </div>
</body>