<?php
/* $Id$ */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bait�', 'Kilobait�', 'Megabait�', 'Gigabait�');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Tre�iadienis', 'Ketvirtadienis', 'Penktadienis', '�e�tadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Baland�io', 'Gegu�io', 'Bir�elio', 'Liepos', 'Rugpj��io', 'Rugs�jo', 'Spalio', 'Lapkri�io', 'Gruod�io');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';

$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strAccessDenied = 'Pri�jimas u�draustas';
$strAction = 'Valdymo veiksmai';
$strAddDeleteColumn = '�terpti/Trinti stulpelius';
$strAddDeleteRow = '�terpti/Trinti po�ymio eilut�(es)';
$strAddNewField = '�terpti nauj� laukel�(ius)';
$strAddPriv = '�terpti privilegij�(as)';
$strAddPrivMessage = 'J�s �terp�te privilegijas.';
$strAddSearchConditions = '�terpkite paie�kos s�lygas � "where" sakin�:';
$strAddToIndex = '�terpti indeksui papildomus &nbsp;%s&nbsp;stulpel�(ius)';
$strAddUser = 'Sukurti nauj� vartotoj�';
$strAddUserMessage = 'J�s suk�r�te nauj� vartotoj�.';
$strAffectedRows = 'Pakeista eilu�i�:';
$strAfter = 'Prie� %s';
$strAfterInsertBack = 'Sugr��ti � buvus� puslap�';
$strAfterInsertNewInsert = '�terpti sekan�i� nauj� eilut�';
$strAll = 'Visk�';
$strAllTableSameWidth = 'rodyti visas lenteles vienodo plo�io?';
$strAlterOrderBy = 'Pakeisti lentel�s r��iavim� pagal:';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAnalyzeTable = 'Analizuoti lentel�';
$strAnd = 'IR';
$strAny = 'Bet kur�(i�)';
$strAnyColumn = 'Bet kur� stulpel�';
$strAnyDatabase = 'Bet kuri� duomen� baz�';
$strAnyHost = 'Bet kur� prisijungimo adres�';
$strAnyTable = 'Bet kuri� lentel�';
$strAnyUser = 'Bet kur� vartotoj�';
$strAscending = 'Did�jimo tvarka';
$strAtBeginningOfTable = 'Lentel�s prad�ioje';
$strAtEndOfTable = 'Lentel�s pabaigoje';
$strAttr = 'Atributai';

$strBack = 'Atgal';
$strBeginCut = 'KIRPIMO PRAD�IA';
$strBeginRaw = 'RAW PRAD�IA';
$strBinary = 'Dvejetainis';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBookmarkDeleted = 'Nuoroda i�trinta.';
$strBookmarkLabel = 'Nuorodos Antra�t�';
$strBookmarkQuery = 'Sukurti nuoroda SQL-u�klausai';
$strBookmarkThis = 'Sukurti nuorod�';
$strBookmarkView = 'Per�i�ra';
$strBrowse = 'Per�i�r�ti';
$strBzip = '"bzip"';

