<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/layouts/default.htm */
class __TwigTemplate_2497db33199d4e73072a21e1bed1bf4951b7f19c506f4cdf3193f3c154bfe787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>S - ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"nj\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
    ";
        // line 15
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 16
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/style.css", 2 => "assets/css/font-awesome.css", 3 => "assets/css/navbar.css", 4 => "assets/css/slider.css", 5 => "assets/css/custom.css", 6 => "assets/css/slider.css", 7 => "assets/404/css/404.css"));
        // line 25
        echo "\" rel=\"stylesheet\">

    <style>

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<div class=\"container-fluid\" style=\"padding: 0px; font-family: MyriadPro;\">

    <div class=\"navbar navbar-default navbar\">
        <div class=\"navbar-header\">
            <button type=\"button\"  class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#responsive_menu\" style=\"margin-left: auto; margin-right: auto;\">
                <span class=\"sr-only\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" style=\"padding:15px\" href=\"";
        // line 49
        echo "/";
        echo "\">S</a>
        </div>

        <div class=\"container-fluid\" style=\"font-family: MyriadPro;\">

            ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "
        </div>
    </div>


    ";
        // line 60
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 61
        echo "    
    ";
        // line 62
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("formSubscribe"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 63
        echo "
    <div class=\"row footer\" style=\"margin-right: 0px;  margin-left: 0px; padding-top: 25px; padding-bottom: 20px;\">

    ";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "
    </div>

    <div class=\"row copyright\" style=\"margin-right: 0px;  margin-left: 0px;\">
        <div class=\"col-xs-12\">
            <br>
            <p class=\"text-center\" style=\"margin-bottom: 0px;\"> &#169; Development and design - DevelopersCompany</p>
            <br>
        </div>
    </div>
</div>
    <!-- Scripts -->
    <script src=\"";
        // line 79
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js"));
        // line 82
        echo "\"></script>

    ";
        // line 84
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 85
        echo "    ";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 86
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 87
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 87,  147 => 86,  143 => 85,  136 => 84,  132 => 82,  130 => 79,  116 => 67,  112 => 66,  107 => 63,  103 => 62,  100 => 61,  98 => 60,  91 => 55,  87 => 54,  79 => 49,  53 => 25,  50 => 16,  47 => 15,  43 => 14,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>S - {{ this.page.title }}</title>*/
/* */
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="title" content="{{ this.page.meta_title }}">*/
/*     <meta name="author" content="nj">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*     {% styles %}*/
/*     <link href="{{ [*/
/*             'assets/css/bootstrap.min.css',*/
/*             'assets/css/style.css',*/
/*             'assets/css/font-awesome.css',*/
/*             'assets/css/navbar.css',*/
/*             'assets/css/slider.css',*/
/*             'assets/css/custom.css',*/
/*             'assets/css/slider.css',*/
/*             'assets/404/css/404.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* */
/*     <style>*/
/* */
/*     </style>*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <div class="container-fluid" style="padding: 0px; font-family: MyriadPro;">*/
/* */
/*     <div class="navbar navbar-default navbar">*/
/*         <div class="navbar-header">*/
/*             <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#responsive_menu" style="margin-left: auto; margin-right: auto;">*/
/*                 <span class="sr-only"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" style="padding:15px" href="{{ '/' }}">S</a>*/
/*         </div>*/
/* */
/*         <div class="container-fluid" style="font-family: MyriadPro;">*/
/* */
/*             {% partial "navigation" %}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     {% page %}*/
/*     */
/*     {% component 'formSubscribe' %}*/
/* */
/*     <div class="row footer" style="margin-right: 0px;  margin-left: 0px; padding-top: 25px; padding-bottom: 20px;">*/
/* */
/*     {% partial "footer" %}*/
/* */
/*     </div>*/
/* */
/*     <div class="row copyright" style="margin-right: 0px;  margin-left: 0px;">*/
/*         <div class="col-xs-12">*/
/*             <br>*/
/*             <p class="text-center" style="margin-bottom: 0px;"> &#169; Development and design - DevelopersCompany</p>*/
/*             <br>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     <!-- Scripts -->*/
/*     <script src="{{ [*/
/*             'assets/js/jquery.js',*/
/*             'assets/js/bootstrap.min.js'*/
/*         ]|theme }}"></script>*/
/* */
/*     {% framework extras %}*/
/*     {% framework %}*/
/*     {% scripts %}*/
/* */
/* </body>*/
/* </html>*/
