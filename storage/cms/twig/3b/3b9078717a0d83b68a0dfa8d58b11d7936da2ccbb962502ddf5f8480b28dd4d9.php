<?php

/* D:\OpenServer\domains\october.nj.biz/themes/photonj/layouts/admin.htm */
class __TwigTemplate_3ea2a63f5722e13070ff9ef3779b32fcb02c0bd75859fd3c46dfbd645e2a7f4e extends Twig_Template
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
    <title>Limitless - ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"nj\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
    ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "    <!-- Global stylesheets -->
    <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900", 1 => "assets/admin/css/icons/icomoon/styles.css", 2 => "assets/admin/css/bootstrap.css", 3 => "assets/admin/css/core.css", 4 => "assets/admin/css/components.css", 5 => "assets/admin/css/colors.css"));
        // line 23
        echo "\" rel=\"stylesheet\">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src=\"";
        // line 27
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/admin/js/plugins/loaders/pace.min.js", 1 => "assets/admin/js/plugins/loaders/blockui.min.js", 2 => "assets/admin/js/core/app.js", 3 => "assets/admin/js/pages/dashboard.js", 4 => "assets/admin/js/core/libraries/jquery.min.js", 5 => "assets/admin/js/core/libraries/bootstrap.min.js"));
        // line 34
        echo "\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/admin/js/plugins/forms/styling/switchery.min.js", 1 => "assets/admin/js/plugins/forms/styling/uniform.min.js", 2 => "assets/admin/js/plugins/forms/selects/bootstrap_multiselect.js", 3 => "assets/admin/js/plugins/ui/moment/moment.min.js", 4 => "assets/admin/js/plugins/pickers/daterangepicker.js", 5 => "assets/admin/js/plugins/visualization/d3/d3.min.js", 6 => "assets/admin/js/plugins/visualization/d3/d3_tooltip.js"));
        // line 46
        echo "\"></script>
    <!-- /theme JS files -->

