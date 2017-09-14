<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6f7bbb64aa39696cb14c817a07d4d248c57102a5d617b3a852b6298f6bc25298 extends Twig_Template
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
        $__internal_c2aad99e48c58a56c6e0d5d3db67d76cf0349c2b54f40d050a15428aea4e0937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aad99e48c58a56c6e0d5d3db67d76cf0349c2b54f40d050a15428aea4e0937->enter($__internal_c2aad99e48c58a56c6e0d5d3db67d76cf0349c2b54f40d050a15428aea4e0937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_034ab8854c99d4525ec6bf8a344a72a4d92ac776dfe03685b7cf2f2545bcbebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034ab8854c99d4525ec6bf8a344a72a4d92ac776dfe03685b7cf2f2545bcbebf->enter($__internal_034ab8854c99d4525ec6bf8a344a72a4d92ac776dfe03685b7cf2f2545bcbebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c2aad99e48c58a56c6e0d5d3db67d76cf0349c2b54f40d050a15428aea4e0937->leave($__internal_c2aad99e48c58a56c6e0d5d3db67d76cf0349c2b54f40d050a15428aea4e0937_prof);

        
        $__internal_034ab8854c99d4525ec6bf8a344a72a4d92ac776dfe03685b7cf2f2545bcbebf->leave($__internal_034ab8854c99d4525ec6bf8a344a72a4d92ac776dfe03685b7cf2f2545bcbebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
