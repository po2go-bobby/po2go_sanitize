<?php

namespace po2go\po2go_sanitize;

use po2go\po2go_sanitize\Document\Punchout\Request\StartPageHtml;

/**
 * Class StartPageHtmlTest
 * @package po2go\po2go_sanitize
 */
class StartPageHtmlTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Test an invalid start page HTML document
     */
    public function testPrettifyBadStartPageHtml()
    {
        $document = new StartPageHtml();
        $document->Load('This is a bad start page. It isn\'t even HTML!');
        $pretty = $document->Prettify();
        $this->assertSame($pretty, false);
    }

    /**
     * Test an empty start page HTML document
     */
    public function testPrettifyEmptyStartPageHtml()
    {
        $document = new StartPageHtml();
        $document->Load('');
        $pretty = $document->Prettify();
        $this->assertSame($pretty, false);
    }

    /**
     * Test a valid start page HTML document
     */
    public function testPrettifyStartPageHtml()
    {
        $document = new StartPageHtml();
        $document->Load(<<< EOT
<html><head><style> body { font-family:arial; font-size:12px } </style></head><body>
<form action="https://monsanto.advan-ergo.com/punchout/2go/start" method=post  name="punchoutSend"><input type="hidden" name="pos" value="vn5a14a037060eb" id="pos"><input type="hidden" name="return_url" value="https://us-connect.punchout2go.com/gateway/link/return/id/vn5a14a037060eb" id="return_url"><input type="hidden" name="params" value="{&quot;header&quot;:{&quot;to&quot;:{&quot;data&quot;:[],&quot;0&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;0000318327&quot;,&quot;domain&quot;:&quot;buyersystemid&quot;},&quot;1&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;an01015051380&quot;,&quot;domain&quot;:&quot;networkid&quot;},&quot;2&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;0000318327&quot;,&quot;domain&quot;:&quot;sap&quot;},&quot;3&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;an01015051380&quot;,&quot;domain&quot;:&quot;transactionnetworkid&quot;},&quot;4&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;176627131&quot;,&quot;domain&quot;:&quot;duns&quot;},&quot;5&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;431736576&quot;,&quot;domain&quot;:&quot;ustin&quot;}},&quot;from&quot;:{&quot;data&quot;:[],&quot;0&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;AN01012258650&quot;,&quot;domain&quot;:&quot;NetworkId&quot;}},&quot;sender&quot;:{&quot;data&quot;:{&quot;UserAgent&quot;:&quot;Buyer 14s2&quot;},&quot;0&quot;:{&quot;data&quot;:{&quot;SharedSecret&quot;:&quot;p35Bn46fka&quot;},&quot;value&quot;:&quot;sysadmin@ariba.com&quot;,&quot;domain&quot;:&quot;AribaNetworkUserId&quot;}}},&quot;type&quot;:&quot;setuprequest&quot;,&quot;operation&quot;:&quot;create&quot;,&quot;mode&quot;:&quot;production&quot;,&quot;body&quot;:{&quot;data&quot;:{&quot;UserEmail&quot;:&quot;dustin.l.alderks@monsanto.com&quot;,&quot;CompanyCode&quot;:&quot;5180&quot;,&quot;UniqueName&quot;:&quot;dustin.l.alderks@monsanto.com&quot;},&quot;contact&quot;:{&quot;data&quot;:[],&quot;email&quot;:&quot;dustin.l.alderks@monsanto.com&quot;,&quot;name&quot;:null,&quot;unique&quot;:null},&quot;buyercookie&quot;:&quot;1NJ5CZ1PK2OFJ&quot;,&quot;postform&quot;:&quot;https:\/\/s1.ariba.com\/Buyer\/punchout?client=HTML.E79CCFD9EF2135D3825D5A53EC694758.Node9app450snv&amp;responseid=8&amp;locale=en_US&quot;,&quot;shipping&quot;:{&quot;data&quot;:{&quot;address_name&quot;:&quot;3066&quot;,&quot;shipping_id&quot;:&quot;3066&quot;,&quot;shipping_business&quot;:&quot;&quot;,&quot;shipping_to&quot;:&quot;Dustin Alderks&quot;,&quot;shipping_street&quot;:&quot;2111 PIILANI  HIGHWAY&quot;,&quot;shipping_city&quot;:&quot;KIHEI&quot;,&quot;shipping_state&quot;:&quot;HI&quot;,&quot;shipping_zip&quot;:&quot;96753&quot;,&quot;shipping_country&quot;:&quot;United States&quot;,&quot;country_id&quot;:&quot;US&quot;}},&quot;items&quot;:[{&quot;primaryId&quot;:&quot;AAA&quot;,&quot;secondaryId&quot;:&quot;&quot;,&quot;type&quot;:&quot;in&quot;}]},&quot;custom&quot;:{&quot;default_user&quot;:&quot;punchout.user@monsanto.com&quot;,&quot;default_group&quot;:&quot;Monsanto - No Tax&quot;}}" id="params"></form>
<script>self.document.forms[0].submit()</script>
Starting up your session.. <a href=\'javascript:self.document.forms[0].submit()\'>click here</a> if you are not redirected.</body></html>
EOT
);
        $pretty = $document->Prettify();
        $this->assertSame($pretty, <<< EOT
<html>
	<head>
		<style> body { font-family:arial; font-size:12px } </style>
	</head>
	<body>
		<form action="https://monsanto.advan-ergo.com/punchout/2go/start" method=post  name="punchoutSend">
			<input type="hidden" name="pos" value="vn5a14a037060eb" id="pos">
				<input type="hidden" name="return_url" value="https://us-connect.punchout2go.com/gateway/link/return/id/vn5a14a037060eb" id="return_url">
					<input type="hidden" name="params" value="{&quot;header&quot;:{&quot;to&quot;:{&quot;data&quot;:[],&quot;0&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;0000318327&quot;,&quot;domain&quot;:&quot;buyersystemid&quot;},&quot;1&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;an01015051380&quot;,&quot;domain&quot;:&quot;networkid&quot;},&quot;2&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;0000318327&quot;,&quot;domain&quot;:&quot;sap&quot;},&quot;3&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;an01015051380&quot;,&quot;domain&quot;:&quot;transactionnetworkid&quot;},&quot;4&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;176627131&quot;,&quot;domain&quot;:&quot;duns&quot;},&quot;5&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;431736576&quot;,&quot;domain&quot;:&quot;ustin&quot;}},&quot;from&quot;:{&quot;data&quot;:[],&quot;0&quot;:{&quot;data&quot;:[],&quot;value&quot;:&quot;AN01012258650&quot;,&quot;domain&quot;:&quot;NetworkId&quot;}},&quot;sender&quot;:{&quot;data&quot;:{&quot;UserAgent&quot;:&quot;Buyer 14s2&quot;},&quot;0&quot;:{&quot;data&quot;:{&quot;SharedSecret&quot;:&quot;p35Bn46fka&quot;},&quot;value&quot;:&quot;sysadmin@ariba.com&quot;,&quot;domain&quot;:&quot;AribaNetworkUserId&quot;}}},&quot;type&quot;:&quot;setuprequest&quot;,&quot;operation&quot;:&quot;create&quot;,&quot;mode&quot;:&quot;production&quot;,&quot;body&quot;:{&quot;data&quot;:{&quot;UserEmail&quot;:&quot;dustin.l.alderks@monsanto.com&quot;,&quot;CompanyCode&quot;:&quot;5180&quot;,&quot;UniqueName&quot;:&quot;dustin.l.alderks@monsanto.com&quot;},&quot;contact&quot;:{&quot;data&quot;:[],&quot;email&quot;:&quot;dustin.l.alderks@monsanto.com&quot;,&quot;name&quot;:null,&quot;unique&quot;:null},&quot;buyercookie&quot;:&quot;1NJ5CZ1PK2OFJ&quot;,&quot;postform&quot;:&quot;https:\/\/s1.ariba.com\/Buyer\/punchout?client=HTML.E79CCFD9EF2135D3825D5A53EC694758.Node9app450snv&amp;responseid=8&amp;locale=en_US&quot;,&quot;shipping&quot;:{&quot;data&quot;:{&quot;address_name&quot;:&quot;3066&quot;,&quot;shipping_id&quot;:&quot;3066&quot;,&quot;shipping_business&quot;:&quot;&quot;,&quot;shipping_to&quot;:&quot;Dustin Alderks&quot;,&quot;shipping_street&quot;:&quot;2111 PIILANI  HIGHWAY&quot;,&quot;shipping_city&quot;:&quot;KIHEI&quot;,&quot;shipping_state&quot;:&quot;HI&quot;,&quot;shipping_zip&quot;:&quot;96753&quot;,&quot;shipping_country&quot;:&quot;United States&quot;,&quot;country_id&quot;:&quot;US&quot;}},&quot;items&quot;:[{&quot;primaryId&quot;:&quot;AAA&quot;,&quot;secondaryId&quot;:&quot;&quot;,&quot;type&quot;:&quot;in&quot;}]},&quot;custom&quot;:{&quot;default_user&quot;:&quot;punchout.user@monsanto.com&quot;,&quot;default_group&quot;:&quot;Monsanto - No Tax&quot;}}" id="params">
					</form>
					<script>self.document.forms[0].submit()</script>
Starting up your session.. <a href=\'javascript:self.document.forms[0].submit()\'>click here</a> if you are not redirected.</body>
			</html>
EOT
			);
    }
}