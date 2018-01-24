<?php

namespace KazuakiM\Sandbox;

/**
 * @copyright KazuakiM <kazuaki_mabuchi_to_go@hotmail.co.jp>
 * @author    KazuakiM <kazuaki_mabuchi_to_go@hotmail.co.jp>
 * @license   http://www.opensource.org/licenses/mit-license.php  MIT License
 *
 * @see       https://github.com/KazuakiM/sandbox
 */
class Curl //{{{
{
    public function init() //{{{
    {
        try {
            $ch = curl_init('http://sandbox/sample.json');
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
            ]);
            $body = curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);
        } catch (Exception $e) {
        }
    } //}}}
} //}}}