$strCantLoadMySQL = 'negali u�krauti MySQL proceso,<br />patikrinkite PHP nustatymus.';
$strCantLoadRecodeIconv = 'Nepavyko u�krauti <em>iconv</em> arba <em>recode</em> pl�tini�, reikaling� koduot�s kovertavimui. Suteikite PHP teises naudotis �iais i�pl�timais arba i�junkite phpMyAdmin koduot�s konvertavim�. ';
$strCantRenameIdxToPrimary = 'Indeks� pervadinti PIRMINIU nepavyko!';
$strCantUseRecodeIconv = 'Kraunant pl�tini� prane�imus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP konfig�racij�. ';
$strCardinality = 'Element� skai�ius';
$strCarriage = 'Gr��imo � eilut�s prad�i� simbolis(CR): \\r';
$strChange = 'Keisti';
$strChangeDisplay = 'Pasirinkite lauk�, kur� norite per�i�r�ti';
$strChangePassword = 'Pakeisti slapta�od�';
$strCharsetOfFile = 'Simboli� koduot� byloje:';
$strCheckAll = 'Pa�ym�ti visus(as)';
$strCheckDbPriv = 'Pa�ym�ti duomen� baz�s privilegijas';
$strCheckTable = 'Patikrinti lentel�';
$strChoosePage = 'Pasirinkite puslap� redagavimui';
$strColComFeat = 'Stulpeli� komentar� i�vedimas';
$strColumn = 'Stulpelis';
$strColumnNames = 'Stulpeli� vardai';
$strComments = 'Komentarai';
$strCompleteInserts = 'Visi�kas �terpimas';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin negal�jo perskaityti konfig�racin�s bylos!<br />Tai gal�jo nutikti jeigu <u>php</u> rado byloje vykdymo klaid� arba visai nerando bylos.<br />Pra�ome kreiptis � konfig�racin� byl� tiesiogiai (naudojantis nuoroda �emiau) ir perskaityti gautus <u>php</u> klaid� prane�im�(us). Daugeliu atveju vienoje/keletoje eilu�i� truksta kabu�i� ir/arba kabliata�kio.<br />Jeigu i�vedamas tu��ias nar�ykl�s langas - viskas tvarkoje (klaid� nepasteb�ta).';
$strConfigureTableCoord = 'Nustatykite lentel�s %s koordinates';
$strConfirm = 'Ar TIKRAI norite atlikti �� veiksm�?';
$strCookiesRequired = 'Sausain�liai(Cookies) turi b�ti priimami.';
$strCopyTable = 'Kopijuoti lentel� � (duomen� baz�<b>.</b>lentel�):';
$strCopyTableOK = 'Letel� %s nukopijuota � %s.';
$strCreate = 'Sukurti';
$strCreateIndex = 'Sukurti indeks� &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti nauj� indeks�';
$strCreateNewDatabase = 'Sukurti nauj� duomen� baz�';
$strCreateNewTable = 'Sukurti nauj� lentel� duomen� baz�je %s';
$strCreatePage = 'Sukurti nauj� puslap�';
$strCreatePdfFeat = 'PDF bylos generavimas';
$strCriteria = 'Kriterijai';

$strData = 'Duomenys';
$strDataDict = 'Duomen� �odynas';
$strDataOnly = 'Tik duomenys';
$strDatabase = 'Duomen� baz� ';
$strDatabaseHasBeenDropped = 'Duomen� baz� %s i�trinta.';
$strDatabaseWildcard = 'Duomen� baz� (galima naudoti pakaitos simbolius):';
$strDatabases = 'duomen� baz�s';
$strDatabasesStats = 'Duomen� bazi� statistika';
$strDefault = 'Nutylint';
$strDelete = 'Trinti';
$strDeleteFailed = 'Trynimo klaida!';
$strDeleteUserMessage = 'J�s i�tyn�te vartotoj� %s.';
$strDeleted = 'Eilut� i�trinta';
$strDeletedRows = 'Eilut�s i�trintos:';
$strDescending = 'Ma��jimo tvarka';
$strDisabled = 'I�jungta';
$strDisplay = 'Atvaizduoti';
$strDisplayFeat = 'I�vedimo s�vyb�s';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizd�';
$strDoAQuery = 'Vykdyti "u�klaus� pagal pavyzd�" (pakaitos simbolis: "%")';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDocu = 'Dokumentacija';
$strDrop = 'Panaikinti';
$strDropDB = 'Panaikinti duomen� baz� %s';
$strDropTable = 'Panaikinti lentel�';
$strDumpXRows = 'I�vesti %s eilu�i� pradedant nuo %s eilut�s.';
$strDumpingData = 'Sukurta duomen� kopija lentelei';
$strDynamic = 'dinaminis';

$strEdit = 'Taisyti';
$strEditPDFPages = 'Taisyti PDF puslapius';
$strEditPrivileges = 'Taisyti privilegijas';
$strEffective = 'Efektyvus';
$strEmpty = 'Panaikinti reik�mes';
$strEmptyResultSet = 'MySQL gra�ino tu��i� rezultat� rinkin� (n�ra eilu�i�).';
$strEnabled = '�jungta';
$strEnd = 'Pabaiga';
$strEndCut = 'KIRPIMO PABAIGA';
$strEndRaw = 'RAW PABAIGA';
$strEnglishPrivileges = ' Pastaba: MySQL privilegij� pavadinimai pateikiami angl� kalba';
$strError = 'Klaida';
$strExplain = 'Paai�kinti SQL u�klaus�';
$strExport = 'Eksportuoti';
$strExportToXML = 'I�vesti XML formatu';
$strExtendedInserts = 'I�pl�stinis �terpimas';
$strExtra = 'Papildomai';

