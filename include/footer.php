<?php
$actual_year = date('Y');
if (isAdmin()){

} else {
?>

<footer class="downsite">
    <p><a href="index.php?page=mentionsLegales">Mentions légales</a> - <a href="index.php?page=contact">Contact</a></p>
    <small>&copy; <?= $actual_year ?> - NFacto Lab</small>
</footer>
</main>
<script src="./assets/js/jquery-1.9.1.min.js"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html>
<?php }