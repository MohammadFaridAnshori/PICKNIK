<?php 
require '../tourly-master/vendor/autoload.php';
use LucianoTonet\GroqPHP\Groq;

$groq = new Groq('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');

$chatCompletion = $groq->chat()->completions()->create([
  'model'    => 'mixtral-8x7b-32768',
  'messages' => [
    [
    'role'    => 'user',
    'content' => 'Presiden Indonesia Saat ini'
    ],
  ]
]);

echo $chatCompletion['choices'][0]['message']['content'];

?>