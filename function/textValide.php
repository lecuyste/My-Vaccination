    <?php
function textValide($err, $var, $key, $min, $max, $empty = true)
{
    if (!empty($var)) {
        if (mb_strlen($var) < $min) {
            $err[$key] = 'Minimum ' . $min . ' caractères pour le nom';
        } elseif (mb_strlen($var) > $max) {
            $err[$key] = 'Maximum ' . $max . ' caractères pour le nom';
        } elseif (!(ctype_alpha($key))){
            $err[$key] = 'Veuillez rentrer des caractères alphabétiques';
        }
    } else {
        if ($empty) {
            $err[$key] = 'Veuillez rentrer votre ' . $key;
        }
    }
    return $err;
}