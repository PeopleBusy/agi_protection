<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c3b8678ef2136e68cddc2777f74934eb38e79beeef68e8714eaed9c1eaeab3fe extends Twig_Template
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
        $__internal_2ac2f4e41a1e58dc789976913f310e6c5c68a1e7e8a6442f0dc21cfa2dd7465c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac2f4e41a1e58dc789976913f310e6c5c68a1e7e8a6442f0dc21cfa2dd7465c->enter($__internal_2ac2f4e41a1e58dc789976913f310e6c5c68a1e7e8a6442f0dc21cfa2dd7465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_82913fa2d22de565fb70aea142c73749334cc82013323fb24eeee6de507e44aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82913fa2d22de565fb70aea142c73749334cc82013323fb24eeee6de507e44aa->enter($__internal_82913fa2d22de565fb70aea142c73749334cc82013323fb24eeee6de507e44aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2ac2f4e41a1e58dc789976913f310e6c5c68a1e7e8a6442f0dc21cfa2dd7465c->leave($__internal_2ac2f4e41a1e58dc789976913f310e6c5c68a1e7e8a6442f0dc21cfa2dd7465c_prof);

        
        $__internal_82913fa2d22de565fb70aea142c73749334cc82013323fb24eeee6de507e44aa->leave($__internal_82913fa2d22de565fb70aea142c73749334cc82013323fb24eeee6de507e44aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
