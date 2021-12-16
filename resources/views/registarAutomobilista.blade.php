@extends ('layoutAdmin')

@section('conteudo')



<div class="card bg-white relative rounded-lg shadow flex w-full mx-auto">
    <!---->
    <span class="flex">
        <form class="w-full flex flex-wrap my-5 mx-5 text-justify md:text-left md:mx-10 form-group" method="post" action="">
            @csrf
            <h5 class="w-full">
                Dados do Automobilista
            </h5>
            <div class="row py-1">
                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Numero Da
                            Carta</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Numero Da Carta" aria-label="Numero Da Carta" name="numCarta">
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Nome</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" name="nome">
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Apelido</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Apelido" aria-label="Apelido" name="apelido">
                </div>
            </div>

            <div class="row py-2">
                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Sexo</b> <b class="text-red">*</b></label>
                    <select class="form-select form-control" id="specificSizeSelect" name="sexo">
                        <option selected class="bg-green" value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Data de
                            Nascimento</b><b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Data" aria-label="Data" name="dataNascmento">
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Pais de
                            Origem</b><b class="text-red">*</b></label>
                    <select class="form-control" id="id_pais" name="pais">
                        <option value="MOCAMBIQUE">MOCAMBIQUE</option>
                        <option value="AFEGANISTAO">AFEGANISTAO

                        </option>
                        <option value="AFRICA DO SUL">AFRICA DO SUL</option>
                        <option value="AFRICA DO SUL">AFRICA DO SUL</option>
                        <option value="ALEMANHA">ALEMANHA</option>
                        <option value="ALEMANHA DEMOCRATICA">ALEMANHA DEMOCRATICA</option>
                        <option value="ALEMANHA FEDERAL">ALEMANHA FEDERAL</option>
                        <option value="ALTO VOLTA">ALTO VOLTA</option>
                        <option value="ANDORRA">ANDORRA</option>
                        <option value="NGUILLA">ANGUILLA</option>
                        <option value="ANGOLA">ANGOLA</option>
                        <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                        <option value="ANTILHAS HOLANDESAS">ANTILHAS HOLANDESAS</option>
                        <option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                        <option value="ARGELIA">ARGELIA</option>
                        <option value="150">ARGENTINA</option>
                        <option value="160">ARQUIPELAGO DE SAN ANDRES PROVIDENCIA E SANTA CATALINA
                        </option>
                        <option value="170">ARMENIA</option>
                        <option value="180">ARUBA</option>
                        <option value="190">AUSTRALIA</option>
                        <option value="200">AUSTRIA</option>
                        <option value="210">AZERBAIDJAO</option>
                        <option value="220">BAHAMAS</option>
                        <option value="230">BANGLADESH</option>
                        <option value="240">BARBADOS</option>
                        <option value="250">BAREM OU BAREINE OU BAIREIN</option>
                        <option value="260">BELGICA</option>
                        <option value="270">BELIZE</option>
                        <option value="280">BERMUDAS</option>
                        <option value="290">BENIN</option>
                        <option value="300">BIELO-RUSSIA(BELARUS)</option>
                        <option value="310">BIRMANIA</option>
                        <option value="320">BOLIVIA</option>
                        <option value="330">BOSNIA-HERZEGOVINA</option>
                        <option value="340">BOTSUANA(BOTSWANA)</option>
                        <option value="350">BRUNEI</option>
                        <option value="360">BULGARIA</option>
                        <option value="370">BURMA</option>
                        <option value="380">BURQUINA FASO OU BURKINA</option>
                        <option value="390">BURUNDI</option>
                        <option value="400">BUTAO</option>
                        <option value="410">CABO VERDE</option>
                        <option value="420">CAMAROES (CAMEROUN)</option>
                        <option value="430">CAMBODJA OU CAMPUCHEIA</option>
                        <option value="440">CANADA</option>
                        <option value="450">CATAR</option>
                        <option value="460">CASAQUISTAO</option>
                        <option value="470">CAYMAN</option>
                        <option value="480">CEILAO</option>
                        <option value="490">CEUTA E MELILLA</option>
                        <option value="500">CHADE</option>
                        <option value="510">CHILE</option>
                        <option value="520">CHINA</option>
                        <option value="530">CHINA NACIONALISTA</option>
                        <option value="540">CHIPRE</option>
                        <option value="550">CINGAPURA</option>
                        <option value="560">COLOMBIA</option>
                        <option value="570">CONGO</option>
                        <option value="580">COREIA DO NORTE</option>
                        <option value="590">COREIA DO SUL</option>
                        <option value="600">COSTA DO MARFIM</option>
                        <option value="610">COSTA RICA</option>
                        <option value="620">COTE D'IVOIRE</option>
                        <option value="630">COVEITE</option>
                        <option value="640">CROACIA</option>
                        <option value="650">CUBA</option>
                        <option value="660">DINAMARCA</option>
                        <option value="670">DJIBUTI</option>
                        <option value="680">DOMINICA</option>
                        <option value="690">EGITO</option>
                        <option value="700">EL SALVADOR</option>
                        <option value="710">EMIRADOS ARABES UNIDOS</option>
                        <option value="720">EQUADOR</option>
                        <option value="730">ERITREIA</option>
                        <option value="740">ESCOCIA</option>
                        <option value="750">ESLOVENIA</option>
                        <option value="760">ESPANHA</option>
                        <option value="770">ESTADOS UNIDOS</option>
                        <option value="780">ESTONIA</option>
                        <option value="790">ETIOPIA</option>
                        <option value="800">FIJI OU FIDJI</option>
                        <option value="810">FILIPINAS</option>
                        <option value="820">FINLANDIA</option>
                        <option value="830">FORMOSA</option>
                        <option value="840">FRANCA</option>
                        <option value="850">GABAO</option>
                        <option value="860">GAMBIA</option>
                        <option value="870">GANA</option>
                        <option value="880">GEORGIA</option>
                        <option value="890">GIBRALTAR</option>
                        <option value="900">GRANADA</option>
                        <option value="910">GRA-BRETANHA</option>
                        <option value="920">GRECIA</option>
                        <option value="930">GROENLANDIA</option>
                        <option value="940">GUADALUPE</option>
                        <option value="950">GUAM</option>
                        <option value="960">GUATEMALA</option>
                        <option value="970">GUIANA</option>
                        <option value="980">GUIANA FRANCESA</option>
                        <option value="990">GUINE</option>
                        <option value="1000">GUINE-BISSAU</option>
                        <option value="1010">GUINE EQUATORIAL</option>
                        <option value="1020">HAITI</option>
                        <option value="1030">HOLANDA</option>
                        <option value="1040">HONDURAS</option>
                        <option value="1050">HONG KONG</option>
                        <option value="1060">HUNGRIA</option>
                        <option value="1070">IEMEM DO NORTE</option>
                        <option value="1080">IEMEM DO SUL</option>
                        <option value="1090">ILHA DE MAN</option>
                        <option value="1100">ILHA DE PITCAIRN</option>
                        <option value="1110">ILHA JOHNSTON</option>
                        <option value="1120">ILHA NORFOLK</option>
                        <option value="1130">ILHA WAKE</option>
                        <option value="1140">ILHAS ALAND</option>
                        <option value="1150">ILHAS CAYMAN</option>
                        <option value="1160">ILHAS COCOS (KEELING)</option>
                        <option value="1170">ILHAS COMORES</option>
                        <option value="1180">ILHAS COOK</option>
                        <option value="1190">ILHAS DO CANAL</option>
                        <option value="1200">ILHAS FAROE</option>
                        <option value="1210">ILHAS GEORGIA E SANDWICH DO SUL</option>
                        <option value="1220">ILHAS MARIANAS DO NORTE</option>
                        <option value="1230">ILHAS MARSHALL</option>
                        <option value="1240">ILHAS MIDWAY</option>
                        <option value="1250">ILHAS VIRGENS (EUA)</option>
                        <option value="1260">ILHAS VIRGENS (GB)</option>
                        <option value="1270">ILHAS WALLIS E FUTUNA</option>
                        <option value="1280">INDIA</option>
                        <option value="1290">INDONESIA</option>
                        <option value="1300">INGLATERRA</option>
                        <option value="1310">IRA OU IRAN</option>
                        <option value="1320">IRAQUE</option>
                        <option value="1330">IRIA OCIDENTAL</option>
                        <option value="1340">IRLANDA DO NORTE</option>
                        <option value="1350">IRLANDA (SUL)</option>
                        <option value="1360">ISLANDIA</option>
                        <option value="1370">ISRAEL</option>
                        <option value="1380">ITALIA</option>
                        <option value="1390">IUGOSLAVIA</option>
                        <option value="1400">JAMAICA</option>
                        <option value="1410">JAPAO</option>
                        <option value="1420">JORDANIA</option>
                        <option value="1430">KUAITE OU KUWEIT</option>
                        <option value="1440">LAOS</option>
                        <option value="1450">LESOTO</option>
                        <option value="1460">LETONIA</option>
                        <option value="1470">LIBANO</option>
                        <option value="1480">LIBERIA</option>
                        <option value="1490">LIBIA</option>
                        <option value="1500">LIECHTENSTEIN</option>
                        <option value="1510">LITUANIA</option>
                        <option value="1520">LUXEMBURGO</option>
                        <option value="1530">MACAU</option>
                        <option value="1540">MACEDONIA</option>
                        <option value="1550">MADAGASCAR</option>
                        <option value="1560">MALASIA OU MALAISIA</option>
                        <option value="1570">MALAVI OU MALAUI</option>
                        <option value="1580">MALDIVAS</option>
                        <option value="1590">MALI</option>
                        <option value="1600">MALTA</option>
                        <option value="1610">MALVINAS OU ILHAS FALKLAND</option>
                        <option value="1620">MARROCOS</option>
                        <option value="1630">MARTINICA</option>
                        <option value="1640">MAURICIO</option>
                        <option value="1650">MAURITANIA</option>
                        <option value="1660">MAYOTTE</option>
                        <option value="1670">MEXICO</option>
                        <option value="1680">MIANMA</option>
                        <option value="1690">MICRONESIA</option>
                        <option value="1700">MOCAMBIQUE</option>
                        <option value="1710">MOLDAVIA (MOLDOVA)</option>
                        <option value="1720">MONACO</option>
                        <option value="1730">MONGOLIA</option>
                        <option value="1740">MONTENEGRO</option>
                        <option value="1750">MONTSERRAT</option>
                        <option value="1760">MYANMAR</option>
                        <option value="1770">NAMIBIA</option>
                        <option value="1780">NAURU</option>
                        <option value="1790">NEPAL</option>
                        <option value="1800">NICARAGUA</option>
                        <option value="1810">NIGER</option>
                        <option value="1820">NIGERIA</option>
                        <option value="1830">NIUE</option>
                        <option value="1840">NORUEGA</option>
                        <option value="1850">NOVA CALEDONIA</option>
                        <option value="1860">NOVA ZELANDIA</option>
                        <option value="1870">NUEVA ESPARTA</option>
                        <option value="1880">OMA</option>
                        <option value="1890">PAIS DE GALES</option>
                        <option value="1900">PAISES BAIXOS</option>
                        <option value="1910">PALAU</option>
                        <option value="1920">PANAMA</option>
                        <option value="1930">PAPUA NOVA-GUINE</option>
                        <option value="1940">PAQUISTAO</option>
                        <option value="1950">PARAGUAI</option>
                        <option value="1960">PERSIA</option>
                        <option value="1970">PERU</option>
                        <option value="1980">POLINESIA FRANCESA</option>
                        <option value="1990">POLONIA</option>
                        <option value="2000">PORTO RICO</option>
                        <option value="2010">PORTUGAL</option>
                        <option value="2020">QUENIA</option>
                        <option value="2030">QUIRIBATI</option>
                        <option value="2040">QUIRGUIZIA OU QUIRGUIZTAO</option>
                        <option value="2050">RASD</option>
                        <option value="2060">REINO UNIDO</option>
                        <option value="2070">REPUBLICA CENTROAFRICANA</option>
                        <option value="2080">REPUBLICA DO IEMEN</option>
                        <option value="2090">REPUBLICA DOMINICANA</option>
                        <option value="2100">REPUBLICA ESLOVACA</option>
                        <option value="2110">REPUBLICA TCHECA</option>
                        <option value="2120">REUNIAO</option>
                        <option value="2130">RODESIA</option>
                        <option value="2140">ROMENIA</option>
                        <option value="2150">RUANDA</option>
                        <option value="2160">RUSSIA</option>
                        <option value="2170">SAARA OCIDENTAL</option>
                        <option value="2180">SAINT-PIERRE E MIQUELON</option>
                        <option value="2190">SALOMAO</option>
                        <option value="2200">SAMOA OCIDENTAL</option>
                        <option value="2210">SAMOA AMERICANA</option>
                        <option value="2220">SAN MARINO</option>
                        <option value="2230">SANTA HELENA</option>
                        <option value="2240">SANTA LUCIA</option>
                        <option value="2250">SAO CRISTOVAO E NEVIS(SAINT KITTS E NEVIS)</option>
                        <option value="2260">SAO TOME E PRINCIPE</option>
                        <option value="2270">SAO VICENTE E GRANADINAS</option>
                        <option value="2280">SEICHELLES(SEYCHELLES)</option>
                        <option value="2290">SENEGAL</option>
                        <option value="2300">SERRA LEOA</option>
                        <option value="2310">SERVIA</option>
                        <option value="2320">SIRIA</option>
                        <option value="2330">SOMALIA</option>
                        <option value="2340">SRILANKA</option>
                        <option value="2350">SUAZILANDIA</option>
                        <option value="2360">SUDAO</option>
                        <option value="2370">SUECIA</option>
                        <option value="2380">SUICA</option>
                        <option value="2390">SURINAME</option>
                        <option value="2400">SVALBARD</option>
                        <option value="2410">TADJIQUISTAO</option>
                        <option value="2420">TAILANDIA</option>
                        <option value="2430">TAIWAM</option>
                        <option value="2440">TANZANIA</option>
                        <option value="2450">TCHECO-ESLOVAQUIA</option>
                        <option value="2460">TERRAS AUSTRAIS E ANTARTICA</option>
                        <option value="2470">TERRITORIO BRITANICO NA ANTAR TICA</option>
                        <option value="2480">TERRITORIO BRITANICO NO OCEANOINDICO</option>
                        <option value="2490">TIBETE</option>
                        <option value="2500">TIMOR</option>
                        <option value="2510">TOGO</option>
                        <option value="2520">TONGA</option>
                        <option value="2530">TOQUELAU</option>
                        <option value="2540">TRINIDADE E TOBAGO</option>
                        <option value="2550">TUNISIA</option>
                        <option value="2560">TURCAS E CAICOS(TURKS E CAICOS)</option>
                        <option value="2570">TURCOMENISTAO(TURCOMENIA)</option>
                        <option value="2580">TURQUIA</option>
                        <option value="2590">TUVALU</option>
                        <option value="2600">UCRANIA</option>
                        <option value="2610">UGANDA</option>
                        <option value="2620">UNIAO SOVIETICA</option>
                        <option value="2630">URUGUAI</option>
                        <option value="2640">UZBEQUISTAO</option>
                        <option value="2650">VANATU</option>
                        <option value="2660">VATICANO</option>
                        <option value="2670">VENEZUELA</option>
                        <option value="2680">VIETNAM</option>
                        <option value="2690">ZAIRE</option>
                        <option value="2700">ZAMBIA</option>
                        <option value="2710">ZIMBABUE</option>
                    </select>
                </div>
            </div>

            <div class="row py-2">

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Morada</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Morada" aria-label="Morada" name="morada">
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Tipo de
                            Identificacao</b> <b class="text-red">*</b></label>
                    <select class="form-select form-control" id="specificSizeSelect" name="tipodoc">
                        <option selected class="bg-green" value="BI">Bilhete de Identidade</option>
                        <option value="Passaporte">Passaporte</option>
                        <option value="Dire">Dire</option>

                    </select>
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">No. Da
                            Identificacao</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Numero da Identificacao" aria-label="Identificacao" name="numDoc">
                </div>
            </div>

            <div class="row py-2">
                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Categoria Da
                            Carta</b> <b class="text-red">*</b></label>
                    <select class="form-select form-control" id="specificSizeSelect" name="tipoCarta">
                        <option selected class="bg-green">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="C1">C1</option>
                        <option value="CE">CE</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Inicio de
                            Validade</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Validade" aria-label="Validade" name="inicDataVal">
                </div>

                <div class="col-sm-4">
                    <label for="formGroupExampleInput2" class="form-label"><b class="b">Fim da
                            Validade</b> <b class="text-red">*</b></label>
                    <input type="text" class="form-control" placeholder="Validade" aria-label="Validade" name="fimDataVal">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-sm-6">
                    <button type="submit" class="btn px-5 w-full btn-success  pull-right">Submeter</button>
                </div>
            </div>
        </form>
    </span>
</div>

@stop
