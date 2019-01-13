<?php
/**
 * Root Zone Database.
 *
 * This data was automatically generated by the build
 * script on 2019-01-13 04:23:43.
 *
 * @see {build/build.php}
 *
 * @author	Christopher Lass <arubacao@gmail.com>
 */

namespace Arubacao\TldChecker;

/**
 * Data Source: Root Zone Database
 * The Root Zone Database represents the delegation details of top-level domains,
 * including gTLDs such as .com, and country-code TLDs such as .uk.
 *
 * @see https://data.iana.org/TLD/tlds-alpha-by-domain.txt
 *
 * # Version 2019011200, Last Updated Sat Jan 12 07:07:02 2019 UTC
 * @version 2019011200
 */
class RootZoneDatabase
{
    const VERSION = 2019011200;

    const TLDS = [
  0 => 'AAA',
  1 => 'AARP',
  2 => 'ABARTH',
  3 => 'ABB',
  4 => 'ABBOTT',
  5 => 'ABBVIE',
  6 => 'ABC',
  7 => 'ABLE',
  8 => 'ABOGADO',
  9 => 'ABUDHABI',
  10 => 'AC',
  11 => 'ACADEMY',
  12 => 'ACCENTURE',
  13 => 'ACCOUNTANT',
  14 => 'ACCOUNTANTS',
  15 => 'ACO',
  16 => 'ACTIVE',
  17 => 'ACTOR',
  18 => 'AD',
  19 => 'ADAC',
  20 => 'ADS',
  21 => 'ADULT',
  22 => 'AE',
  23 => 'AEG',
  24 => 'AERO',
  25 => 'AETNA',
  26 => 'AF',
  27 => 'AFAMILYCOMPANY',
  28 => 'AFL',
  29 => 'AFRICA',
  30 => 'AG',
  31 => 'AGAKHAN',
  32 => 'AGENCY',
  33 => 'AI',
  34 => 'AIG',
  35 => 'AIGO',
  36 => 'AIRBUS',
  37 => 'AIRFORCE',
  38 => 'AIRTEL',
  39 => 'AKDN',
  40 => 'AL',
  41 => 'ALFAROMEO',
  42 => 'ALIBABA',
  43 => 'ALIPAY',
  44 => 'ALLFINANZ',
  45 => 'ALLSTATE',
  46 => 'ALLY',
  47 => 'ALSACE',
  48 => 'ALSTOM',
  49 => 'AM',
  50 => 'AMERICANEXPRESS',
  51 => 'AMERICANFAMILY',
  52 => 'AMEX',
  53 => 'AMFAM',
  54 => 'AMICA',
  55 => 'AMSTERDAM',
  56 => 'ANALYTICS',
  57 => 'ANDROID',
  58 => 'ANQUAN',
  59 => 'ANZ',
  60 => 'AO',
  61 => 'AOL',
  62 => 'APARTMENTS',
  63 => 'APP',
  64 => 'APPLE',
  65 => 'AQ',
  66 => 'AQUARELLE',
  67 => 'AR',
  68 => 'ARAB',
  69 => 'ARAMCO',
  70 => 'ARCHI',
  71 => 'ARMY',
  72 => 'ARPA',
  73 => 'ART',
  74 => 'ARTE',
  75 => 'AS',
  76 => 'ASDA',
  77 => 'ASIA',
  78 => 'ASSOCIATES',
  79 => 'AT',
  80 => 'ATHLETA',
  81 => 'ATTORNEY',
  82 => 'AU',
  83 => 'AUCTION',
  84 => 'AUDI',
  85 => 'AUDIBLE',
  86 => 'AUDIO',
  87 => 'AUSPOST',
  88 => 'AUTHOR',
  89 => 'AUTO',
  90 => 'AUTOS',
  91 => 'AVIANCA',
  92 => 'AW',
  93 => 'AWS',
  94 => 'AX',
  95 => 'AXA',
  96 => 'AZ',
  97 => 'AZURE',
  98 => 'BA',
  99 => 'BABY',
  100 => 'BAIDU',
  101 => 'BANAMEX',
  102 => 'BANANAREPUBLIC',
  103 => 'BAND',
  104 => 'BANK',
  105 => 'BAR',
  106 => 'BARCELONA',
  107 => 'BARCLAYCARD',
  108 => 'BARCLAYS',
  109 => 'BAREFOOT',
  110 => 'BARGAINS',
  111 => 'BASEBALL',
  112 => 'BASKETBALL',
  113 => 'BAUHAUS',
  114 => 'BAYERN',
  115 => 'BB',
  116 => 'BBC',
  117 => 'BBT',
  118 => 'BBVA',
  119 => 'BCG',
  120 => 'BCN',
  121 => 'BD',
  122 => 'BE',
  123 => 'BEATS',
  124 => 'BEAUTY',
  125 => 'BEER',
  126 => 'BENTLEY',
  127 => 'BERLIN',
  128 => 'BEST',
  129 => 'BESTBUY',
  130 => 'BET',
  131 => 'BF',
  132 => 'BG',
  133 => 'BH',
  134 => 'BHARTI',
  135 => 'BI',
  136 => 'BIBLE',
  137 => 'BID',
  138 => 'BIKE',
  139 => 'BING',
  140 => 'BINGO',
  141 => 'BIO',
  142 => 'BIZ',
  143 => 'BJ',
  144 => 'BLACK',
  145 => 'BLACKFRIDAY',
  146 => 'BLANCO',
  147 => 'BLOCKBUSTER',
  148 => 'BLOG',
  149 => 'BLOOMBERG',
  150 => 'BLUE',
  151 => 'BM',
  152 => 'BMS',
  153 => 'BMW',
  154 => 'BN',
  155 => 'BNL',
  156 => 'BNPPARIBAS',
  157 => 'BO',
  158 => 'BOATS',
  159 => 'BOEHRINGER',
  160 => 'BOFA',
  161 => 'BOM',
  162 => 'BOND',
  163 => 'BOO',
  164 => 'BOOK',
  165 => 'BOOKING',
  166 => 'BOSCH',
  167 => 'BOSTIK',
  168 => 'BOSTON',
  169 => 'BOT',
  170 => 'BOUTIQUE',
  171 => 'BOX',
  172 => 'BR',
  173 => 'BRADESCO',
  174 => 'BRIDGESTONE',
  175 => 'BROADWAY',
  176 => 'BROKER',
  177 => 'BROTHER',
  178 => 'BRUSSELS',
  179 => 'BS',
  180 => 'BT',
  181 => 'BUDAPEST',
  182 => 'BUGATTI',
  183 => 'BUILD',
  184 => 'BUILDERS',
  185 => 'BUSINESS',
  186 => 'BUY',
  187 => 'BUZZ',
  188 => 'BV',
  189 => 'BW',
  190 => 'BY',
  191 => 'BZ',
  192 => 'BZH',
  193 => 'CA',
  194 => 'CAB',
  195 => 'CAFE',
  196 => 'CAL',
  197 => 'CALL',
  198 => 'CALVINKLEIN',
  199 => 'CAM',
  200 => 'CAMERA',
  201 => 'CAMP',
  202 => 'CANCERRESEARCH',
  203 => 'CANON',
  204 => 'CAPETOWN',
  205 => 'CAPITAL',
  206 => 'CAPITALONE',
  207 => 'CAR',
  208 => 'CARAVAN',
  209 => 'CARDS',
  210 => 'CARE',
  211 => 'CAREER',
  212 => 'CAREERS',
  213 => 'CARS',
  214 => 'CARTIER',
  215 => 'CASA',
  216 => 'CASE',
  217 => 'CASEIH',
  218 => 'CASH',
  219 => 'CASINO',
  220 => 'CAT',
  221 => 'CATERING',
  222 => 'CATHOLIC',
  223 => 'CBA',
  224 => 'CBN',
  225 => 'CBRE',
  226 => 'CBS',
  227 => 'CC',
  228 => 'CD',
  229 => 'CEB',
  230 => 'CENTER',
  231 => 'CEO',
  232 => 'CERN',
  233 => 'CF',
  234 => 'CFA',
  235 => 'CFD',
  236 => 'CG',
  237 => 'CH',
  238 => 'CHANEL',
  239 => 'CHANNEL',
  240 => 'CHARITY',
  241 => 'CHASE',
  242 => 'CHAT',
  243 => 'CHEAP',
  244 => 'CHINTAI',
  245 => 'CHRISTMAS',
  246 => 'CHROME',
  247 => 'CHRYSLER',
  248 => 'CHURCH',
  249 => 'CI',
  250 => 'CIPRIANI',
  251 => 'CIRCLE',
  252 => 'CISCO',
  253 => 'CITADEL',
  254 => 'CITI',
  255 => 'CITIC',
  256 => 'CITY',
  257 => 'CITYEATS',
  258 => 'CK',
  259 => 'CL',
  260 => 'CLAIMS',
  261 => 'CLEANING',
  262 => 'CLICK',
  263 => 'CLINIC',
  264 => 'CLINIQUE',
  265 => 'CLOTHING',
  266 => 'CLOUD',
  267 => 'CLUB',
  268 => 'CLUBMED',
  269 => 'CM',
  270 => 'CN',
  271 => 'CO',
  272 => 'COACH',
  273 => 'CODES',
  274 => 'COFFEE',
  275 => 'COLLEGE',
  276 => 'COLOGNE',
  277 => 'COM',
  278 => 'COMCAST',
  279 => 'COMMBANK',
  280 => 'COMMUNITY',
  281 => 'COMPANY',
  282 => 'COMPARE',
  283 => 'COMPUTER',
  284 => 'COMSEC',
  285 => 'CONDOS',
  286 => 'CONSTRUCTION',
  287 => 'CONSULTING',
  288 => 'CONTACT',
  289 => 'CONTRACTORS',
  290 => 'COOKING',
  291 => 'COOKINGCHANNEL',
  292 => 'COOL',
  293 => 'COOP',
  294 => 'CORSICA',
  295 => 'COUNTRY',
  296 => 'COUPON',
  297 => 'COUPONS',
  298 => 'COURSES',
  299 => 'CR',
  300 => 'CREDIT',
  301 => 'CREDITCARD',
  302 => 'CREDITUNION',
  303 => 'CRICKET',
  304 => 'CROWN',
  305 => 'CRS',
  306 => 'CRUISE',
  307 => 'CRUISES',
  308 => 'CSC',
  309 => 'CU',
  310 => 'CUISINELLA',
  311 => 'CV',
  312 => 'CW',
  313 => 'CX',
  314 => 'CY',
  315 => 'CYMRU',
  316 => 'CYOU',
  317 => 'CZ',
  318 => 'DABUR',
  319 => 'DAD',
  320 => 'DANCE',
  321 => 'DATA',
  322 => 'DATE',
  323 => 'DATING',
  324 => 'DATSUN',
  325 => 'DAY',
  326 => 'DCLK',
  327 => 'DDS',
  328 => 'DE',
  329 => 'DEAL',
  330 => 'DEALER',
  331 => 'DEALS',
  332 => 'DEGREE',
  333 => 'DELIVERY',
  334 => 'DELL',
  335 => 'DELOITTE',
  336 => 'DELTA',
  337 => 'DEMOCRAT',
  338 => 'DENTAL',
  339 => 'DENTIST',
  340 => 'DESI',
  341 => 'DESIGN',
  342 => 'DEV',
  343 => 'DHL',
  344 => 'DIAMONDS',
  345 => 'DIET',
  346 => 'DIGITAL',
  347 => 'DIRECT',
  348 => 'DIRECTORY',
  349 => 'DISCOUNT',
  350 => 'DISCOVER',
  351 => 'DISH',
  352 => 'DIY',
  353 => 'DJ',
  354 => 'DK',
  355 => 'DM',
  356 => 'DNP',
  357 => 'DO',
  358 => 'DOCS',
  359 => 'DOCTOR',
  360 => 'DODGE',
  361 => 'DOG',
  362 => 'DOHA',
  363 => 'DOMAINS',
  364 => 'DOT',
  365 => 'DOWNLOAD',
  366 => 'DRIVE',
  367 => 'DTV',
  368 => 'DUBAI',
  369 => 'DUCK',
  370 => 'DUNLOP',
  371 => 'DUNS',
  372 => 'DUPONT',
  373 => 'DURBAN',
  374 => 'DVAG',
  375 => 'DVR',
  376 => 'DZ',
  377 => 'EARTH',
  378 => 'EAT',
  379 => 'EC',
  380 => 'ECO',
  381 => 'EDEKA',
  382 => 'EDU',
  383 => 'EDUCATION',
  384 => 'EE',
  385 => 'EG',
  386 => 'EMAIL',
  387 => 'EMERCK',
  388 => 'ENERGY',
  389 => 'ENGINEER',
  390 => 'ENGINEERING',
  391 => 'ENTERPRISES',
  392 => 'EPOST',
  393 => 'EPSON',
  394 => 'EQUIPMENT',
  395 => 'ER',
  396 => 'ERICSSON',
  397 => 'ERNI',
  398 => 'ES',
  399 => 'ESQ',
  400 => 'ESTATE',
  401 => 'ESURANCE',
  402 => 'ET',
  403 => 'ETISALAT',
  404 => 'EU',
  405 => 'EUROVISION',
  406 => 'EUS',
  407 => 'EVENTS',
  408 => 'EVERBANK',
  409 => 'EXCHANGE',
  410 => 'EXPERT',
  411 => 'EXPOSED',
  412 => 'EXPRESS',
  413 => 'EXTRASPACE',
  414 => 'FAGE',
  415 => 'FAIL',
  416 => 'FAIRWINDS',
  417 => 'FAITH',
  418 => 'FAMILY',
  419 => 'FAN',
  420 => 'FANS',
  421 => 'FARM',
  422 => 'FARMERS',
  423 => 'FASHION',
  424 => 'FAST',
  425 => 'FEDEX',
  426 => 'FEEDBACK',
  427 => 'FERRARI',
  428 => 'FERRERO',
  429 => 'FI',
  430 => 'FIAT',
  431 => 'FIDELITY',
  432 => 'FIDO',
  433 => 'FILM',
  434 => 'FINAL',
  435 => 'FINANCE',
  436 => 'FINANCIAL',
  437 => 'FIRE',
  438 => 'FIRESTONE',
  439 => 'FIRMDALE',
  440 => 'FISH',
  441 => 'FISHING',
  442 => 'FIT',
  443 => 'FITNESS',
  444 => 'FJ',
  445 => 'FK',
  446 => 'FLICKR',
  447 => 'FLIGHTS',
  448 => 'FLIR',
  449 => 'FLORIST',
  450 => 'FLOWERS',
  451 => 'FLY',
  452 => 'FM',
  453 => 'FO',
  454 => 'FOO',
  455 => 'FOOD',
  456 => 'FOODNETWORK',
  457 => 'FOOTBALL',
  458 => 'FORD',
  459 => 'FOREX',
  460 => 'FORSALE',
  461 => 'FORUM',
  462 => 'FOUNDATION',
  463 => 'FOX',
  464 => 'FR',
  465 => 'FREE',
  466 => 'FRESENIUS',
  467 => 'FRL',
  468 => 'FROGANS',
  469 => 'FRONTDOOR',
  470 => 'FRONTIER',
  471 => 'FTR',
  472 => 'FUJITSU',
  473 => 'FUJIXEROX',
  474 => 'FUN',
  475 => 'FUND',
  476 => 'FURNITURE',
  477 => 'FUTBOL',
  478 => 'FYI',
  479 => 'GA',
  480 => 'GAL',
  481 => 'GALLERY',
  482 => 'GALLO',
  483 => 'GALLUP',
  484 => 'GAME',
  485 => 'GAMES',
  486 => 'GAP',
  487 => 'GARDEN',
  488 => 'GB',
  489 => 'GBIZ',
  490 => 'GD',
  491 => 'GDN',
  492 => 'GE',
  493 => 'GEA',
  494 => 'GENT',
  495 => 'GENTING',
  496 => 'GEORGE',
  497 => 'GF',
  498 => 'GG',
  499 => 'GGEE',
  500 => 'GH',
  501 => 'GI',
  502 => 'GIFT',
  503 => 'GIFTS',
  504 => 'GIVES',
  505 => 'GIVING',
  506 => 'GL',
  507 => 'GLADE',
  508 => 'GLASS',
  509 => 'GLE',
  510 => 'GLOBAL',
  511 => 'GLOBO',
  512 => 'GM',
  513 => 'GMAIL',
  514 => 'GMBH',
  515 => 'GMO',
  516 => 'GMX',
  517 => 'GN',
  518 => 'GODADDY',
  519 => 'GOLD',
  520 => 'GOLDPOINT',
  521 => 'GOLF',
  522 => 'GOO',
  523 => 'GOODYEAR',
  524 => 'GOOG',
  525 => 'GOOGLE',
  526 => 'GOP',
  527 => 'GOT',
  528 => 'GOV',
  529 => 'GP',
  530 => 'GQ',
  531 => 'GR',
  532 => 'GRAINGER',
  533 => 'GRAPHICS',
  534 => 'GRATIS',
  535 => 'GREEN',
  536 => 'GRIPE',
  537 => 'GROCERY',
  538 => 'GROUP',
  539 => 'GS',
  540 => 'GT',
  541 => 'GU',
  542 => 'GUARDIAN',
  543 => 'GUCCI',
  544 => 'GUGE',
  545 => 'GUIDE',
  546 => 'GUITARS',
  547 => 'GURU',
  548 => 'GW',
  549 => 'GY',
  550 => 'HAIR',
  551 => 'HAMBURG',
  552 => 'HANGOUT',
  553 => 'HAUS',
  554 => 'HBO',
  555 => 'HDFC',
  556 => 'HDFCBANK',
  557 => 'HEALTH',
  558 => 'HEALTHCARE',
  559 => 'HELP',
  560 => 'HELSINKI',
  561 => 'HERE',
  562 => 'HERMES',
  563 => 'HGTV',
  564 => 'HIPHOP',
  565 => 'HISAMITSU',
  566 => 'HITACHI',
  567 => 'HIV',
  568 => 'HK',
  569 => 'HKT',
  570 => 'HM',
  571 => 'HN',
  572 => 'HOCKEY',
  573 => 'HOLDINGS',
  574 => 'HOLIDAY',
  575 => 'HOMEDEPOT',
  576 => 'HOMEGOODS',
  577 => 'HOMES',
  578 => 'HOMESENSE',
  579 => 'HONDA',
  580 => 'HONEYWELL',
  581 => 'HORSE',
  582 => 'HOSPITAL',
  583 => 'HOST',
  584 => 'HOSTING',
  585 => 'HOT',
  586 => 'HOTELES',
  587 => 'HOTELS',
  588 => 'HOTMAIL',
  589 => 'HOUSE',
  590 => 'HOW',
  591 => 'HR',
  592 => 'HSBC',
  593 => 'HT',
  594 => 'HU',
  595 => 'HUGHES',
  596 => 'HYATT',
  597 => 'HYUNDAI',
  598 => 'IBM',
  599 => 'ICBC',
  600 => 'ICE',
  601 => 'ICU',
  602 => 'ID',
  603 => 'IE',
  604 => 'IEEE',
  605 => 'IFM',
  606 => 'IKANO',
  607 => 'IL',
  608 => 'IM',
  609 => 'IMAMAT',
  610 => 'IMDB',
  611 => 'IMMO',
  612 => 'IMMOBILIEN',
  613 => 'IN',
  614 => 'INC',
  615 => 'INDUSTRIES',
  616 => 'INFINITI',
  617 => 'INFO',
  618 => 'ING',
  619 => 'INK',
  620 => 'INSTITUTE',
  621 => 'INSURANCE',
  622 => 'INSURE',
  623 => 'INT',
  624 => 'INTEL',
  625 => 'INTERNATIONAL',
  626 => 'INTUIT',
  627 => 'INVESTMENTS',
  628 => 'IO',
  629 => 'IPIRANGA',
  630 => 'IQ',
  631 => 'IR',
  632 => 'IRISH',
  633 => 'IS',
  634 => 'ISELECT',
  635 => 'ISMAILI',
  636 => 'IST',
  637 => 'ISTANBUL',
  638 => 'IT',
  639 => 'ITAU',
  640 => 'ITV',
  641 => 'IVECO',
  642 => 'JAGUAR',
  643 => 'JAVA',
  644 => 'JCB',
  645 => 'JCP',
  646 => 'JE',
  647 => 'JEEP',
  648 => 'JETZT',
  649 => 'JEWELRY',
  650 => 'JIO',
  651 => 'JLL',
  652 => 'JM',
  653 => 'JMP',
  654 => 'JNJ',
  655 => 'JO',
  656 => 'JOBS',
  657 => 'JOBURG',
  658 => 'JOT',
  659 => 'JOY',
  660 => 'JP',
  661 => 'JPMORGAN',
  662 => 'JPRS',
  663 => 'JUEGOS',
  664 => 'JUNIPER',
  665 => 'KAUFEN',
  666 => 'KDDI',
  667 => 'KE',
  668 => 'KERRYHOTELS',
  669 => 'KERRYLOGISTICS',
  670 => 'KERRYPROPERTIES',
  671 => 'KFH',
  672 => 'KG',
  673 => 'KH',
  674 => 'KI',
  675 => 'KIA',
  676 => 'KIM',
  677 => 'KINDER',
  678 => 'KINDLE',
  679 => 'KITCHEN',
  680 => 'KIWI',
  681 => 'KM',
  682 => 'KN',
  683 => 'KOELN',
  684 => 'KOMATSU',
  685 => 'KOSHER',
  686 => 'KP',
  687 => 'KPMG',
  688 => 'KPN',
  689 => 'KR',
  690 => 'KRD',
  691 => 'KRED',
  692 => 'KUOKGROUP',
  693 => 'KW',
  694 => 'KY',
  695 => 'KYOTO',
  696 => 'KZ',
  697 => 'LA',
  698 => 'LACAIXA',
  699 => 'LADBROKES',
  700 => 'LAMBORGHINI',
  701 => 'LAMER',
  702 => 'LANCASTER',
  703 => 'LANCIA',
  704 => 'LANCOME',
  705 => 'LAND',
  706 => 'LANDROVER',
  707 => 'LANXESS',
  708 => 'LASALLE',
  709 => 'LAT',
  710 => 'LATINO',
  711 => 'LATROBE',
  712 => 'LAW',
  713 => 'LAWYER',
  714 => 'LB',
  715 => 'LC',
  716 => 'LDS',
  717 => 'LEASE',
  718 => 'LECLERC',
  719 => 'LEFRAK',
  720 => 'LEGAL',
  721 => 'LEGO',
  722 => 'LEXUS',
  723 => 'LGBT',
  724 => 'LI',
  725 => 'LIAISON',
  726 => 'LIDL',
  727 => 'LIFE',
  728 => 'LIFEINSURANCE',
  729 => 'LIFESTYLE',
  730 => 'LIGHTING',
  731 => 'LIKE',
  732 => 'LILLY',
  733 => 'LIMITED',
  734 => 'LIMO',
  735 => 'LINCOLN',
  736 => 'LINDE',
  737 => 'LINK',
  738 => 'LIPSY',
  739 => 'LIVE',
  740 => 'LIVING',
  741 => 'LIXIL',
  742 => 'LK',
  743 => 'LLC',
  744 => 'LOAN',
  745 => 'LOANS',
  746 => 'LOCKER',
  747 => 'LOCUS',
  748 => 'LOFT',
  749 => 'LOL',
  750 => 'LONDON',
  751 => 'LOTTE',
  752 => 'LOTTO',
  753 => 'LOVE',
  754 => 'LPL',
  755 => 'LPLFINANCIAL',
  756 => 'LR',
  757 => 'LS',
  758 => 'LT',
  759 => 'LTD',
  760 => 'LTDA',
  761 => 'LU',
  762 => 'LUNDBECK',
  763 => 'LUPIN',
  764 => 'LUXE',
  765 => 'LUXURY',
  766 => 'LV',
  767 => 'LY',
  768 => 'MA',
  769 => 'MACYS',
  770 => 'MADRID',
  771 => 'MAIF',
  772 => 'MAISON',
  773 => 'MAKEUP',
  774 => 'MAN',
  775 => 'MANAGEMENT',
  776 => 'MANGO',
  777 => 'MAP',
  778 => 'MARKET',
  779 => 'MARKETING',
  780 => 'MARKETS',
  781 => 'MARRIOTT',
  782 => 'MARSHALLS',
  783 => 'MASERATI',
  784 => 'MATTEL',
  785 => 'MBA',
  786 => 'MC',
  787 => 'MCKINSEY',
  788 => 'MD',
  789 => 'ME',
  790 => 'MED',
  791 => 'MEDIA',
  792 => 'MEET',
  793 => 'MELBOURNE',
  794 => 'MEME',
  795 => 'MEMORIAL',
  796 => 'MEN',
  797 => 'MENU',
  798 => 'MERCKMSD',
  799 => 'METLIFE',
  800 => 'MG',
  801 => 'MH',
  802 => 'MIAMI',
  803 => 'MICROSOFT',
  804 => 'MIL',
  805 => 'MINI',
  806 => 'MINT',
  807 => 'MIT',
  808 => 'MITSUBISHI',
  809 => 'MK',
  810 => 'ML',
  811 => 'MLB',
  812 => 'MLS',
  813 => 'MM',
  814 => 'MMA',
  815 => 'MN',
  816 => 'MO',
  817 => 'MOBI',
  818 => 'MOBILE',
  819 => 'MOBILY',
  820 => 'MODA',
  821 => 'MOE',
  822 => 'MOI',
  823 => 'MOM',
  824 => 'MONASH',
  825 => 'MONEY',
  826 => 'MONSTER',
  827 => 'MOPAR',
  828 => 'MORMON',
  829 => 'MORTGAGE',
  830 => 'MOSCOW',
  831 => 'MOTO',
  832 => 'MOTORCYCLES',
  833 => 'MOV',
  834 => 'MOVIE',
  835 => 'MOVISTAR',
  836 => 'MP',
  837 => 'MQ',
  838 => 'MR',
  839 => 'MS',
  840 => 'MSD',
  841 => 'MT',
  842 => 'MTN',
  843 => 'MTR',
  844 => 'MU',
  845 => 'MUSEUM',
  846 => 'MUTUAL',
  847 => 'MV',
  848 => 'MW',
  849 => 'MX',
  850 => 'MY',
  851 => 'MZ',
  852 => 'NA',
  853 => 'NAB',
  854 => 'NADEX',
  855 => 'NAGOYA',
  856 => 'NAME',
  857 => 'NATIONWIDE',
  858 => 'NATURA',
  859 => 'NAVY',
  860 => 'NBA',
  861 => 'NC',
  862 => 'NE',
  863 => 'NEC',
  864 => 'NET',
  865 => 'NETBANK',
  866 => 'NETFLIX',
  867 => 'NETWORK',
  868 => 'NEUSTAR',
  869 => 'NEW',
  870 => 'NEWHOLLAND',
  871 => 'NEWS',
  872 => 'NEXT',
  873 => 'NEXTDIRECT',
  874 => 'NEXUS',
  875 => 'NF',
  876 => 'NFL',
  877 => 'NG',
  878 => 'NGO',
  879 => 'NHK',
  880 => 'NI',
  881 => 'NICO',
  882 => 'NIKE',
  883 => 'NIKON',
  884 => 'NINJA',
  885 => 'NISSAN',
  886 => 'NISSAY',
  887 => 'NL',
  888 => 'NO',
  889 => 'NOKIA',
  890 => 'NORTHWESTERNMUTUAL',
  891 => 'NORTON',
  892 => 'NOW',
  893 => 'NOWRUZ',
  894 => 'NOWTV',
  895 => 'NP',
  896 => 'NR',
  897 => 'NRA',
  898 => 'NRW',
  899 => 'NTT',
  900 => 'NU',
  901 => 'NYC',
  902 => 'NZ',
  903 => 'OBI',
  904 => 'OBSERVER',
  905 => 'OFF',
  906 => 'OFFICE',
  907 => 'OKINAWA',
  908 => 'OLAYAN',
  909 => 'OLAYANGROUP',
  910 => 'OLDNAVY',
  911 => 'OLLO',
  912 => 'OM',
  913 => 'OMEGA',
  914 => 'ONE',
  915 => 'ONG',
  916 => 'ONL',
  917 => 'ONLINE',
  918 => 'ONYOURSIDE',
  919 => 'OOO',
  920 => 'OPEN',
  921 => 'ORACLE',
  922 => 'ORANGE',
  923 => 'ORG',
  924 => 'ORGANIC',
  925 => 'ORIGINS',
  926 => 'OSAKA',
  927 => 'OTSUKA',
  928 => 'OTT',
  929 => 'OVH',
  930 => 'PA',
  931 => 'PAGE',
  932 => 'PANASONIC',
  933 => 'PARIS',
  934 => 'PARS',
  935 => 'PARTNERS',
  936 => 'PARTS',
  937 => 'PARTY',
  938 => 'PASSAGENS',
  939 => 'PAY',
  940 => 'PCCW',
  941 => 'PE',
  942 => 'PET',
  943 => 'PF',
  944 => 'PFIZER',
  945 => 'PG',
  946 => 'PH',
  947 => 'PHARMACY',
  948 => 'PHD',
  949 => 'PHILIPS',
  950 => 'PHONE',
  951 => 'PHOTO',
  952 => 'PHOTOGRAPHY',
  953 => 'PHOTOS',
  954 => 'PHYSIO',
  955 => 'PIAGET',
  956 => 'PICS',
  957 => 'PICTET',
  958 => 'PICTURES',
  959 => 'PID',
  960 => 'PIN',
  961 => 'PING',
  962 => 'PINK',
  963 => 'PIONEER',
  964 => 'PIZZA',
  965 => 'PK',
  966 => 'PL',
  967 => 'PLACE',
  968 => 'PLAY',
  969 => 'PLAYSTATION',
  970 => 'PLUMBING',
  971 => 'PLUS',
  972 => 'PM',
  973 => 'PN',
  974 => 'PNC',
  975 => 'POHL',
  976 => 'POKER',
  977 => 'POLITIE',
  978 => 'PORN',
  979 => 'POST',
  980 => 'PR',
  981 => 'PRAMERICA',
  982 => 'PRAXI',
  983 => 'PRESS',
  984 => 'PRIME',
  985 => 'PRO',
  986 => 'PROD',
  987 => 'PRODUCTIONS',
  988 => 'PROF',
  989 => 'PROGRESSIVE',
  990 => 'PROMO',
  991 => 'PROPERTIES',
  992 => 'PROPERTY',
  993 => 'PROTECTION',
  994 => 'PRU',
  995 => 'PRUDENTIAL',
  996 => 'PS',
  997 => 'PT',
  998 => 'PUB',
  999 => 'PW',
  1000 => 'PWC',
  1001 => 'PY',
  1002 => 'QA',
  1003 => 'QPON',
  1004 => 'QUEBEC',
  1005 => 'QUEST',
  1006 => 'QVC',
  1007 => 'RACING',
  1008 => 'RADIO',
  1009 => 'RAID',
  1010 => 'RE',
  1011 => 'READ',
  1012 => 'REALESTATE',
  1013 => 'REALTOR',
  1014 => 'REALTY',
  1015 => 'RECIPES',
  1016 => 'RED',
  1017 => 'REDSTONE',
  1018 => 'REDUMBRELLA',
  1019 => 'REHAB',
  1020 => 'REISE',
  1021 => 'REISEN',
  1022 => 'REIT',
  1023 => 'RELIANCE',
  1024 => 'REN',
  1025 => 'RENT',
  1026 => 'RENTALS',
  1027 => 'REPAIR',
  1028 => 'REPORT',
  1029 => 'REPUBLICAN',
  1030 => 'REST',
  1031 => 'RESTAURANT',
  1032 => 'REVIEW',
  1033 => 'REVIEWS',
  1034 => 'REXROTH',
  1035 => 'RICH',
  1036 => 'RICHARDLI',
  1037 => 'RICOH',
  1038 => 'RIGHTATHOME',
  1039 => 'RIL',
  1040 => 'RIO',
  1041 => 'RIP',
  1042 => 'RMIT',
  1043 => 'RO',
  1044 => 'ROCHER',
  1045 => 'ROCKS',
  1046 => 'RODEO',
  1047 => 'ROGERS',
  1048 => 'ROOM',
  1049 => 'RS',
  1050 => 'RSVP',
  1051 => 'RU',
  1052 => 'RUGBY',
  1053 => 'RUHR',
  1054 => 'RUN',
  1055 => 'RW',
  1056 => 'RWE',
  1057 => 'RYUKYU',
  1058 => 'SA',
  1059 => 'SAARLAND',
  1060 => 'SAFE',
  1061 => 'SAFETY',
  1062 => 'SAKURA',
  1063 => 'SALE',
  1064 => 'SALON',
  1065 => 'SAMSCLUB',
  1066 => 'SAMSUNG',
  1067 => 'SANDVIK',
  1068 => 'SANDVIKCOROMANT',
  1069 => 'SANOFI',
  1070 => 'SAP',
  1071 => 'SARL',
  1072 => 'SAS',
  1073 => 'SAVE',
  1074 => 'SAXO',
  1075 => 'SB',
  1076 => 'SBI',
  1077 => 'SBS',
  1078 => 'SC',
  1079 => 'SCA',
  1080 => 'SCB',
  1081 => 'SCHAEFFLER',
  1082 => 'SCHMIDT',
  1083 => 'SCHOLARSHIPS',
  1084 => 'SCHOOL',
  1085 => 'SCHULE',
  1086 => 'SCHWARZ',
  1087 => 'SCIENCE',
  1088 => 'SCJOHNSON',
  1089 => 'SCOR',
  1090 => 'SCOT',
  1091 => 'SD',
  1092 => 'SE',
  1093 => 'SEARCH',
  1094 => 'SEAT',
  1095 => 'SECURE',
  1096 => 'SECURITY',
  1097 => 'SEEK',
  1098 => 'SELECT',
  1099 => 'SENER',
  1100 => 'SERVICES',
  1101 => 'SES',
  1102 => 'SEVEN',
  1103 => 'SEW',
  1104 => 'SEX',
  1105 => 'SEXY',
  1106 => 'SFR',
  1107 => 'SG',
  1108 => 'SH',
  1109 => 'SHANGRILA',
  1110 => 'SHARP',
  1111 => 'SHAW',
  1112 => 'SHELL',
  1113 => 'SHIA',
  1114 => 'SHIKSHA',
  1115 => 'SHOES',
  1116 => 'SHOP',
  1117 => 'SHOPPING',
  1118 => 'SHOUJI',
  1119 => 'SHOW',
  1120 => 'SHOWTIME',
  1121 => 'SHRIRAM',
  1122 => 'SI',
  1123 => 'SILK',
  1124 => 'SINA',
  1125 => 'SINGLES',
  1126 => 'SITE',
  1127 => 'SJ',
  1128 => 'SK',
  1129 => 'SKI',
  1130 => 'SKIN',
  1131 => 'SKY',
  1132 => 'SKYPE',
  1133 => 'SL',
  1134 => 'SLING',
  1135 => 'SM',
  1136 => 'SMART',
  1137 => 'SMILE',
  1138 => 'SN',
  1139 => 'SNCF',
  1140 => 'SO',
  1141 => 'SOCCER',
  1142 => 'SOCIAL',
  1143 => 'SOFTBANK',
  1144 => 'SOFTWARE',
  1145 => 'SOHU',
  1146 => 'SOLAR',
  1147 => 'SOLUTIONS',
  1148 => 'SONG',
  1149 => 'SONY',
  1150 => 'SOY',
  1151 => 'SPACE',
  1152 => 'SPORT',
  1153 => 'SPOT',
  1154 => 'SPREADBETTING',
  1155 => 'SR',
  1156 => 'SRL',
  1157 => 'SRT',
  1158 => 'ST',
  1159 => 'STADA',
  1160 => 'STAPLES',
  1161 => 'STAR',
  1162 => 'STARHUB',
  1163 => 'STATEBANK',
  1164 => 'STATEFARM',
  1165 => 'STC',
  1166 => 'STCGROUP',
  1167 => 'STOCKHOLM',
  1168 => 'STORAGE',
  1169 => 'STORE',
  1170 => 'STREAM',
  1171 => 'STUDIO',
  1172 => 'STUDY',
  1173 => 'STYLE',
  1174 => 'SU',
  1175 => 'SUCKS',
  1176 => 'SUPPLIES',
  1177 => 'SUPPLY',
  1178 => 'SUPPORT',
  1179 => 'SURF',
  1180 => 'SURGERY',
  1181 => 'SUZUKI',
  1182 => 'SV',
  1183 => 'SWATCH',
  1184 => 'SWIFTCOVER',
  1185 => 'SWISS',
  1186 => 'SX',
  1187 => 'SY',
  1188 => 'SYDNEY',
  1189 => 'SYMANTEC',
  1190 => 'SYSTEMS',
  1191 => 'SZ',
  1192 => 'TAB',
  1193 => 'TAIPEI',
  1194 => 'TALK',
  1195 => 'TAOBAO',
  1196 => 'TARGET',
  1197 => 'TATAMOTORS',
  1198 => 'TATAR',
  1199 => 'TATTOO',
  1200 => 'TAX',
  1201 => 'TAXI',
  1202 => 'TC',
  1203 => 'TCI',
  1204 => 'TD',
  1205 => 'TDK',
  1206 => 'TEAM',
  1207 => 'TECH',
  1208 => 'TECHNOLOGY',
  1209 => 'TEL',
  1210 => 'TELEFONICA',
  1211 => 'TEMASEK',
  1212 => 'TENNIS',
  1213 => 'TEVA',
  1214 => 'TF',
  1215 => 'TG',
  1216 => 'TH',
  1217 => 'THD',
  1218 => 'THEATER',
  1219 => 'THEATRE',
  1220 => 'TIAA',
  1221 => 'TICKETS',
  1222 => 'TIENDA',
  1223 => 'TIFFANY',
  1224 => 'TIPS',
  1225 => 'TIRES',
  1226 => 'TIROL',
  1227 => 'TJ',
  1228 => 'TJMAXX',
  1229 => 'TJX',
  1230 => 'TK',
  1231 => 'TKMAXX',
  1232 => 'TL',
  1233 => 'TM',
  1234 => 'TMALL',
  1235 => 'TN',
  1236 => 'TO',
  1237 => 'TODAY',
  1238 => 'TOKYO',
  1239 => 'TOOLS',
  1240 => 'TOP',
  1241 => 'TORAY',
  1242 => 'TOSHIBA',
  1243 => 'TOTAL',
  1244 => 'TOURS',
  1245 => 'TOWN',
  1246 => 'TOYOTA',
  1247 => 'TOYS',
  1248 => 'TR',
  1249 => 'TRADE',
  1250 => 'TRADING',
  1251 => 'TRAINING',
  1252 => 'TRAVEL',
  1253 => 'TRAVELCHANNEL',
  1254 => 'TRAVELERS',
  1255 => 'TRAVELERSINSURANCE',
  1256 => 'TRUST',
  1257 => 'TRV',
  1258 => 'TT',
  1259 => 'TUBE',
  1260 => 'TUI',
  1261 => 'TUNES',
  1262 => 'TUSHU',
  1263 => 'TV',
  1264 => 'TVS',
  1265 => 'TW',
  1266 => 'TZ',
  1267 => 'UA',
  1268 => 'UBANK',
  1269 => 'UBS',
  1270 => 'UCONNECT',
  1271 => 'UG',
  1272 => 'UK',
  1273 => 'UNICOM',
  1274 => 'UNIVERSITY',
  1275 => 'UNO',
  1276 => 'UOL',
  1277 => 'UPS',
  1278 => 'US',
  1279 => 'UY',
  1280 => 'UZ',
  1281 => 'VA',
  1282 => 'VACATIONS',
  1283 => 'VANA',
  1284 => 'VANGUARD',
  1285 => 'VC',
  1286 => 'VE',
  1287 => 'VEGAS',
  1288 => 'VENTURES',
  1289 => 'VERISIGN',
  1290 => 'VERSICHERUNG',
  1291 => 'VET',
  1292 => 'VG',
  1293 => 'VI',
  1294 => 'VIAJES',
  1295 => 'VIDEO',
  1296 => 'VIG',
  1297 => 'VIKING',
  1298 => 'VILLAS',
  1299 => 'VIN',
  1300 => 'VIP',
  1301 => 'VIRGIN',
  1302 => 'VISA',
  1303 => 'VISION',
  1304 => 'VISTAPRINT',
  1305 => 'VIVA',
  1306 => 'VIVO',
  1307 => 'VLAANDEREN',
  1308 => 'VN',
  1309 => 'VODKA',
  1310 => 'VOLKSWAGEN',
  1311 => 'VOLVO',
  1312 => 'VOTE',
  1313 => 'VOTING',
  1314 => 'VOTO',
  1315 => 'VOYAGE',
  1316 => 'VU',
  1317 => 'VUELOS',
  1318 => 'WALES',
  1319 => 'WALMART',
  1320 => 'WALTER',
  1321 => 'WANG',
  1322 => 'WANGGOU',
  1323 => 'WARMAN',
  1324 => 'WATCH',
  1325 => 'WATCHES',
  1326 => 'WEATHER',
  1327 => 'WEATHERCHANNEL',
  1328 => 'WEBCAM',
  1329 => 'WEBER',
  1330 => 'WEBSITE',
  1331 => 'WED',
  1332 => 'WEDDING',
  1333 => 'WEIBO',
  1334 => 'WEIR',
  1335 => 'WF',
  1336 => 'WHOSWHO',
  1337 => 'WIEN',
  1338 => 'WIKI',
  1339 => 'WILLIAMHILL',
  1340 => 'WIN',
  1341 => 'WINDOWS',
  1342 => 'WINE',
  1343 => 'WINNERS',
  1344 => 'WME',
  1345 => 'WOLTERSKLUWER',
  1346 => 'WOODSIDE',
  1347 => 'WORK',
  1348 => 'WORKS',
  1349 => 'WORLD',
  1350 => 'WOW',
  1351 => 'WS',
  1352 => 'WTC',
  1353 => 'WTF',
  1354 => 'XBOX',
  1355 => 'XEROX',
  1356 => 'XFINITY',
  1357 => 'XIHUAN',
  1358 => 'XIN',
  1359 => 'XN--11B4C3D',
  1360 => 'XN--1CK2E1B',
  1361 => 'XN--1QQW23A',
  1362 => 'XN--2SCRJ9C',
  1363 => 'XN--30RR7Y',
  1364 => 'XN--3BST00M',
  1365 => 'XN--3DS443G',
  1366 => 'XN--3E0B707E',
  1367 => 'XN--3HCRJ9C',
  1368 => 'XN--3OQ18VL8PN36A',
  1369 => 'XN--3PXU8K',
  1370 => 'XN--42C2D9A',
  1371 => 'XN--45BR5CYL',
  1372 => 'XN--45BRJ9C',
  1373 => 'XN--45Q11C',
  1374 => 'XN--4GBRIM',
  1375 => 'XN--54B7FTA0CC',
  1376 => 'XN--55QW42G',
  1377 => 'XN--55QX5D',
  1378 => 'XN--5SU34J936BGSG',
  1379 => 'XN--5TZM5G',
  1380 => 'XN--6FRZ82G',
  1381 => 'XN--6QQ986B3XL',
  1382 => 'XN--80ADXHKS',
  1383 => 'XN--80AO21A',
  1384 => 'XN--80AQECDR1A',
  1385 => 'XN--80ASEHDB',
  1386 => 'XN--80ASWG',
  1387 => 'XN--8Y0A063A',
  1388 => 'XN--90A3AC',
  1389 => 'XN--90AE',
  1390 => 'XN--90AIS',
  1391 => 'XN--9DBQ2A',
  1392 => 'XN--9ET52U',
  1393 => 'XN--9KRT00A',
  1394 => 'XN--B4W605FERD',
  1395 => 'XN--BCK1B9A5DRE4C',
  1396 => 'XN--C1AVG',
  1397 => 'XN--C2BR7G',
  1398 => 'XN--CCK2B3B',
  1399 => 'XN--CG4BKI',
  1400 => 'XN--CLCHC0EA0B2G2A9GCD',
  1401 => 'XN--CZR694B',
  1402 => 'XN--CZRS0T',
  1403 => 'XN--CZRU2D',
  1404 => 'XN--D1ACJ3B',
  1405 => 'XN--D1ALF',
  1406 => 'XN--E1A4C',
  1407 => 'XN--ECKVDTC9D',
  1408 => 'XN--EFVY88H',
  1409 => 'XN--ESTV75G',
  1410 => 'XN--FCT429K',
  1411 => 'XN--FHBEI',
  1412 => 'XN--FIQ228C5HS',
  1413 => 'XN--FIQ64B',
  1414 => 'XN--FIQS8S',
  1415 => 'XN--FIQZ9S',
  1416 => 'XN--FJQ720A',
  1417 => 'XN--FLW351E',
  1418 => 'XN--FPCRJ9C3D',
  1419 => 'XN--FZC2C9E2C',
  1420 => 'XN--FZYS8D69UVGM',
  1421 => 'XN--G2XX48C',
  1422 => 'XN--GCKR3F0F',
  1423 => 'XN--GECRJ9C',
  1424 => 'XN--GK3AT1E',
  1425 => 'XN--H2BREG3EVE',
  1426 => 'XN--H2BRJ9C',
  1427 => 'XN--H2BRJ9C8C',
  1428 => 'XN--HXT814E',
  1429 => 'XN--I1B6B1A6A2E',
  1430 => 'XN--IMR513N',
  1431 => 'XN--IO0A7I',
  1432 => 'XN--J1AEF',
  1433 => 'XN--J1AMH',
  1434 => 'XN--J6W193G',
  1435 => 'XN--JLQ61U9W7B',
  1436 => 'XN--JVR189M',
  1437 => 'XN--KCRX77D1X4A',
  1438 => 'XN--KPRW13D',
  1439 => 'XN--KPRY57D',
  1440 => 'XN--KPU716F',
  1441 => 'XN--KPUT3I',
  1442 => 'XN--L1ACC',
  1443 => 'XN--LGBBAT1AD8J',
  1444 => 'XN--MGB9AWBF',
  1445 => 'XN--MGBA3A3EJT',
  1446 => 'XN--MGBA3A4F16A',
  1447 => 'XN--MGBA7C0BBN0A',
  1448 => 'XN--MGBAAKC7DVF',
  1449 => 'XN--MGBAAM7A8H',
  1450 => 'XN--MGBAB2BD',
  1451 => 'XN--MGBAI9AZGQP6J',
  1452 => 'XN--MGBAYH7GPA',
  1453 => 'XN--MGBB9FBPOB',
  1454 => 'XN--MGBBH1A',
  1455 => 'XN--MGBBH1A71E',
  1456 => 'XN--MGBC0A9AZCG',
  1457 => 'XN--MGBCA7DZDO',
  1458 => 'XN--MGBERP4A5D4AR',
  1459 => 'XN--MGBGU82A',
  1460 => 'XN--MGBI4ECEXP',
  1461 => 'XN--MGBPL2FH',
  1462 => 'XN--MGBT3DHD',
  1463 => 'XN--MGBTX2B',
  1464 => 'XN--MGBX4CD0AB',
  1465 => 'XN--MIX891F',
  1466 => 'XN--MK1BU44C',
  1467 => 'XN--MXTQ1M',
  1468 => 'XN--NGBC5AZD',
  1469 => 'XN--NGBE9E0A',
  1470 => 'XN--NGBRX',
  1471 => 'XN--NODE',
  1472 => 'XN--NQV7F',
  1473 => 'XN--NQV7FS00EMA',
  1474 => 'XN--NYQY26A',
  1475 => 'XN--O3CW4H',
  1476 => 'XN--OGBPF8FL',
  1477 => 'XN--OTU796D',
  1478 => 'XN--P1ACF',
  1479 => 'XN--P1AI',
  1480 => 'XN--PBT977C',
  1481 => 'XN--PGBS0DH',
  1482 => 'XN--PSSY2U',
  1483 => 'XN--Q9JYB4C',
  1484 => 'XN--QCKA1PMC',
  1485 => 'XN--QXAM',
  1486 => 'XN--RHQV96G',
  1487 => 'XN--ROVU88B',
  1488 => 'XN--RVC1E0AM3E',
  1489 => 'XN--S9BRJ9C',
  1490 => 'XN--SES554G',
  1491 => 'XN--T60B56A',
  1492 => 'XN--TCKWE',
  1493 => 'XN--TIQ49XQYJ',
  1494 => 'XN--UNUP4Y',
  1495 => 'XN--VERMGENSBERATER-CTB',
  1496 => 'XN--VERMGENSBERATUNG-PWB',
  1497 => 'XN--VHQUV',
  1498 => 'XN--VUQ861B',
  1499 => 'XN--W4R85EL8FHU5DNRA',
  1500 => 'XN--W4RS40L',
  1501 => 'XN--WGBH1C',
  1502 => 'XN--WGBL6A',
  1503 => 'XN--XHQ521B',
  1504 => 'XN--XKC2AL3HYE2A',
  1505 => 'XN--XKC2DL3A5EE0H',
  1506 => 'XN--Y9A3AQ',
  1507 => 'XN--YFRO4I67O',
  1508 => 'XN--YGBI2AMMX',
  1509 => 'XN--ZFR164B',
  1510 => 'XXX',
  1511 => 'XYZ',
  1512 => 'YACHTS',
  1513 => 'YAHOO',
  1514 => 'YAMAXUN',
  1515 => 'YANDEX',
  1516 => 'YE',
  1517 => 'YODOBASHI',
  1518 => 'YOGA',
  1519 => 'YOKOHAMA',
  1520 => 'YOU',
  1521 => 'YOUTUBE',
  1522 => 'YT',
  1523 => 'YUN',
  1524 => 'ZA',
  1525 => 'ZAPPOS',
  1526 => 'ZARA',
  1527 => 'ZERO',
  1528 => 'ZIP',
  1529 => 'ZIPPO',
  1530 => 'ZM',
  1531 => 'ZONE',
  1532 => 'ZUERICH',
  1533 => 'ZW',
];
}
