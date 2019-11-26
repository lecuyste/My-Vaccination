<?php
if (!isset($mail)) $mail = "";
if (!isset($objet)) $objet = "";
if (!isset($message)) $message = "";

?>

        <h1>Contactez-nous</h1>
        <p>Si vous souhaitez nous poser des questions, veuillez remplir ce formulaire et nous vous aiderons au mieux.</p>

        <form method="post" action="index.php?page=contact">
            <div>
                <label for="mail">Adresse mail</label>
            <input type="email" id="mail" name="mail" placeholder="Votre adresse mail..">
            </div>

            <div>
                <label for="objet">Objet</label>
            <input type="text" id="objet" name="objet" placeholder="Le sujet de votre message..">
            </div>

            <div>
                <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Ecrivez votre message.." style="height:200px"></textarea>
            </div>

            <div>
                <input type="submit" name="submitted" value="Envoyer" />
            </div>
            <input type="hidden" name="contact" />
        </form>

