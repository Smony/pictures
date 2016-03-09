<?php

/* D:\OpenServer\domains\pictures.com.ua/themes/photonj/layouts/admin.htm */
class __TwigTemplate_84749b0d692ff8c477cd489cd8db461c952e9335d3d1d5d43e4e3f95e937e67b extends Twig_Template
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
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900", 1 => "assets/admin/css/icons/icomoon/styles.css", 2 => "assets/admin/css/bootstrap.css", 3 => "assets/admin/css/core.css", 4 => "assets/admin/css/components.css", 5 => "assets/admin/css/colors.css", 6 => "assets/dropzone.css"));
        // line 24
        echo "\" rel=\"stylesheet\">
    <!-- /global stylesheets -->

    <!-- Scripts -->
    <script src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js"));
        // line 31
        echo "\"></script>

    <!-- Core JS files -->
    <script src=\"";
        // line 34
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/admin/js/plugins/loaders/pace.min.js", 1 => "assets/admin/js/plugins/loaders/blockui.min.js", 2 => "assets/admin/js/core/app.js", 3 => "assets/admin/js/pages/dashboard.js", 4 => "assets/admin/js/core/libraries/jquery.min.js", 5 => "assets/admin/js/core/libraries/bootstrap.min.js", 6 => "assets/dropzone.js", 7 => "assets/js/js.js"));
        // line 43
        echo "\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src=\"";
        // line 47
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/admin/js/plugins/forms/styling/switchery.min.js", 1 => "assets/admin/js/plugins/forms/styling/uniform.min.js", 2 => "assets/admin/js/plugins/forms/selects/bootstrap_multiselect.js", 3 => "assets/admin/js/plugins/ui/moment/moment.min.js", 4 => "assets/admin/js/plugins/pickers/daterangepicker.js", 5 => "assets/admin/js/plugins/visualization/d3/d3.min.js", 6 => "assets/admin/js/plugins/visualization/d3/d3_tooltip.js"));
        // line 55
        echo "\"></script>
    <!-- /theme JS files -->

