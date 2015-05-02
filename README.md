# CodeIgniter_Eloquent
CodeIgniter with Eloquent from Laravel 5 [Iluminate Pakage - Composer]

In this sample we kept the framework as close as possíble to it´s original package downloaded from internet.

Follow bellow the steps we did do achieve what we got:

1. Download the CodeIgniter 3.0 from https://github.com/bcit-ci/CodeIgniter/archive/3.0.0.zip

2. Update the composer.json file, inserting the lines below:

"require": {
                "illuminate/database": "5.0.28",
                "illuminate/events": "5.0.28"
        }
        
3. Run composer (Install Composer)

  For any doubts about composer please download and access https://getcomposer.org/
  
4. Config que database.php

  >src
   >application
    >config
     >database.php
     
     <code>
      /*
 * Implementação do pacote Illuminate desenvolvido por Taylor Otwell [Laravel]
 */
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
     </code>
