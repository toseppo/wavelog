<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Update existing POTA references as per their renaming
// of parks
// See https://docs.pota.app/docs/changes.html

class Migration_pota_migrations extends CI_Migration
{

	var $map = array(
		// First process all entities whose previous prefix is also an ISO reference for a new/other entity
		// Ensures that those entities are not renamed twice
		'CP' => 'BO',
		'FO' => 'PF',
		'CN' => 'MA',
		'BY' => 'CN',
		'CA' => 'CL',
		'VE' => 'CA',
		'CV' => 'UY',
		'D4' => 'CV',
		'CU' => 'PT',
		'CO' => 'CU',
		'HK' => 'CO',
		'VR' => 'HK',
		'HR' => 'HN',
		'9A' => 'HR',
		'FK' => 'NC',
		'VP8' => 'FK',
		'TF' => 'IS',
		'FT5Z' => 'TF',
		'FT5' => 'TF',
		'FT' => 'TF',
		'GI' => 'GB',
		'ZB' => 'GI',
		'GD' => 'IM',
		'J3' => 'GD',
		'GW' => 'GB',
		'HK0' => 'CO',
		'J5' => 'GW',
		'LA' => 'NO',
		'XW' => 'LA',
		'OM' => 'SK',
		'A4' => 'OM',
		'PA' => 'NL',
		'HP' => 'PA',
		'PY' => 'BR',
		'PY0S' => 'BR',
		'PY0F' => 'BR',
		'PY0T' => 'BR',
		'ZP' => 'PY',
		'UA0' => 'RU',
		'R1F' => 'RU',
		'UA2' => 'RU',
		'SM' => 'SE',
		'T7' => 'SM',
		'ST0' => 'SS',
		'ST' => 'SD',
		'S9' => 'ST',
		'ZA' => 'AL',
		'ZR' => 'ZA',
		'ZS8' => 'ZA',
		'ES' => 'EE',
		'EA' => 'ES',
		'TJ' => 'CM',
		'EY' => 'TJ',
		'TZ' => 'ML',
		'5H3' => 'TZ',
		'GM' => 'GB',
		'C5' => 'GM',
		'TL' => 'CF',
		'4W' => 'TL',
		'TG' => 'GT',
		'5V' => 'TG',
		'TK' => 'FR',
		'ZK3' => 'TK',
		'TT' => 'TD',
		'9Y' => 'TT',
		'TN' => 'CG',
		'3V8' => 'TN',
		'TR' => 'GA',
		'TA' => 'TR',
		'UM' => 'KG',
		'KH1' => 'UM',
		'VU4' => 'IN',
		'VU7' => 'IN',
		'VU' => 'IN',
		'YJ8' => 'VU',

		// Changes on 2024-02-20
		'4O' => 'ME',
		// Changes on 2024-02-22
		//'ES' => 'EE',
		'S0' => 'EH',
		'9J2' => 'ZM',
		'7O' => 'YE',
		// Changes on 2024-02-24
		//'TF' => 'IS',
		'Z2' => 'ZW',
		'8R' => 'GY',
		'V2' => 'AG',
		'UI' => 'UZ',
		'HV' => 'VA',
		// Changes on 2024-02-25
		'3DA' => 'SZ',
		'9N' => 'NP',
		'3B8' => 'MU',
		//'ZA' => 'AL',
		'4J' => 'AZ',
		'3C' => 'GQ',
		'E3' => 'ER',
		'HH' => 'HT',
		'YN' => 'NI',
		'3X' => 'GN',
		'C2' => 'NR',
		'8Q6' => 'MV',
		'H44' => 'SB',
		'5U' => 'NE',
		'E6' => 'NU',
		'EZ' => 'TM',
		'5X' => 'UG',
		'A9' => 'BH',
		'S2' => 'BD',
		'A5' => 'BT',
		'4S7' => 'LK',
		'EP' => 'IR',
		'P5' => 'KP',
		'9K2' => 'KW',
		'OD5' => 'LB',
		'JT' => 'MN',
		'AP' => 'PK',
		'A7' => 'QA',
		'HZ' => 'SA',
		'S79' => 'SC',
		'J2' => 'DJ',
		'7X' => 'DZ',
		'D2' => 'AO',
		'9U5' => 'BI',
		//'' => 'CM',
		'D6' => 'KM',
		//'' => 'CG',
		'5Z4' => 'KE',
		'7P8' => 'LS',
		'EL' => 'LR',
		//'5A' => '',
		'5R' => 'MG',
		'7Q7' => 'MW',
		//'' => 'ML',
		'5T' => 'MR',
		//'CN' => 'MA',
		'5N' => 'NG',
		'9X5' => 'RW',
		'6W' => 'SN',
		'9L1' => 'SL',
		//'OM' => 'SK',
		'ZC6' => 'PS',
		'PJ7' => 'SX',
		//'5H3' => '',
		//'' => 'BQ',
		//'' => 'CD',
		//'3V8' => '',
		//'S9' => '',
		//'EY' => '',
		// Changes on 2024-02-26
		'EK' => 'AM',
		'OX' => 'GL',
		'OY' => 'FO',
		'P4' => 'AW',
		'V4' => 'KN',
		'HC' => 'EC',
		'V5' => 'NA',
		//'CP' => 'BO',
		'PZ' => 'SR',
		//'VP8' => 'FK',
		'YA' => 'AF',
		'VP2E' => 'AI',
		'T8' => 'PW',
		'T31' => 'KI',
		'4L' => 'GE',
		'VP5' => 'TC',
		'J7' => 'DM',
		'VP2M' => 'MS',
		'J8' => 'VC',
		'UL' => 'KZ',
		//'UM' => 'KG',
		'XX9' => 'MO',
		'P29' => 'PG',
		'UO' => 'MD',
		'C3' => 'AD',
		'T5' => 'SO',
		'9H' => 'MT',
		'T2' => 'TV',
		'XZ2' => 'MM',
		'XU' => 'KH',
		'YI' => 'IQ',
		'V85' => 'BN',
		'YK' => 'SY',
		'A6' => 'AE',
		//'TL' => 'CF',
		//'TT' => 'TD',
		'TY' => 'BJ',
		//'TR' => 'GA',
		'TU' => 'CI',
		//'' => 'SD',
		'SU' => 'EG',
		'XT' => 'BF',
		//'T33' => '',
		//'ST0' => 'SS',
		//'Z6' => '',
		'CE9' => 'AQ',
		'GJ' => 'JE',
		'GU' => 'GG',
		// Changes on 2024-02-28
		'OU' => 'DK',
		//'' => 'PM',
		// Changes on 2024-02-29
		'HI' => 'DO',
		//'' => 'PM',
		// Changes on 2024-03-01
		'9M' => 'MY',
		'9V' => 'SG',
		'HL' => 'KR',
		'HS' => 'TH',
		'5B' => 'CY',
		//'' => 'CL',
		//'' => 'TW',
		'OE' => 'AT',
		'HB' => 'CH',
		'LX' => 'LU',
		//'HR' => 'HN',
		'8P' => 'BB',
		'DU' => 'PH',
		'6Y' => 'JM',
		'A2' => 'BW',
		'C9' => 'MZ',
		//'CV' => 'UY',
		//'9Y' => '',
		'C6' => 'BS',
		'J6' => 'LC',
		'A3' => 'TO',
		'HA' => 'HU',
		'HB0' => 'LI',
		//'4U1UN' => '',
		'4X' => 'IL',
		'JY' => 'JO',
		//'A4' => '',
		'9G1' => 'GH',
		'OK' => 'CZ',
		//'4W' => '',
		//'GD' => 'IM',
		// Changes on 2024-03-03
		//'PA' => 'NL',
		'DA' => 'DE',
		'CT' => 'PT',
		'JA' => 'JP',
		//'' => 'NO',
		//'' => 'IN',
		//'' => 'SE',
		//'' => 'WF',
		//'' => 'VI',
		//'' => 'TK',
		//'' => 'SJ',
		//'' => 'RE',
		//'' => 'PR',
		//'' => 'PN',
		//'' => 'NF',
		//'' => 'NC',
		//'' => 'MP',
		//'' => 'MF',
		//'' => 'IO',
		//'' => 'HM',
		//'' => 'GS',
		//'' => 'GP',
		//'' => 'GF',
		//'' => 'CX',
		//'' => 'CK',
		//'' => 'CC',
		//'' => 'BL',
		//'' => 'AX',
		//'' => 'AS',
		//'EA' => '',
		//'YV' => '',
		//'EV' => '',
		//'SM' => '',
		//'XW' => '',
		//'YJ8' => '',
		//'KP' => '',
		// Changes on 2024-03-04
		'VP9' => 'BM',
		// CHanges on 2024-03-14
		'OA' => 'PE',
		'OH' => 'FI',
		//'TG' => 'GT',
		//'T7' => '',
		//'TA' => '',
		// Changes on 2024-03-15
		'F' => 'FR',
		'XE' => 'MX',
		//'ZR' => '',
		//'CN' => '',
		//'' => 'MQ',
		// Changes on 2024-03-18
		'I' => 'IT',
		'ZL' => 'NZ',
		'SP' => 'PL',
		'V3' => 'BZ',
		'ZF' => 'KY',
		//'YS' => '',
		'YO' => 'RO',
		'PJ2' => 'CW',

		// Changes not mentioned separately?!
		'K' => 'US',
		'G' => 'GB',
		//'C5' => 'GM',
		//'D4' => 'CV',
		'EI' => 'IE',
		//'GI' => 'GB',
		//'GM' => 'GB',
		//'GW' => 'GB',
		//'HP' => 'PA',
		//'J5' => 'GW',
		'LZ' => 'BG',
		'ON' => 'BE',
		//'PJ2' => 'CW',
		//'PY' => 'BR',
		'S5' => 'SI',
		'SV' => 'GR',
		//'T3' => 'GD',
		//'T7' => 'SM',
		//'TA' => 'TR',
		'TB' => 'GT',
		'TI' => 'CR',
		'VK' => 'AU',
		'XV2' => 'VN',
		'YB' => 'ID',
		'YS' => 'SV',
		'YT' => 'RS',
		'ZL' => 'NZ',
		//'ZP' => 'PY',
		//'ZR' => 'ZA',
		//'5H3' => 'TZ',
		//'3V8' => 'TN',
		'3B7' => 'MU',
		'3B9' => 'MU',
		'3C0' => 'GQ',
		'3D2' => 'FJ',
		//'3D2' => 'FJ',
		//'3D2' => 'FJ',
		'3Y' => 'AQ',
		'5A' => 'LY',
		'9M2' => 'MY',
		'9Q' => 'CD',
		'BV' => 'TW',
		'BV9P' => 'TW',
		'BS7H' => 'CN',
		'CE0X' => 'CL',
		'CE0Y' => 'CL',
		'CE0Z' => 'CL',
		'CT3' => 'PT',
		'CY0' => 'CA',
		'CY9' => 'CA',
		'E5' => 'CK',
		'EV' => 'BY',
		'H40' => 'SB',
		'HC8' => 'EC',
		'IS0' => 'IT',
		'JD' => 'JP',
		'JW' => 'SJ',
		'JX' => 'SJ',
		'KC4' => 'US',
		'KH6' => 'US',
		'KH8' => 'AS',
		'KH8' => 'AS',
		'KL7' => 'US',
		'KP5' => 'PR',
		'N5' => 'CK',
		'OH0' => 'AX',
		'OJ0' => 'FI',
		'PJ4' => 'BQ',
		'PJ5' => 'BQ',
		'SV' => 'GR',
		'SV5' => 'GR',
		'SV9' => 'GR',
		'T30' => 'KI',
		'T32' => 'KI',
		'T33' => 'KI',
		'TI9' => 'CR',
		'V7' => 'MH',
		'VK0H' => 'HM',
		'VK0M' => 'AU',
		'VK9C' => 'CC',
		'VK9L' => 'AU',
		'VK9M' => 'AU',
		'VK9N' => 'NF',
		'VK9W' => 'AU',
		'VK9X' => 'CX',
		'VP0G' => 'GS',
		'VP0S' => 'GS',
		'VP2V' => 'VG',
		'VP6' => 'PN',
		'VP8H' => 'GB',
		'VP8O' => 'GB',
		'VQ9' => 'IO',
		'XF4' => 'MX',
		'YV' => 'VE',
		'YV0' => 'VE',
		'ZC4' => 'GB',
		'ZD7' => 'SH',
		'ZD8' => 'SH',
		'ZD9' => 'SH',
		'ZL7' => 'NZ',
		'ZL8' => 'NZ',
		'ZL9' => 'NZ',

	);

