@php
session_start();

if (isset($_GET['email_toko']) && isset($_GET['password'])) {
    $email = $_GET['email_toko'];
    $password = md5($_GET['password']);

    $cUrl = curl_init();

    $options = array(
        CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/getTokoByEmaildanNama?email_toko=' . $email . '&password=' . $password,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_RETURNTRANSFER => TRUE,
    );

    curl_setopt_array($cUrl, $options);

    $response = curl_exec($cUrl);

    if ($response === false) {
        // Handle cURL error
        die('cURL Error: ' . curl_error($cUrl));
    }

    $data = json_decode($response);

    curl_close($cUrl);

    if (count($data)) {
        $_SESSION['email_toko'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['login_success'] = true;
        header("Location: /adminmitra");
        exit;
    } else {
        $_SESSION['login_error'] = "Email atau Username atau Password salah.";
        header("Location: /admin/admin_login");
        exit;
    }
} else {
    // Jika tidak ada username atau password yang diberikan, kembali ke login.php
    header("Location: /admin/admin_login");
    exit;
}
@endphp
