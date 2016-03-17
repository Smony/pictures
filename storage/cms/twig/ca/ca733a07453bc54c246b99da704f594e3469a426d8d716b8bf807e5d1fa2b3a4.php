<?php

/* D:\OpenServer\domains\pictures.com.ua/plugins/jiri/map/components/googlemap/default.htm */
class __TwigTemplate_3339a47faea67623ce0f46e9e6e8aa71abb6f3471a4d0d1600852bcbf730a038 extends Twig_Template
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
        echo "<!-- Map -->
<div id=\"map-canvas\" class=\"google-map\" style=\"height: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "height"), "method"), "html", null, true);
        echo "; width: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "width"), "method"), "html", null, true);
        echo ";\"></div>

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "apiKey"), "method"), "html", null, true);
        echo "\"></script>
<script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
    var center = new google.maps.LatLng(";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "latitude"), "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "longitude"), "method"), "html", null, true);
        echo ");
    
    var mapOptions = {
      zoom: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "zoom"), "method"), "html", null, true);
        echo ",
      center: center,
      mapTypeId: google.maps.MapTypeId.";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "mapTypeId"), "method"), "html", null, true);
        echo "
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'),
                                    mapOptions);

    ";
        // line 19
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "property", array(0 => "showMarker"), "method")) {
            // line 20
            echo "        var beachMarker = new google.maps.Marker({
            position: center,
            map: map
        });
    ";
        }
        // line 25
        echo "}

google.maps.event.addDomListener(window, 'load', initialize);
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\pictures.com.ua/plugins/jiri/map/components/googlemap/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  60 => 20,  58 => 19,  50 => 14,  45 => 12,  37 => 9,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <!-- Map -->*/
/* <div id="map-canvas" class="google-map" style="height: {{__SELF__.property('height')}}; width: {{__SELF__.property('width')}};"></div>*/
/* */
/* <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key={{__SELF__.property('apiKey')}}"></script>*/
/* <script>*/
/* // This example adds a marker to indicate the position*/
/* // of Bondi Beach in Sydney, Australia*/
/* function initialize() {*/
/*     var center = new google.maps.LatLng({{__SELF__.property('latitude')}}, {{__SELF__.property('longitude')}});*/
/*     */
/*     var mapOptions = {*/
/*       zoom: {{__SELF__.property('zoom')}},*/
/*       center: center,*/
/*       mapTypeId: google.maps.MapTypeId.{{__SELF__.property('mapTypeId')}}*/
/*     }*/
/*     var map = new google.maps.Map(document.getElementById('map-canvas'),*/
/*                                     mapOptions);*/
/* */
/*     {% if (__SELF__.property('showMarker')) %}*/
/*         var beachMarker = new google.maps.Marker({*/
/*             position: center,*/
/*             map: map*/
/*         });*/
/*     {% endif %}*/
/* }*/
/* */
/* google.maps.event.addDomListener(window, 'load', initialize);*/
/* </script>*/
