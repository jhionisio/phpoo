<?php

        require_once 'classes/Aluno.class.php'; 
        $aluno1 = new Aluno();
        $aluno2 = new Aluno();
        
        $aluno1->nome = 'João Marcelo Abreu';
        $aluno1->email = 'jmarcelopa@hotmail.com';

        $aluno2->nome = 'Fernanda Guerra';
        $aluno2->email = 'feguerra@remax.com..br';

        echo 'Nome: '.$aluno1->nome.'<br>';
        echo 'Email: '.$aluno1->email.'<br><br>';

        echo 'Nome: '.$aluno2->nome.'<br>';
        echo 'Email: '.$aluno2->email.'<br><br>';

        echo '<hr>';
                    
                    echo "<pre>";
                    print_r($aluno1);
                    var_dump($aluno1);

                    print_r($aluno2);
                    var_dump($aluno2);

?> 