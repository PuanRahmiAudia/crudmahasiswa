<?php 
class tabung 
{
    function hasil($jari,$tinggi)
    {
        $phi = 3.14 ;
        echo "Phi :" . $phi;
        echo "<br/>";
        echo "jari :" . $jari;
        echo "<br/>";
        echo "tinggi :" . $tinggi;
        echo "<br/>";
        $volume = $jari* $jari*$tinggi *3.14;
        echo "volume tabung  adalah :". $volume;
        echo "<br/>";
        $luasPermukaan = 2* $jari* 3.14 *($tinggi + $jari);
        echo "luas permuakaan tabung adalah " . $luasPermukaan;
        echo "<br/>";
        $luasSelimut = 2* $jari* 3.14 *$tinggi;
        echo "luas selimut tabung adalah " .$luasSelimut;
    }
    
}
?>