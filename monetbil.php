<?php

/*
  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License or any later version.
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

define('__MONETBIL__', true);

abstract class Monetbil
{

    const WIDGET_URL = 'https://www.monetbil.com/widget/';
    const CHECK_PAYMENT_URL = 'https://api.monetbil.com/payment/v1/checkPayment';
    // Monetbil Widget version
    const MONETBIL_WIDGET_VERSION_V1 = 'v1';
    const MONETBIL_WIDGET_VERSION_V2 = 'v2.1';
    // Live mode
    const STATUS_SUCCESS = 1;
    const STATUS_FAILED = 0;
    const STATUS_CANCELLED = -1;
    // Test mode
    const STATUS_SUCCESS_TESTMODE = 7;
    const STATUS_FAILED_TESTMODE = 8;
    const STATUS_CANCELLED_TESTMODE = 9;

    public static $serviceKey;
    public static $serviceSecret;
    public static $widgetVersion = 'v2.1';
    // Setup Monetbil arguments
    public static $amount;
    public static $currency;
    public static $phone;
    public static $country;
    public static $item_ref;
    public static $payment_ref;
    public static $user;
    public static $first_name;
    public static $last_name;
    public static $email;
    public static $locale;
    public static $return_url;
    public static $notify_url;
    public static $logo;

    /**
     * getServiceKey
     *
     * @return string
     */
    public static function getServiceKey()
    {
        return Monetbil::$serviceKey;
    }

    /**
     * setServiceKey
     *
     * @param string $serviceKey
     * @return string
     */
    public static function setServiceKey($serviceKey)
    {
        Monetbil::$serviceKey = $serviceKey;
    }

    /**
     * getServiceSecret
     *
     * @return string
     */
    public static function getServiceSecret()
    {
        return Monetbil::$serviceSecret;
    }

    /**
     * setServiceSecret
     *
     * @param string $serviceSecret
     * @return string
     */
    public static function setServiceSecret($serviceSecret)
    {
        Monetbil::$serviceSecret = $serviceSecret;
    }

    /**
     * getWidgetVersion
     *
     * @return string
     */
    public static function getWidgetVersion()
    {
        return Monetbil::$widgetVersion;
    }

    /**
     * getWidgetVersion
     *
     * @param string $widgetVersion
     * @return string
     */
    public static function setWidgetVersion($widgetVersion)
    {
        self::$widgetVersion = $widgetVersion;
    }

    /**
     * getAmount
     *
     * @return string
     */
    public static function getAmount()
    {
        return self::$amount;
    }

    /**
     * setAmount
     *
     * @param string $amount
     * @return string
     */
    public static function setAmount($amount)
    {
        self::$amount = $amount;
    }

    /**
     * getCurrency
     *
     * @return string
     */
    public static function getCurrency()
    {
        return self::$currency;
    }

    /**
     * setCurrency
     *
     * @param string $currency
     * @return string
     */
    public static function setCurrency($currency)
    {
        self::$currency = $currency;
    }

    /**
     * getPhone
     *
     * @return string
     */
    public static function getPhone()
    {
        return self::$phone;
    }

    /**
     * setPhone
     *
     * @param string $phone
     * @return string
     */
    public static function setPhone($phone)
    {
        self::$phone = $phone;
    }

    /**
     * getCountry
     *
     * @return string
     */
    public static function getCountry()
    {
        return self::$country;
    }

    /**
     * setCountry
     *
     * @param string $country
     * @return string
     */
    public static function setCountry($country)
    {
        self::$country = $country;
    }

    /**
     * getItem_ref
     *
     * @return string
     */
    public static function getItem_ref()
    {
        return self::$item_ref;
    }

    /**
     * setItem_ref
     *
     * @param string $item_ref
     * @return string
     */
    public static function setItem_ref($item_ref)
    {
        self::$item_ref = $item_ref;
    }

    /**
     * getPayment_ref
     *
     * @return string
     */
    public static function getPayment_ref()
    {
        return self::$payment_ref;
    }

    /**
     * setPayment_ref
     *
     * @param string $payment_ref
     * @return string
     */
    public static function setPayment_ref($payment_ref)
    {
        self::$payment_ref = $payment_ref;
    }

    /**
     * getUser
     *
     * @return string
     */
    public static function getUser()
    {
        return self::$user;
    }

    /**
     * setUser
     *
     * @param string $user
     * @return string
     */
    public static function setUser($user)
    {
        self::$user = $user;
    }

    /**
     * getFirst_name
     *
     * @return string
     */
    public static function getFirst_name()
    {
        return self::$first_name;
    }

    /**
     * setFirst_name
     *
     * @param string $first_name
     * @return string
     */
    public static function setFirst_name($first_name)
    {
        self::$first_name = $first_name;
    }

    /**
     * getLast_name
     *
     * @return string
     */
    public static function getLast_name()
    {
        return self::$last_name;
    }

    /**
     * setLast_name
     *
     * @param string $last_name
     * @return string
     */
    public static function setLast_name($last_name)
    {
        self::$last_name = $last_name;
    }

    /**
     * getEmail
     *
     * @return string
     */
    public static function getEmail()
    {
        return self::$email;
    }

    /**
     * setEmail
     *
     * @param string $email
     * @return string
     */
    public static function setEmail($email)
    {
        self::$email = $email;
    }

    /**
     * getLocale
     *
     * @return string
     */
    public static function getLocale()
    {
        return self::$locale;
    }

    /**
     * setLocale
     *
     * @param string $locale
     * @return string
     */
    public static function setLocale($locale)
    {
        self::$locale = $locale;
    }

    /**
     * getReturn_url
     *
     * @return string
     */
    public static function getReturn_url()
    {
        return self::$return_url;
    }

    /**
     * setReturn_url
     *
     * @param string $return_url
     * @return string
     */
    public static function setReturn_url($return_url)
    {
        self::$return_url = $return_url;
    }

    /**
     * getNotify_url
     *
     * @return string
     */
    public static function getNotify_url()
    {
        return self::$notify_url;
    }

    /**
     * setNotify_url
     *
     * @param string $notify_url
     * @return string
     */
    public static function setNotify_url($notify_url)
    {
        self::$notify_url = $notify_url;
    }

    /**
     * getLogo
     *
     * @return string
     */
    public static function getLogo()
    {
        return self::$logo;
    }

    /**
     * setLogo
     *
     * @param string $logo
     * @return string
     */
    public static function setLogo($logo)
    {
        self::$logo = $logo;
    }

    /**
     * sign
     *
     * @param string $service_secret
     * @param array $params
     * @return string
     */
    public static function sign($service_secret, $params)
    {
        ksort($params);
        $signature = md5($service_secret . implode('', $params));
        return $signature;
    }

    /**
     * checkSign
     *
     * @param string $service_secret
     * @param array $params
     * @return boolean
     */
    public static function checkSign($service_secret, $params)
    {
        if (!array_key_exists('sign', $params)) {
            return false;
        }

        $sign = $params['sign'];
        unset($params['sign']);

        $signature = Monetbil::sign($service_secret, $params);

        return ($sign == $signature);
    }

    /**
     * checkPayment
     *
     * @param string $paymentId
     * @return array ($payment_status, $testmode)
     */
    public static function checkPayment($paymentId)
    {
        $postData = array(
            'paymentId' => $paymentId
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, Monetbil::CHECK_PAYMENT_URL);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData, '', '&'));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $json = curl_exec($ch);
        $result = json_decode($json, true);

        $payment_status = 0;
        $testmode = 0;
        if (is_array($result) and array_key_exists('transaction', $result)) {
            $transaction = $result['transaction'];

            $payment_status = $transaction['status'];
            $testmode = $transaction['testmode'];
        }

        return array($payment_status, $testmode);
    }

    /**
     * getPost
     *
     * @param string $key
     * @param string $default
     * @return string | null
     */
    public static function getPost($key = null, $default = null)
    {
        return $key == null ? $_POST : (isset($_POST[$key]) ? $_POST[$key] : $default);
    }

    /**
     * getQuery
     *
     * @param string $key
     * @param string $default
     * @return string | null
     */
    public static function getQuery($key = null, $default = null)
    {
        return $key == null ? $_GET : (isset($_GET[$key]) ? $_GET[$key] : $default);
    }

    /**
     * getQueryParams
     *
     * @return array
     */
    public static function getQueryParams()
    {
        $queryParams = array();
        $parts = explode('?', Monetbil::getUrl());

        if (isset($parts[1])) {
            parse_str($parts[1], $queryParams);
        }

        return $queryParams;
    }

    /**
     * mergeArguments
     *
     * @param array $monetbil_args
     * @return array
     */
    public static function mergeArguments($monetbil_args)
    {
        $sign = Monetbil::sign(Monetbil::getServiceSecret(), $monetbil_args);

        return array_merge(array(
            'amount' => Monetbil::getAmount(),
            'phone' => Monetbil::getPhone(),
            'country' => Monetbil::getCountry(),
            'currency' => Monetbil::getCurrency(),
            'item_ref' => Monetbil::getItem_ref(),
            'payment_ref' => Monetbil::getPayment_ref(),
            'user' => Monetbil::getUser(),
            'first_name' => Monetbil::getFirst_name(),
            'last_name' => Monetbil::getLast_name(),
            'email' => Monetbil::getEmail(),
            'return_url' => Monetbil::getReturn_url(),
            'notify_url' => Monetbil::getNotify_url(),
            'logo' => Monetbil::getLogo(),
            'sign' => $sign
                ), $monetbil_args);
    }

    /**
     * getServerUrl
     *
     * @return string | null
     */
    public static function getServerUrl()
    {
        $server_name = $_SERVER['SERVER_NAME'];
        $port = $_SERVER['SERVER_PORT'];
        $scheme = 'http';

        if ('443' === $port) {
            $scheme = 'https';
        }

        $url = $scheme . '://' . $server_name;
        return $url;
    }

    /**
     * getUrl
     *
     * @return string | null
     */
    public static function getUrl()
    {
        $url = Monetbil::getServerUrl() . Monetbil::getUri(true);
        return $url;
    }

    /**
     * getUri
     *
     * @param boolean $full
     * @return string | null
     */
    public static function getUri($full = false)
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $scriptFilename = $_SERVER['SCRIPT_FILENAME'];
        $uri1 = '/' . ltrim($requestUri, '/');

        if ($full) {
            return $uri1;
        }

        $filename = '';
        if (is_file($scriptFilename)) {
            $filename = basename($scriptFilename);
        }

        $uri = str_replace('/' . $filename, '', $uri1);
        return $uri;
    }

    /**
     * getPath
     *
     * @return stringgetPath
     */
    public static function getPath()
    {
        $documentRoot = Monetbil::getDocumentRoot();
        $current_dir = str_replace('\\', '/', __DIR__);

        $path = str_replace($documentRoot, '', $current_dir);
        return $path;
    }

    /**
     * getDocumentRoot
     *
     * @return string
     */
    public static function getDocumentRoot()
    {
        $current_script = dirname($_SERVER['SCRIPT_NAME']);
        $current_path = dirname($_SERVER['SCRIPT_FILENAME']);

        // work out how many folders we are away from document_root
        // by working out how many folders deep we are from the url.
        // this isn't fool proof
        $adjust = explode('/', $current_script);
        $adjustCount = count($adjust) - 1;

        // move up the path with ../
        $traverse = str_repeat('../', $adjustCount);
        $adjusted_path = sprintf('%s/%s', $current_path, $traverse);

        // real path expands the ../'s to the correct folder names
        $realpath = realpath($adjusted_path);

        return str_replace('\\', '/', $realpath);
    }

    /**
     * getWidgetUrl
     *
     * @return string
     */
    public static function getWidgetUrl()
    {
        $version = Monetbil::getWidgetVersion();
        $service_key = Monetbil::getServiceKey();
        $widget_url = Monetbil::WIDGET_URL . $version . '/' . $service_key;
        return $widget_url;
    }

    /**
     * getWidgetV1Url
     *
     * @return string
     */
    public static function getWidgetV1Url($monetbil_args = array())
    {
        $query_data = Monetbil::mergeArguments($monetbil_args);
        $monetbil_v1_redirect = Monetbil::getWidgetUrl() . '?' . http_build_query($query_data, '', '&');
        return $monetbil_v1_redirect;
    }

    /**
     * url
     *
     * @param array $monetbil_args
     * @return string
     */
    public static function url($monetbil_args = array())
    {
        $query_data = Monetbil::mergeArguments($monetbil_args);
        $payment_url = '';

        if (self::MONETBIL_WIDGET_VERSION_V2 == self::getWidgetVersion()) {

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, self::getWidgetUrl());
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query_data, '', '&'));
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);

            $body = curl_exec($ch);
            $result = json_decode($body, true);

            if (is_array($result) and array_key_exists('payment_url', $result)) {
                $payment_url = $result['payment_url'];
            }
        } else {
            $payment_url = Monetbil::getWidgetV1Url($query_data);
        }

        return $payment_url;
    }

    /**
     * redirect
     *
     * @param array $monetbil_args
     * @return string
     */
    public static function redirect($monetbil_args = array())
    {
        $query_data = Monetbil::mergeArguments($monetbil_args);
        $url = Monetbil::url($query_data);
        header("Location: $url");
        exit;
    }

    /**
     * js
     *
     * @param bool $autoopen
     * @return string
     */
    public static function js($autoopen = false)
    {
        $auto = $autoopen ? '-auto' : '';

        if (self::MONETBIL_WIDGET_VERSION_V2 == self::getWidgetVersion()) {
            $js = '<script type="text/javascript" src="' . Monetbil::getServerUrl() . Monetbil::getPath() . '/assets/js/monetbil' . $auto . '.min.js?t=' . time() . '"></script>';
        } else {
            $js = '<script type="text/javascript" src="' . Monetbil::getServerUrl() . Monetbil::getPath() . '/assets/js/monetbil-mobile-payments' . $auto . '.js?t=' . time() . '"></script>';
        }
        return $js;
    }

    /**
     * startPayment
     *
     * @param array $monetbil_args
     * @return string
     */
    public static function startPayment($monetbil_args = array())
    {
        Monetbil::redirect($monetbil_args);
    }

}

require_once 'config.php';
