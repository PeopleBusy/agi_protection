<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_02b2a7a5ebe223aab47c6cc59124a29554db8ff828b862d31e763ef5c9e45f61 extends Twig_Template
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
        $__internal_774b44ee3fdd7aad76391829b1ab31bb6f45b31c62828c871674e104aa7b9cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774b44ee3fdd7aad76391829b1ab31bb6f45b31c62828c871674e104aa7b9cbc->enter($__internal_774b44ee3fdd7aad76391829b1ab31bb6f45b31c62828c871674e104aa7b9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e81d11892d77519702038039496201ba31842689115609820be1f80e6dee7d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81d11892d77519702038039496201ba31842689115609820be1f80e6dee7d16->enter($__internal_e81d11892d77519702038039496201ba31842689115609820be1f80e6dee7d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_774b44ee3fdd7aad76391829b1ab31bb6f45b31c62828c871674e104aa7b9cbc->leave($__internal_774b44ee3fdd7aad76391829b1ab31bb6f45b31c62828c871674e104aa7b9cbc_prof);

        
        $__internal_e81d11892d77519702038039496201ba31842689115609820be1f80e6dee7d16->leave($__internal_e81d11892d77519702038039496201ba31842689115609820be1f80e6dee7d16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
