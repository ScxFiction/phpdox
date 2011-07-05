<?php // this is an autogenerated file - do not edit (created Tue, 05 Jul 2011 22:20:49 +0200)
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'theseer\\phpdox\\abstractbuilder' => '/builder/AbstractBuilder.php',
            'theseer\\phpdox\\analyser' => '/analyser.php',
            'theseer\\phpdox\\api' => '/api.php',
            'theseer\\phpdox\\application' => '/application.php',
            'theseer\\phpdox\\applicationexception' => '/application.php',
            'theseer\\phpdox\\builderexception' => '/builder/AbstractBuilder.php',
            'theseer\\phpdox\\classbuilder' => '/classbuilder.php',
            'theseer\\phpdox\\cli' => '/cli.php',
            'theseer\\phpdox\\cliexception' => '/cli.php',
            'theseer\\phpdox\\collector' => '/collector.php',
            'theseer\\phpdox\\container' => '/container.php',
            'theseer\\phpdox\\docblock\\descriptionparser' => '/docblock/parser/descriptionparser.php',
            'theseer\\phpdox\\docblock\\docblock' => '/docblock/docblock.php',
            'theseer\\phpdox\\docblock\\docblockexception' => '/docblock/docblock.php',
            'theseer\\phpdox\\docblock\\factory' => '/docblock/factory.php',
            'theseer\\phpdox\\docblock\\factoryexception' => '/docblock/factory.php',
            'theseer\\phpdox\\docblock\\genericelement' => '/docblock/genericelement.php',
            'theseer\\phpdox\\docblock\\genericelementexception' => '/docblock/genericelement.php',
            'theseer\\phpdox\\docblock\\genericparser' => '/docblock/parser/genericparser.php',
            'theseer\\phpdox\\docblock\\inlineprocessor' => '/docblock/inlineprocessor.php',
            'theseer\\phpdox\\docblock\\internalparser' => '/docblock/parser/internalparser.php',
            'theseer\\phpdox\\docblock\\invalidelement' => '/docblock/invalidelement.php',
            'theseer\\phpdox\\docblock\\invalidparser' => '/docblock/parser/invalidparser.php',
            'theseer\\phpdox\\docblock\\licenseparser' => '/docblock/parser/licenseparser.php',
            'theseer\\phpdox\\docblock\\paramparser' => '/docblock/parser/paramparser.php',
            'theseer\\phpdox\\docblock\\parser' => '/docblock/parser.php',
            'theseer\\phpdox\\docblock\\varparser' => '/docblock/parser/varparser.php',
            'theseer\\phpdox\\errorhandler' => '/errorhandler.php',
            'theseer\\phpdox\\eventhandler' => '/eventhandler.php',
            'theseer\\phpdox\\factory' => '/factory.php',
            'theseer\\phpdox\\factoryexception' => '/factory.php',
            'theseer\\phpdox\\factoryinterface' => '/factoryinterface.php',
            'theseer\\phpdox\\generator' => '/generator.php',
            'theseer\\phpdox\\generatorexception' => '/generator.php',
            'theseer\\phpdox\\htmlbuilder' => '/builder/htmlbuilder/htmlbuilder.php',
            'theseer\\phpdox\\progresslogger' => '/logger/progresslogger.php',
            'theseer\\phpdox\\progressloggerexception' => '/logger/progresslogger.php',
            'theseer\\phpdox\\service' => '/builder/service.php',
            'theseer\\phpdox\\shellprogresslogger' => '/logger/shellprogresslogger.php',
            'theseer\\phpdox\\todobuilder' => '/builder/todobuilder/todobuilder.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
