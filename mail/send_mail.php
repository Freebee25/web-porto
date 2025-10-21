<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../helper/PHPMailer/src/Exception.php';
require '../helper/PHPMailer/src/PHPMailer.php';
require '../helper/PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

$mail = new PHPMailer(true);

try {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Konfigurasi server email
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'fribyan02@gmail.com'; // ubah ke email kamu
    $mail->Password   = 'mszksjgjtforwttv'; // ubah ke app password (bukan password biasa)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Pengirim & penerima
    $mail->setFrom('fribyan02@gmail.com', 'Portofolio Ian'); // pengirim tetap akun kamu
    $mail->addAddress('fribyan02@gmail.com'); // tujuan tetap kamu juga
    $mail->addReplyTo($email, $name); // agar bisa dibalas langsung ke pengirim form


    // Konten
    $mail->isHTML(true);
    $mail->Subject = "Pesan Baru dari $name";
    $mail->Body    = "
        <div style='
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            max-width: 600px;
            margin: auto;
        '>
            <div style='
                background-color: #4f46e5;
                color: white;
                padding: 12px 20px;
                border-radius: 8px 8px 0 0;
                font-size: 18px;
                font-weight: bold;
            '>
                Pesan Baru dari Portofolio Ian
            </div>

            <div style='padding: 20px; color: #111827;'>
                <p style='margin: 0 0 10px 0;'><strong>Nama:</strong> {$name}</p>
                <p style='margin: 0 0 10px 0;'><strong>Email:</strong> {$email}</p>
                <p style='margin: 0 0 5px 0;'><strong>Pesan:</strong></p>
                <div style='
                    background-color: #f3f4f6;
                    padding: 10px 15px;
                    border-radius: 6px;
                    margin-top: 6px;
                    white-space: pre-line;
                '>{$message}</div>
            </div>

            <div style='
                background-color: #f3f4f6;
                padding: 10px;
                text-align: center;
                color: #6b7280;
                font-size: 12px;
                border-radius: 0 0 8px 8px;
            '>
                © " . date('Y') . " Ian Portfolio Website. All rights reserved.
            </div>
        </div>
        ";

        $mail->AltBody = "Nama: {$name}\nEmail: {$email}\nPesan: {$message}";
    

    $mail->send();
    echo json_encode([
        'status' => 'success',
        'message' => 'Pesan berhasil dikirim!'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Gagal mengirim pesan: ' . $mail->ErrorInfo
    ]);
}
