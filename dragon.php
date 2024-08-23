<?php
echo base64_decode('LS0tLS1Ub29sIEVuY29kZSBCeSBNWFQtLS0tLQ==');
sleep(2);
?>
<?php
error_reporting(0);
session_start();
system('clear');
sleep(1);
while (true){
echo "\033[1;92m      __  __          _____
     |  \/  |   /\   |  __ \
     | \  / |  /  \  | |  | |
     | |\/| | / /\ \ | |  | |
     | |  | |/ ____ \| |__| |
     |_|  |_/_/    \_\_____/\n";
echo "\033[1;96m[1] SetUp\n";
echo "\033[1;932m[2] Run server\n"; /// Link Key criado no GitHub
echo "\033[1;92mEscolha: \033[1;33m";
      $luachon = trim(fgets(STDIN));
    if ($luachon == 1)  {
    sleep(1);
    // Configuração inicial
    system('pkg install openjdk-17 -y -y && wget -O src.zip https://github.com/wiillmk/Nro-Offline/blob/main/src.zip?raw=true && unzip src.zip && clear ');
    system('rm -rf src.zip');
    system('clear');
    
    sleep(1);
    continue;
    } else if ($luachon == 2)  {
    sleep(1);
        while (true){
echo "\033[1;96mObservação: Caso a chave esteja errada, vá ao link para pegar novamente\n";
echo "\033[1;93mLink para pegar a chave:\033[1;91m https://key.menumaster.shop\n"; /// Link Key novo
echo "\033[1;92mInsira a Chave para Iniciar o Servidor: \033[1;33m";
      $makey = trim(fgets(STDIN));

      // Verificando a chave com o servidor
      $url = 'https://key.menumaster.shop/validate_key.php'; // URL de validação da chave
      $data = array('key' => $makey);

      // Inicializando uma sessão cURL
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $response = curl_exec($ch);
      curl_close($ch);

      if ($response == "VALID") {
        sleep(1);
        echo "\033[1;35mChave correta, iniciando o servidor\n";
        system('java -Xms2G -Xmx2G -jar dist/mad.jar');
        break;
    } else {
        echo "\033[1;91mChave incorreta, por favor, obtenha uma chave válida\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
       }
}
        break;
    } else {
        echo "\033[1;91mEscolha incorreta, por favor, tente novamente\n";
        echo "\033[1;93m-------------------------------------------------------------\n";
        sleep(1);
       continue;
       }
}
