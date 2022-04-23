<?php
$curl_handle = curl_init();
                    curl_setopt($curl_handle, CURLOPT_URL, "https://qaraar.org/search-user.php");
                    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, 'userIn=admin&passIn=password');
                    curl_setopt($curl_handle, CURLOPT_HEADER, 0);
                    curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);

                    $contents = curl_exec($curl_handle);
                   
                    curl_close($curl_handle);
                    
                    foreach (explode(",",$contents) as $content) {
                        echo $content."<br/>";
                    }

                    ?>