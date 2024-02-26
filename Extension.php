<?php 
$palabra="";
if (isset($_POST['textoEncriptar'])) {
    $palabra=$_POST["textoEncriptar"];
}
if(!empty($palabra)){
    /*ENCRIPTADOR*/
    $arrayPalabra=str_split($palabra);
    $contArray=count($arrayPalabra);
    $datos = array(
        "a" => "j45",
        "b" => "tb7",
        "c" => "u8z",
        "d" => "v9x",
        "e" => "wa0",
        "f" => "xb1",
        "g" => "yc2",
        "h" => "zd3",
        "i" => "0e4",
        "j" => "1f5",
        "k" => "2g6",
        "l" => "3h7",
        "m" => "4i8",
        "n" => "5j9",
        "o" => "6ka",
        "p" => "7lb",
        "q" => "8mc",
        "r" => "9nd",
        "s" => "aoe",
        "t" => "bpf",
        "u" => "cqg",
        "v" => "drh",
        "w" => "esi",
        "x" => "ftj",
        "y" => "guk",
        "z" => "hvl",
        "A" => "I45",
        "B" => "Tb7",
        "C" => "U8z",
        "D" => "V9x",
        "E" => "Wa0",
        "F" => "Xb1",
        "G" => "Yc2",
        "H" => "Zd3",
        "I" => "0E4",
        "J" => "1F5",
        "K" => "2G6",
        "L" => "3H7",
        "M" => "4I8",
        "N" => "5J9",
        "O" => "6Ka",
        "P" => "7Lb",
        "Q" => "8Mc",
        "R" => "9Nd",
        "S" => "Aoe",
        "T" => "Bpf",
        "U" => "Cqg",
        "V" => "Drh",
        "W" => "Esi",
        "X" => "Ftj",
        "Y" => "Guk",
        "Z" => "Hvl"
    );
    for ($i = 0; $i < $contArray; $i++) {
        $letra = $arrayPalabra[$i];
        $arrayPalabra[$i] = $datos[$letra];
    }
    $palabraEncriptada=implode($arrayPalabra);
    echo '<p>TEXTO ENCRIPTADO: '.$palabraEncriptada.'</p>';

    /*DESENCRIPTADOR*/ 
    echo '<br>';
    $arrayEncriptar=str_split($palabraEncriptada, 3);
    $contarPalabrasEncriptadas = count($arrayEncriptar);
    $reverseDatos = array_flip($datos);
    for ($i2 = 0; $i2<$contarPalabrasEncriptadas; $i2++){
        $letraEncriptar=$arrayEncriptar[$i2];
        $arrayEncriptar[$i2]=$reverseDatos[$letraEncriptar];
    }
    $palabraDesncriptada=implode($arrayEncriptar);
    echo '<p>TEXTO DESENCRIPTADO: '.$palabraDesncriptada.'</p>';
}
else{
    echo '<p>No ha enviado ningun dato, verifique antes de enviar<p>';
}
?>