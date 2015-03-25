<?php

/* views/layouts/basic.twig */
class __TwigTemplate_4e0815a4e53eed237f8205f39223fec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>HQ PHP-Round1</title>

    <link href=\"/bower_packages/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "

    <script src=\"/bower_packages/jquery/dist/jquery.min.js\"></script>
    <script src=\"/bower_packages/bootstrap/dist/js/bootstrap.min.js\"></script>
  </body>
</html>";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "views/layouts/basic.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  40 => 18,  38 => 17,  20 => 1,  31 => 4,  28 => 3,);
    }
}
