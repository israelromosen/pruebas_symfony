<?php

/* MDWDemoBundle:Articulos:listar.html.twig */
class __TwigTemplate_e3aae1719ad13334e7ddf26f261700d2 extends Twig_Template
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
        echo "<h1>Listado de Articulos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Fecha de Creacion</th>
        <th>Comentarios</th>
    </tr>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 11
            echo "    <tr>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "author"), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "d-m-Y"), "html", null, true);
            echo "</td>
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comentarios"]) ? $context["comentarios"] : $this->getContext($context, "comentarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
                // line 17
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "article"), "id") == $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"))) {
                    // line 18
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "content"), "html", null, true);
                    echo "</td>
            ";
                }
                // line 19
                echo " 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 21
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Articulos:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  73 => 21,  66 => 19,  60 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
