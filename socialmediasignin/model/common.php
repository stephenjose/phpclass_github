<?php
define('KEY', '95842300516.apps.googleusercontent.com');
define('SECRET', 'JB2DBmIDDKRmNgsbcmwK4yKm');

define('CALLBACK_URL', 'http://localhost/phpclass_github/socialmediasignin/');
define('AUTHORIZATION_ENDPOINT', 'https://accounts.google.com/o/oauth2/auth');
define('ACCESS_TOKEN_ENDPOINT', 'https://accounts.google.com/o/oauth2/token');

/***************************************************************************
 * Function: Run CURL
 * Description: Executes a CURL request
 * Parameters: url (string) - URL to make request to
 *             method (string) - HTTP transfer method
 *             headers - HTTP transfer headers
 *             postvals - post values
 **************************************************************************/
function run_curl($url, $method = 'GET', $postvals = null){
	/*$response = file_get_contents($url);
	return $response;*/ 
	
    $ch = curl_init($url);
    
    //GET request: send headers and return data transfer
    if ($method == 'GET'){
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1
        );
        curl_setopt_array($ch, $options);
    //POST / PUT request: send post object and return data transfer
    } else {
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $postvals,
            CURLOPT_RETURNTRANSFER => 1
        );
        curl_setopt_array($ch, $options);
    }
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

/***************************************************************************
 * Function: Refresh Access Token
 * Description: Refreshes an expired access token
 * Parameters: key (string) - application consumer key
 *             secret (string) - application consumer secret
 *             refresh_token (string) - refresh_token parameter passed in
 *                to fetch access token request.
 **************************************************************************/
function refreshToken($refresh_token){
    //construct POST object required for refresh token fetch
    $postvals = array('grant_type' => 'refresh_token',
                      'client_id' => KEY,
                      'client_secret' => SECRET,
                      'refresh_token' => $refresh_token);
    
    //return JSON refreshed access token object
    return json_decode(run_curl(ACCESS_TOKEN_ENDPOINT, 'POST', $postvals));
}
?>
