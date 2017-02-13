<?php

/* forms/fields/container/set.html.twig */
class __TwigTemplate_6431e99e026d6b96c96fadacea51648d043bd08a4c7087b7f40ebfd95f33cb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'overridable' => array($this, 'block_overridable'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter(($context["layout"] ?? null), "field")) : ("field"))) . ".html.twig"), "forms/fields/container/set.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_overridable($context, array $blocks = array())
    {
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "label", array())) {
            // line 9
            echo "    <";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "tag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "tag", array()), "h5")) : ("h5")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "label", array()), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "tag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "tag", array()), "h5")) : ("h5")), "html", null, true);
            echo ">
    ";
        }
        // line 11
        echo "    <div";
        echo (($this->getAttribute(($context["field"] ?? null), "id", array())) ? (((" id=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()))) . "\"")) : (""));
        echo ">
    ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "fields", array())) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 14
                echo "            ";
                if ((is_string($__internal_05b560a3ba0924c553a940a81385232be14cbf172a62a36c1b5aa9a052d61e01 = $context["childName"]) && is_string($__internal_2fde96cfe3931b4ff267214db343ecf7ebced72fcd3e42e5b25429707b5c082a = ".") && ('' === $__internal_2fde96cfe3931b4ff267214db343ecf7ebced72fcd3e42e5b25429707b5c082a || 0 === strpos($__internal_05b560a3ba0924c553a940a81385232be14cbf172a62a36c1b5aa9a052d61e01, $__internal_2fde96cfe3931b4ff267214db343ecf7ebced72fcd3e42e5b25429707b5c082a)))) {
                    // line 15
                    echo "                ";
                    $context["childValue"] = $this->getAttribute(($context["current_value"] ?? null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 16
                    echo "                ";
                    $context["childDefault"] = $this->getAttribute(($context["default_value"] ?? null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 17
                    echo "                ";
                    $context["childName"] = (($context["name"] ?? null) . $context["childName"]);
                    // line 18
                    echo "            ";
                } else {
                    // line 19
                    echo "                ";
                    $context["childValue"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), (($context["scope"] ?? null) . $context["childName"]));
                    // line 20
                    echo "                ";
                    $context["childDefault"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["defaults"] ?? null), (($context["scope"] ?? null) . $context["childName"]));
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                $context["childPrefix"] = ((($context["prefix"] ?? null) . $context["childName"]) . ".");
                // line 23
                echo "
            ";
                // line 24
                if ($this->getAttribute($context["child"], "type", array())) {
                    // line 25
                    echo "                ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/set.html.twig", 25)->display(array_merge($context, array("name" =>                     // line 26
$context["childName"], "field" => $context["child"], "current_value" => ($context["childValue"] ?? null), "value" => null, "default_value" => ($context["childDefault"] ?? null), "prefix" => ($context["childPrefix"] ?? null))));
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 30,  127 => 29,  113 => 28,  110 => 27,  108 => 26,  106 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  56 => 13,  54 => 12,  49 => 11,  39 => 9,  36 => 8,  33 => 7,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/container/set.html.twig", "/Users/webdev/HTTP/grapevine/user/plugins/gantry5/admin/templates/forms/fields/container/set.html.twig");
    }
}
