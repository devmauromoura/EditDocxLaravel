# Projeto teste para inserção de imagem em DOCX usando Laravel/PHP

![GIF](https://i.imgur.com/U929bPi.giff)


Recursos:

https://laravel.com/

https://github.com/PHPOffice/PHPWord

Exemplo:
````
use PhpOffice\PhpWord\TemplateProcessor;

$templateProcessor = new TemplateProcessor($request->file('file')->path()); // Carrega o arquivo doc, docx
$templateProcessor->setValue('variavel', $request->value); // Insere o value no doc no local da variavel.
$templateProcessor->setImageValue('variavel_assinatura', $request->file('ass')->path()); // Insere a imagem no doc.
$templateProcessor->saveAs('nomearquivo.docx'); // Salva o doc.
