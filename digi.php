<?




date_default_timezone_set("Asia/Jakarta");
/* START COLOR */
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";





function gett($url,$ua){

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r = curl_exec($ch);
return $r;
}


while(true){
$url = "https://digitask.ru/notimer_fp/faucet.php?address=DN7yXyeRT4vmdbGChzeoKxaa26NMT4Q2jT&capcode=c3d4a6a0ac90253d998f10216ac02da6%7C59d5d691efebbab0796996896e15f759%7Chttp%3A%2F%2Fback10.keycaptcha.com%2Fswfs%2Fckc%2F07284d4b96978aa70f844454f70ba5a9-%7C5f2fe3a0c745b-4.0.0.001%7C1&wallet=&currency=DOGE&key=4f0bc5fd5df8cc825aadbca77fc02446&__cf_chl_captcha_tk__=9f954157932219c6f77b2984ca3874d568840f1b-1617014899-0-AcwClHZgOR-BIkUweDqidaNZXQ2279caaBJuxgI20Tct5K0sZuSm-vI-pn06KTYYyaEzzrxM4CghWLgCa_WLbLUwYvZv1K-v51fFDg7aNXmm7DBQUtTJ8ffEJmeGGXXeCRSx_HSmemz-c1wHAs5VxW825N4aOqsJ1nUh038cKLCpiHug4JAjsxlALIhtbFKPPJZFX8SG6y8U0e2LFmkENZeg86jqjNpwPL0ny33rZlGA-DJRkYfbrzp2EiDcca0bsKpoQt_5PtYIbhwqEjm82Ry9kwoS3siWiRgCy_Bx4b5hzrqI3yit69cOe7PbQO5BteXYuRreQ76g7nJ4NiAd6TjaNAyUvlI-gFXp5-Zf9HFHw-7gyGbu1MubNiOgYURpEpVNJaoZ0ac6c0HVMdWOE13F2I23S26buot0tPiiDJfFKYdMtCrUIMmCzSIcbisI9E5-Dy85Mvke1Zhqz9PA_TZRuKPOXx_d7K_p4-_MGwim6m-s0uYFiwiJmZXDTpnUwzpYBeVmG-pimsdPcQuzKeeDNLweIFVtBTWNZy7shMcZ2KY9j_G0hTP6qUWwVSLrnY9rV0imS3e9-rt8q1vhvfNl_U6Ih6-5787eabGp-SoxgFovXFGZxUXvsQR7wGFRuleI5bNFCiBO53DnRSZUlGLJLxAjnwwCzXhbq8qqY3iuJaQgKAAc6U8t8ylK15tgCk4a5mYonKEUB_oojxZyfx7T-BOnm_4aJJPiAv9XpNJRj6ObCRe1H7bywouJTL08XHv5VTQYLZNLaUx6Ivs98QCho95rHlmENl3acIeiyZM5PXnjENF-aKscHiSlpsqoLYi-fN3BM9YujGcqNQMSGeMPW2Atz-pxfooKl0Gygw4EF9X_2pdxU-_h6SzaZThJrhrppaDvUNRSUStJpY7oyd05ntU0ppz8UOGU2-o2UnYF6HQQ5KZ4_rnf2KnYDrO-Mvm8KbYZaUql49qdScOmBkWEX4_aTpmdfo5GiG1-_Vz0JJi01y3L9VBWdAwVr6WbwQ";
$ua = array(
"user-agent:Mozilla/5.0 (Linux; Android 6.0.1; ASUS_A007) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36",
"cookie: ft=61616039341;__cfduid=d7435fb6aa113fe92ee336239fb32801a1616039239;antibot_uid=202dcd604db708ad28185d88a9630494;_ga=GA1.2.1284382791.1616039298;_ym_uid=1609822063889817279;_ym_d=1616039299;__atuvc=2%7C11;cf_chl_2=b5d70a4c2383782;cf_chl_prog=a21;cf_clearance=78a13236b6b81c30ae1fd097d59d8ee99e484914-1617014929-0-250;antibot_country=ID;antibot_lang=id;antibot_ptr=114-4-212-36.resources.indosat.com;antibot_6e6d762ad1e958ce452a8a9ebcb1874b=027a47d5e6051b744f7b296d12f86d22;antibot_referer=https%3A%2F%2Fdigitask.ru%2Fnotimer_fp%2Ffaucet.php%3Faddress%3DDN7yXyeRT4vmdbGChzeoKxaa26NMT4Q2jT%26capcode%3Dc3d4a6a0ac90253d998f10216ac02da6%257C59d5d691efebbab0796996896e15f759%257Chttp%253A%252F%252Fback10.keycaptcha.com%252Fswfs%252Fckc%252F07284d4b96978aa70f844454f70ba5a9-%257C5f2fe3a0c745b-4.0.0.001%257C1%26wallet%3D%26currency%3DDOGE%26key%3D4f0bc5fd5df8cc825aadbca77fc02446%26__cf_chl_captcha_tk__%3D9f954157932219c6f77b2984ca3874d568840f1b-1617014899-0-AcwClHZgOR-BIkUweDqidaNZXQ2279caaBJuxgI20Tct5K0sZuSm-vI-pn06KTYYyaEzzrxM4CghWLgCa_WLbLUwYvZv1K-v51fFDg7aNXmm7DBQUtTJ8ffEJmeGGXXeCRSx_HSmemz-c1wHAs5VxW825N4aOqsJ1nUh038cKLCpiHug4JAjsxlALIhtbFKPPJZFX8SG6y8U0e2LFmkENZeg86jqjNpwPL0ny33rZlGA-DJRkYfbrzp2EiDcca0bsKpoQt_5PtYIbhwqEjm82Ry9kwoS3siWiRgCy_Bx4b5hzrqI3yit69cOe7PbQO5BteXYuRreQ76g7nJ4NiAd6TjaNAyUvlI-gFXp5-Zf9HFHw-7gyGbu1MubNiOgYURpEpVNJaoZ0ac6c0HVMdWOE13F2I23S26buot0tPiiDJfFKYdMtCrUIMmCzSIcbisI9E5-Dy85Mvke1Zhqz9PA_TZRuKPOXx_d7K_p4-_MGwim6m-s0uYFiwiJmZXDTpnUwzpYBeVmG-pimsdPcQuzKeeDNLweIFVtBTWNZy7shMcZ2KY9j_G0hTP6qUWwVSLrnY9rV0imS3e9-rt8q1vhvfNl_U6Ih6-5787eabGp-SoxgFovXFGZxUXvsQR7wGFRuleI5bNFCiBO53DnRSZUlGLJLxAjnwwCzXhbq8qqY3iuJaQgKAAc6U8t8ylK15tgCk4a5mYonKEUB_oojxZyfx7T-BOnm_4aJJPiAv9XpNJRj6ObCRe1H7bywouJTL08XHv5VTQYLZNLaUx6Ivs98QCho95rHlmENl3acIeiyZM5PXnjENF-aKscHiSlpsqoLYi-fN3BM9YujGcqNQMSGeMPW2Atz-pxfooKl0Gygw4EF9X_2pdxU-_h6SzaZThJrhrppaDvUNRSUStJpY7oyd05ntU0ppz8UOGU2-o2UnYF6HQQ5KZ4_rnf2KnYDrO-Mvm8KbYZaUql49qdScOmBkWEX4_aTpmdfo5GiG1-_Vz0JJi01y3L9VBWdAwVr6WbwQ;bidswitch_last_time=1617014939308;rekmob_props_591630=%7B%22date%22%3A1617014434138%2C%22rekJs%22%3A%7B%22rekmob_ad_unit_type%22%3A1%2C%22rekmob_native_type%22%3Anull%2C%22rekmob_ad_width%22%3A300%2C%22rekmob_fixed_cpm%22%3A0%2C%22rekmob_network_ids%22%3A%22crt_id%3D0%22%2C%22rekmob_ad_unit%22%3A%22c7384edf01d64edd88a1443cf301fefd%22%2C%22rekmob_app_type%22%3A1%2C%22rekmob_ad_height%22%3A250%2C%22region_id%22%3A591630%7D%2C%22countryCode%22%3A%22ID%22%2C%22cookieTime%22%3A1617014941063%7D;rekmob_props_607003=%7B%22date%22%3A1617014808887%2C%22rekJs%22%3A%7B%22rekmob_ad_unit_type%22%3A23%2C%22rekmob_native_type%22%3Anull%2C%22rekmob_ad_width%22%3A160%2C%22rekmob_fixed_cpm%22%3A0%2C%22rekmob_network_ids%22%3A%22crt_id%3D0%22%2C%22rekmob_ad_unit%22%3A%221f2b0bf06f9e40baa5ad6fac7f27c007%22%2C%22rekmob_app_type%22%3A1%2C%22rekmob_ad_height%22%3A600%2C%22region_id%22%3A607003%7D%2C%22countryCode%22%3A%22ID%22%2C%22cookieTime%22%3A1617014941124%7D;rekmob_props_547149=%7B%22date%22%3A1617014370654%2C%22rekJs%22%3A%7B%22rekmob_ad_unit_type%22%3A1%2C%22rekmob_native_type%22%3Anull%2C%22rekmob_ad_width%22%3A300%2C%22rekmob_fixed_cpm%22%3A0%2C%22rekmob_network_ids%22%3A%22imdi_placement_id%3D22042046%3Bcrt_id%3D0%22%2C%22rekmob_ad_unit%22%3A%22df7c16a7098a4b5881b72703eef7cd0c%22%2C%22rekmob_app_type%22%3A1%2C%22rekmob_ad_height%22%3A250%2C%22region_id%22%3A547149%7D%2C%22countryCode%22%3A%22ID%22%2C%22cookieTime%22%3A1617014941154%7D;rekmob_props_547047=%7B%22date%22%3A1617014941158%2C%22rekJs%22%3A%7B%22rekmob_ad_unit_type%22%3A3%2C%22rekmob_native_type%22%3Anull%2C%22rekmob_ad_width%22%3A728%2C%22rekmob_fixed_cpm%22%3A0%2C%22rekmob_network_ids%22%3A%22imdi_placement_id%3D22042045%3Bcrt_id%3D0%22%2C%22rekmob_ad_unit%22%3A%22dd0f6bb180c64d898171986d1aea58e2%22%2C%22rekmob_app_type%22%3A1%2C%22rekmob_ad_height%22%3A90%2C%22region_id%22%3A547047%7D%2C%22countryCode%22%3A%22ID%22%2C%22cookieTime%22%3A1617014941189%7D;rekmob_props_551290=%7B%22date%22%3A1617014707330%2C%22rekJs%22%3A%7B%22rekmob_ad_unit_type%22%3A1%2C%22rekmob_native_type%22%3Anull%2C%22rekmob_ad_width%22%3A300%2C%22rekmob_fixed_cpm%22%3A0%2C%22rekmob_network_ids%22%3A%22imdi_placement_id%3D22064433%3Bcrt_id%3D0%22%2C%22rekmob_ad_unit%22%3A%2209010173e50d4a559c86fadfbafa3797%22%2C%22rekmob_app_type%22%3A1%2C%22rekmob_ad_height%22%3A250%2C%22region_id%22%3A551290%7D%2C%22countryCode%22%3A%22ID%22%2C%22cookieTime%22%3A1617014941240%7D;rekmob_props_1092462=%7B%22date%22%3A1617014434669%2C%22rekJs%22%3A%7B%22rekmob_ad_unit_type%22%3A34%2C%22rekmob_native_type%22%3Anull%2C%22rekmob_ad_width%22%3A728%2C%22rekmob_fixed_cpm%22%3A0%2C%22rekmob_network_ids%22%3A%22crt_id%3D0%22%2C%22rekmob_ad_unit%22%3A%2289d3b45d1dd74bee97d9b9d26d4fef91%22%2C%22rekmob_app_type%22%3A1%2C%22rekmob_ad_height%22%3A90%2C%22region_id%22%3A1092462%7D%2C%22countryCode%22%3A%22ID%22%2C%22cookieTime%22%3A1617014941340%7D;rekmob_last_seen_1f2b0bf06f9e40baa5ad6fac7f27c007=1617014943665;rekmob_last_seen_df7c16a7098a4b5881b72703eef7cd0c=1617014945559;rekmob_last_seen_dd0f6bb180c64d898171986d1aea58e2=1617014945676;rekmob_last_seen_c7384edf01d64edd88a1443cf301fefd=1617014945833;_gid=GA1.2.1162531994.1617014946;rekmob_last_seen_09010173e50d4a559c86fadfbafa3797=1617014946477;_ym_isad=2;antibot_hits=6"
);
$get = gett($url,$ua);
$o = explode('<div class="alert alert-success">', $get);
$ok = explode(' to', $o[1]);
if($ok[0] == ""){}else{
echo$green2." Claimed -> ".$ok[0]."\n";}

sleep(16);
}
