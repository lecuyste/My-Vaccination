    <?php
function textValide($err, $var, $key, $min, $max, $empty = true)
{
    if (!empty($var)) {
        if (mb_strlen($var) < $min) {
            array_push($err, "Minimum ". $min . " caractères.");
        } elseif (mb_strlen($var) > $max) {
            array_push($err, "Maximum ". $max . " caractères.");

        } elseif (!(ctype_alpha($key))){
            array_push($err, "Veuillez entrer des caractères alphabétiques");
        }
    } else {
        if ($empty) {
            array_push($err, "Veuillez rentrer votre " . $key);
        }
    }
    return $err;
}