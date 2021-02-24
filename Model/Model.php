<?php

namespace githoob_v01;

class Model
{

    public function validaDados(string $usuario, string $senha): string
    {
            /* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
        if (strlen($usuario) < 5) {
            return 'Digite o usu&aacute;rio corretamente';
        } else if (strlen($senha) < 8) {
            return 'A senha deve possuir mais de 8 caracteres';
        }
            return 'Login efetuado com sucesso';
    }
}
