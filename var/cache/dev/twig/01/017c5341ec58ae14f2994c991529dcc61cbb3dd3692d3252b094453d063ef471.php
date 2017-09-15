<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8dd610041710a6d1245603c4f51eeb877e60ec6123d0169b8aff42aaedf3b6e extends Twig_Template
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
        $__internal_2f458f0af6e2a706c77d0c0bc5c75c8fca854dbe166a720017d25962bf5017bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f458f0af6e2a706c77d0c0bc5c75c8fca854dbe166a720017d25962bf5017bb->enter($__internal_2f458f0af6e2a706c77d0c0bc5c75c8fca854dbe166a720017d25962bf5017bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_daeb9f698134085e797ae4fb596ada2384ca394cd21c6ddf907775d85d7b3ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeb9f698134085e797ae4fb596ada2384ca394cd21c6ddf907775d85d7b3ad7->enter($__internal_daeb9f698134085e797ae4fb596ada2384ca394cd21c6ddf907775d85d7b3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2f458f0af6e2a706c77d0c0bc5c75c8fca854dbe166a720017d25962bf5017bb->leave($__internal_2f458f0af6e2a706c77d0c0bc5c75c8fca854dbe166a720017d25962bf5017bb_prof);

        
        $__internal_daeb9f698134085e797ae4fb596ada2384ca394cd21c6ddf907775d85d7b3ad7->leave($__internal_daeb9f698134085e797ae4fb596ada2384ca394cd21c6ddf907775d85d7b3ad7_prof);

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
