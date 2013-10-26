<?php
/**
 * @package     Joomlagovbr
 * @subpackage  mod_barradogoverno
 *
 * @copyright   Copyright (C) 2013 Comunidade Joomla Calango e Grupo de Trabalho de Ministérios
 * @license     GNU General Public License version 2
 */

defined('_JEXEC') or die;
?>
<!-- barra do governo -->
<div id="barra-brasil">
    <a href="http://brasil.gov.br" title="Acesse para conhecer todos os serviços e informações do Governo Brasileiro na Internet.">Portal do Governo Brasileiro</a> 
    <?php if( $anexar_js == 1 && $endereco_js != ""): ?>
	<script src="<?php echo $endereco_js; ?>" type="text/javascript"></script><noscript>A barra do Governo Federal só poderá ser visualizada se o javascript estiver ativado.</noscript>
	<?php endif; ?>	
</div>
<?php if( $mensagem_ie_6 != ""): ?>
<!--[if lt IE 7]><br /><strong><?php echo $mensagem_ie_6; ?></strong><br /><![endif]-->
<?php endif; ?>
<!-- fim barra do governo -->    