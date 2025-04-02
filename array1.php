<?

$listaLivros= array("O Pequeno Principe"=>"Antonie de Saint-Exupéry",
    "Dom Quixote"=>"Miguel de Cervantes","O Hobbit"=>"J.R.R. Tolkein");
   
    foreach ($listaLivros as $livros => $nomeAutor){
        echo("\"$livros - $nomeAutor\"\n");
    }

?>