</head>
<body>
";
        // line 51
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
        } else {
            // line 53
            echo "<!-- Main navbar -->
<div class=\"navbar navbar-inverse\">
    <div class=\"navbar-header\">
        <a class=\"navbar-brand\" href=\"";
            // line 56
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\"><img src=\"";
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/logo_light.png");
            echo "\" alt=\"\"></a>

        <ul class=\"nav navbar-nav visible-xs-block\">
            <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
            <li><a class=\"sidebar-mobile-main-toggle\"><i class=\"icon-paragraph-justify3\"></i></a></li>
        </ul>
    </div>

    <div class=\"navbar-collapse collapse\" id=\"navbar-mobile\">

        <ul class=\"nav navbar-nav\">
            <li><a class=\"sidebar-control sidebar-main-toggle hidden-xs\"><i class=\"icon-paragraph-justify3\"></i></a></li>
            <!--
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"icon-git-compare\"></i>
                                <span class=\"visible-xs-inline-block position-right\">Git updates</span>
                                <span class=\"badge bg-warning-400\">9</span>
                            </a>

                            <div class=\"dropdown-menu dropdown-content\">
                                <div class=\"dropdown-content-heading\">
                                    Git updates
                                    <ul class=\"icons-list\">
                                        <li><a href=\"#\"><i class=\"icon-sync\"></i></a></li>
                                    </ul>
                                </div>

                                <ul class=\"media-list dropdown-content-body width-350\">
                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            Drop the IE <a href=\"#\">specific hacks</a> for temporal inputs
                                            <div class=\"media-annotation\">4 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-commit\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            Add full font overrides for popovers and tooltips
                                            <div class=\"media-annotation\">36 minutes ago</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-info text-info btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-branch\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            <a href=\"#\">Chris Arney</a> created a new <span class=\"text-semibold\">Design</span> branch
                                            <div class=\"media-annotation\">2 hours ago</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-success text-success btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-merge\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            <a href=\"#\">Eugene Kopyov</a> merged <span class=\"text-semibold\">Master</span> and <span class=\"text-semibold\">Dev</span> branches
                                            <div class=\"media-annotation\">Dec 18, 18:36</div>
                                        </div>
                                    </li>

                                    <li class=\"media\">
                                        <div class=\"media-left\">
                                            <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                        </div>

                                        <div class=\"media-body\">
                                            Have Carousel ignore keyboard events
                                            <div class=\"media-annotation\">Dec 12, 05:46</div>
                                        </div>
                                    </li>
                                </ul>

                                <div class=\"dropdown-content-footer\">
                                    <a href=\"#\" data-popup=\"tooltip\" title=\"All activity\"><i class=\"icon-menu display-block\"></i></a>
                                </div>
                            </div>
                        </li>
                        -->
        </ul>

        ";
            // line 149
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 150
                echo "            <p class=\"navbar-text\"><span class=\"label bg-success-400\">Online</span></p>
        ";
            } else {
                // line 152
                echo "            <p class=\"navbar-text\"><span class=\"label bg-warning-400\">Offline</span></p>
        ";
            }
            // line 154
            echo "
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown language-switch\">

                ";
            // line 158
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 159
                echo "                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
                // line 160
                echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/gb.png");
                echo "\" class=\"position-left\" alt=\"\">
                    English
                    <!--<span class=\"caret\"></span>-->
                </a>
                ";
            }
            // line 165
            echo "    <!--
                <ul class=\"dropdown-menu\">
                    <li><a class=\"deutsch\"><img src=\"";
            // line 167
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/de.png");
            echo "\" alt=\"\"> Deutsch</a></li>
                    <li><a class=\"ukrainian\"><img src=\"";
            // line 168
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/ua.png");
            echo "\" alt=\"\"> Українська</a></li>
                    <li><a class=\"english\"><img src=\"";
            // line 169
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/gb.png");
            echo "\" alt=\"\"> English</a></li>
                    <li><a class=\"espana\"><img src=\"";
            // line 170
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/es.png");
            echo "\" alt=\"\"> España</a></li>
                    <li><a class=\"russian\"><img src=\"";
            // line 171
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/ru.png");
            echo "\" alt=\"\"> Русский</a></li>
                </ul>
    -->
            </li>
            ";
            // line 175
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 176
                echo "            <li class=\"dropdown disabled\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-bubbles4\"></i>
                    <span class=\"visible-xs-inline-block position-right\">Messages</span>
                    <span class=\"badge bg-warning-400\">1</span>
                </a>
<!--
                <div class=\"dropdown-menu dropdown-content width-350\">
                    <div class=\"dropdown-content-heading\">
                        Messages
                        <ul class=\"icons-list\">
                            <li><a href=\"#\"><i class=\"icon-compose\"></i></a></li>
                        </ul>
                    </div>

                    <ul class=\"media-list dropdown-content-body\">

                        <li class=\"media\">
                            <div class=\"media-left\">
                                <img src=\"";
                // line 195
                echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
                echo "\" class=\"img-circle img-sm\" alt=\"\">
                                <span class=\"badge bg-danger-400 media-badge\">5</span>
                            </div>

                            <div class=\"media-body\">
                                <a href=\"#\" class=\"media-heading\">
                                    <span class=\"text-semibold\">James Alexander</span>
                                    <span class=\"media-annotation pull-right\">04:58</span>
                                </a>

                                <span class=\"text-muted\">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>


                    </ul>

                    <div class=\"dropdown-content-footer\">
                        <a href=\"#\" data-popup=\"tooltip\" title=\"All messages\"><i class=\"icon-menu display-block\"></i></a>
                    </div>
                </div>-->
            </li>
            ";
            }
            // line 218
            echo "
            ";
            // line 219
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
                // line 220
                echo "                <li class=\"dropdown dropdown-user\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
                // line 222
                echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
                echo "\" alt=\"\">
                        <span>";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
                echo "</span>
                        <i class=\"caret\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"disabled\"><a href=\"#\"><span class=\"badge bg-teal-400 pull-right\">1</span> <i class=\"icon-comment-discussion\"></i> Messages</a></li>
                        <li class=\"divider\"></li>
                        ";
                // line 230
                if ((isset($context["user"]) ? $context["user"] : null)) {
                    // line 231
                    echo "                            <li><a href=\"scripts:void();\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><i class=\"icon-switch2\"></i> Logout</a></li>
                        ";
                }
                // line 233
                echo "                    </ul>
                </li>
            ";
            } else {
                // line 236
                echo "            <li class=\"dropdown dropdown-user\">

                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
                // line 239
                echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
                echo "\" alt=\"\">
                    <span>Nobody is logged in</span>
                </a>

            </li>
            ";
            }
            // line 245
            echo "

        </ul>
    </div>
