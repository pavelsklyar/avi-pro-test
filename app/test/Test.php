<?php


class Test
{
    /**
     * @param $array array
     * @return false|string
     */
    public function getJson($array)
    {
        return json_encode($array);
    }

    /**
     * @param $url
     * @param $json
     */
    public function getCurlRequest($url, $json)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true); //переключаем запрос в POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json); //Это POST данные
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //Отключим проверку сертификата https
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //из той же оперы
        curl_exec($ch);
        curl_close($ch);
    }
}