<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_474a62da40f9511b4ade57609bbf9457da7e725f317488c3a8518d18de236f3b extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_9d7fe372b2438431b9d61507aaae4aa969eeb882878baa5db649c95afca2cede = ($context["php_version"] ?? null)) && is_string($__internal_0fec3b39c0b5f2d14ef5a39753595af87062d0d9e575a9a4f797e76303f084a6 = "5.4") && ('' === $__internal_0fec3b39c0b5f2d14ef5a39753595af87062d0d9e575a9a4f797e76303f084a6 || 0 === strpos($__internal_9d7fe372b2438431b9d61507aaae4aa969eeb882878baa5db649c95afca2cede, $__internal_0fec3b39c0b5f2d14ef5a39753595af87062d0d9e575a9a4f797e76303f084a6)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/webdev/HTTP/grapevine/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
