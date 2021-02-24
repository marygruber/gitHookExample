# gitHookExample

Projeto de teste de ferramentas de análise de qualidade de código.

As seguintes ferramentas são utilizadas neste projeto:
* PHP CodeSniffer e PHP Code Beautifier and Fixer (https://github.com/squizlabs/PHP_CodeSniffer)
* PHPStan (https://phpstan.org/user-guide/)
* PHP Mess Detector (https://phpmd.org/documentation/index.html)

Neste projeto, foi criado um pré commit, onde as três ferramentas são executadas antes de realizar o commit com as alterações realizadas.

O PHP CodeSniffer analisa os padrões no código, auxiliando na qualidade do mesmo. 
O PHP Code Beautifier and Fixer faz as correções nos arquivos, adequando-os para os padrões de codificação.
O PHPStan e o PHPMD (Mess Detector) são analisadores estáticos de código.
