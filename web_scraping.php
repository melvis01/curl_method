<?php


    //initiaize
        $ch = curl_init();
    //set the url
        $url = 'http://www.sainsburys.co.uk/webapp/wcs/stores/servlet/CategoryDisplay?listView=true&orderBy=FAVOURITES_FIRST&parent_category_rn=12518&top_category=12518&langId=44&beginIndex=0&pageSize=20&catalogId=10137&searchTerm=&categoryId=185749&listId=&storeId=10151&promotionId=#langId=44&storeId=10151&catalogId=10122&categoryId=185749&parent_category_rn=12518&top_category=12518&pageSize=20&orderBy=FAVOURITES_FIRST&searchTerm=&beginIndex=0';      
    //set options       
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);        
    //execute 
        $json = curl_exec($ch); 
    //close curl session / free resources
        curl_close($ch);
    //decode the json string into an array
        $json = json_decode($json, true);           
                 
    //loop through the results              
        for($i=0; $i<$json; $i++) {
             echo "JSON : <b>First Name =  </b>" . $json['Result'][$i]["FirstName"] .
            " ,  <b>Last Name = </b>" . $json['Result'][$i]["LastName"] . "<br>";
        }


?>