$strField = 'Laukas';
$strFieldHasBeenDropped = 'Laukas %s i�mestas';
$strFields = 'Kiek lauk�';
$strFieldsEmpty = ' Tu��ia lauk� skai�iaus reik�m�! ';
$strFieldsEnclosedBy = 'Lauk� reik�m�s apskliaustos  simboliais';
$strFieldsEscapedBy = 'Lauk� reik�m�s baigiasi simboliu';
$strFieldsTerminatedBy = 'Lauk� pabaigos �ym�';
$strFixed = 'fiksuotas';
$strFlushTable = 'I�valyti lentel� ("FLUSH")';
$strFormEmpty = 'Tr�ksta reik�m�s formoje !';
$strFormat = 'Formatas';
$strFullText = 'Visus tekstus';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGenTime = 'Atlikimo laikas';
$strGeneralRelationFeat = 'Pagrindin�s s�ry�i� s�vyb�s';
$strGo = 'Vykdyti';
$strGrants = 'Leisti';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'i�pl�sta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vien� stulpel� i�vedimui';
$strHome = 'Pirmas puslapis';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHomepageSourceforge = 'Parsisi�sti phpMyAdmin i� Sourceforge tinklapio';
$strHost = 'Prisijungimo adresas';
$strHostEmpty = 'Tu��ias prisijungimo adresas!';

$strIdxFulltext = '"Fulltext" indeksas';
$strIfYouWish = 'Jei pageidaujate pakrauti kelet� lentel�s stulpeli�, sudarykite lauk� s�ra�� atskirt� kabliata�kiais.';
$strIgnore = 'Ignoruoti';
$strImportDocSQL = 'Importuoti docSQL bylas';
$strInUse = '�iuo metu naudojama';
$strIndex = 'Indeksas';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strIndexes = 'Indeksai';
$strInsecureMySQL = 'J�s� konfig�racin�je byloje yra nurodyti standartiniai nustatymai (pvz: root vartotojas be slapta�o�io). Taip sukonfiguruotas MySQL serveris yra nesaugus, bei gali b�ti atviras �silau�imams, tod�l rekomenduojame pakeisti �iuos nustatymus.';
$strInsert = '�terpti';
$strInsertAsNewRow = '�terpti nauj� �ra��';
$strInsertNewRow = '�terpti nauj� eilut�';
$strInsertTextfiles = '�terpti duomenis i� tekstinio failo � lentel�';
$strInsertedRows = '�terpt� eilu�i�:';
$strInstructions = 'Instrukcijos';
$strInvalidName = '"%s" rezervuotas �odis, J�s negalite �io �od�io naudoti kaip duomen� baz�s, lentel�s arba laukelio vardo.';

$strKeepPass = 'Nekeisti slapta�od�io';
$strKeyname = 'Raktinis �odis';
$strKill = 'Stabdyti proces�';

$strLength = 'Ilgis';
$strLengthSet = 'Ilgis/reik�m�s*';
$strLimitNumRows = 'Eilu�i� skai�ius puslapyje';
$strLineFeed = 'Eilut�s: \\n';
$strLines = 'Eilu�i�';
$strLinesTerminatedBy = 'Eilut�s pabaigos �ym�';
$strLinkNotFound = 'S�ry�is nerastas';
$strLinksTo = 'S�ry�is su';
$strLocationTextfile = 'Tekstiniai SQL u�klaus� failai';
$strLogPassword = 'Slapta�odis:';
$strLogUsername = 'Vartotojo vardas:';
$strLogin = '�siregistruoti';
$strLogout = 'I�siregistruoti';

