<?php if( !isset($_SESSION) ) {
	session_start();
}
 require_once 'carritoKatana/php-graph-sdk-5.0.0/src/Facebook/autoload.php';
				  
				  
                  $fb = new Facebook\Facebook([
                      'app_id' => '230103400748893',
                      'app_secret' => '4349e48f5a2712054fcc2b38441e00de',
                      'default_graph_version' => 'v2.5',
                  ]);
                  ///////////////////////////////////////////////////////
				  //echo "<code><pre>";print_r($_SESSION);echo "</pre></code>";
                  $helper = $fb->getRedirectLoginHelper();
					try {
					  $accessToken = $helper->getAccessToken();
					} catch(Facebook\Exceptions\FacebookResponseException $e) {
					  // When Graph returns an error
					  echo 'Graph returned an error: ' . $e->getMessage();
					  exit;
					} catch(Facebook\Exceptions\FacebookSDKException $e) {
					  // When validation fails or other local issues
					  echo 'Facebook SDK returned an error: ' . $e->getMessage();
					  exit;
					}
					if (isset($accessToken)) {
					  // Logged in!
					  $_SESSION['facebook_access_token'] = (string) $accessToken;

					  // Now you can redirect to another page and use the
					  // access token from $_SESSION['facebook_access_token']
					}
                 

					try {
						// Returns a `Facebook\FacebookResponse` object
						$response = $fb->get('/me?fields=id,name,email,first_name,last_name,picture,verified,cover,link,locale', $_SESSION['facebook_access_token']);
					} catch(Facebook\Exceptions\FacebookResponseException $e) {
						echo 'Graph returned an error: ' . $e->getMessage();
						exit;
					} catch(Facebook\Exceptions\FacebookSDKException $e) {
						echo 'Facebook SDK returned an error: ' . $e->getMessage();
						exit;
					}

					$user = $response->getGraphUser();

					//echo 'Name: ' . $user['name'];

					    //echo "<code><pre>";print_r($user);echo "</pre></code>";
						
					//echo 0;
					$_SESSION['name'] = (string) $user['first_name'];
					$_SESSION['lastname'] = (string) $user['last_name'];
					$_SESSION['email'] = (string) $user['email'];
					$_SESSION['address'] = (string) $user['locale'];
					$_SESSION['password'] = (string) ($user['id']);
					$_SESSION['phone'] = '000-000-000000';
					$_SESSION['facebook'] = 'Entra*Facebook1255879954612221';
					//echo '1';
					
					header("Location: http://katana.rgzlec.com/carritoKatana/index.php?action=register");//SITE_KATANA
					die()
					?>
Algo salio mal !!!! :(
