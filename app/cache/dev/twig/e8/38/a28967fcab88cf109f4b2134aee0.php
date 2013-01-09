<?php

/* MDWDemoBundle:Articulos:articulo.html.twig */
class __TwigTemplate_e838a28967fcab88cf109f4b2134aee0 extends Twig_Template
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
        echo "<h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</h1>
<ul>
    <li>Titulo: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</li>
    <li>Fecha de creacion: ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "d-m-Y"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Articulos:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  19 => 1,);
    }
}
