
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>

    <?php require 'assets/partials/header.php' ?>

    <main class="contactContainer">
        <section class="buttonContainer">
            <div class="displayContact">
                <button class="accordion">Numéro</button>
                <div class="panel">
                    <p>Tél : +33 (0)4 76 88 75 75</p>
                </div>
            </div>

            <div class="displayContact">
                <button class="accordion">Email</button>
                <div class="panel">
                    <p>mangwacontact@gmail.com</p>
                </div>
            </div>

            <div class="displayContact">
                <button class="accordion">Adresse</button>
                <div class="panel">
                    <p>37, Rue Servan - BP 177 - 38008 GRENOBLE CEDEX 1</p>
                </div>
            </div>

            <div class="displayContact">
                <button class="accordion">Réseaux</button>
                <div class="panel">
                    <p>Instagram</p>
                    <p>Twitter</p>
                    <p>Facebook</p>
                </div>
            </div>

        </section>
    </main>

    <?php require 'assets/partials/footer.php' ?>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "flex") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "flex";
                }
            });
        }
    </script>


</body>
</html>
