<?php 

    $paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempore cumque vitae iusto excepturi in officiis illo unde, repudiandae dicta iure corporis, hic velit ipsa eveniet molestias odio modi? Explicabo!";
    $parola = $_GET['paragrafo'];
    echo (str_replace( $parola , "***", $paragrafo)); 
    
    
    
?>

<pre>
<?php 
    
    echo " La lunghezza è " . strlen($paragrafo);
    
?>
</pre>