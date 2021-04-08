     <?php
     // esta pagina te permitira copiar el codigo m3u8 o una pagina web
     //pagina web aqui
     // https://es.stackoverflow.com/questions/379571/file-get-contents-ssl-operation-failed-with-code-1-openssl-error-messages-e

    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
            "User-Agent: tvgo"=>false,
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        ),
    );  
    
    $response = file_get_contents("https://github.com/ipxxx999/play_m3u8_1/blob/main/historia.m3u8", false, stream_context_create($arrContextOptions));
    
    echo $response;


