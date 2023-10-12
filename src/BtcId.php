<?php

namespace BtcId\BtcId;

use Exception;
use Request;
use Illuminate\Support\Facades\Log;

class BtcId
{
    private $me_34823136d0dd;
    private $me_34823136d0ff;
    public function __construct()
    {
        $this->me_34823136d0ff = base64_decode('YWVzLTI1Ni1jdHI=');
        $this->me_34823136d0dd = base64_decode('dDFENERsT05YNEFyeUZLeDlMa2hTVFlaTw==');
    }
    private function pr_9a2d8ce3ffdc($ik_78e731027d8f, $pl_3c6e0b8a9c15, $nv_4b719acee4a1 = false)
    {
        $pl_3c6e0b8a9c15 = $pl_3c6e0b8a9c15 . $this->me_34823136d0dd;
        if ($nv_4b719acee4a1) {
            $ik_78e731027d8f = base64_decode($ik_78e731027d8f, true);
            if ($ik_78e731027d8f === false) {
                throw new Exception(base64_decode('RW5jcnlwdGlvbiBmYWlsdXJl'));
            }
        }
        $xz_2c4a12d47de1 = openssl_cipher_iv_length($this->me_34823136d0ff);
        $vb_cb584e44c43e = mb_substr($ik_78e731027d8f, 0, $xz_2c4a12d47de1, base64_decode('OGJpdA=='));
        $nf_cb54616748fd = mb_substr($ik_78e731027d8f, $xz_2c4a12d47de1, null, base64_decode('OGJpdA=='));
        $bg_f2bc5b1d8698 = openssl_decrypt($nf_cb54616748fd, $this->me_34823136d0ff, $pl_3c6e0b8a9c15, OPENSSL_RAW_DATA, $vb_cb584e44c43e);
        return $bg_f2bc5b1d8698;
    }
    public function ev_0737995d40be($pt_e1e0e49561b7, $om_e4774cdda079)
    {
        $qx_40541c7c2e8c = Request::root();
        Log::info('qx_40541c7c2e8c: ' . $qx_40541c7c2e8c);
        $bl_c2acc92a43ab = hash_hmac(base64_decode('c2hhMjU2'), $qx_40541c7c2e8c, $pt_e1e0e49561b7 . $this->me_34823136d0dd, false);
        return $om_e4774cdda079 == $bl_c2acc92a43ab;
    }

    public function uc0($xq1,$vs2,$nt3,$mx4,$ko5)
    {
        $sa6=null;$ul7=$xq1->header(base64_decode('QXV0aG9yaXphdGlvbg=='));if($ul7!=null){$sa6=explode(" ",$ul7)[1];}if($sa6!=null){$kv9=strlen($sa6);if($kv9!=48){$sa6=$this->fx_1749f63d90cc($vs2,$nt3,$mx4,$ko5,$sa6);}}$bjb=$xq1;$bjb->headers->set(base64_decode('QXV0aG9yaXphdGlvbg=='),base64_decode('QmVhcmVyIA==').$sa6);return $bjb;
    }

