<?php
if (isset($argc) && $argc = 2) {
    $hosts = explode(',', $argv[1]);
    echo "\n" . $argv[1] . "\n\n";
    while (true) {
        foreach ($hosts as $host) {
            if (
                !filter_var($host, FILTER_VALIDATE_URL)
            ) {
                continue;
            }

            // Initialize cURL session
            $curl = curl_init();

            // Set the URL to fetch
            echo "$host\n";
            $url = $host;

            // Set cURL options
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Execute the cURL request
            $response = curl_exec($curl);

            // Check for errors
            if ($response === false) {
                echo(curl_error($curl));
                echo "cURL error: " . curl_error($curl) . "\n";
            } else {
                // Handle the response
                echo $response . "\n";
            }

            // Close the cURL session
            echo "\n";
            curl_close($curl);
            sleep(10);
        }
    }
}