$strMissingBracket = 'Tr�ksta skliausto(�)';
$strModifications = 'Pakeitimai i�saugoti';
$strModify = 'Keisti';
$strModifyIndexTopic = 'Keisti indeks�';
$strMoveTable = 'Perkelti lentel� � (duomen� baz�<b>.</b>lentel�):';
$strMoveTableOK = 'Lentel� %s perkelta � %s.';
$strMySQLCharset = 'MySQL koduot�';
$strMySQLReloaded = 'MySQL procesas perkrautas.';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLServerProcess = 'MySQL %pma_s1% procesas serveryje %pma_s2%. �registruotas vartotojas %pma_s3%';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos b�sen�';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNo = 'Ne';
$strNoDatabases = 'N�ra duomen� bazi�';
$strNoDescription = 'Apra�ymo n�ra';
$strNoDropDatabases = '"DROP DATABASE" komandos �vykdyti negalima.';
$strNoExplain = 'Praleisti SQL u�klausos ai�kinim�';
$strNoFrames = 'phpMyAdmin draugi�kesnis su <b>r�melius</b> palaikan�iomis nar�ykl�mis.';
$strNoIndex = 'Neapra�yti indeksai!';
$strNoIndexPartsDefined = 'Neapra�ytos indekso dalys!';
$strNoModification = 'N�ra pakeitim�';
$strNoPassword = 'N�ra slapta�od�io';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'N�ra privilegij�';
$strNoQuery = 'N�ra SQL u�klausos!';
$strNoRights = 'Neturite pakankamai teisi�';
$strNoTablesFound = 'Duomen� baz�je nerasta lenteli�.';
$strNoUsersFound = 'Nerasta vartotojo(�).';
$strNoValidateSQL = 'Praleisti SQL u�klausos tikrinim�';
$strNone = 'N�ra';
$strNotNumber = '�veskite skai�i�!';
$strNotOK = 'Negerai';
$strNotSet = 'Lentel� <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNotValidNumber = ' netinkamas eilut�s numeris!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentel�je <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';

$strOK = 'Gerai';
$strOftenQuotation = 'Da�nai kartojasi kabut�s. Pasirinktinai rei�kia, kad tik  char ir varchar laukai yra u�daryti kabut�mis.';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti lentel�';
$strOptionalControls = 'Pasirinktinai. Kontroliuojama kaip skaitoma, ra�oma specialiuosius simbolius.';
$strOptionally = 'Pasirinktinai';
$strOptions = 'Parinktys';
$strOr = 'Arba';
$strOverhead = 'Perteklinis';

$strPHP40203 = 'J�s naudojate PHP 4.2.3 versij�, kurioje yra rimta klaida, susiijusi su daugiabai�iais stringais (mbstring). Daugiau informacijos rasite PHP klaid� prane�ime Nr.19404. <strong>NEREKOMENDUOJAME naudoti �ios PHP versijos su phpMyAdmin</strong>.';
$strPHPVersion = 'PHP versija';
$strPageNumber = 'Puslapis:';
$strPartialText = 'Daliniai tekstai';
$strPassword = 'Slapta�odis';
$strPasswordEmpty = 'Tu��ias slapta�odis!';
$strPasswordNotSame = 'Slapta�od�iai nesutampa!';
$strPdfDbSchema = 'Duomen� baz�s "%s" schema - %s puslapis';
$strPdfInvalidPageNum = 'Nenurodytas PDF puslapio numeris!';
$strPdfInvalidTblName = 'Lentel� "%s" neegzistuoja!';
$strPdfNoTables = 'No tables';
$strPhp = 'Sukurti PHP kod�';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia konfig�raciniame faile �ra�yti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reik�m�!';
$strPos1 = 'Prad�ia';
$strPrevious = 'Pra�j�s';
$strPrimary = 'Pirminis';
$strPrimaryKey = 'Pirminis raktas';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi b�ti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrint = 'Spausdinti';
$strPrintView = 'Atspausdinti strukt�ra';
$strPrivileges = 'Privilegijos';
$strProperties = 'Nustatymai';
$strPutColNames = 'Stulpeli� pavadinimus �ra�yti pirmoje eilut�je';

$strQBE = 'U�klausa pagal pavyzd�';
$strQBEDel = 'Pakei�iant';
$strQBEIns = '�terpiant';
$strQueryOnDb = 'SQL-u�klausa duomen� baz�je <b>%s</b>:';

