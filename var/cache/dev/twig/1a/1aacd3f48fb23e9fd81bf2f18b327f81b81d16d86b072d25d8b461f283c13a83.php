<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_425720892cc74c54b578681a8e3137fb716fea6e1e2a1cc524a90f2823971bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425720892cc74c54b578681a8e3137fb716fea6e1e2a1cc524a90f2823971bfd->enter($__internal_425720892cc74c54b578681a8e3137fb716fea6e1e2a1cc524a90f2823971bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7bca917b8caa38f50190e03e871bd5cd932bc8ccc887b40b93192ce367f9bf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bca917b8caa38f50190e03e871bd5cd932bc8ccc887b40b93192ce367f9bf0c->enter($__internal_7bca917b8caa38f50190e03e871bd5cd932bc8ccc887b40b93192ce367f9bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_425720892cc74c54b578681a8e3137fb716fea6e1e2a1cc524a90f2823971bfd->leave($__internal_425720892cc74c54b578681a8e3137fb716fea6e1e2a1cc524a90f2823971bfd_prof);

        
        $__internal_7bca917b8caa38f50190e03e871bd5cd932bc8ccc887b40b93192ce367f9bf0c->leave($__internal_7bca917b8caa38f50190e03e871bd5cd932bc8ccc887b40b93192ce367f9bf0c_prof);

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
