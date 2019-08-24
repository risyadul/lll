<?

function username_validation($data)
{
    $string = strtolower($data);
    if (strlen($string) == 8) {
        echo "True";
    }else {
        echo "False";
    }
}

function password_validation($data)
{
    $huruf_besar = preg_match('@[A-Z]@', $data);
    $huruf_kecil = preg_match('@[a-z]@', $data);
    $nomor = preg_match('@[0-9]@', $data);

    if (!$huruf_besar || !$huruf_kecil || !$nomor || strlen($data) < 8) {
        echo "False";
    }else {
        echo "True";
    }
}

function email_validation($data)
{
    if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
        echo "True";
    }else {
        echo "False";
    }
}
