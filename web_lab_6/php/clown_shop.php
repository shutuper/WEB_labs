<!DOCTYPE html>
<html dir="ltr" class="animate__animated animate__fadeIn">

<head>
    <meta charset="utf-8">
    <title>Clown shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="../js/main.js"></script>
    <script src="../js/prism.js"></script>
    <link rel="stylesheet" href="../css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <script>
        $(function () {
            $(document).tooltip();
        });
    </script>

    <script>
        $(function () {
            $("#jQuery_accordion").accordion({
                collapsible: true
            });
        });
    </script>
    <style>
        label {
            display: inline-block;
            width: 5em;
        }


    </style>
    <style>
        .ui-accordion .ui-accordion-header {
            display: block;
            cursor: pointer;
            position: relative;
            margin: 2px 0 0 0;
            padding: .5em .5em .5em .7em;
            min-height: 0; /* support: IE7 */
            font-size: 100%;
            border: 1px solid #070916;
            background: #846733;
            color: #fff;
        }
    </style>

</head>

<body>

<header class="container-fluid bg-dark p-4 text-center text-white text-monospace">
    <h1>Магазин клоунських перук «У Демона <i class="bi bi-basket">»</i></h1>
    <code>
        <h4>7 БРИГАДА ІА-01 <i class="bi-award"></i></h4>
    </code>
    <p>
        <a href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fsun9-9.userapi.com%2Fs%2Fv1%2Fig2%2FbClO1bftU_XdaW49NN7j0_UANIxEXTQuXz_7iNjPLlA2VCpKZjJ2wSd77ZhYszpLhuUAyr6V1XNfGWgXXX97KNzc.jpg%3Fsize%3D200x200%26quality%3D96%26crop%3D358%2C571%2C469%2C469%26ava%3D1&imgrefurl=https%3A%2F%2Fvk.com%2Fandreytrian&tbnid=9ETJVudS05wI3M&vet=12ahUKEwiPtLWx8fzzAhXUIMUKHacQAf4QMygCegQIARBg..i&docid=GGMQML3Hq_cfYM&w=200&h=200&itg=1&q=%D0%B0%D0%BD%D0%B4%D1%80%D1%96%D0%B9%20%D0%BA%D0%BE%D1%81%D0%BE%D0%B1%D1%83%D1%86%D0%BA%D0%B8%D0%B9&client=opera-gx&ved=2ahUKEwiPtLWx8fzzAhXUIMUKHacQAf4QMygCegQIARBg"
           title="That&apos;s what this widget is">Статистика для нас, для розуміння яка у нас вікова аудиторія</a>
    <p><label for="age">Your age:</label><input id="age" title="We ask for your age only for statistical purposes."></p>

</header>