$strReType = '�veskite dar kart�';
$strRecords = 'Viso �ra��:';
$strReferentialIntegrity = 'Patikrinti s�ry�i� vientisum�:';
$strRelationNotWorking = 'Atsisakyta papildom� nustatym�, leid�ian�i� dirbti su jungtin�mis lentel�mis. %sPaai�kinimas%s.';
$strRelationView = 'Per�i�r�ti s�ry�ius';
$strReloadFailed = 'MySQL proces� perkrauti nepavyko.';
$strReloadMySQL = 'Perkrauti MySQL proces�';
$strRememberReload = 'Neu�mir�kite perkrauti server�.';
$strRenameTable = 'Pervadinti lentel� �';
$strRenameTableOK = 'Lentel� %s pervadinta � %s';
$strRepairTable = 'Taisyti lentel�';
$strReplace = 'Pakeisti';
$strReplaceTable = 'Pakeisti lentel�s turin� failo duomenimis ';
$strReset = 'Nustatyti � pradin� b�sen�';
$strRevoke = 'Panaikinti';
$strRevokeGrant = 'Panaikinti GRANT privilegij�';
$strRevokeGrantMessage = 'J�s panaikinote GRANT privilegij� %s';
$strRevokeMessage = 'J�s panaikinote privilegijas %s';
$strRevokePriv = 'Panaikinti privilegijas';
$strRowLength = 'Eilut�s ilgis';
$strRowSize = 'Eilut�s dydis';
$strRows = 'Eilut�s';
$strRowsFrom = 'eilu�i� pradedant nuo';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'i�d�stant  %s pakartoti antra�tes kas %s �ra��';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilu�i� statistika';
$strRunQuery = 'Vykdyti u�klaus�';
$strRunSQLQuery = 'Vykdyti SQL u�klaus�(as) duomen� baz�je %s';
$strRunning = 'adresu %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Klaid� SQL interpretatoriuje. Pra�ome patikrinti  ar SQL u�klausoje teisingai naudojamos kabut�s. Kita, galima klaida, jog J�s bandote atsi�sti dvejetainius (binary) duomenis neapskliaustus kabut�mis. Taip pat J�s galite pabandyti �vykdyti savo u�klaus� i� MySQL konsol�s. MySQL serverio i�vesta informacija apie klaid� (jeigu toki� bus) gali pad�ti Jums nustatyti klaidos prie�ast�. Jeigu u�klausa s�kmingai �vykdoma konsol�je, o SQL interpretatorius vistiek i�veda prane�imus apie klaidas, pra�ome supaprastinite savo SQL u�klaus� ir perduodam� duomen� kiek� u�klausoje ir prane�kite apie klaid� programos k�r�jams su �emiau pateikiama informacija:';
$strSQLParserUserError = 'Klaida SQL u�klausoje. �emiau i�vestas MySQL serverio prane�imas (jeigu toks yra), tur�t� pad�ti Jums nustatyti klaidos prie�ast�';
$strSQLQuery = 'SQL- u�klausa';
$strSQLResult = 'SQL rezultatas';
$strSQPBugInvalidIdentifer = 'Klaidingas vardas';
$strSQPBugUnclosedQuote = 'Tr�ksta u�daromosios kabut�s';
$strSQPBugUnknownPunctuation = 'Klaidinga skyryba';
$strSave = 'I�saugoti';
$strScaleFactorSmall = 'Dyd�io matas yra per ma�as norint sutalpinti vaizd� viename lape.';
$strSearch = 'Paie�ka';
$strSearchFormTitle = 'Paie�ka duomen� baz�je';
$strSearchInTables = 'Lentel�s(i�) viduje:';
$strSearchNeedle = 'Paie�kos �odis(iai) arba reik�m�(�s) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas i� �od�i�';
$strSearchOption2 = 'visi �od�iai';
$strSearchOption3 = 'i�tisa fraz�';
$strSearchOption4 = 'kaip reguliar�j� i�sirei�kim�';
$strSearchResultsFor = 'Paie�kos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSelect = 'I�rinkti';
$strSelectADb = 'Pasirinkti duomen� baz�';
$strSelectAll = 'I�rinkti visas(us)';
$strSelectFields = 'Pasirinkti laukus (nors vien�)';
$strSelectNumRows = 'u�klaus� vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'I�saugoti � fail�';
$strServer = 'Darbin� stotis %s';
$strServerChoice = 'Pasirinkti server�';
$strServerVersion = 'Serverio versija';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomen� reik�mes reikia �vesti naudojant �� format�: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia �ra�yti de�inin� ��amb�j� br�k�n� ("\") arba kabutes("\'"), tuomet prie� �ios simbolius reikia papildomo de�ininio ��ambaus br�k�nio (pavyzd�iui: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Rodyti';
$strShowAll = 'Rodyti visk�';
$strShowColor = 'Rodyti spalv�';
$strShowCols = 'Rodyti stulpelius';
$strShowGrid = 'Rodyti tinklel�';
$strShowPHPInfo = 'Rodyti PHP informacij�';
$strShowTableDimension = 'Rodyti lenteli� dyd�ius';
$strShowTables = 'Rodyti lentel�s';
$strShowThisQuery = ' Rodyti �i� u�klaus� v�l ';
$strShowingRecords = 'Rodomi �ra�ai';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSort = 'R��iuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSplitWordsWithSpace = '�od�iai atskirti tarpo simboliu (" ").';
$strStatement = 'Parametrai';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Strukt�ra ir duomenys';
$strStrucDrop = 'Panaikinti-�terpti lentel�';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucOnly = 'Tik strukt�r�';
$strStructPropose = 'Propose table structure';
$strStructure = 'Strukt�ra';
$strSubmit = 'Si�sti';
$strSuccess = 'J�s� SQL u�klausa s�kmingai �vykdyta';
$strSum = 'Sumos';

$strTable = 'Lentel�';
$strTableComments = 'Lentel�s komentarai';
$strTableEmpty = 'Tu��ias lentel�s vardas!';
$strTableHasBeenDropped = 'Lentel� %s panaikinta';
$strTableHasBeenEmptied = 'Lentel�s reik�m�s %s i�tu�tintos';
$strTableHasBeenFlushed = 'Lentel�s buferis  %s i�valytas';
$strTableMaintenance = 'Lentel�s diagnostika';
$strTableStructure = 'Sukurta duomen� strukt�ra lentelei';
$strTableType = 'Lentel�s tipas';
$strTables = '%s lentel�(s)';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> �is laukelis neredaguojamas ';
$strTheContent = 'J�s� failo turinys �terptas.';
$strTheContents = 'Failo turinys �terpus panaikina i�rinktos lentel�s ar stulpelio turin�, bet i�lieka unikal�s ir pirminiai indeksai.';
$strTheTerminator = 'Lauk� pabaigos �ym�.';
$strTotal = ' i� viso ';
$strType = 'Tipas';

$strUncheckAll = 'Nepa�ym�ti visus(as)';
$strUnique = 'Unikalus';
$strUnselectAll = 'Nepa�ym�ti visus(as)';
$strUpdatePrivMessage = 'J�s pakeit�te privilegijas  %s.';
$strUpdateProfile = 'Papildyti profil�:';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti u�klaus�';
$strUsage = 'I�naudota';
$strUseBackquotes = 'Lenteli� ir lauk� vardams naudoti �ias kabutes ` `';
$strUseTables = 'Naudoti lenteles';
$strUser = 'Vartotojas';
$strUserEmpty = 'Tu��ias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUsers = 'Vartotojai';

$strValidateSQL = 'Patikrinti SQL u�klaus�';
$strValidatorError = 'Neveikia SQL interpretatorius. Pra�ome patikrinkite ar yra suinstaliuoti visi privalomi php moduliai, nurodyti %sdokumentacijoje%s.';
$strValue = 'Reik�m�';
$strViewDump = 'Per�i�r�ti lentel�s strukt�ros atvaizd�';
$strViewDumpDB = 'Sukurti, per�i�r�ti duomen� baz�s atvaizd�';

$strWebServerUploadDirectory = 'www-serverio katalogas atsiuntimams';
$strWebServerUploadDirectoryError = 'Nepasiekimas nurodytas www-serverio katalogas atsiuntimams.';
$strWelcome = 'J�s naudojate %s';
$strWithChecked = 'Pasirinktas lenteles:';
$strWrongUser = 'Neteisingas vartotojo vardas arba slapta�odis. Pri�jimas u�draustas.';

$strYes = 'Taip';

$strZip = '"zip"';

//To translate:
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
?>
