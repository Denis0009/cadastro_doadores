<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " `doadores(1)`"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " `doadores(1)`"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<script>
function scCloseModal_cancel()
{
<?php
if ($this->close_modal_after_insert && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile']) {
?>
    history.go(-3);
<?php
} else {
?>
    parent.tb_remove();
<?php
}
?>
}
</script>
<?php
if ($this->record_insert_ok) {
    if ($this->close_modal_after_insert) {
        if ($_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile']) {
?>
<script>
parent.scCloseModalAfterInsert_improved();
</script>
<?php
        } else {
?>
<script>
parent.scCloseModalAfterInsert_regular();
</script>
<?php
        }
    } else {
?>
<script>
parent.scCloseModalAfterInsert_refreshOnly();
</script>
<?php
    }
?>
<?php
    if ($this->close_modal_after_insert) {
        exit;
    }
}
?>
            <meta name="viewport" content="minimal-ui, width=300, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="apple-touch-icon"   sizes="57x57" href="">
            <link rel="apple-touch-icon"   sizes="60x60" href="">
            <link rel="apple-touch-icon"   sizes="72x72" href="">
            <link rel="apple-touch-icon"   sizes="76x76" href="">
            <link rel="apple-touch-icon" sizes="114x114" href="">
            <link rel="apple-touch-icon" sizes="120x120" href="">
            <link rel="apple-touch-icon" sizes="144x144" href="">
            <link rel="apple-touch-icon" sizes="152x152" href="">
            <link rel="apple-touch-icon" sizes="180x180" href="">
            <link rel="icon" type="image/png" sizes="192x192" href="">
            <link rel="icon" type="image/png"   sizes="32x32" href="">
            <link rel="icon" type="image/png"   sizes="96x96" href="">
            <link rel="icon" type="image/png"   sizes="16x16" href="">
            <meta name="msapplication-TileColor" content="___">
            <meta name="msapplication-TileImage" content="">
            <meta name="theme-color" content="___">
            <meta name="apple-mobile-web-app-status-bar-style" content="___">
            <link rel="shortcut icon" href=""> <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
            <?php
               if ($_SESSION['scriptcase']['display_mobile'] && $_SESSION['scriptcase']['device_mobile']) {
                   $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
                   $sc_app_data   = json_encode([
                       'forceMobile' => $forced_mobile,
                       'appType' => 'form',
                       'improvements' => true,
                       'displayOptionsButton' => false,
                       'displayScrollUp' => true,
                       'scrollUpPosition' => 'A',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:3:{i:0;s:2:"NP";i:1;s:2:"FL";i:2;s:2:"RC";}'),
                       'mobileSimpleToolbar' => true,
                       'bottomToolbarFixed' => true
                   ]); ?>
            <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
            <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
            <script type="text/javascript" src="../_lib/lib/js/nm_form_mobile.js"></script>
            <link rel='stylesheet' href='../_lib/lib/css/nm_form_mobile.css' type='text/css'/>
            <script>
                $(document).ready(function(){

                    bootstrapMobile();

                });
            </script>
            <?php } ?> <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/dropdown_check_list/css/ui.dropdownchecklist.standalone.css" type="text/css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/dropdown_check_list/js/ui.dropdownchecklist.js"></SCRIPT>
 <style type="text/css">
   #ddcl-id_sc_field_intervalo_doacao_ { flex-grow: 1 }
   #ddcl-id_sc_field_intervalo_doacao_ .ui-dropdownchecklist-selector { width: 100% !important; box-sizing: border-box }
   #ddcl-id_sc_field_forma_pagamento_ { flex-grow: 1 }
   #ddcl-id_sc_field_forma_pagamento_ .ui-dropdownchecklist-selector { width: 100% !important; box-sizing: border-box }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_doadores_1__1/form_doadores_1__1_inline_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_doadores_1__1_inline_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
}
function navpage_atualiza(str_navpage)
{
}
<?php

include_once('form_doadores_1__1_inline_jquery.php');