</div>
<!-- /main navbar -->
";
        }
        // line 252
        echo "

<!-- Page container -->
<div class=\"page-container\">

    <!-- Page content -->
    <div class=\"page-content\">

";
        // line 260
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 261
            echo "\t<!-- Main sidebar -->
<div class=\"sidebar sidebar-main\">
    <div class=\"sidebar-content\">

        <!-- User menu -->
        <div class=\"sidebar-user\">
            <div class=\"category-content\">
                <div class=\"media\">
                    <a href=\"#\" class=\"media-left\"><img src=\"";
            // line 269
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
            echo "\" class=\"img-circle img-sm\" alt=\"\"></a>
                    <div class=\"media-body\">
                        <span class=\"media-heading text-semibold\">";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</span>
                        <div class=\"text-size-mini text-muted\">
                            <i class=\"glyphicon glyphicon-envelope text-size-small\"></i> &nbsp;";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
                        </div>
                    </div>

                    <div class=\"media-right media-middle\">
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-cog3\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class=\"sidebar-category sidebar-category-visible\">
            <div class=\"category-content no-padding\">
                <ul class=\"navigation navigation-main navigation-accordion\">

                    <!-- Main -->
                    <li class=\"navigation-header\"><span>Main</span> <i class=\"icon-menu\" title=\"Main pages\"></i></li>
                    <li class=\"active\"><a href=\"";
            // line 297
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\"><i class=\"icon-home4\"></i> <span>HOME</span></a></li>
                    <li>
                        <a href=\"#\"><i class=\"icon-stack2\"></i> <span>Files</span></a>
                        <ul>
                            <li><a href=\"scripts:void();\">Files all</a></l
                            <li class=\"navigation-divider\"></li>
                            <li><a href=\"scripts:void();\">test</a></li>
                        </ul>
                    </li>

                    <li class=\"disabled\"><a href=\"scripts:void();\"><i class=\"glyphicon glyphicon-comment\"></i> <span>Messages <span class=\"label bg-blue-400\">1</span></span></a></li>
                    <li>
                        <a
                                href=\"javascript:;\"
                                onclick=\"\$('#accountDeactivateForm').toggle()\"><i class=\"glyphicon glyphicon-circle-arrow-down\"></i>
                            <span>Deactivate account</span>
                        </a>
                    </li>
                    <!-- /main -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>

