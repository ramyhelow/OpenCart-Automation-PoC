<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/product/product.twig */
class __TwigTemplate_79eaa4a829e1e45d985521157daabd60 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">
      ";
        // line 10
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row mb-3\">
        ";
        // line 12
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 13
            yield "          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">
              ";
            // line 15
            if (($context["thumb"] ?? null)) {
                // line 16
                yield "                <a href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 18
            yield "              ";
            if (($context["images"] ?? null)) {
                // line 19
                yield "                <div>
                  ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 21);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 21);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" class=\"img-thumbnail\"/></a>&nbsp;
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                </div>
              ";
            }
            // line 25
            yield "            </div>
          </div>
        ";
        }
        // line 28
        yield "        <div class=\"col-sm\">
          <h1>";
        // line 29
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"list-unstyled mb-1\">
            ";
        // line 31
        if (($context["manufacturer"] ?? null)) {
            // line 32
            yield "              <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield ": <strong><a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></strong></li>
            ";
        }
        // line 34
        yield "            <li>";
        yield ($context["text_model"] ?? null);
        yield ": <strong>";
        yield ($context["model"] ?? null);
        yield "</strong></li>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 36
            yield "              <li>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 36);
            yield ": <strong>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 36);
            yield "</strong></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            ";
        if (($context["reward"] ?? null)) {
            // line 39
            yield "              <li>";
            yield ($context["text_reward"] ?? null);
            yield ": <strong>";
            yield ($context["reward"] ?? null);
            yield "</strong></li>
            ";
        }
        // line 41
        yield "            <li>";
        yield ($context["text_stock"] ?? null);
        yield ": <strong><span class=\"text-";
        if (($context["stock"] ?? null)) {
            yield "success";
        } else {
            yield "danger";
        }
        yield "\">";
        yield ($context["stock_status"] ?? null);
        yield "</span></strong></li>
          </ul>
          ";
        // line 43
        if (($context["review_status"] ?? null)) {
            // line 44
            yield "            <div class=\"rating\">
              ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                yield "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 47
                    yield "                  <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                ";
                } else {
                    // line 49
                    yield "                  <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                ";
                }
                // line 51
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "            </div>
          ";
        }
        // line 54
        yield "          ";
        if (($context["price"] ?? null)) {
            // line 55
            yield "            <ul class=\"list-unstyled\">
              ";
            // line 56
            if ( !($context["special"] ?? null)) {
                // line 57
                yield "                <li>
                  <h2><span class=\"price-new\"><x-currency code=\"";
                // line 58
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["price"] ?? null);
                yield "\"></x-currency></span></h2>
                </li>
              ";
            } else {
                // line 61
                yield "                <li><span class=\"price-old\"><x-currency code=\"";
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["price"] ?? null);
                yield "\"></x-currency></span></li>
                <li>
                  <h2><span class=\"price-new\"><x-currency code=\"";
                // line 63
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["special"] ?? null);
                yield "\"></x-currency></span></h2>
                </li>
              ";
            }
            // line 66
            yield "              ";
            if (($context["tax"] ?? null)) {
                // line 67
                yield "                <li>";
                yield ($context["text_tax"] ?? null);
                yield " <x-currency code=\"";
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield ($context["tax"] ?? null);
                yield "\"></x-currency></li>
              ";
            }
            // line 69
            yield "              ";
            if (($context["points"] ?? null)) {
                // line 70
                yield "                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
              ";
            }
            // line 72
            yield "              ";
            if (($context["discounts"] ?? null)) {
                // line 73
                yield "                <li>
                  <hr>
                </li>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 77
                    yield "                  <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 77);
                    yield ($context["text_discount"] ?? null);
                    yield "<x-currency code=\"";
                    yield ($context["currency"] ?? null);
                    yield "\" amount=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 77);
                    yield "\"></x-currency></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "              ";
            }
            // line 80
            yield "            </ul>
          ";
        }
        // line 82
        yield "          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"";
        // line 84
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"";
        // line 85
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 87
        yield ($context["product_id"] ?? null);
        yield "\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 92
        if (($context["options"] ?? null)) {
            // line 93
            yield "                <hr>
                <h3>";
            // line 94
            yield ($context["text_option"] ?? null);
            yield "</h3>
                <div>
                  ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 97
                yield "
                    ";
                // line 98
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 98) == "select")) {
                    // line 99
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 99)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100);
                    yield "</label> <select name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-select\">
                          <option value=\"\">";
                    // line 101
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                          ";
                    // line 102
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 102));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 103
                        yield "                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 103);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 103);
                        yield "
                              ";
                        // line 104
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 104)) {
                            // line 105
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 105);
                            yield "<x-currency code=\"";
                            yield ($context["currency"] ?? null);
                            yield "\" amount=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 105);
                            yield "\"></x-currency>)
                              ";
                        }
                        // line 106
                        yield "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 108
                    yield "                        </select>
                        <div id=\"error-option-";
                    // line 109
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 109);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 112
                yield "
                    ";
                // line 113
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 113) == "radio")) {
                    // line 114
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 114)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 115
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 115);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 116);
                    yield "\">
                          ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 117));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 118
                        yield "                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[";
                        // line 119
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        yield "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 119);
                        yield "\" class=\"form-check-label\">
                                ";
                        // line 120
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 120)) {
                            // line 121
                            yield "                                  <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 121);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 121);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 121);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 121);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 122
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 122);
                        yield "
                                ";
                        // line 123
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 123)) {
                            // line 124
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 124);
                            yield "<x-currency code=\"";
                            yield ($context["currency"] ?? null);
                            yield "\" amount=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124);
                            yield "\"></x-currency>)
                                ";
                        }
                        // line 125
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 129
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 129);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 132
                yield "
                    ";
                // line 133
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 134)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"form-label\">";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 135);
                    yield "</label>
                        <div id=\"input-option-";
                    // line 136
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    yield "\">
                          ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 138
                        yield "                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[";
                        // line 139
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        yield "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        yield "\" class=\"form-check-label\">
                                ";
                        // line 140
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140)) {
                            // line 141
                            yield "                                  <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 141);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 141);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 141)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 141);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 141);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 142
                        yield "                                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                        yield "
                                ";
                        // line 143
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143)) {
                            // line 144
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 144);
                            yield "<x-currency code=\"";
                            yield ($context["currency"] ?? null);
                            yield "\" amount=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144);
                            yield "\"></x-currency>)
                                ";
                        }
                        // line 145
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    yield "                        </div>
                        <div id=\"error-option-";
                    // line 149
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 152
                yield "
                    ";
                // line 153
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "text")) {
                    // line 154
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 154)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 155
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 155);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 156
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 159
                yield "
                    ";
                // line 160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 160) == "textarea")) {
                    // line 161
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 161)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 162
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    yield "</label> <textarea name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 162);
                    yield "</textarea>
                        <div id=\"error-option-";
                    // line 163
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 166
                yield "
                    ";
                // line 167
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 167) == "file")) {
                    // line 168
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 168)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"button-upload-";
                    // line 169
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 169);
                    yield "</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-";
                    // line 171
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                          <input type=\"hidden\" name=\"option[";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    yield "\"/>
                        </div>
                        <div id=\"error-option-";
                    // line 174
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 174);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 177
                yield "
                    ";
                // line 178
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 178) == "date")) {
                    // line 179
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 179)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 180
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 180);
                    yield "</label> <input type=\"date\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 180);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 181
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 184
                yield "
                    ";
                // line 185
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "time")) {
                    // line 186
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 187
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    yield "</label>
                        <input type=\"time\" name=\"option[";
                    // line 188
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 188);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 189
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 192
                yield "
                    ";
                // line 193
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "datetime")) {
                    // line 194
                    yield "                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 195
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    yield "</label>
                        <input type=\"datetime-local\" name=\"option[";
                    // line 196
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 196);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-option-";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    ";
                }
                // line 200
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "                </div>
              ";
        }
        // line 203
        yield "
              ";
        // line 204
        if (($context["subscription_plans"] ?? null)) {
            // line 205
            yield "                <hr/>
                <h3>";
            // line 206
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                <div class=\"mb-3\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\" required>
                    <option value=\"\">";
            // line 209
            yield ($context["text_select"] ?? null);
            yield "</option>
                    ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 211
                yield "                      <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 211);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 211);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "                  </select>
                  ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 215
                yield "                    <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 215);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 215);
                yield "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            yield "                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        // line 220
        yield "              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">";
        // line 222
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 223
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 224
        yield ($context["button_cart"] ?? null);
        yield "</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 226
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              ";
        // line 229
        if ((($context["minimum"] ?? null) > 1)) {
            // line 230
            yield "                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
              ";
        }
        // line 232
        yield "            </form>
          </div>
        </div>
      </div>
      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 237
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
        ";
        // line 238
        if (($context["attribute_groups"] ?? null)) {
            // line 239
            yield "          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
        ";
        }
        // line 241
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 242
            yield "          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
        ";
        }
        // line 244
        yield "      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">";
        // line 246
        yield ($context["description"] ?? null);
        yield "
          ";
        // line 247
        if (($context["tags"] ?? null)) {
            // line 248
            yield "            <p>";
            yield ($context["text_tags"] ?? null);
            yield "
              ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 250
                yield "                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 250);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 250);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 250)) {
                    yield ",";
                }
                // line 251
                yield "              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            yield "            </p>
          ";
        }
        // line 254
        yield "        </div>
        ";
        // line 255
        if (($context["attribute_groups"] ?? null)) {
            // line 256
            yield "          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 260
                yield "                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>";
                // line 262
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 262);
                yield "</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
                // line 266
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 266));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 267
                    yield "                      <tr>
                        <td>";
                    // line 268
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 268);
                    yield "</td>
                        <td>";
                    // line 269
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 269);
                    yield "</td>
                      </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 272
                yield "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            yield "              </table>
            </div>
          </div>
        ";
        }
        // line 278
        yield "        ";
        if (($context["review_status"] ?? null)) {
            // line 279
            yield "          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
        ";
        }
        // line 281
        yield "      </div>
      ";
        // line 282
        yield ($context["related"] ?? null);
        yield "
      ";
        // line 283
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 285
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 301
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 330
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 349
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/product.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1139 => 349,  1117 => 330,  1085 => 301,  1066 => 285,  1061 => 283,  1057 => 282,  1054 => 281,  1048 => 279,  1045 => 278,  1039 => 274,  1032 => 272,  1023 => 269,  1019 => 268,  1016 => 267,  1012 => 266,  1005 => 262,  1001 => 260,  997 => 259,  992 => 256,  990 => 255,  987 => 254,  983 => 252,  969 => 251,  960 => 250,  943 => 249,  938 => 248,  936 => 247,  932 => 246,  928 => 244,  922 => 242,  919 => 241,  913 => 239,  911 => 238,  907 => 237,  900 => 232,  894 => 230,  892 => 229,  886 => 226,  881 => 224,  877 => 223,  873 => 222,  869 => 220,  864 => 217,  853 => 215,  849 => 214,  846 => 213,  835 => 211,  831 => 210,  827 => 209,  821 => 206,  818 => 205,  816 => 204,  813 => 203,  809 => 201,  803 => 200,  797 => 197,  789 => 196,  783 => 195,  776 => 194,  774 => 193,  771 => 192,  765 => 189,  757 => 188,  751 => 187,  744 => 186,  742 => 185,  739 => 184,  733 => 181,  721 => 180,  714 => 179,  712 => 178,  709 => 177,  703 => 174,  696 => 172,  682 => 171,  675 => 169,  668 => 168,  666 => 167,  663 => 166,  657 => 163,  643 => 162,  636 => 161,  634 => 160,  631 => 159,  625 => 156,  611 => 155,  604 => 154,  602 => 153,  599 => 152,  593 => 149,  590 => 148,  582 => 145,  572 => 144,  570 => 143,  565 => 142,  552 => 141,  550 => 140,  540 => 139,  537 => 138,  533 => 137,  529 => 136,  525 => 135,  518 => 134,  516 => 133,  513 => 132,  507 => 129,  504 => 128,  496 => 125,  486 => 124,  484 => 123,  479 => 122,  466 => 121,  464 => 120,  454 => 119,  451 => 118,  447 => 117,  443 => 116,  439 => 115,  432 => 114,  430 => 113,  427 => 112,  421 => 109,  418 => 108,  411 => 106,  401 => 105,  399 => 104,  392 => 103,  388 => 102,  384 => 101,  374 => 100,  367 => 99,  365 => 98,  362 => 97,  358 => 96,  353 => 94,  350 => 93,  348 => 92,  340 => 87,  333 => 85,  327 => 84,  323 => 82,  319 => 80,  316 => 79,  302 => 77,  298 => 76,  293 => 73,  290 => 72,  282 => 70,  279 => 69,  269 => 67,  266 => 66,  258 => 63,  250 => 61,  242 => 58,  239 => 57,  237 => 56,  234 => 55,  231 => 54,  227 => 52,  221 => 51,  217 => 49,  213 => 47,  210 => 46,  206 => 45,  203 => 44,  201 => 43,  187 => 41,  179 => 39,  176 => 38,  165 => 36,  161 => 35,  154 => 34,  144 => 32,  142 => 31,  137 => 29,  134 => 28,  129 => 25,  125 => 23,  108 => 21,  104 => 20,  101 => 19,  98 => 18,  84 => 16,  82 => 15,  78 => 13,  76 => 12,  71 => 10,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <div class=\"row mb-3\">
        {% if thumb or images %}
          <div class=\"col-sm\">
            <div class=\"image magnific-popup\">
              {% if thumb %}
                <a href=\"{{ popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail mb-3\"/></a>
              {% endif %}
              {% if images %}
                <div>
                  {% for image in images %}
                    <a href=\"{{ image.popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ image.thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail\"/></a>&nbsp;
                  {% endfor %}
                </div>
              {% endif %}
            </div>
          </div>
        {% endif %}
        <div class=\"col-sm\">
          <h1>{{ heading_title }}</h1>
          <ul class=\"list-unstyled mb-1\">
            {% if manufacturer %}
              <li>{{ text_manufacturer }}: <strong><a href=\"{{ manufacturers }}\">{{ manufacturer }}</a></strong></li>
            {% endif %}
            <li>{{ text_model }}: <strong>{{ model }}</strong></li>
            {% for product_code in product_codes %}
              <li>{{ product_code.code }}: <strong>{{ product_code.value }}</strong></li>
            {% endfor %}
            {% if reward %}
              <li>{{ text_reward }}: <strong>{{ reward }}</strong></li>
            {% endif %}
            <li>{{ text_stock }}: <strong><span class=\"text-{% if stock %}success{% else %}danger{% endif %}\">{{ stock_status }}</span></strong></li>
          </ul>
          {% if review_status %}
            <div class=\"rating\">
              {% for i in 1..5 %}
                {% if rating < i %}
                  <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                {% else %}
                  <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                {% endif %}
              {% endfor %}
            </div>
          {% endif %}
          {% if price %}
            <ul class=\"list-unstyled\">
              {% if not special %}
                <li>
                  <h2><span class=\"price-new\"><x-currency code=\"{{ currency }}\" amount=\"{{ price }}\"></x-currency></span></h2>
                </li>
              {% else %}
                <li><span class=\"price-old\"><x-currency code=\"{{ currency }}\" amount=\"{{ price }}\"></x-currency></span></li>
                <li>
                  <h2><span class=\"price-new\"><x-currency code=\"{{ currency }}\" amount=\"{{ special }}\"></x-currency></span></h2>
                </li>
              {% endif %}
              {% if tax %}
                <li>{{ text_tax }} <x-currency code=\"{{ currency }}\" amount=\"{{ tax }}\"></x-currency></li>
              {% endif %}
              {% if points %}
                <li>{{ text_points }} {{ points }}</li>
              {% endif %}
              {% if discounts %}
                <li>
                  <hr>
                </li>
                {% for discount in discounts %}
                  <li>{{ discount.quantity }}{{ text_discount }}<x-currency code=\"{{ currency }}\" amount=\"{{ discount.price }}\"></x-currency></li>
                {% endfor %}
              {% endif %}
            </ul>
          {% endif %}
          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"btn-group\">
              <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_wishlist }}\"><i class=\"fa-solid fa-heart\"></i></button>
              <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
          </form>
          <br/>
          <div id=\"product\">
            <form id=\"form-product\">
              {% if options %}
                <hr>
                <h3>{{ text_option }}</h3>
                <div>
                  {% for option in options %}

                    {% if option.type == 'select' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <select name=\"option[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                          <option value=\"\">{{ text_select }}</option>
                          {% for option_value in option.product_option_value %}
                            <option value=\"{{ option_value.product_option_value_id }}\">{{ option_value.name }}
                              {% if option_value.price %}
                                ({{ option_value.price_prefix }}<x-currency code=\"{{ currency }}\" amount=\"{{ option_value.price }}\"></x-currency>)
                              {% endif %}</option>
                          {% endfor %}
                        </select>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"form-label\">{{ option.name }}</label>
                        <div id=\"input-option-{{ option.product_option_id }}\">
                          {% for option_value in option.product_option_value %}
                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                {% if option_value.image %}
                                  <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                {{ option_value.name }}
                                {% if option_value.price %}
                                  ({{ option_value.price_prefix }}<x-currency code=\"{{ currency }}\" amount=\"{{ option_value.price }}\"></x-currency>)
                                {% endif %}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"form-label\">{{ option.name }}</label>
                        <div id=\"input-option-{{ option.product_option_id }}\">
                          {% for option_value in option.product_option_value %}
                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/> <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                {% if option_value.image %}
                                  <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                {{ option_value.name }}
                                {% if option_value.price %}
                                  ({{ option_value.price_prefix }}<x-currency code=\"{{ currency }}\" amount=\"{{ option_value.price }}\"></x-currency>)
                                {% endif %}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <input type=\"text\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <textarea name=\"option[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ option.value }}</textarea>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"button-upload-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <div>
                          <button type=\"button\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                          <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"\" id=\"input-option-{{ option.product_option_id }}\"/>
                        </div>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <input type=\"date\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"time\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                        <input type=\"datetime-local\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                        <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    {% endif %}
                  {% endfor %}
                </div>
              {% endif %}

              {% if subscription_plans %}
                <hr/>
                <h3>{{ text_subscription }}</h3>
                <div class=\"mb-3\">
                  <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\" required>
                    <option value=\"\">{{ text_select }}</option>
                    {% for subscription_plan in subscription_plans %}
                      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name }}</option>
                    {% endfor %}
                  </select>
                  {% for subscription_plan in subscription_plans %}
                    <div id=\"subscription-description-{{ subscription_plan.subscription_plan_id }}\" class=\"form-text subscription d-none\">{{ subscription_plan.description }}</div>
                  {% endfor %}
                  <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}
              <div class=\"mb-3\">
                <div class=\"input-group\">
                  <div class=\"input-group-text\">{{ entry_qty }}</div>
                  <input type=\"text\" name=\"quantity\" value=\"{{ minimum }}\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                  <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">{{ button_cart }}</button>
                </div>
                <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
                <div id=\"error-quantity\" class=\"form-text\"></div>
              </div>
              {% if minimum > 1 %}
                <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> {{ text_minimum }}</div>
              {% endif %}
            </form>
          </div>
        </div>
      </div>
      <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_description }}</a></li>
        {% if attribute_groups %}
          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
        {% endif %}
        {% if review_status %}
          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_review }}</a></li>
        {% endif %}
      </ul>
      <div class=\"tab-content\">
        <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">{{ description }}
          {% if tags %}
            <p>{{ text_tags }}
              {% for tag in tags %}
                <a href=\"{{ tag.href }}\">{{ tag.tag }}</a>{% if not loop.last %},{% endif %}
              {% endfor %}
            </p>
          {% endif %}
        </div>
        {% if attribute_groups %}
          <div id=\"tab-specification\" class=\"tab-pane fade\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                {% for attribute_group in attribute_groups %}
                  <thead>
                    <tr>
                      <td colspan=\"2\"><strong>{{ attribute_group.name }}</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    {% for attribute in attribute_group.attribute %}
                      <tr>
                        <td>{{ attribute.name }}</td>
                        <td>{{ attribute.text }}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                {% endfor %}
              </table>
            </div>
          </div>
        {% endif %}
        {% if review_status %}
          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">{{ review }}</div>
        {% endif %}
      </div>
      {{ related }}
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function(e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/product/product.twig", "/Applications/MAMP/htdocs/catalog/view/template/product/product.twig");
    }
}
