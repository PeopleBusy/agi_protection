<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_dd2e4810dbbe468c0e92d4a0f2e1d82ed29d61702e3f685bbeb13d12291bfaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2e4810dbbe468c0e92d4a0f2e1d82ed29d61702e3f685bbeb13d12291bfaab->enter($__internal_dd2e4810dbbe468c0e92d4a0f2e1d82ed29d61702e3f685bbeb13d12291bfaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_73b0e440f5991b13f0417e941bfd8b4904b49354bbcf1943fb2d5e7bc0e349c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b0e440f5991b13f0417e941bfd8b4904b49354bbcf1943fb2d5e7bc0e349c1->enter($__internal_73b0e440f5991b13f0417e941bfd8b4904b49354bbcf1943fb2d5e7bc0e349c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dd2e4810dbbe468c0e92d4a0f2e1d82ed29d61702e3f685bbeb13d12291bfaab->leave($__internal_dd2e4810dbbe468c0e92d4a0f2e1d82ed29d61702e3f685bbeb13d12291bfaab_prof);

        
        $__internal_73b0e440f5991b13f0417e941bfd8b4904b49354bbcf1943fb2d5e7bc0e349c1->leave($__internal_73b0e440f5991b13f0417e941bfd8b4904b49354bbcf1943fb2d5e7bc0e349c1_prof);

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
", "@Framework/Form/form_end.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