<!-- /main sidebar -->
";
        } else {
            // line 327
            echo "
";
        }
        // line 329
        echo "

        <!-- Main content -->
        <div class=\"content-wrapper\">

            <!-- Page header -->
            <div class=\"page-header\">
                ";
        // line 336
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 337
            echo "                ";
        } else {
            // line 338
            echo "                <div class=\"page-header-content\">
                    <div class=\"page-title\">
                        <h4><i class=\"icon-arrow-left52 position-left\"></i> <span class=\"text-semibold\">Home</span> - Account</h4>
                    </div>
                    <!--
                        <div class=\"heading-elements\">
                            <div class=\"heading-btn-group\">
                                <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-bars-alt text-primary\"></i><span>Statistics</span></a>
                                <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-calculator text-primary\"></i> <span>Invoices</span></a>
                                <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-calendar5 text-primary\"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    -->
                </div>
                ";
        }
        // line 353
        echo "                <div class=\"breadcrumb-line\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"";
        // line 355
        echo "/";
        echo "\"><i class=\"icon-home2 position-left\"></i> Home</a></li>
                        <li class=\"active\">Account</li>
                    </ul>
                    <!--
                        <ul class=\"breadcrumb-elements\">
                            <li><a href=\"#\"><i class=\"icon-comment-discussion position-left\"></i> Support</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"icon-gear position-left\"></i>
                                    Settings
                                    <span class=\"caret\"></span>
                                </a>

                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li><a href=\"#\"><i class=\"icon-user-lock\"></i> Account security</a></li>
                                    <li><a href=\"#\"><i class=\"icon-statistics\"></i> Analytics</a></li>
                                    <li><a href=\"#\"><i class=\"icon-accessibility\"></i> Accessibility</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    -->
                </div>
            </div>
            <!-- /page header -->


            <!-- Main content -->
            <div class=\"content\">

                <!-- Input group addons -->
                <div class=\"panel panel-flat\">
                    <div class=\"panel-heading\">
                        <h5 class=\"panel-title\"></h5>
                    </div>

                    <div class=\"panel-body\">
                        <div class=\"form-horizontal\">

                            ";
        // line 395
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "                                  <!-- INCLUDE TEMPLATE PAGE -->

                        </div>
                    </div>
                </div>
                <!-- /input group addons -->




            </div>



        </div>

    <!-- Scripts -->
    <script src=\"";
        // line 412
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js"));
        // line 415
        echo "\"></script>

    ";
        // line 417
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 418
        echo "    ";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 419
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 420
        echo "

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\october.nj.biz/themes/photonj/layouts/admin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 420,  556 => 419,  552 => 418,  545 => 417,  541 => 415,  539 => 412,  519 => 395,  476 => 355,  472 => 353,  455 => 338,  452 => 337,  450 => 336,  441 => 329,  437 => 327,  404 => 297,  377 => 273,  372 => 271,  367 => 269,  357 => 261,  355 => 260,  345 => 252,  336 => 245,  327 => 239,  322 => 236,  317 => 233,  313 => 231,  311 => 230,  301 => 223,  297 => 222,  293 => 220,  291 => 219,  288 => 218,  262 => 195,  241 => 176,  239 => 175,  232 => 171,  228 => 170,  224 => 169,  220 => 168,  216 => 167,  212 => 165,  204 => 160,  201 => 159,  199 => 158,  193 => 154,  189 => 152,  185 => 150,  183 => 149,  85 => 56,  80 => 53,  77 => 51,  70 => 46,  68 => 38,  62 => 34,  60 => 27,  54 => 23,  52 => 16,  49 => 15,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Limitless - {{ this.page.title }}</title>*/
/* */
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/*     <meta name="title" content="{{ this.page.meta_title }}">*/
/*     <meta name="author" content="nj">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*     {% styles %}*/
/*     <!-- Global stylesheets -->*/
/*     <link href="{{ [*/
/*             'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900',*/
/*             'assets/admin/css/icons/icomoon/styles.css',*/
/*             'assets/admin/css/bootstrap.css',*/
/*             'assets/admin/css/core.css',*/
/*             'assets/admin/css/components.css',*/
/*             'assets/admin/css/colors.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     <!-- /global stylesheets -->*/
/* */
/*     <!-- Core JS files -->*/
/*     <script src="{{ [*/
/*             'assets/admin/js/plugins/loaders/pace.min.js',*/
/*             'assets/admin/js/plugins/loaders/blockui.min.js',*/
/*             'assets/admin/js/core/app.js',*/
/*             'assets/admin/js/pages/dashboard.js',*/
/*             'assets/admin/js/core/libraries/jquery.min.js',*/
/*             'assets/admin/js/core/libraries/bootstrap.min.js'*/
/*         ]|theme }}"></script>*/
/*     <!-- /core JS files -->*/
/* */
/*     <!-- Theme JS files -->*/
/*     <script src="{{ [*/
/*             'assets/admin/js/plugins/forms/styling/switchery.min.js',*/
/*             'assets/admin/js/plugins/forms/styling/uniform.min.js',*/
/*             'assets/admin/js/plugins/forms/selects/bootstrap_multiselect.js',*/
/*             'assets/admin/js/plugins/ui/moment/moment.min.js',*/
/*             'assets/admin/js/plugins/pickers/daterangepicker.js',*/
/*             'assets/admin/js/plugins/visualization/d3/d3.min.js',*/
/*             'assets/admin/js/plugins/visualization/d3/d3_tooltip.js'*/
/*         ]|theme }}"></script>*/
/*     <!-- /theme JS files -->*/
/* */
/* </head>*/
/* <body>*/
/* {% if not user %}*/
/* {% else %}*/
/* <!-- Main navbar -->*/
/* <div class="navbar navbar-inverse">*/
/*     <div class="navbar-header">*/
/*         <a class="navbar-brand" href="{{ 'account'|page }}"><img src="{{ 'assets/admin/images/logo_light.png'|theme }}" alt=""></a>*/
/* */
/*         <ul class="nav navbar-nav visible-xs-block">*/
/*             <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>*/
/*             <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="navbar-collapse collapse" id="navbar-mobile">*/
/* */
/*         <ul class="nav navbar-nav">*/
/*             <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>*/
/*             <!--*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="icon-git-compare"></i>*/
/*                                 <span class="visible-xs-inline-block position-right">Git updates</span>*/
/*                                 <span class="badge bg-warning-400">9</span>*/
/*                             </a>*/
/* */
/*                             <div class="dropdown-menu dropdown-content">*/
/*                                 <div class="dropdown-content-heading">*/
/*                                     Git updates*/
/*                                     <ul class="icons-list">*/
/*                                         <li><a href="#"><i class="icon-sync"></i></a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/* */
/*                                 <ul class="media-list dropdown-content-body width-350">*/
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             Drop the IE <a href="#">specific hacks</a> for temporal inputs*/
/*                                             <div class="media-annotation">4 minutes ago</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             Add full font overrides for popovers and tooltips*/
/*                                             <div class="media-annotation">36 minutes ago</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch*/
/*                                             <div class="media-annotation">2 hours ago</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches*/
/*                                             <div class="media-annotation">Dec 18, 18:36</div>*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                     <li class="media">*/
/*                                         <div class="media-left">*/
/*                                             <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>*/
/*                                         </div>*/
/* */
/*                                         <div class="media-body">*/
/*                                             Have Carousel ignore keyboard events*/
/*                                             <div class="media-annotation">Dec 12, 05:46</div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/* */
/*                                 <div class="dropdown-content-footer">*/
/*                                     <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                         -->*/
/*         </ul>*/
/* */
/*         {% if user %}*/
/*             <p class="navbar-text"><span class="label bg-success-400">Online</span></p>*/
/*         {% else %}*/
/*             <p class="navbar-text"><span class="label bg-warning-400">Offline</span></p>*/
/*         {% endif %}*/
/* */
/*         <ul class="nav navbar-nav navbar-right">*/
/*             <li class="dropdown language-switch">*/
/* */
/*                 {% if user %}*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <img src="{{ 'assets/admin/images/flags/gb.png'|theme }}" class="position-left" alt="">*/
/*                     English*/
/*                     <!--<span class="caret"></span>-->*/
/*                 </a>*/
/*                 {% endif %}*/
/*     <!--*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a class="deutsch"><img src="{{ 'assets/admin/images/flags/de.png'|theme }}" alt=""> Deutsch</a></li>*/
/*                     <li><a class="ukrainian"><img src="{{ 'assets/admin/images/flags/ua.png'|theme }}" alt=""> Українська</a></li>*/
/*                     <li><a class="english"><img src="{{ 'assets/admin/images/flags/gb.png'|theme }}" alt=""> English</a></li>*/
/*                     <li><a class="espana"><img src="{{ 'assets/admin/images/flags/es.png'|theme }}" alt=""> España</a></li>*/
/*                     <li><a class="russian"><img src="{{ 'assets/admin/images/flags/ru.png'|theme }}" alt=""> Русский</a></li>*/
/*                 </ul>*/
/*     -->*/
/*             </li>*/
/*             {% if user %}*/
/*             <li class="dropdown disabled">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="icon-bubbles4"></i>*/
/*                     <span class="visible-xs-inline-block position-right">Messages</span>*/
/*                     <span class="badge bg-warning-400">1</span>*/
/*                 </a>*/
/* <!--*/
/*                 <div class="dropdown-menu dropdown-content width-350">*/
/*                     <div class="dropdown-content-heading">*/
/*                         Messages*/
/*                         <ul class="icons-list">*/
/*                             <li><a href="#"><i class="icon-compose"></i></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <ul class="media-list dropdown-content-body">*/
/* */
/*                         <li class="media">*/
/*                             <div class="media-left">*/
/*                                 <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" class="img-circle img-sm" alt="">*/
/*                                 <span class="badge bg-danger-400 media-badge">5</span>*/
/*                             </div>*/
/* */
/*                             <div class="media-body">*/
/*                                 <a href="#" class="media-heading">*/
/*                                     <span class="text-semibold">James Alexander</span>*/
/*                                     <span class="media-annotation pull-right">04:58</span>*/
/*                                 </a>*/
/* */
/*                                 <span class="text-muted">who knows, maybe that would be the best thing for me...</span>*/
/*                             </div>*/
/*                         </li>*/
/* */
/* */
/*                     </ul>*/
/* */
/*                     <div class="dropdown-content-footer">*/
/*                         <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>*/
/*                     </div>*/
/*                 </div>-->*/
/*             </li>*/
/*             {% endif %}*/
/* */
/*             {% if user.name %}*/
/*                 <li class="dropdown dropdown-user">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" alt="">*/
/*                         <span>{{ user.name }}</span>*/
/*                         <i class="caret"></i>*/
/*                     </a>*/
/* */
/*                     <ul class="dropdown-menu dropdown-menu-right">*/
/*                         <li class="disabled"><a href="#"><span class="badge bg-teal-400 pull-right">1</span> <i class="icon-comment-discussion"></i> Messages</a></li>*/
/*                         <li class="divider"></li>*/
/*                         {% if user %}*/
/*                             <li><a href="scripts:void();" data-request="onLogout" data-request-data="redirect: '/'"><i class="icon-switch2"></i> Logout</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% else %}*/
/*             <li class="dropdown dropdown-user">*/
/* */
/*                 <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" alt="">*/
/*                     <span>Nobody is logged in</span>*/
/*                 </a>*/
/* */
/*             </li>*/
/*             {% endif %}*/
/* */
/* */
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* <!-- /main navbar -->*/
/* {% endif %}*/
/* */
/* */
/* <!-- Page container -->*/
/* <div class="page-container">*/
/* */
/*     <!-- Page content -->*/
/*     <div class="page-content">*/
/* */
/* {% if user %}*/
/* 	<!-- Main sidebar -->*/
/* <div class="sidebar sidebar-main">*/
/*     <div class="sidebar-content">*/
/* */
/*         <!-- User menu -->*/
/*         <div class="sidebar-user">*/
/*             <div class="category-content">*/
/*                 <div class="media">*/
/*                     <a href="#" class="media-left"><img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" class="img-circle img-sm" alt=""></a>*/
/*                     <div class="media-body">*/
/*                         <span class="media-heading text-semibold">{{ user.name }}</span>*/
/*                         <div class="text-size-mini text-muted">*/
/*                             <i class="glyphicon glyphicon-envelope text-size-small"></i> &nbsp;{{ user.email }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="media-right media-middle">*/
/*                         <ul class="icons-list">*/
/*                             <li>*/
/*                                 <a href="#"><i class="icon-cog3"></i></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /user menu -->*/
/* */
/* */
/*         <!-- Main navigation -->*/
/*         <div class="sidebar-category sidebar-category-visible">*/
/*             <div class="category-content no-padding">*/
/*                 <ul class="navigation navigation-main navigation-accordion">*/
/* */
/*                     <!-- Main -->*/
/*                     <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>*/
/*                     <li class="active"><a href="{{ 'account'|page }}"><i class="icon-home4"></i> <span>HOME</span></a></li>*/
/*                     <li>*/
/*                         <a href="#"><i class="icon-stack2"></i> <span>Files</span></a>*/
/*                         <ul>*/
/*                             <li><a href="scripts:void();">Files all</a></l*/
/*                             <li class="navigation-divider"></li>*/
/*                             <li><a href="scripts:void();">test</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="disabled"><a href="scripts:void();"><i class="glyphicon glyphicon-comment"></i> <span>Messages <span class="label bg-blue-400">1</span></span></a></li>*/
/*                     <li>*/
/*                         <a*/
/*                                 href="javascript:;"*/
/*                                 onclick="$('#accountDeactivateForm').toggle()"><i class="glyphicon glyphicon-circle-arrow-down"></i>*/
/*                             <span>Deactivate account</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <!-- /main -->*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /main navigation -->*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <!-- /main sidebar -->*/
/* {% else %}*/
/* */
/* {% endif %}*/
/* */
/* */
/*         <!-- Main content -->*/
/*         <div class="content-wrapper">*/
/* */
/*             <!-- Page header -->*/
/*             <div class="page-header">*/
/*                 {% if not user %}*/
/*                 {% else %}*/
/*                 <div class="page-header-content">*/
/*                     <div class="page-title">*/
/*                         <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Account</h4>*/
/*                     </div>*/
/*                     <!--*/
/*                         <div class="heading-elements">*/
/*                             <div class="heading-btn-group">*/
/*                                 <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>*/
/*                                 <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>*/
/*                                 <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>*/
/*                             </div>*/
/*                         </div>*/
/*                     -->*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <div class="breadcrumb-line">*/
/*                     <ul class="breadcrumb">*/
/*                         <li><a href="{{ '/' }}"><i class="icon-home2 position-left"></i> Home</a></li>*/
/*                         <li class="active">Account</li>*/
/*                     </ul>*/
/*                     <!--*/
/*                         <ul class="breadcrumb-elements">*/
/*                             <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="icon-gear position-left"></i>*/
/*                                     Settings*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/* */
/*                                 <ul class="dropdown-menu dropdown-menu-right">*/
/*                                     <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>*/
/*                                     <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>*/
/*                                     <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>*/
/*                                     <li class="divider"></li>*/
/*                                     <li><a href="#"><i class="icon-gear"></i> All settings</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     -->*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /page header -->*/
/* */
/* */
/*             <!-- Main content -->*/
/*             <div class="content">*/
/* */
/*                 <!-- Input group addons -->*/
/*                 <div class="panel panel-flat">*/
/*                     <div class="panel-heading">*/
/*                         <h5 class="panel-title"></h5>*/
/*                     </div>*/
/* */
/*                     <div class="panel-body">*/
/*                         <div class="form-horizontal">*/
/* */
/*                             {% page %}                                  <!-- INCLUDE TEMPLATE PAGE -->*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /input group addons -->*/
/* */
/* */
/* */
/* */
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/* */
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
/* */
/*     </div>*/
/*     <!-- /page content -->*/
/* */
/* </div>*/
/* <!-- /page container -->*/
/* */
/* </body>*/
/* </html>*/
