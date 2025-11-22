<?php
// api.php
// Letakkan file ini di root folder yang sama dengan index.html

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Include config
require_once 'config/config.php';

// Ambil parameter dari request
$action = $_GET['action'] ?? '';

switch ($action) {
    case 'search':
        searchMovies();
        break;
    
    case 'detail':
        getMovieDetail();
        break;
    
    default:
        echo json_encode(['error' => 'Invalid action']);
        break;
}

function searchMovies() {
    $query = $_GET['s'] ?? '';
    $page = $_GET['page'] ?? 1;
    $type = $_GET['type'] ?? ''; // movie, series, or empty for all
    
    if (empty($query)) {
        echo json_encode(['error' => 'Search query is required']);
        return;
    }
    
    // Encode query untuk URL
    $query = urlencode($query);
    
    // Build URL dengan API key dari config dan page parameter
    $url = "http://www.omdbapi.com/?apikey=" . OMDB_API_KEY . "&s=" . $query . "&page=" . $page;
    
    // Add type parameter if specified
    if (!empty($type)) {
        $url .= "&type=" . $type;
    }
    
    // Request menggunakan helper dari config
    $response = http_request_get($url);
    
    echo $response;
}

function getMovieDetail() {
    $imdbID = $_GET['i'] ?? '';
    
    if (empty($imdbID)) {
        echo json_encode(['error' => 'IMDb ID is required']);
        return;
    }
    
    // Build URL dengan API key dari config
    $url = "http://www.omdbapi.com/?apikey=" . OMDB_API_KEY . "&i=" . $imdbID . "&plot=full";
    
    // Request menggunakan helper dari config
    $response = http_request_get($url);
    
    echo $response;
}
?>