?>
var applicationKeys = "";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  setTimeout(function() {
  scJQElementsAdd('');

  scJQGeneralAdd();

  }, 50);
  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  $(".scUiLabelWidthFix").css("width", "120px");
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
    scJQDDCheckBoxAdd('', false);
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = 'display: flex; flex-direction: column; justify-content: flex-start; margin: 0px; min-height: 100vh;';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_doadores_1__1']['error_buffer']) && '' != $_SESSION['scriptcase']['form_doadores_1__1']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_doadores_1__1']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_doadores_1__1_inline_js0.php");
?>
<script type="text/javascript"> 
nmdg_enter_tab = true;
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_doadores_1__1_inline.php" 
               onsubmit="return false;" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_doadores_1__1_inline'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_doadores_1__1_inline'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->sc_page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="70%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R")
{
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_']))
           {
               $this->nmgp_cmp_readonly['id_'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['nome_']))
           {
               $this->nmgp_cmp_readonly['nome_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['id_']))
    {
        $this->nm_new_label['id_'] = "Id";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $id_ = $this->id_;
   $sStyleHidden_id_ = '';
   if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['id_']);
       $sStyleHidden_id_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_id_ = 'display: none;';
   $sStyleReadInp_id_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_"]) &&  $this->nmgp_cmp_readonly["id_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['id_']);
       $sStyleReadLab_id_ = '';
       $sStyleReadInp_id_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_" value="<?php echo $this->form_encode_input($id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_id__label" id="hidden_field_label_id_" style="<?php echo $sStyleHidden_id_; ?>"><span id="id_label_id_"><?php echo $this->nm_new_label['id_']; ?></span></TD>
    <TD class="scFormDataOdd css_id__line" id="hidden_field_data_id_" style="<?php echo $sStyleHidden_id_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_id_" class="css_id__line" style="<?php echo $sStyleReadLab_id_; ?>"><?php echo $this->form_format_readonly("id_", $this->form_encode_input($this->id_)); ?></span><span id="id_read_off_id_" class="css_read_off_id_" style="<?php echo $sStyleReadInp_id_; ?>"><input type="hidden" name="id_" value="<?php echo $this->form_encode_input($id_) . "\">"?><span id="id_ajax_label_id_"><?php echo nl2br($id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id__text"></span></td></tr></table></td></tr></table></TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['email_']))
           {
               $this->nmgp_cmp_readonly['email_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['nome_']))
    {
        $this->nm_new_label['nome_'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome_ = $this->nome_;
   $sStyleHidden_nome_ = '';
   if (isset($this->nmgp_cmp_hidden['nome_']) && $this->nmgp_cmp_hidden['nome_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome_']);
       $sStyleHidden_nome_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome_ = 'display: none;';
   $sStyleReadInp_nome_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["nome_"]) &&  $this->nmgp_cmp_readonly["nome_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome_']);
       $sStyleReadLab_nome_ = '';
       $sStyleReadInp_nome_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome_']) && $this->nmgp_cmp_hidden['nome_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome_" value="<?php echo $this->form_encode_input($nome_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nome__label" id="hidden_field_label_nome_" style="<?php echo $sStyleHidden_nome_; ?>"><span id="id_label_nome_"><?php echo $this->nm_new_label['nome_']; ?></span></TD>
    <TD class="scFormDataOdd css_nome__line" id="hidden_field_data_nome_" style="<?php echo $sStyleHidden_nome_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nome__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["nome_"]) &&  $this->nmgp_cmp_readonly["nome_"] == "on")) { 

 ?>
<input type="hidden" name="nome_" value="<?php echo $this->form_encode_input($nome_) . "\"><span id=\"id_ajax_label_nome_\">" . $nome_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_nome_" class="sc-ui-readonly-nome_ css_nome__line" style="<?php echo $sStyleReadLab_nome_; ?>"><?php echo $this->form_format_readonly("nome_", $this->form_encode_input($this->nome_)); ?></span><span id="id_read_off_nome_" class="css_read_off_nome_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nome_; ?>">
 <input class="sc-js-input scFormObjectOdd css_nome__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nome_" type=text name="nome_" value="<?php echo $this->form_encode_input($nome_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=32767 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['cpf_']))
           {
               $this->nmgp_cmp_readonly['cpf_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['email_']))
    {
        $this->nm_new_label['email_'] = "Email";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email_ = $this->email_;
   $sStyleHidden_email_ = '';
   if (isset($this->nmgp_cmp_hidden['email_']) && $this->nmgp_cmp_hidden['email_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email_']);
       $sStyleHidden_email_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email_ = 'display: none;';
   $sStyleReadInp_email_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["email_"]) &&  $this->nmgp_cmp_readonly["email_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email_']);
       $sStyleReadLab_email_ = '';
       $sStyleReadInp_email_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email_']) && $this->nmgp_cmp_hidden['email_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="email_" value="<?php echo $this->form_encode_input($email_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_email__label" id="hidden_field_label_email_" style="<?php echo $sStyleHidden_email_; ?>"><span id="id_label_email_"><?php echo $this->nm_new_label['email_']; ?></span></TD>
    <TD class="scFormDataOdd css_email__line" id="hidden_field_data_email_" style="<?php echo $sStyleHidden_email_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_email__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["email_"]) &&  $this->nmgp_cmp_readonly["email_"] == "on")) { 

 ?>
<input type="hidden" name="email_" value="<?php echo $this->form_encode_input($email_) . "\"><span id=\"id_ajax_label_email_\">" . $email_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_email_" class="sc-ui-readonly-email_ css_email__line" style="<?php echo $sStyleReadLab_email_; ?>"><?php echo $this->form_format_readonly("email_", $this->form_encode_input($this->email_)); ?></span><span id="id_read_off_email_" class="css_read_off_email_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_email_; ?>">
 <input class="sc-js-input scFormObjectOdd css_email__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_email_" type=text name="email_" value="<?php echo $this->form_encode_input($email_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=32767 alt="{enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.email_.value != '') {window.open('mailto:' + document.F1.email_.value); }", "if (document.F1.email_.value != '') {window.open('mailto:' + document.F1.email_.value); }", "email__mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['telefone_']))
           {
               $this->nmgp_cmp_readonly['telefone_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['cpf_']))
    {
        $this->nm_new_label['cpf_'] = "Cpf";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cpf_ = $this->cpf_;
   $sStyleHidden_cpf_ = '';
   if (isset($this->nmgp_cmp_hidden['cpf_']) && $this->nmgp_cmp_hidden['cpf_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cpf_']);
       $sStyleHidden_cpf_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cpf_ = 'display: none;';
   $sStyleReadInp_cpf_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["cpf_"]) &&  $this->nmgp_cmp_readonly["cpf_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cpf_']);
       $sStyleReadLab_cpf_ = '';
       $sStyleReadInp_cpf_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cpf_']) && $this->nmgp_cmp_hidden['cpf_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cpf_" value="<?php echo $this->form_encode_input($cpf_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cpf__label" id="hidden_field_label_cpf_" style="<?php echo $sStyleHidden_cpf_; ?>"><span id="id_label_cpf_"><?php echo $this->nm_new_label['cpf_']; ?></span></TD>
    <TD class="scFormDataOdd css_cpf__line" id="hidden_field_data_cpf_" style="<?php echo $sStyleHidden_cpf_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cpf__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["cpf_"]) &&  $this->nmgp_cmp_readonly["cpf_"] == "on")) { 

 ?>
<input type="hidden" name="cpf_" value="<?php echo $this->form_encode_input($cpf_) . "\"><span id=\"id_ajax_label_cpf_\">" . $cpf_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_cpf_" class="sc-ui-readonly-cpf_ css_cpf__line" style="<?php echo $sStyleReadLab_cpf_; ?>"><?php echo $this->form_format_readonly("cpf_", $this->form_encode_input($this->cpf_)); ?></span><span id="id_read_off_cpf_" class="css_read_off_cpf_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cpf_; ?>">
 <input class="sc-js-input scFormObjectOdd css_cpf__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cpf_" type=text name="cpf_" value="<?php echo $this->form_encode_input($cpf_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=12"; } ?> alt="{datatype: 'cpf', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cpf__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cpf__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['data_nascimento_']))
           {
               $this->nmgp_cmp_readonly['data_nascimento_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['telefone_']))
    {
        $this->nm_new_label['telefone_'] = "Telefone";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefone_ = $this->telefone_;
   $sStyleHidden_telefone_ = '';
   if (isset($this->nmgp_cmp_hidden['telefone_']) && $this->nmgp_cmp_hidden['telefone_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefone_']);
       $sStyleHidden_telefone_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefone_ = 'display: none;';
   $sStyleReadInp_telefone_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["telefone_"]) &&  $this->nmgp_cmp_readonly["telefone_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefone_']);
       $sStyleReadLab_telefone_ = '';
       $sStyleReadInp_telefone_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefone_']) && $this->nmgp_cmp_hidden['telefone_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="telefone_" value="<?php echo $this->form_encode_input($telefone_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_telefone__label" id="hidden_field_label_telefone_" style="<?php echo $sStyleHidden_telefone_; ?>"><span id="id_label_telefone_"><?php echo $this->nm_new_label['telefone_']; ?></span></TD>
    <TD class="scFormDataOdd css_telefone__line" id="hidden_field_data_telefone_" style="<?php echo $sStyleHidden_telefone_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_telefone__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["telefone_"]) &&  $this->nmgp_cmp_readonly["telefone_"] == "on")) { 

 ?>
<input type="hidden" name="telefone_" value="<?php echo $this->form_encode_input($telefone_) . "\"><span id=\"id_ajax_label_telefone_\">" . $telefone_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_telefone_" class="sc-ui-readonly-telefone_ css_telefone__line" style="<?php echo $sStyleReadLab_telefone_; ?>"><?php echo $this->form_format_readonly("telefone_", $this->form_encode_input($this->telefone_)); ?></span><span id="id_read_off_telefone_" class="css_read_off_telefone_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_telefone_; ?>">
 <input class="sc-js-input scFormObjectOdd css_telefone__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_telefone_" type=text name="telefone_" value="<?php echo $this->form_encode_input($telefone_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> alt="{datatype: 'integer', maxLength: 20, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['telefone_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['telefone_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['telefone_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_telefone__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_telefone__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['data_cadastro_']))
           {
               $this->nmgp_cmp_readonly['data_cadastro_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['data_nascimento_']))
    {
        $this->nm_new_label['data_nascimento_'] = "Data Nascimento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_nascimento_ = $this->data_nascimento_;
   $sStyleHidden_data_nascimento_ = '';
   if (isset($this->nmgp_cmp_hidden['data_nascimento_']) && $this->nmgp_cmp_hidden['data_nascimento_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_nascimento_']);
       $sStyleHidden_data_nascimento_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_nascimento_ = 'display: none;';
   $sStyleReadInp_data_nascimento_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["data_nascimento_"]) &&  $this->nmgp_cmp_readonly["data_nascimento_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_nascimento_']);
       $sStyleReadLab_data_nascimento_ = '';
       $sStyleReadInp_data_nascimento_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_nascimento_']) && $this->nmgp_cmp_hidden['data_nascimento_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_nascimento_" value="<?php echo $this->form_encode_input($data_nascimento_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_nascimento__label" id="hidden_field_label_data_nascimento_" style="<?php echo $sStyleHidden_data_nascimento_; ?>"><span id="id_label_data_nascimento_"><?php echo $this->nm_new_label['data_nascimento_']; ?></span></TD>
    <TD class="scFormDataOdd css_data_nascimento__line" id="hidden_field_data_data_nascimento_" style="<?php echo $sStyleHidden_data_nascimento_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_nascimento__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["data_nascimento_"]) &&  $this->nmgp_cmp_readonly["data_nascimento_"] == "on")) { 

 ?>
<input type="hidden" name="data_nascimento_" value="<?php echo $this->form_encode_input($data_nascimento_) . "\"><span id=\"id_ajax_label_data_nascimento_\">" . $data_nascimento_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_data_nascimento_" class="sc-ui-readonly-data_nascimento_ css_data_nascimento__line" style="<?php echo $sStyleReadLab_data_nascimento_; ?>"><?php echo $this->form_format_readonly("data_nascimento_", $this->form_encode_input($data_nascimento_)); ?></span><span id="id_read_off_data_nascimento_" class="css_read_off_data_nascimento_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_nascimento_; ?>"><?php
$tmp_form_data = $this->field_config['data_nascimento_']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

 <input class="sc-js-input scFormObjectOdd css_data_nascimento__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_nascimento_" type=text name="data_nascimento_" value="<?php echo $this->form_encode_input($data_nascimento_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=4"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_nascimento_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_nascimento_']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_nascimento__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_nascimento__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['intervalo_doacao_']))
           {
               $this->nmgp_cmp_readonly['intervalo_doacao_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['data_cadastro_']))
    {
        $this->nm_new_label['data_cadastro_'] = "Data Cadastro";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_cadastro_ = $this->data_cadastro_;
   $sStyleHidden_data_cadastro_ = '';
   if (isset($this->nmgp_cmp_hidden['data_cadastro_']) && $this->nmgp_cmp_hidden['data_cadastro_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_cadastro_']);
       $sStyleHidden_data_cadastro_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_cadastro_ = 'display: none;';
   $sStyleReadInp_data_cadastro_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["data_cadastro_"]) &&  $this->nmgp_cmp_readonly["data_cadastro_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_cadastro_']);
       $sStyleReadLab_data_cadastro_ = '';
       $sStyleReadInp_data_cadastro_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_cadastro_']) && $this->nmgp_cmp_hidden['data_cadastro_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_cadastro_" value="<?php echo $this->form_encode_input($data_cadastro_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_cadastro__label" id="hidden_field_label_data_cadastro_" style="<?php echo $sStyleHidden_data_cadastro_; ?>"><span id="id_label_data_cadastro_"><?php echo $this->nm_new_label['data_cadastro_']; ?></span></TD>
    <TD class="scFormDataOdd css_data_cadastro__line" id="hidden_field_data_data_cadastro_" style="<?php echo $sStyleHidden_data_cadastro_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_cadastro__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["data_cadastro_"]) &&  $this->nmgp_cmp_readonly["data_cadastro_"] == "on")) { 

 ?>
<input type="hidden" name="data_cadastro_" value="<?php echo $this->form_encode_input($data_cadastro_) . "\"><span id=\"id_ajax_label_data_cadastro_\">" . $data_cadastro_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_data_cadastro_" class="sc-ui-readonly-data_cadastro_ css_data_cadastro__line" style="<?php echo $sStyleReadLab_data_cadastro_; ?>"><?php echo $this->form_format_readonly("data_cadastro_", $this->form_encode_input($data_cadastro_)); ?></span><span id="id_read_off_data_cadastro_" class="css_read_off_data_cadastro_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_cadastro_; ?>"><?php
$tmp_form_data = $this->field_config['data_cadastro_']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

 <input class="sc-js-input scFormObjectOdd css_data_cadastro__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_cadastro_" type=text name="data_cadastro_" value="<?php echo $this->form_encode_input($data_cadastro_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=4"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_cadastro_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_cadastro_']['date_format']; ?>', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_cadastro__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_cadastro__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['valor_doacao_']))
           {
               $this->nmgp_cmp_readonly['valor_doacao_'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['intervalo_doacao_']))
   {
       $this->nm_new_label['intervalo_doacao_'] = "Intervalo Doação";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $intervalo_doacao_ = $this->intervalo_doacao_;
   $sStyleHidden_intervalo_doacao_ = '';
   if (isset($this->nmgp_cmp_hidden['intervalo_doacao_']) && $this->nmgp_cmp_hidden['intervalo_doacao_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['intervalo_doacao_']);
       $sStyleHidden_intervalo_doacao_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_intervalo_doacao_ = 'display: none;';
   $sStyleReadInp_intervalo_doacao_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["intervalo_doacao_"]) &&  $this->nmgp_cmp_readonly["intervalo_doacao_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['intervalo_doacao_']);
       $sStyleReadLab_intervalo_doacao_ = '';
       $sStyleReadInp_intervalo_doacao_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['intervalo_doacao_']) && $this->nmgp_cmp_hidden['intervalo_doacao_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="intervalo_doacao_" value="<?php echo $this->form_encode_input($this->intervalo_doacao_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_intervalo_doacao__label" id="hidden_field_label_intervalo_doacao_" style="<?php echo $sStyleHidden_intervalo_doacao_; ?>"><span id="id_label_intervalo_doacao_"><?php echo $this->nm_new_label['intervalo_doacao_']; ?></span></TD>
    <TD class="scFormDataOdd css_intervalo_doacao__line" id="hidden_field_data_intervalo_doacao_" style="<?php echo $sStyleHidden_intervalo_doacao_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_intervalo_doacao__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["intervalo_doacao_"]) &&  $this->nmgp_cmp_readonly["intervalo_doacao_"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_cpf_ = $this->cpf_;
   $old_value_telefone_ = $this->telefone_;
   $old_value_data_nascimento_ = $this->data_nascimento_;
   $old_value_data_cadastro_ = $this->data_cadastro_;
   $old_value_valor_doacao_ = $this->valor_doacao_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_cpf_ = $this->cpf_;
   $unformatted_value_telefone_ = $this->telefone_;
   $unformatted_value_data_nascimento_ = $this->data_nascimento_;
   $unformatted_value_data_cadastro_ = $this->data_cadastro_;
   $unformatted_value_valor_doacao_ = $this->valor_doacao_;

   $nm_comando = "SELECT  * FROM `intervalo_doadores`";

   $this->id_ = $old_value_id_;
   $this->cpf_ = $old_value_cpf_;
   $this->telefone_ = $old_value_telefone_;
   $this->data_nascimento_ = $old_value_data_nascimento_;
   $this->data_cadastro_ = $old_value_data_cadastro_;
   $this->valor_doacao_ = $old_value_valor_doacao_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_intervalo_doacao_'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $intervalo_doacao__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          foreach ($this->intervalo_doacao__1 as $Dados)
          {
              if ($Dados === $cadaselect[1])
              {
                  $intervalo_doacao__look .= $cadaselect[0] . "&nbsp;";
                  break;
              }
          }
          $x++; 
   }

?>
<input type="hidden" name="intervalo_doacao_" value="<?php echo $this->form_encode_input($intervalo_doacao_) . "\"><span id=\"id_ajax_label_intervalo_doacao_\">" . $intervalo_doacao__look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_intervalo_doacao_();
   $x = 0 ; 
   $intervalo_doacao__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->intervalo_doacao__1))
          {
              foreach ($this->intervalo_doacao__1 as $tmp_intervalo_doacao_)
              {
                  if (trim($tmp_intervalo_doacao_) === trim($cadaselect[1])) { $intervalo_doacao__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->intervalo_doacao_) === trim($cadaselect[1])) { $intervalo_doacao__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($intervalo_doacao__look))
          {
              $intervalo_doacao__look = $this->intervalo_doacao_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_intervalo_doacao_\" class=\"css_intervalo_doacao__line\" style=\"" .  $sStyleReadLab_intervalo_doacao_ . "\">" . $this->form_format_readonly("intervalo_doacao_", $this->form_encode_input($intervalo_doacao__look)) . "</span><span id=\"id_read_off_intervalo_doacao_\" class=\"css_read_off_intervalo_doacao_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_intervalo_doacao_ . "\">";
   echo " <span id=\"idAjaxSelect_intervalo_doacao_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_intervalo_doacao__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_intervalo_doacao_\" name=\"intervalo_doacao_\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->intervalo_doacao_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->intervalo_doacao_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_intervalo_doacao__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_intervalo_doacao__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['forma_pagamento_']))
           {
               $this->nmgp_cmp_readonly['forma_pagamento_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['valor_doacao_']))
    {
        $this->nm_new_label['valor_doacao_'] = "Valor Doação";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor_doacao_ = $this->valor_doacao_;
   $sStyleHidden_valor_doacao_ = '';
   if (isset($this->nmgp_cmp_hidden['valor_doacao_']) && $this->nmgp_cmp_hidden['valor_doacao_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor_doacao_']);
       $sStyleHidden_valor_doacao_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor_doacao_ = 'display: none;';
   $sStyleReadInp_valor_doacao_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["valor_doacao_"]) &&  $this->nmgp_cmp_readonly["valor_doacao_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor_doacao_']);
       $sStyleReadLab_valor_doacao_ = '';
       $sStyleReadInp_valor_doacao_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor_doacao_']) && $this->nmgp_cmp_hidden['valor_doacao_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_doacao_" value="<?php echo $this->form_encode_input($valor_doacao_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_valor_doacao__label" id="hidden_field_label_valor_doacao_" style="<?php echo $sStyleHidden_valor_doacao_; ?>"><span id="id_label_valor_doacao_"><?php echo $this->nm_new_label['valor_doacao_']; ?></span></TD>
    <TD class="scFormDataOdd css_valor_doacao__line" id="hidden_field_data_valor_doacao_" style="<?php echo $sStyleHidden_valor_doacao_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_doacao__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["valor_doacao_"]) &&  $this->nmgp_cmp_readonly["valor_doacao_"] == "on")) { 

 ?>
<input type="hidden" name="valor_doacao_" value="<?php echo $this->form_encode_input($valor_doacao_) . "\"><span id=\"id_ajax_label_valor_doacao_\">" . $valor_doacao_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_valor_doacao_" class="sc-ui-readonly-valor_doacao_ css_valor_doacao__line" style="<?php echo $sStyleReadLab_valor_doacao_; ?>"><?php echo $this->form_format_readonly("valor_doacao_", $this->form_encode_input($this->valor_doacao_)); ?></span><span id="id_read_off_valor_doacao_" class="css_read_off_valor_doacao_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_doacao_; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_doacao__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_doacao_" type=text name="valor_doacao_" value="<?php echo $this->form_encode_input($valor_doacao_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=8"; } ?> alt="{datatype: 'decimal', maxLength: 8, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_doacao_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_doacao_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_doacao_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_doacao_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_doacao__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_doacao__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['informacoes_conta_']))
           {
               $this->nmgp_cmp_readonly['informacoes_conta_'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['forma_pagamento_']))
   {
       $this->nm_new_label['forma_pagamento_'] = "Forma Pagamento";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $forma_pagamento_ = $this->forma_pagamento_;
   $sStyleHidden_forma_pagamento_ = '';
   if (isset($this->nmgp_cmp_hidden['forma_pagamento_']) && $this->nmgp_cmp_hidden['forma_pagamento_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['forma_pagamento_']);
       $sStyleHidden_forma_pagamento_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_forma_pagamento_ = 'display: none;';
   $sStyleReadInp_forma_pagamento_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["forma_pagamento_"]) &&  $this->nmgp_cmp_readonly["forma_pagamento_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['forma_pagamento_']);
       $sStyleReadLab_forma_pagamento_ = '';
       $sStyleReadInp_forma_pagamento_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['forma_pagamento_']) && $this->nmgp_cmp_hidden['forma_pagamento_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="forma_pagamento_" value="<?php echo $this->form_encode_input($this->forma_pagamento_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_forma_pagamento__label" id="hidden_field_label_forma_pagamento_" style="<?php echo $sStyleHidden_forma_pagamento_; ?>"><span id="id_label_forma_pagamento_"><?php echo $this->nm_new_label['forma_pagamento_']; ?></span></TD>
    <TD class="scFormDataOdd css_forma_pagamento__line" id="hidden_field_data_forma_pagamento_" style="<?php echo $sStyleHidden_forma_pagamento_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_forma_pagamento__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["forma_pagamento_"]) &&  $this->nmgp_cmp_readonly["forma_pagamento_"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_'] = array(); 
    }

   $old_value_id_ = $this->id_;
   $old_value_cpf_ = $this->cpf_;
   $old_value_telefone_ = $this->telefone_;
   $old_value_data_nascimento_ = $this->data_nascimento_;
   $old_value_data_cadastro_ = $this->data_cadastro_;
   $old_value_valor_doacao_ = $this->valor_doacao_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_id_ = $this->id_;
   $unformatted_value_cpf_ = $this->cpf_;
   $unformatted_value_telefone_ = $this->telefone_;
   $unformatted_value_data_nascimento_ = $this->data_nascimento_;
   $unformatted_value_data_cadastro_ = $this->data_cadastro_;
   $unformatted_value_valor_doacao_ = $this->valor_doacao_;

   $nm_comando = "SELECT forma_pagamento, forma_pagamento  FROM tipo_pagamento  ORDER BY forma_pagamento";

   $this->id_ = $old_value_id_;
   $this->cpf_ = $old_value_cpf_;
   $this->telefone_ = $old_value_telefone_;
   $this->data_nascimento_ = $old_value_data_nascimento_;
   $this->data_cadastro_ = $old_value_data_cadastro_;
   $this->valor_doacao_ = $old_value_valor_doacao_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['Lookup_forma_pagamento_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $forma_pagamento__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->forma_pagamento__1))
          {
              foreach ($this->forma_pagamento__1 as $tmp_forma_pagamento_)
              {
                  if (trim($tmp_forma_pagamento_) === trim($cadaselect[1])) { $forma_pagamento__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->forma_pagamento_) === trim($cadaselect[1])) { $forma_pagamento__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="forma_pagamento_" value="<?php echo $this->form_encode_input($forma_pagamento_) . "\"><span id=\"id_ajax_label_forma_pagamento_\">" . $forma_pagamento__look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_forma_pagamento_();
   $x = 0 ; 
   $forma_pagamento__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->forma_pagamento__1))
          {
              foreach ($this->forma_pagamento__1 as $tmp_forma_pagamento_)
              {
                  if (trim($tmp_forma_pagamento_) === trim($cadaselect[1])) { $forma_pagamento__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->forma_pagamento_) === trim($cadaselect[1])) { $forma_pagamento__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($forma_pagamento__look))
          {
              $forma_pagamento__look = $this->forma_pagamento_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_forma_pagamento_\" class=\"css_forma_pagamento__line\" style=\"" .  $sStyleReadLab_forma_pagamento_ . "\">" . $this->form_format_readonly("forma_pagamento_", $this->form_encode_input($forma_pagamento__look)) . "</span><span id=\"id_read_off_forma_pagamento_\" class=\"css_read_off_forma_pagamento_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_forma_pagamento_ . "\">";
   echo " <span id=\"idAjaxSelect_forma_pagamento_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_forma_pagamento__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_forma_pagamento_\" name=\"forma_pagamento_\" size=\"1\" alt=\"{type: 'select', enterTab: true}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->forma_pagamento_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->forma_pagamento_)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_forma_pagamento__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_forma_pagamento__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['informacoes_cartao_']))
           {
               $this->nmgp_cmp_readonly['informacoes_cartao_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['informacoes_conta_']))
    {
        $this->nm_new_label['informacoes_conta_'] = "Informações Conta";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $informacoes_conta_ = $this->informacoes_conta_;
   $sStyleHidden_informacoes_conta_ = '';
   if (isset($this->nmgp_cmp_hidden['informacoes_conta_']) && $this->nmgp_cmp_hidden['informacoes_conta_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['informacoes_conta_']);
       $sStyleHidden_informacoes_conta_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_informacoes_conta_ = 'display: none;';
   $sStyleReadInp_informacoes_conta_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["informacoes_conta_"]) &&  $this->nmgp_cmp_readonly["informacoes_conta_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['informacoes_conta_']);
       $sStyleReadLab_informacoes_conta_ = '';
       $sStyleReadInp_informacoes_conta_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['informacoes_conta_']) && $this->nmgp_cmp_hidden['informacoes_conta_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="informacoes_conta_" value="<?php echo $this->form_encode_input($informacoes_conta_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_informacoes_conta__label" id="hidden_field_label_informacoes_conta_" style="<?php echo $sStyleHidden_informacoes_conta_; ?>"><span id="id_label_informacoes_conta_"><?php echo $this->nm_new_label['informacoes_conta_']; ?></span></TD>
    <TD class="scFormDataOdd css_informacoes_conta__line" id="hidden_field_data_informacoes_conta_" style="<?php echo $sStyleHidden_informacoes_conta_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_informacoes_conta__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["informacoes_conta_"]) &&  $this->nmgp_cmp_readonly["informacoes_conta_"] == "on")) { 

 ?>
<input type="hidden" name="informacoes_conta_" value="<?php echo $this->form_encode_input($informacoes_conta_) . "\"><span id=\"id_ajax_label_informacoes_conta_\">" . $informacoes_conta_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_informacoes_conta_" class="sc-ui-readonly-informacoes_conta_ css_informacoes_conta__line" style="<?php echo $sStyleReadLab_informacoes_conta_; ?>"><?php echo $this->form_format_readonly("informacoes_conta_", $this->form_encode_input($this->informacoes_conta_)); ?></span><span id="id_read_off_informacoes_conta_" class="css_read_off_informacoes_conta_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_informacoes_conta_; ?>">
 <input class="sc-js-input scFormObjectOdd css_informacoes_conta__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_informacoes_conta_" type=text name="informacoes_conta_" value="<?php echo $this->form_encode_input($informacoes_conta_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=32767 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: 'Conta + Agência', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
<span class="scFormDataTagOdd" style="display: block">Débito</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_informacoes_conta__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_informacoes_conta__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['endereco_']))
           {
               $this->nmgp_cmp_readonly['endereco_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['informacoes_cartao_']))
    {
        $this->nm_new_label['informacoes_cartao_'] = "Informacoes Cartão";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $informacoes_cartao_ = $this->informacoes_cartao_;
   $sStyleHidden_informacoes_cartao_ = '';
   if (isset($this->nmgp_cmp_hidden['informacoes_cartao_']) && $this->nmgp_cmp_hidden['informacoes_cartao_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['informacoes_cartao_']);
       $sStyleHidden_informacoes_cartao_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_informacoes_cartao_ = 'display: none;';
   $sStyleReadInp_informacoes_cartao_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["informacoes_cartao_"]) &&  $this->nmgp_cmp_readonly["informacoes_cartao_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['informacoes_cartao_']);
       $sStyleReadLab_informacoes_cartao_ = '';
       $sStyleReadInp_informacoes_cartao_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['informacoes_cartao_']) && $this->nmgp_cmp_hidden['informacoes_cartao_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="informacoes_cartao_" value="<?php echo $this->form_encode_input($informacoes_cartao_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_informacoes_cartao__label" id="hidden_field_label_informacoes_cartao_" style="<?php echo $sStyleHidden_informacoes_cartao_; ?>"><span id="id_label_informacoes_cartao_"><?php echo $this->nm_new_label['informacoes_cartao_']; ?></span></TD>
    <TD class="scFormDataOdd css_informacoes_cartao__line" id="hidden_field_data_informacoes_cartao_" style="<?php echo $sStyleHidden_informacoes_cartao_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_informacoes_cartao__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["informacoes_cartao_"]) &&  $this->nmgp_cmp_readonly["informacoes_cartao_"] == "on")) { 

 ?>
<input type="hidden" name="informacoes_cartao_" value="<?php echo $this->form_encode_input($informacoes_cartao_) . "\"><span id=\"id_ajax_label_informacoes_cartao_\">" . $informacoes_cartao_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_informacoes_cartao_" class="sc-ui-readonly-informacoes_cartao_ css_informacoes_cartao__line" style="<?php echo $sStyleReadLab_informacoes_cartao_; ?>"><?php echo $this->form_format_readonly("informacoes_cartao_", $this->form_encode_input($this->informacoes_cartao_)); ?></span><span id="id_read_off_informacoes_cartao_" class="css_read_off_informacoes_cartao_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_informacoes_cartao_; ?>">
 <input class="sc-js-input scFormObjectOdd css_informacoes_cartao__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_informacoes_cartao_" type=text name="informacoes_cartao_" value="<?php echo $this->form_encode_input($informacoes_cartao_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=55"; } ?> maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '6 Primeiros Dígitos + 4 Últimos', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
<span class="scFormDataTagOdd" style="display: block">Crédito</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_informacoes_cartao__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_informacoes_cartao__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['endereco_']))
    {
        $this->nm_new_label['endereco_'] = "Endereço";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $endereco_ = $this->endereco_;
   $sStyleHidden_endereco_ = '';
   if (isset($this->nmgp_cmp_hidden['endereco_']) && $this->nmgp_cmp_hidden['endereco_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['endereco_']);
       $sStyleHidden_endereco_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_endereco_ = 'display: none;';
   $sStyleReadInp_endereco_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["endereco_"]) &&  $this->nmgp_cmp_readonly["endereco_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['endereco_']);
       $sStyleReadLab_endereco_ = '';
       $sStyleReadInp_endereco_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['endereco_']) && $this->nmgp_cmp_hidden['endereco_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="endereco_" value="<?php echo $this->form_encode_input($endereco_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_endereco__label" id="hidden_field_label_endereco_" style="<?php echo $sStyleHidden_endereco_; ?>"><span id="id_label_endereco_"><?php echo $this->nm_new_label['endereco_']; ?></span></TD>
    <TD class="scFormDataOdd css_endereco__line" id="hidden_field_data_endereco_" style="<?php echo $sStyleHidden_endereco_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_endereco__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["endereco_"]) &&  $this->nmgp_cmp_readonly["endereco_"] == "on")) { 

 ?>
<input type="hidden" name="endereco_" value="<?php echo $this->form_encode_input($endereco_) . "\"><span id=\"id_ajax_label_endereco_\">" . $endereco_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_endereco_" class="sc-ui-readonly-endereco_ css_endereco__line" style="<?php echo $sStyleReadLab_endereco_; ?>"><?php echo $this->form_format_readonly("endereco_", $this->form_encode_input($this->endereco_)); ?></span><span id="id_read_off_endereco_" class="css_read_off_endereco_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_endereco_; ?>">
 <input class="sc-js-input scFormObjectOdd css_endereco__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_endereco_" type=text name="endereco_" value="<?php echo $this->form_encode_input($endereco_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=32767 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_endereco__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_endereco__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R")
{
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_doadores_1__1_inline");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_doadores_1__1_inline");
 parent.scAjaxDetailHeight("form_doadores_1__1_inline", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_doadores_1__1_inline", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_doadores_1__1_inline", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if (isset($this->scFormFocusErrorName) && '' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			<?php if ($this->Embutida_ronly) { ?>sc_inline_form_add(900, 500);<?php } else { ?>do_ajax_form_doadores_1__1_add_new_line(); return false;<?php } ?>
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-15").length && $("#sc_b_new_t.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-16").length && $("#sc_b_ins_t.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			scCloseModal_cancel();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-18").length && $("#sc_b_upd_t.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-19").length && $("#sc_b_sai_t.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-20").length && $("#sc_b_sai_t.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-21").length && $("#sc_b_sai_t.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-21").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-22").length && $("#sc_b_sai_t.sc-unique-btn-22").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-22").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-23").length && $("#sc_b_sai_t.sc-unique-btn-23").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq(btnPos) {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
		    if ($("#brec_b").hasClass("disabled")) {
		        return;
		    }
			nm_navpage(document.F1['nmgp_rec_' + btnPos].value, 'P'); document.F1['nmgp_rec_' + btnPos].value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_doadores_1__1_inline']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