<main class="container-fluid px-5 py-3 mt-2">

    <div class="row">
        <div class="col-6 ">
            <p class="container-fluid  w-100 border bg-dark text-white text-monospace h4 p-3 fw-bold">
                Перуки в стилі "Clown":
            </p>
            <div class="row mx-0 container-fluid w-100 p-3" style="background-color: #27182c;">
                <div class="col-6">
                    <img class="img img-responsive mt-3 w-100 border rounded photo-clown"
                         src="../img/kosobyc.jpg"
                         alt="Косуб клоун">
                </div>
                <div class="col-6">
                    <img class="img img-responsive mt-3 w-100 border rounded photo-clown"
                         src="https://mandarinonline.ru/images/stories/virtuemart/product/%D0%9F%D0%9A162,2.jpg"
                         alt="Клоун не косуб">
                </div>

                <div class="container-fluid py-3 mt-2 h5 mt-3">
                    <table class="table table-hover table-dark">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Товар</th>
                            <th scope="col">Кількість</th>
                            <th scope="col">Вартість</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr onclick="changeItemInForm('Clown baby')">
                            <th scope="row">1</th>
                            <td>"Clown baby"</td>
                            <td>12</td>
                            <td>4$</td>
                        </tr>
                        <tr onclick="changeItemInForm('Demon mask')">
                            <th scope="row">2</th>
                            <td>"Demon mask"</td>
                            <td>3</td>
                            <td>40$</td>
                        </tr>
                        <tr onclick="changeItemInForm('Iradron MEGA')">
                            <th scope="row">3</th>
                            <td>"Iradron MEGA"</td>
                            <td>123</td>
                            <td>0.5$</td>
                        </tr>
                        <tr onclick="changeItemInForm('Clown Bob')">
                            <th scope="row">4</th>
                            <td>"Clown Bob"</td>
                            <td>33</td>
                            <td>11$</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="btn-group">
                <a href="../html/program_subject.html" class="btn btn-primary border mt-2">Cторінку с описом предметної
                    галузі</a>
                <a href="../../../WEB_labs/html/lab-2.html" class="btn btn-primary border mt-2">Висновок</a>
            </div>
        </div>

        <div class="col-6 animate__animated animate__fadeInRight">
            <p class="container-fluid  w-100 border bg-dark text-white text-monospace h4 p-3 fw-bold">
                Замовлення перук:
            </p>
            <div id="text-bigger" class="container-fluid p-3 mt-3 mh-100 text-white text-monospace"
                 style="background-color: #27182c;">
                <form>
                    <div class="mb-3">
                        <label for="product" class="form-label">Товар:</label>
                        <input type="text" class="form-control" id="product" aria-describedby="emailProduct">
                        <div id="emailHelp" class="form-text">Tap on product you want to buy.</div>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Кількість:</label>
                        <input type="number" min="0" class="form-control" id="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Ім'я:</label>
                        <input type="text" class="form-control" id="firstName">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Прізвище:</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>
                    <div class="mb-3">
                        <label for="numberOfTelephone" class="form-label">Телефон:</label>
                        <input type="tel" class="form-control" id="numberOfTelephone">
                    </div>
                    <div class="mb-3">
                        <label for="postOffice" class="form-label">Місто, номер відділення НП:</label>
                        <input type="text" class="form-control" id="postOffice">
                    </div>
                    <button type="submit" class="btn btn-primary">Продовжити</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Text after main block-->

    <!-- ///Text after main block-->

    <div class="container text-white w-50 mt-3 h6">
        <div id="jQuery_accordion">
            <h1> <pre class="h4">  Наш клоун актор</pre></h1>
            <div class="container h-100">
                <input type="image" class="img img-responsive h-100 w-100" src="../img/kosobyc.jpg"
                       alt="наш клоун актор">
            </div>
            <h3> <pre class="h4">  Тренер нашої банди </pre></h3>
            <div class="container h-100">
                <input type="image" class="img img-responsive h-100 w-100" src="../img/sicret.png"
                       alt="наш тренер">
            </div>
            <h6> <pre class="h4">  4 пара be like </pre></h6>
            <div class="container h-100">
                <input type="image" class="img img-responsive h-100 w-100" src="../img/para.png" alt="lol">
            </div>
        </div>

    </div>
    <div class="container-fluid mt-5 text-center text-white w-50 h4">
        <p>До нового року:</p>
        <iframe style='width: 100%; height: 120px;'
                src='http://calendar.volego.ru/informer?mode=2&no_background=true'></iframe>
    </div>

    <?php

    if (!empty($_REQUEST['message'])) {
        echo "<div class='container-fluid text-center p-2 m-2 text-white'> Message: '" . $_POST['message'] . "' ";
        echo "received!" . "<br>";
        echo date("Y-m-d H:i:s", strtotime('+2 hours')) . "</div>";
    }
    ?>


    <div class="row mt-2 text-monospace h-100 bg-warning rounded p-3" style="color:black;">
        <div class="col-6 mt-3 w-50 bg-warning">
            Контактна інформація
            Адреса магазину: вулиця Академіка Янгеля, 20 м.Київ
            На період карантину звертайтеся за телефоном:
            <ol>
                <li value="text">
                    + 38 (097) 438 78 53 — адміністратор
                </li>
            </ol>
            <ul>
                <li value="text">+ 38 (096) 412 97 15 — консультант</li>
            </ul>
            Email: dimakukold@gmail.com
        </div>
        <div class="col-6 w-50 ">
            У вихідні дні працюємо з 10 до 22 +380 99 911 1473 - наш консультант вихідного дня<br><br>
            Email: sashaignor24na7@gmail.com<br>
            <form class="p-5 text-black" action="clown_shop.php" method="post">
                <label> Message: </label>
                <input type="text" name="message"/>
                <input type="submit" class="btn btn-primary" name="submit" value="Send !"/>
            </form>
        </div>
    </div>
</main>

</body>

</html>