</head>
<body>
";
        // line 60
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
        } else {
            // line 62
            echo "<!-- Main navbar -->
<div class=\"navbar navbar-inverse\">
    <div class=\"navbar-header\">
        <a class=\"navbar-brand\" href=\"";
            // line 65
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
            // line 158
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 159
                echo "            <p class=\"navbar-text\"><span class=\"label bg-success-400\">Online</span></p>
        ";
            } else {
                // line 161
                echo "            <p class=\"navbar-text\"><span class=\"label bg-warning-400\">Offline</span></p>
        ";
            }
            // line 163
            echo "        ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "a_plan", array()) == 1)) {
                // line 164
                echo "            <p class=\"navbar-text\">SELECT A PLAN BELOW : <span class=\"label label-info\">FREE (50 IMAGE FOR FREE)</span></p>
        ";
            } elseif (($this->getAttribute(            // line 165
(isset($context["user"]) ? $context["user"] : null), "a_plan", array()) == 2)) {
                // line 166
                echo "            <p class=\"navbar-text\">SELECT A PLAN BELOW : <span class=\"badge bg-warning-400\">BASIC RETOUCHING CREATIVE EDITION</span></p>
        ";
            } elseif (($this->getAttribute(            // line 167
(isset($context["user"]) ? $context["user"] : null), "a_plan", array()) == 3)) {
                // line 168
                echo "            <p class=\"navbar-text\">SELECT A PLAN BELOW : <span class=\"badge bg-warning-400\">IMAGE SELECTION</span></p>
        ";
            } elseif (($this->getAttribute(            // line 169
(isset($context["user"]) ? $context["user"] : null), "a_plan", array()) == 4)) {
                // line 170
                echo "            <p class=\"navbar-text\">SELECT A PLAN BELOW : <span class=\"badge bg-warning-400\">CUSTOM COLOR CORRECTION</span></p>
        ";
            }
            // line 172
            echo "
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown language-switch\">

                ";
            // line 176
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 177
                echo "                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
                // line 178
                echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/gb.png");
                echo "\" class=\"position-left\" alt=\"\">
                    English
                    <!--<span class=\"caret\"></span>-->
                </a>
                ";
            }
            // line 183
            echo "    <!--
                <ul class=\"dropdown-menu\">
                    <li><a class=\"deutsch\"><img src=\"";
            // line 185
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/de.png");
            echo "\" alt=\"\"> Deutsch</a></li>
                    <li><a class=\"ukrainian\"><img src=\"";
            // line 186
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/ua.png");
            echo "\" alt=\"\"> Українська</a></li>
                    <li><a class=\"english\"><img src=\"";
            // line 187
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/gb.png");
            echo "\" alt=\"\"> English</a></li>
                    <li><a class=\"espana\"><img src=\"";
            // line 188
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/es.png");
            echo "\" alt=\"\"> España</a></li>
                    <li><a class=\"russian\"><img src=\"";
            // line 189
            echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/flags/ru.png");
            echo "\" alt=\"\"> Русский</a></li>
                </ul>
    -->
            </li>
            ";
            // line 193
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 194
                echo "
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-people\"></i>
                    <span class=\"visible-xs-inline-block position-right\">Users</span>
                </a>

                <div class=\"dropdown-menu dropdown-content\">
                    <div class=\"dropdown-content-heading\">
                        Users online
                        <ul class=\"icons-list\">
                            <li><a href=\"#\"><i class=\"icon-gear\"></i></a></li>
                        </ul>
                    </div>

                    <ul class=\"media-list dropdown-content-body width-300\">


                        ";
                // line 212
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAllUsers", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["userAllOnly"]) {
                    // line 213
                    echo "
                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["userAllOnly"], "getAvatarThumb", array(), "method"), "html", null, true);
                    echo "\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading text-semibold\">";
                    // line 217
                    echo twig_escape_filter($this->env, $this->getAttribute($context["userAllOnly"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["userAllOnly"], "surname", array()), "html", null, true);
                    echo "</a>
                                    <span class=\"display-block text-muted text-size-small\">";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($context["userAllOnly"], "email", array()), "html", null, true);
                    echo " </span>
                                </div>
                                ";
                    // line 220
                    if ($this->getAttribute($context["userAllOnly"], "isOnline", array(), "method")) {
                        // line 221
                        echo "                                    <div class=\"media-right media-middle\"><span class=\"status-mark border-success\"></span></div>
                                ";
                    } else {
                        // line 223
                        echo "                                    <div class=\"media-right media-middle\"><span class=\"status-mark border-danger\"></span></div>
                                ";
                    }
                    // line 225
                    echo "                            </li>

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userAllOnly'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "


                    </ul>

                    <div class=\"dropdown-content-footer\">
                        <a href=\"";
                // line 234
                echo $this->env->getExtension('CMS')->pageFilter("account/users");
                echo "\" data-popup=\"tooltip\" title=\"All users\"><i class=\"icon-menu display-block\"></i></a>
                    </div>
                </div>
            </li>


            <li class=\"dropdown disabled\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-bubbles4\"></i>
                    <span class=\"visible-xs-inline-block position-right\">Messages</span>
                    <span class=\"badge bg-warning-400\">1</span>
                </a>



                <div class=\"dropdown-menu dropdown-content width-350\">
                    <div class=\"dropdown-content-heading\">
                        Messages
                        <ul class=\"icons-list\">
                            <li><a href=\"#\"><i class=\"icon-compose\"></i></a></li>
                        </ul>
                    </div>

                    <ul class=\"media-list dropdown-content-body\">

                    ";
                // line 259
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAllUsers", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                    // line 260
                    echo "                        <li class=\"media\">
                            <div class=\"media-left\">
                                <img src=\"";
                    // line 262
                    echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
                    echo "\" class=\"img-circle img-sm\" alt=\"\">
                                <span class=\"badge bg-danger-400 media-badge\">5</span>
                            </div>

                            <div class=\"media-body\">
                                <a href=\"#\" class=\"media-heading\">
                                    <span class=\"text-semibold\">";
                    // line 268
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "email", array()), "html", null, true);
                    echo "</span>
                                    <span class=\"media-annotation pull-right\">";
                    // line 269
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "last_login", array()), "html", null, true);
                    echo "</span>
                                </a>

                                <span class=\"text-muted\">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "

                    </ul>

                    <div class=\"dropdown-content-footer\">
                        <a href=\"#\" data-popup=\"tooltip\" title=\"All messages\"><i class=\"icon-menu display-block\"></i></a>
                    </div>
                </div>
            </li>
            ";
            }
            // line 286
            echo "
            ";
            // line 287
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
                // line 288
                echo "                <li class=\"dropdown dropdown-user\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarThumb", array(), "method"), "html", null, true);
                echo "\" alt=\"\">
                        <span>";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
                echo "</span>
                        <i class=\"caret\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"disabled\"><a href=\"#\"><span class=\"badge bg-teal-400 pull-right\">1</span> <i class=\"icon-comment-discussion\"></i> Messages</a></li>
                        <li class=\"divider\"></li>
                        ";
                // line 298
                if ((isset($context["user"]) ? $context["user"] : null)) {
                    // line 299
                    echo "                            <li><a href=\"scripts:void();\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><i class=\"icon-switch2\"></i> Logout</a></li>
                        ";
                }
                // line 301
                echo "                    </ul>
                </li>
            ";
            } else {
                // line 304
                echo "            <li class=\"dropdown dropdown-user\">

                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <img src=\"";
                // line 307
                echo $this->env->getExtension('CMS')->themeFilter("assets/admin/images/placeholder.jpg");
                echo "\" alt=\"\">
                    <span>Nobody is logged in</span>
                </a>

            </li>
            ";
            }
            // line 313
            echo "

        </ul>
    </div>