	var $tld2dxcc = array(
		'AD' => '203',
		'AE' => '391',
		'AF' => '3',
		'AG' => '94',
		'AI' => '12',
		'AL' => '7',
		'AM' => '14',
		'AO' => '401',
		'AQ' => '13',
		'AR' => '100',
		'AS' => '9',
		'AT' => '206',
		'AU' => '150',
		'AW' => '91',
		'AX' => '5',
		'AZ' => '18',
		'BA' => '501',
		'BB' => '62',
		'BD' => '305',
		'BE' => '209',
		'BF' => '480',
		'BG' => '212',
		'BH' => '304',
		'BI' => '404',
		'BJ' => '416',
		'BM' => '64',
		'BN' => '345',
		'BO' => '104',
		'BQ' => '519, 520',
		'BR' => '108',
		'BS' => '60',
		'BT' => '306',
		'BV' => '24',
		'BW' => '402',
		'BY' => '27',
		'BZ' => '66',
		'CA' => '1',
		'CC' => '37, 38',
		'CH' => '287',
		'CI' => '428',
		'CL' => '112',
		'CM' => '406',
		'CN' => '318',
		'CO' => '116',
		'CR' => '308',
		'CU' => '70',
		'CV' => '409',
		'CW' => '517',
		'CX' => '35',
		'CY' => '215',
		'CZ' => '503',
		'DE' => '230',
		'DJ' => '382',
		'DK' => '221',
		'DM' => '95',
		'DO' => '72',
		'DZ' => '400',
		'EC' => '71, 120',
		'EE' => '52',
		'EG' => '478',
		'EH' => '302',
		'ER' => '51',
		'ES' => '21, 29, 32, 281',
		'ET' => '53',
		'FI' => '224',
		'FJ' => '176',
		'FK' => '141',
		'FM' => '173',
		'FO' => '222',
		'FR' => '214, 227',
		'GA' => '420',
		'GB' => '223, 265,279, 294',
		'GD' => '77',
		'GE' => '75',
		'GF' => '63',
		'GG' => '106',
		'GH' => '424',
		'GI' => '233',
		'GL' => '237',
		'GM' => '422',
		'GN' => '107',
		'GP' => '79',
		'GQ' => '49',
		'GR' => '40, 180, 236',
		'GT' => '76',
		'GU' => '103',
		'GW' => '109',
		'GY' => '129',
		'HK' => '321',
		'HN' => '80',
		'HR' => '497',
		'HT' => '78',
		'HU' => '239',
		'ID' => '327',
		'IE' => '245',
		'IL' => '336',
		'IM' => '114',
		'IN' => '324',
		'IQ' => '333',
		'IR' => '330',
		'IS' => '242',
		'IT' => '248',
		'JE' => '122',
		'JM' => '82',
		'JO' => '342',
		'JP' => '339',
		'KE' => '430',
		'KG' => '135',
		'KH' => '312',
		'KM' => '411',
		'KP' => '344',
		'KR' => '137',
		'KW' => '348',
		'KY' => '69',
		'KZ' => '130',
		'LA' => '143',
		'LB' => '354',
		'LC' => '97',
		'LI' => '251',
		'LK' => '315',
		'LR' => '434',
		'LS' => '432',
		'LT' => '146',
		'LU' => '254',
		'LV' => '145',
		'LY' => '436',
		'MA' => '446',
		'MC' => '260',
		'MD' => '179',
		'ME' => '514',
		'MG' => '438',
		'MK' => '502',
		'ML' => '442',
		'MM' => '309',
		'MN' => '363',
		'MO' => '152',
		'MQ' => '84',
		'MR' => '444',
		'MS' => '96',
		'MT' => '257',
		'MU' => '165',
		'MV' => '159',
		'MW' => '440',
		'MX' => '50',
		'MZ' => '181',
		'NA' => '464',
		'NC' => '162',
		'NE' => '187',
		'NG' => '450',
		'NI' => '86',
		'NL' => '263',
		'NO' => '266',
		'NP' => '369',
		'NR' => '157',
		'NU' => '188',
		'NZ' => '16, 170',
		'OM' => '370',
		'PA' => '88',
		'PE' => '136',
		'PF' => '175',
		'PG' => '163',
		'PH' => '375',
		'PK' => '372',
		'PL' => '269',
		'PR' => '202',
		'PS' => '510',
		'PT' => '149, 256, 272',
		'PW' => '22',
		'PY' => '132',
		'QA' => '376',
		'RO' => '275',
		'RS' => '296',
		'RU' => '15, 54, 89',
		'RW' => '454',
		'SA' => '378',
		'SC' => '379',
		'SD' => '466',
		'SE' => '284',
		'SG' => '381',
		'SI' => '499',
		'SJ' => '118, 259',
		'SK' => '504',
		'SL' => '458',
		'SM' => '278',
		'SN' => '456',
		'SO' => '232',
		'SR' => '140',
		'SS' => '521',
		'SV' => '74',
		'SX' => '518',
		'SY' => '384',
		'TD' => '410',
		'TG' => '483',
		'TH' => '387',
		'TJ' => '262',
		'TK' => '270',
		'TL' => '511',
		'TM' => '280',
		'TN' => '474',
		'TO' => '160',
		'TR' => '390',
		'TT' => '90',
		'TV' => '282',
		'TW' => '386',
		'TZ' => '470',
		'UA' => '288',
		'UG' => '286',
		'US' => '6, 110, 291',
		'UY' => '144',
		'UZ' => '292',
		'VA' => '295',
		'VC' => '98',
		'VE' => '148',
		'VG' => '65',
		'VN' => '293',
		'VU' => '158',
		'WS' => '190',
		'XK' => '522',
		'YE' => '492',
		'YT' => '169',
		'ZA' => '462',
		'ZM' => '482',
		'ZW' => '452',

	);

	public function up()
	{
		foreach ($this->map as $key => $value) {
			$this->update_db($key, $value);
		}
	}

	public function down()
	{
	}

	function update_db($from, $to) {
		$sql= "UPDATE ".$this->config->item('table_name')." SET COL_POTA_REF = REPLACE(COL_POTA_REF, '".$from."-', '".$to."-') WHERE SUBSTRING(COL_POTA_REF,1,".(strlen($from)+1).") = '".$from."-'";
		if (array_key_exists($to, $this->tld2dxcc)) {
			$sql .= "AND COL_DXCC IN (".$this->tld2dxcc[$to].")";
		}
		$sql .= ";";
		$this->db->query($sql);
	}

}
