 <?php

    // functions.inc.php
    // Bruce Elgort
    // October 15, 2015
    // Version 1.0

    function CallAPI($method, $url, $data = false)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    } // end CallAPI

    function getStories()
    {
        echo "<div id=\"stories\">";

        // url to the API
        // This is Bruce's API Key
        // Get your own :-)
        $api_key = "8TOn8DyRvV0DNF7IMRGnVZpSWiVBlGYN";
        $url = "http://api.nytimes.com/svc/topstories/v2/home.json?api-key=" . $api_key;

        // echo $url;

        // call CallAPI - json_decode converts the json into a php object
        $data = json_decode(CallAPI('GET', $url));

        $num_results = $data->num_results;
        $output = '';
        $title = '';
        $story_url = '';
        $byline = '';
        $section = '';
        $abstract = '';
        $height = '';
        $width = '';
        $img_url = '';
        $caption = '';
        $shortDate = '';

        for ($i = 0; $i < $num_results; $i++) {
            // if there are pictures available (is a populated array)
            if (is_array($data->results[$i]->multimedia)) {
                $height = $data->results[$i]->multimedia[1]->height;
                $width = $data->results[$i]->multimedia[1]->width;
                $img_url = $data->results[$i]->multimedia[1]->url;
                $caption = $data->results[$i]->multimedia[1]->caption;
                $date = date_create($data->results[$i]->created_date);
                $shortDate = date_format($date, "F j, Y, g:i a");
                $image = "<img class=\"storypic\" src=\"" . $img_url . '" alt="' . $caption . '" height="' . $height . '" width="' . $width . "\"/>";
            } else {
                $image = "<img class=\"storypic\" src=\"https://placehold.it/75/75/dadada?text=NYT\" height=\"75\" width=\"75\" alt=\"Placeholder image\"/>";
            }

            $output .= '<div class="story">';
            $title = $data->results[$i]->title;
            $story_url = $data->results[$i]->url;
            $byline = $data->results[$i]->byline;
            $section = $data->results[$i]->section;
            $abstract = $data->results[$i]->abstract;
            $output .= '<div class="headline"><a href="' . $story_url . '">' . $title . "</a></div>" . $image . "<div>" . $byline . "</div><div>" . $shortDate . "</div><div>" . "Section: " . $section . "</div><div class=\"abstract\">" . $abstract .  "</div></div>";
        }

        echo $output;
        echo "</div>"; // closing stories div

    }
