<?php

namespace Bitpay\Util;

/**
 */
class Base58
{

    /**
     * @var string
     */
    const BASE58_CHARS = '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';

    /**
     * @var string
     */
    const HEX_CHARS = '0123456789ABCDEF';

    /**
     * @param string $data
     *
     * @return string
     */
    public static function encode($data)
    {
        if (strlen($data) % 2 != 0 || strlen($data) == 0) {
            return '';
        }

        $code_string = self::BASE58_CHARS;
        $x = self::decodeHex($data);
        $output_string = '';

        while (0 < gmp_cmp($x, 0)) {
            list($x, $r) = gmp_div_qr($x, 58);
            $output_string .= substr($code_string, gmp_intval($r), 1);
        }


        for ($i = 0; $i < strlen($data) && substr($data, $i, 2) == '00'; $i +=2) {
            $output_string .= substr($code_string, 0, 1);
        }

        $output_string = strrev($output_string);

        return $output_string;
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public static function decode($data)
    {
        for ($return = '0', $i = 0; $i < strlen($data); $i++) {
            $current = strpos(self::BASE58_CHARS, $data[$i]);
            $return  = gmp_mul($return, 58);
            $return  = gmp_strval(gmp_add($return, $current));
        }

        $return = strtolower(self::encodeHex($return));

        for ($i = 0; $i < strlen($data) && substr($data, $i, 1) == '1'; $i++) {
            $return .= 00;
        }

        if (strlen($return) % 2 != 0) {
            $return .= 0;
        }


        return strrev($return);
    }

    /**
     * @param string $hex
     *
     * @return string
     */
    public static function encodeHex($hex)
    {
        $return = '';
        while (0 < gmp_cmp($hex, 0)) {
            list ($hex, $r) = gmp_div_qr($hex, 16);
            $return .= substr(self::HEX_CHARS, gmp_intval($r), 1);
        }

        return $return;
    }

    /**
     * @param string $hex
     *
     * @return string
     */
    public static function decodeHex($hex)
    {
        for ($r = 0, $i = 0; $i < strlen($hex); $i++) {
            $c = strpos(self::HEX_CHARS, strtoupper($hex[$i]));
            $r = gmp_mul($r, 16);
            $r = gmp_add($r, $c);
        }

        return gmp_strval($r);
    }
}