</div>
<!-- /main navbar -->
";
        }
        // line 320
        echo "

<!-- Page container -->
<div class=\"page-container\">

    <!-- Page content -->
    <div class=\"page-content\">

";
        // line 328
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 329
            echo "\t<!-- Main sidebar -->
<div class=\"sidebar sidebar-main\">
    <div class=\"sidebar-content\">

        <!-- User menu -->
        <div class=\"sidebar-user\">
            <div class=\"category-content\">
                <div class=\"media\">
                    <a href=\"#\" class=\"media-left\"><img src=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatarThumb", array(), "method"), "html", null, true);
            echo "\" class=\"img-circle img-sm\" alt=\"\"></a>
                    <div class=\"media-body\">
                        <span class=\"media-heading text-semibold\">";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</span>
                        <div class=\"text-size-mini text-muted\">
                            <i class=\"glyphicon glyphicon-envelope text-size-small\"></i> &nbsp;";
            // line 341
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
            // line 365
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
                                    onclick=\"\$('#upload').toggle()\"><i class=\"glyphicon glyphicon glyphicon-download-alt\"></i>
                                <span>Upload file</span>
                            </a>
                        </li>

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
            // line 407
            echo "
";
        }
        // line 409
        echo "

        <!-- Main content -->
        <div class=\"content-wrapper\">

            <!-- Page header -->
            <div class=\"page-header\">
                ";
        // line 416
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 417
            echo "                ";
        } else {
            // line 418
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
        // line 433
        echo "                <div class=\"breadcrumb-line\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"";
        // line 435
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
        // line 475
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
        // line 492
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js"));
        // line 495
        echo "\"></script>

        ";
        // line 497
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 498
        echo "        ";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 499
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 500
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
        return "D:\\OpenServer\\domains\\pictures.com.ua/themes/photonj/layouts/admin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 500,  696 => 499,  692 => 498,  685 => 497,  681 => 495,  679 => 492,  659 => 475,  616 => 435,  612 => 433,  595 => 418,  592 => 417,  590 => 416,  581 => 409,  577 => 407,  532 => 365,  505 => 341,  500 => 339,  495 => 337,  485 => 329,  483 => 328,  473 => 320,  464 => 313,  455 => 307,  450 => 304,  445 => 301,  441 => 299,  439 => 298,  429 => 291,  425 => 290,  421 => 288,  419 => 287,  416 => 286,  404 => 276,  391 => 269,  385 => 268,  376 => 262,  372 => 260,  368 => 259,  340 => 234,  332 => 228,  324 => 225,  320 => 223,  316 => 221,  314 => 220,  309 => 218,  303 => 217,  298 => 215,  294 => 213,  290 => 212,  270 => 194,  268 => 193,  261 => 189,  257 => 188,  253 => 187,  249 => 186,  245 => 185,  241 => 183,  233 => 178,  230 => 177,  228 => 176,  222 => 172,  218 => 170,  216 => 169,  213 => 168,  211 => 167,  208 => 166,  206 => 165,  203 => 164,  200 => 163,  196 => 161,  192 => 159,  190 => 158,  92 => 65,  87 => 62,  84 => 60,  77 => 55,  75 => 47,  69 => 43,  67 => 34,  62 => 31,  60 => 28,  54 => 24,  52 => 16,  49 => 15,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
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
/*             'assets/admin/css/colors.css',*/
/*             'assets/dropzone.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     <!-- /global stylesheets -->*/
/* */
/*     <!-- Scripts -->*/
/*     <script src="{{ [*/
/*             'assets/js/jquery.js',*/
/*             'assets/js/bootstrap.min.js'*/
/*         ]|theme }}"></script>*/
/* */
/*     <!-- Core JS files -->*/
/*     <script src="{{ [*/
/*             'assets/admin/js/plugins/loaders/pace.min.js',*/
/*             'assets/admin/js/plugins/loaders/blockui.min.js',*/
/*             'assets/admin/js/core/app.js',*/
/*             'assets/admin/js/pages/dashboard.js',*/
/*             'assets/admin/js/core/libraries/jquery.min.js',*/
/*             'assets/admin/js/core/libraries/bootstrap.min.js',*/
/*             'assets/dropzone.js',*/
/*             'assets/js/js.js'*/
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
/*         {% if user.a_plan == 1 %}*/
/*             <p class="navbar-text">SELECT A PLAN BELOW : <span class="label label-info">FREE (50 IMAGE FOR FREE)</span></p>*/
/*         {% elseif user.a_plan == 2 %}*/
/*             <p class="navbar-text">SELECT A PLAN BELOW : <span class="badge bg-warning-400">BASIC RETOUCHING CREATIVE EDITION</span></p>*/
/*         {% elseif user.a_plan == 3 %}*/
/*             <p class="navbar-text">SELECT A PLAN BELOW : <span class="badge bg-warning-400">IMAGE SELECTION</span></p>*/
/*         {% elseif user.a_plan == 4 %}*/
/*             <p class="navbar-text">SELECT A PLAN BELOW : <span class="badge bg-warning-400">CUSTOM COLOR CORRECTION</span></p>*/
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
/* */
/*             <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="icon-people"></i>*/
/*                     <span class="visible-xs-inline-block position-right">Users</span>*/
/*                 </a>*/
/* */
/*                 <div class="dropdown-menu dropdown-content">*/
/*                     <div class="dropdown-content-heading">*/
/*                         Users online*/
/*                         <ul class="icons-list">*/
/*                             <li><a href="#"><i class="icon-gear"></i></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <ul class="media-list dropdown-content-body width-300">*/
/* */
/* */
/*                         {% for userAllOnly in user.getAllUsers() %}*/
/* */
/*                             <li class="media">*/
/*                                 <div class="media-left"><img src="{{ userAllOnly.getAvatarThumb() }}" class="img-circle img-sm" alt=""></div>*/
/*                                 <div class="media-body">*/
/*                                     <a href="#" class="media-heading text-semibold">{{ userAllOnly.name }} {{ userAllOnly.surname }}</a>*/
/*                                     <span class="display-block text-muted text-size-small">{{ userAllOnly.email }} </span>*/
/*                                 </div>*/
/*                                 {% if userAllOnly.isOnline() %}*/
/*                                     <div class="media-right media-middle"><span class="status-mark border-success"></span></div>*/
/*                                 {% else %}*/
/*                                     <div class="media-right media-middle"><span class="status-mark border-danger"></span></div>*/
/*                                 {% endif %}*/
/*                             </li>*/
/* */
/*                         {% endfor %}*/
/* */
/* */
/* */
/*                     </ul>*/
/* */
/*                     <div class="dropdown-content-footer">*/
/*                         <a href="{{ 'account/users'|page }}" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/* */
/* */
/*             <li class="dropdown disabled">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="icon-bubbles4"></i>*/
/*                     <span class="visible-xs-inline-block position-right">Messages</span>*/
/*                     <span class="badge bg-warning-400">1</span>*/
/*                 </a>*/
/* */
/* */
/* */
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
/*                     {% for info in user.getAllUsers() %}*/
/*                         <li class="media">*/
/*                             <div class="media-left">*/
/*                                 <img src="{{ 'assets/admin/images/placeholder.jpg'|theme }}" class="img-circle img-sm" alt="">*/
/*                                 <span class="badge bg-danger-400 media-badge">5</span>*/
/*                             </div>*/
/* */
/*                             <div class="media-body">*/
/*                                 <a href="#" class="media-heading">*/
/*                                     <span class="text-semibold">{{ info.name }} {{ info.email }}</span>*/
/*                                     <span class="media-annotation pull-right">{{ info.last_login }}</span>*/
/*                                 </a>*/
/* */
/*                                 <span class="text-muted">who knows, maybe that would be the best thing for me...</span>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/* */
/* */
/*                     </ul>*/
/* */
/*                     <div class="dropdown-content-footer">*/
/*                         <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*             {% endif %}*/
/* */
/*             {% if user.name %}*/
/*                 <li class="dropdown dropdown-user">*/
/*                     <a class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <img src="{{ user.getAvatarThumb() }}" alt="">*/
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
/*                     <a href="#" class="media-left"><img src="{{ user.getAvatarThumb() }}" class="img-circle img-sm" alt=""></a>*/
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
/* */
/*                         <li>*/
/*                             <a*/
/*                                     href="javascript:;"*/
/*                                     onclick="$('#upload').toggle()"><i class="glyphicon glyphicon glyphicon-download-alt"></i>*/
/*                                 <span>Upload file</span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     <li>*/
/*                         <a*/
/*                                 href="javascript:;"*/
/*                                 onclick="$('#accountDeactivateForm').toggle()"><i class="glyphicon glyphicon-circle-arrow-down"></i>*/
/*                             <span>Deactivate account</span>*/
/*                         </a>*/
/*                     </li>*/
/* */
/* */
/* */
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
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/js/jquery.js',*/
/*             'assets/js/bootstrap.min.js'*/
/*         ]|theme }}"></script>*/
/* */
/*         {% framework extras %}*/
/*         {% framework %}*/
/*         {% scripts %}*/
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
