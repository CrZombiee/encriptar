<?php 
$palabra=$_POST["textoEncriptar"];

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
$reverseDatos = array(
    "j45" => "a",
      "tb7" => "b",
      "u8z" => "c",
      "v9x" => "d",
      "wa0" => "e",
      "xb1" => "f",
      "yc2" => "g",
      "zd3" => "h",
      "0e4" => "i",
      "1f5" => "j",
      "2g6" => "k",
      "3h7" => "l",
      "4i8" => "m",
      "5j9" => "n",
      "6ka" => "o",
      "7lb" => "p",
      "8mc" => "q",
      "9nd" => "r",
      "aoe" => "s",
      "bpf" => "t",
      "cqg" => "u",
      "drh" => "v",
      "esi" => "w",
      "ftj" => "x",
      "guk" => "y",
      "hvl" => "z",
      "I45" => "A",
      "Tb7" => "B",
      "U8z" => "C",
      "V9x" => "D",
      "Wa0" => "E",
      "Xb1" => "F",
      "Yc2" => "G",
      "Zd3" => "H",
      "0E4" => "I",
      "1F5" => "J",
      "2G6" => "K",
      "3H7" => "L",
      "4I8" => "M",
      "5J9" => "N",
      "6Ka" => "O",
      "7Lb" => "P",
      "8Mc" => "Q",
      "9Nd" => "R",
      "Aoe" => "S",
      "Bpf" => "T",
      "Cqg" => "U",
      "Drh" => "V",
      "Esi" => "W",
      "Ftj" => "X",
      "Guk" => "Y",
      "Hvl" => "Z"
);
for ($i2 = 0; $i2<$contarPalabrasEncriptadas; $i2++){
    $letraEncriptar=$arrayEncriptar[$i2];
    $arrayEncriptar[$i2]=$reverseDatos[$letraEncriptar];
}
$palabraDesncriptada=implode($arrayEncriptar);
echo '<p>TEXTO DESENCRIPTADO: '.$palabraDesncriptada.'</p>';
?>