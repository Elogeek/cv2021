<?php
require_once 'include.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1: CV 2021/2022</title>
    <script src="https://kit.fontawesome.com/e3ddf954eb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Elodie Christin</h1>
            <h2>Elogeek</h2>
        </header>

        <!-- Menu here-->
        <nav>

            <div class="menu">

                <!-- Home page-->
                <a href="home.php">Accueil<i class="fas fa-home"></i></a>

                <!-- Graduation page-->

                <a href="#education">Education<i class="fas fa-graduation-cap"></i></a>

                <!-- Hobbies page-->

                <a href="#hobbies">Hobbies<i class="fas fa-thumbs-up"></i></a>

                <!-- Experience page-->

                <a href="#experience">Expérience<i class="fas fa-spinner"></i></a>
            </div>

        </nav>

        <section>

            <h3 id="education">Diplômes</h3>

            <ul>
                <li>
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos maxime rem suscipit
                        veniam veritatis? Eius inventore labore molestiae quasi sint temporibus unde veritatis. Aut,
                        harum laborum laudantium natus pariatur voluptatem!
                    </div>
                </li>
                <li>
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, adipisci aliquam
                        consequuntur, cum doloribus eius enim facere fugiat id iusto maiores, modi molestias neque
                        nesciunt numquam quae quisquam unde voluptatibus!
                    </div>
                </li>
                <li>
                    <dl>Développeuse web & web mobile :
                        <dd> C'est une personne qui est en charge du développement de la partie (Front et Back'end)
                            d'une application qui s’exécute aussi bien sur le pc que sur le smartphone.
                        </dd>
                    </dl>
                </li>
            </ul>

            <h3 id="titleTable">Hobbies</h3>

            <table id="hobbies">
                <tbody>
                    <tr>
                        <th>le Japon</th>
                        <th>
                            <figure>
                                <img src="../asset/img/sakura.webp" alt="wonderful sakura">
                                <figcaption>Super paysage!</figcaption>
                            </figure>
                        </th>
                    </tr>
                </tbody>
            </table>

            <div id="experience"><h3>Expérience</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cumque deserunt exercitationem
                    facilis id omnis quibusdam
                    rem tempore temporibus, ullam? Ab adipisci amet at, atque inventore quos recusandae rem sit.
                    Blanditiis consequuntur deleniti dicta enim fugiat hic mollitia, omnis quas sunt tempora.
                    Accusantium aperiam est eum eveniet id ipsum numquam odio quas recusandae, rerum tempore ullam ut
                    voluptatem voluptatibus voluptatum!
                </p>
            </div>

        </section>

        <section>

            <div class="contact">

                <form method="post" action="">
                    <fieldset>
                        <label for="email">
                            <input type="email" placeholder="email">
                        </label>
                        <label for="email"></label>
                        <textarea name="email" id="email" cols="20" rows="5" placeholder="Votre message!"></textarea>

                        <button type="submit" value="envoyer">envoyer</button>
                    </fieldset>
                </form>
            </div>

        </section>

        <!--  <footer>
              <span>Make by Elogeek</span>
              <span>@Copyright reproduction interdite</span>
          </footer> -->
    </div>
</body>
</html>