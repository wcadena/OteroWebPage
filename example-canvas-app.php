<!----------------------------facebook-->
				<?php session_start();?>	
                  <?php require_once 'carritoKatana/php-graph-sdk-5.0.0/src/Facebook/autoload.php';?>
                  <?php
                  $fb = new Facebook\Facebook([
                      'app_id' => '230103400748893',
                      'app_secret' => '4349e48f5a2712054fcc2b38441e00de',
                      'default_graph_version' => 'v2.5',
                  ]);
                  ///////////////////////////////////////////////////////
				  $helper = $fb->getCanvasHelper();
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
					  // Logged in.
					  echo "Entro corectamente";
     				}else{
					  echo "No entro nada";	
					}	
                  ?>
                  <!----------------------------facebook-->