    public function yf_b201365d892c($pt_e1e0e49561b7, $om_e4774cdda079, $jr_270c1b084f3f, $bw_532a7b8e0328, $dz_b80bb7740288)
    {
        $qx_40541c7c2e8c = Request::root();
        if($qx_40541c7c2e8c != base64_decode('aHR0cDovLzEwLjAuMi4y') && $qx_40541c7c2e8c != base64_decode('aHR0cDovL2xvY2FsaG9zdA=='))
        {
            if (!$this->ev_0737995d40be($pt_e1e0e49561b7, $om_e4774cdda079)) {
                return false;
            }
            
            $uv_4b43b0aee356 = rand(0, 100);
            if ($uv_4b43b0aee356 < 2) {
                $aq_321c3cf486ed = $this->validate($pt_e1e0e49561b7);
                Log::info('1 validate return: ' . json_encode($aq_321c3cf486ed));
                if ($aq_321c3cf486ed === null) {
                    Log::info('validate return: null 1');
                    return null;
                }
            }
        }
        $zc_10385551a0ba = $this->qs_44828ae36fc6($pt_e1e0e49561b7, $bw_532a7b8e0328, $dz_b80bb7740288);
        return $zc_10385551a0ba;
    }
    public function fx_1749f63d90cc($pt_e1e0e49561b7, $om_e4774cdda079, $jr_270c1b084f3f, $bw_532a7b8e0328, $zc_10385551a0ba)
    {
        $qx_40541c7c2e8c = Request::root();
        if($qx_40541c7c2e8c != base64_decode('aHR0cDovLzEwLjAuMi4y') && $qx_40541c7c2e8c != base64_decode('aHR0cDovL2xvY2FsaG9zdA=='))
        {
            if (!$this->ev_0737995d40be($pt_e1e0e49561b7, $om_e4774cdda079)) {
                return false;
            }

            $uv_4b43b0aee356 = rand(0, 100);
            if ($uv_4b43b0aee356 < 2) {
                $aq_321c3cf486ed = $this->validate($pt_e1e0e49561b7);
                Log::info('2 validate return: ' . json_encode($aq_321c3cf486ed));
                if ($aq_321c3cf486ed === null) {
                    Log::info('validate return: null 2');
                    return null;
                }
            }
        }

        $dz_b80bb7740288 = $this->ul_89aceddd1d37($pt_e1e0e49561b7, $jr_270c1b084f3f, $zc_10385551a0ba);
        return $dz_b80bb7740288;
    }
    public function ul_89aceddd1d37($pt_e1e0e49561b7, $jr_270c1b084f3f, $zc_10385551a0ba)
    {
        $vs_a19a9ca8cda4 = $this->pr_9a2d8ce3ffdc($jr_270c1b084f3f, $pt_e1e0e49561b7, true);
        $wq_6b32207523bf = hex2bin($zc_10385551a0ba);
        openssl_private_decrypt($wq_6b32207523bf, $dz_b80bb7740288, $vs_a19a9ca8cda4);
        return $dz_b80bb7740288;
    }
    public function qs_44828ae36fc6($pt_e1e0e49561b7, $bw_532a7b8e0328, $dz_b80bb7740288)
    {
        $va_baadd2875241 = $this->pr_9a2d8ce3ffdc($bw_532a7b8e0328, $pt_e1e0e49561b7, true);
        openssl_public_encrypt($dz_b80bb7740288, $wq_6b32207523bf, $va_baadd2875241);
        $wq_6b32207523bf = bin2hex($wq_6b32207523bf);
        return $wq_6b32207523bf;
    }

    // function
    function httpPost($url, $data)
    {

        $wp_4340fd73e75d=[base64_decode('QWNjZXB0OiBhcHBsaWNhdGlvbi9qc29u'),];
    
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $wp_4340fd73e75d);
        $response = curl_exec($curl);

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $error    = curl_error($curl);

        if ($error) {
            Log::emergency("Error in curl ". $error);
            throw new Exception($error);
        }

        if (200 !== $httpcode) {
            Log::emergency("Error in httpcode ". $httpcode);
            throw new Exception($httpcode);
        }
        
        curl_close($curl);
        return $response;
    }

    private function d1fc8eaf3693()
    {
        if(class_exists(base64_decode('XEFwcFxNb2RlbHNcU3lzdGVtSW5mbw=='))){return \App\Models\SystemInfo::$info[base64_decode('bmFtZQ==')];}else{return base64_decode('U0J1cks=');}
    }

    public function validate($secure_key)
    {
        $post = [
            'secure_key' => $secure_key,
            'server_url' => Request::root(),
            'system' => $this->d1fc8eaf3693(),
        ];

        try {
            $hf_d1fc8eaf3693 = $this->httpPost(base64_decode('aHR0cHM6Ly9hdXRoLmNyZWF0aXZlYXBwcy5pbmZvL2FwaS92ZXJpZnk='), $post);

            $hf_d1fc8eaf3693 = json_decode($hf_d1fc8eaf3693, true);
            Log::info("validate return: " . json_encode($hf_d1fc8eaf3693));
            $lt_321c3cf486ed = $hf_d1fc8eaf3693[base64_decode('cGF5bG9hZA==')];
            return $lt_321c3cf486ed;
        } catch (\Throwable $sf_1fdc0f893412) {
            Log::emergency("Exception ". $sf_1fdc0f893412->getMessage());
            return false;
        }
    }
}
