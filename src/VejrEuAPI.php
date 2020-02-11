<?php

namespace Alzpk\VejrEuAPI;

class VejrEuAPI
{

    /**
     * Base URI for the API and application name
     *
     * @var string
     */
    private $baseUri = 'https://vejr.eu/api.php';
    private $applicationName = 'Alzpk Vejr EU API Wrapper';

    /**
     * Fetch the weather data, for the provided location.
     *
     * @param string $location
     * @param string $degree
     * @return mixed
     */
    public function getLocationData($location, $degree = 'C')
    {

        // Set params
        $params = [
            'location' => $location,
            'degree' => $degree
        ];

        // Combine the url.
        $url = $this->baseUri . '?' . http_build_query($params);

        // Set curl handler
        $ch = curl_init();

        // Set curl options for the handler
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->applicationName);

        // Execute the curl handler and fetch JSON response
        $json = curl_exec($ch);

        // Close curl handler
        curl_close($ch);

        // Decode the JSON and return it.
        return json_decode($json, true);

    }

}
