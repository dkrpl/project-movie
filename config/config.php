<?php
// config/config.php
// Simpan file ini di folder config/

// OMDb Public API Key
define('OMDB_API_KEY', '7d48a760');

// Helper CURL GET sederhana
function http_request_get($url, $headers = []) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 8,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_USERAGENT => 'Filmex/1.0 (+https://yourdomain.example)'
    ]);

    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $result = curl_exec($ch);
    $error  = curl_error($ch);
    curl_close($ch);

    if ($error) {
        return json_encode(['error' => $error]);
    }

    return $result;
}
