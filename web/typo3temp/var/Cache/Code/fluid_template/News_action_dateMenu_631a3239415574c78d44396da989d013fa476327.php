<?php

class News_action_dateMenu_631a3239415574c78d44396da989d013fa476327 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'General';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="news-menu-view">
		<ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
				<li>
					';
$array5 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array5)]);

$output4 .= '
					<ul>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
									<li class="item itemactive">
								';
};
$arguments21 = array();

$output20 .= '';

$output20 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return '
									<li class="item">
								';
};
$arguments23 = array();
$arguments23['if'] = NULL;

$output20 .= '';

$output20 .= '
							';
return $output20;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('year', $array14);
$array15 = array (
);$array13['1'] = $renderingContext->getVariableProvider()->getByPath('month', $array15);
$array12['0'] = $array13;
$array12['1'] = ' == ';
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.year', $array17);
$array18 = array (
);$array16['1'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.month', $array18);
$array12['2'] = $array16;

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
return '
									<li class="item itemactive">
								';
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
									<li class="item">
								';
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output32 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$output35 = '';

$output35 .= 'month.';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('month', $array36);
$arguments33['key'] = $output35;

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= ' ';
$array37 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array37)]);
return $output32;
};
$arguments25 = array();
$arguments25['action'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['controller'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = 0;
$arguments25['noCache'] = false;
$arguments25['noCacheHash'] = false;
$arguments25['section'] = '';
$arguments25['format'] = '';
$arguments25['linkAccessRestrictedPages'] = false;
$arguments25['additionalParams'] = array (
);
$arguments25['absolute'] = false;
$arguments25['addQueryString'] = false;
$arguments25['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments25['addQueryStringMethod'] = NULL;
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$array27 = array (
);$arguments25['pageUid'] = $renderingContext->getVariableProvider()->getByPath('listPid', $array27);
// Rendering Array
$array28 = array();
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['year'] = $renderingContext->getVariableProvider()->getByPath('year', $array30);
$array31 = array (
);$array29['month'] = $renderingContext->getVariableProvider()->getByPath('month', $array31);
$array28['overwriteDemand'] = $array29;
$arguments25['arguments'] = $array28;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output9 .= '
								(';
$array38 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array38)]);

$output9 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('count', $array44);
$array43['1'] = ' == 1';

$expression45 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['then'] = 'entry';
$arguments41['else'] = 'entries';
$arguments39['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output9 .= ')
							</li>
						';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('months', $array8);
$arguments6['key'] = 'month';
$arguments6['as'] = 'count';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output4 .= '
					</ul>
				</li>
			';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('data.single', $array3);
$arguments1['key'] = 'year';
$arguments1['as'] = 'months';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		</ul>
	</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'General';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output46 .= '
<!--
	=====================
		Templates/News/DateMenu.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
	<div class="news-menu-view">
		<ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
				<li>
					';
$array56 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array56)]);

$output55 .= '
					<ul>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return '
									<li class="item itemactive">
								';
};
$arguments72 = array();

$output71 .= '';

$output71 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return '
									<li class="item">
								';
};
$arguments74 = array();
$arguments74['if'] = NULL;

$output71 .= '';

$output71 .= '
							';
return $output71;
};
$arguments61 = array();
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array63 = array();
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('year', $array65);
$array66 = array (
);$array64['1'] = $renderingContext->getVariableProvider()->getByPath('month', $array66);
$array63['0'] = $array64;
$array63['1'] = ' == ';
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.year', $array68);
$array69 = array (
);$array67['1'] = $renderingContext->getVariableProvider()->getByPath('overwriteDemand.month', $array69);
$array63['2'] = $array67;

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = function() use ($renderingContext, $self) {
return '
									<li class="item itemactive">
								';
};
$arguments61['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
									<li class="item">
								';
};

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output83 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['htmlEscape'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$output86 = '';

$output86 .= 'month.';
$array87 = array (
);
$output86 .= $renderingContext->getVariableProvider()->getByPath('month', $array87);
$arguments84['key'] = $output86;

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output83 .= ' ';
$array88 = array (
);
$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('year', $array88)]);
return $output83;
};
$arguments76 = array();
$arguments76['action'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['controller'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['pluginName'] = NULL;
$arguments76['pageUid'] = NULL;
$arguments76['pageType'] = 0;
$arguments76['noCache'] = false;
$arguments76['noCacheHash'] = false;
$arguments76['section'] = '';
$arguments76['format'] = '';
$arguments76['linkAccessRestrictedPages'] = false;
$arguments76['additionalParams'] = array (
);
$arguments76['absolute'] = false;
$arguments76['addQueryString'] = false;
$arguments76['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments76['addQueryStringMethod'] = NULL;
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$array78 = array (
);$arguments76['pageUid'] = $renderingContext->getVariableProvider()->getByPath('listPid', $array78);
// Rendering Array
$array79 = array();
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['year'] = $renderingContext->getVariableProvider()->getByPath('year', $array81);
$array82 = array (
);$array80['month'] = $renderingContext->getVariableProvider()->getByPath('month', $array82);
$array79['overwriteDemand'] = $array80;
$arguments76['arguments'] = $array79;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output60 .= '
								(';
$array89 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count', $array89)]);

$output60 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['key'] = NULL;
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('count', $array95);
$array94['1'] = ' == 1';

$expression96 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['then'] = 'entry';
$arguments92['else'] = 'entries';
$arguments90['key'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output60 .= ')
							</li>
						';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('months', $array59);
$arguments57['key'] = 'month';
$arguments57['as'] = 'count';

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output55 .= '
					</ul>
				</li>
			';
return $output55;
};
$arguments52 = array();
$arguments52['each'] = NULL;
$arguments52['as'] = NULL;
$arguments52['key'] = NULL;
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$array54 = array (
);$arguments52['each'] = $renderingContext->getVariableProvider()->getByPath('data.single', $array54);
$arguments52['key'] = 'year';
$arguments52['as'] = 'months';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
		</ul>
	</div>
';
return $output51;
};
$arguments49 = array();
$arguments49['name'] = NULL;
$arguments49['name'] = 'content';

$output46 .= NULL;

$output46 .= '
';

return $output46;
}


}
#