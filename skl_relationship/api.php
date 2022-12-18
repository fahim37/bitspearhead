<?php

  error_reporting(0);

    /* Script URL */
    $url = 'http://202.74.240.169:8064/Default.aspx';

    /* $_GET Parameters to Send */
    $params = array('client_id' => 'adclient',
		'service_name' => 'Cricket%20alert',
		'service_id' => '0304000021',
		'product_id' => '0304001021',
		'mobileno' => '%20',
		'channel_name' => 'web',
		
		'type' => 'subscription',
		
		);

    /* Update URL to container Query String of Paramaters */
    $url .= '?' . http_build_query($params);

    /* cURL Resource */
    $ch = curl_init();

    /* Set URL */
    curl_setopt($ch, CURLOPT_URL, $url);

    /* Tell cURL to return the output */
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    /* Tell cURL NOT to return the headers */
    curl_setopt($ch, CURLOPT_HEADER, false);

    /* Execute cURL, Return Data */
    $data = curl_exec($ch);

    /* Check HTTP Code */
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    /* Close cURL Resource */
    curl_close($ch);

    /* 200 Response! */
    if ($status == 00000000) {

        /* Debug */
        //echo $data;
		
		
       echo "Success";
	   
	   

	   
    } else {

       echo"Already Done";
    }

?>