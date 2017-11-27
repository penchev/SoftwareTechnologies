<?php

/* base.html.twig */
class __TwigTemplate_fd392936f6d62e3325b2e3d2e165410d170c4ea9176bdbed718195d5c578f68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0b8f9c491f613352f02e27c0de0ab8f9b62211d2acb4ef7c5ecf2f216c4bdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b8f9c491f613352f02e27c0de0ab8f9b62211d2acb4ef7c5ecf2f216c4bdd0->enter($__internal_e0b8f9c491f613352f02e27c0de0ab8f9b62211d2acb4ef7c5ecf2f216c4bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_e0b8f9c491f613352f02e27c0de0ab8f9b62211d2acb4ef7c5ecf2f216c4bdd0->leave($__internal_e0b8f9c491f613352f02e27c0de0ab8f9b62211d2acb4ef7c5ecf2f216c4bdd0_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_423d4a1cfce7f0fe7f7a19f34918220f92e2f2f7b3d610470186599a336a9ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423d4a1cfce7f0fe7f7a19f34918220f92e2f2f7b3d610470186599a336a9ca1->enter($__internal_423d4a1cfce7f0fe7f7a19f34918220f92e2f2f7b3d610470186599a336a9ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_423d4a1cfce7f0fe7f7a19f34918220f92e2f2f7b3d610470186599a336a9ca1->leave($__internal_423d4a1cfce7f0fe7f7a19f34918220f92e2f2f7b3d610470186599a336a9ca1_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd0c14a79886e480689d74bc16af334c825f96cce6a691fb2084f3deacc6152f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0c14a79886e480689d74bc16af334c825f96cce6a691fb2084f3deacc6152f->enter($__internal_cd0c14a79886e480689d74bc16af334c825f96cce6a691fb2084f3deacc6152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_cd0c14a79886e480689d74bc16af334c825f96cce6a691fb2084f3deacc6152f->leave($__internal_cd0c14a79886e480689d74bc16af334c825f96cce6a691fb2084f3deacc6152f_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8550e710d3c1bdb3ac742039f6a779b0dccc55f5a9e42145c6f0ed47fa6ce83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8550e710d3c1bdb3ac742039f6a779b0dccc55f5a9e42145c6f0ed47fa6ce83e->enter($__internal_8550e710d3c1bdb3ac742039f6a779b0dccc55f5a9e42145c6f0ed47fa6ce83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_8550e710d3c1bdb3ac742039f6a779b0dccc55f5a9e42145c6f0ed47fa6ce83e->leave($__internal_8550e710d3c1bdb3ac742039f6a779b0dccc55f5a9e42145c6f0ed47fa6ce83e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_279d6c4450e7a78d7c537e312a420acf60bfd90ae2c2b23eba8893335be1e0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279d6c4450e7a78d7c537e312a420acf60bfd90ae2c2b23eba8893335be1e0db->enter($__internal_279d6c4450e7a78d7c537e312a420acf60bfd90ae2c2b23eba8893335be1e0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_279d6c4450e7a78d7c537e312a420acf60bfd90ae2c2b23eba8893335be1e0db->leave($__internal_279d6c4450e7a78d7c537e312a420acf60bfd90ae2c2b23eba8893335be1e0db_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fcd25efcea06db57f6da83582539107495cad7836a57c31b33d347625c386a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcd25efcea06db57f6da83582539107495cad7836a57c31b33d347625c386a5->enter($__internal_2fcd25efcea06db57f6da83582539107495cad7836a57c31b33d347625c386a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_2fcd25efcea06db57f6da83582539107495cad7836a57c31b33d347625c386a5->leave($__internal_2fcd25efcea06db57f6da83582539107495cad7836a57c31b33d347625c386a5_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_83768a7b9bf9400d413e084f761df99295e6ae18530ff74f62b01b03f03fd37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83768a7b9bf9400d413e084f761df99295e6ae18530ff74f62b01b03f03fd37e->enter($__internal_83768a7b9bf9400d413e084f761df99295e6ae18530ff74f62b01b03f03fd37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_83768a7b9bf9400d413e084f761df99295e6ae18530ff74f62b01b03f03fd37e->leave($__internal_83768a7b9bf9400d413e084f761df99295e6ae18530ff74f62b01b03f03fd37e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20804f206636616cb301a793f076d72b722895194c215364861b2c87207c5d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20804f206636616cb301a793f076d72b722895194c215364861b2c87207c5d60->enter($__internal_20804f206636616cb301a793f076d72b722895194c215364861b2c87207c5d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_20804f206636616cb301a793f076d72b722895194c215364861b2c87207c5d60->leave($__internal_20804f206636616cb301a793f076d72b722895194c215364861b2c87207c5d60_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
