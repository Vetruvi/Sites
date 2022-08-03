const langArr = {
	"title": {
		"ru": "Вето-",
		"en": "Veto-",
		"de": "Veto-",
	},
	"b": {
		"ru": "Банк",
		"en": "Bank",
		"de": "Bank",
	},
	"chas" : {
		"ru": "Частным лицам",
		"en": "Private individuals",
		"de": "Privatperson",
	},
	"mal" : {
		"ru": "Малому бизнесу и ИП",
		"en": "Small businesses and SP",
		"de": "Kleine Unternehmen und IP",
	},
	"kor":{
		"ru": "Корпорациям",
		"en": "Corporations",
		"de": "Korporationen",
	},
	"Onlsa":{
		"ru": "Онлайн заявки",
		"en": "Online applications",
		"de": "Online-Bewerbung",
	},
	"Vklad":{
		"ru": "Вклады",
		"en": "Deposits",
		"de": "Depositen",
	},
	"Cards":{
		"ru": "Карты",
		"en": "Cards",
		"de": "Karten",
	},
	"Credits":{
		"ru": "Кредиты",
		"en": "Loans",
		"de": "Kredite",
	},
	"Ipoteki":{
		"ru": "Ипотеки",
		"en": "Mortgages",
		"de": "Hypotheken",
	},
	"Investi":{
		"ru": "Инвестиции",
		"en": "Investment",
		"de": "Investition",
	},
	"Else":{
		"ru": "Еще",
		"en": "Still",
		"de": "Noch",
	},
	"Internet-Bank":{
		"ru": "Интернет банк",
		"en": "Internet bank",
		"de": "Internet bank",
	},
	"Credut-card":{
		"ru": "Кредитная карта",
		"en": "Credit card",
		"de": "Kreditkarte",
	},
	"100_days":{
		"ru": "100 дней без % за 0 Р",
		"en": "100 days without% for 0 R",
		"de": "100 Tage ohne% für 0 R",
	},
	"Podrobnee":{
		"ru": "Подробнее",
		"en": "More details",
		"de": "Mehr Details",
	},

	"Perev":{
		"ru": "Платежи и переводы <br> онлайн",
		"en": "Payments and transfers <br> online",
		"de": "Zahlungen und Überweisungen <br> online",
	},
	
	"Perev1":{
		"ru": "Переводы <br> с карты на карту <br>",
		"en": "Transfers <br> from card to card <br>",
		"de": "Transfers <br> von Karte zu Karte <br>",
	},
	"Perev2":{
		"ru": "Пополнить <br>счёт<br>",
		"en": "Top up account",
		"de": "Konto aufladen",
	},
	"Perev3":{
		"ru": "Через удобные сервисы на нашем сайте",
		"en": "Through convenient services on our website",
		"de": "Durch bequeme Dienstleistungen auf unserer Website",
	},
	"Perev4":{
		"ru": "Денежные переводы",
		"en": "Money transfer",
		"de": "Überweisung",
	},
	"Perev5":{
		"ru": "Переводы через <br>СПБ<br>",
		"en": "Transfers through <br> SPB <br>",
		"de": "Transfers durch <br> SPB <br>",
	},
	
	"Obmen":{
		"ru": "Обмен валюты",
		"en": "Currency exchange",
		"de": "Währungswechsel",
	},
	"Krus":{
		"ru": "<iframe style=width:100%;border:0;overflow:hidden;background-color:transparent;height:481px scrolling=no src=https://fortrader.org/informers/getInformer?st=7&cat=7&title=%D0%9A%D1%83%D1%80%D1%81%D1%8B%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82&texts=%7B%22toolTitle%22%3A%22%D0%92%D0%B0%D0%BB%D1%8E%D1%82%D0%B0%22%2C%22todayCourse%22%3A%22RUB%22%7D&mult=1&showGetBtn=0&hideHeader=1&hideDate=1&w=0&codes=1&colors=false&items=2%2C21%2C30%2C11%2C6%2C27%2C47%2C40&columns=todayCourse&toCur=11111></iframe>",
		"en": "<iframe style=width:100%;border:0;overflow:hidden;background-color:transparent;height:481px scrolling=no src=https://fortrader.org/informers/getInformer?st=7&cat=7&title=Currency%20exchange%20rates&texts=%7B%22toolTitle%22%3A%22Currency%22%2C%22todayCourse%22%3A%22RUB%22%7D&mult=1&showGetBtn=0&hideHeader=0&hideDate=1&w=0&codes=1&colors=false&items=2%2C21%2C30%2C11%2C6%2C27%2C47%2C40&columns=todayCourse&toCur=11111></iframe>",
		"de": "<iframe style=width:100%;border:0;overflow:hidden;background-color:transparent;height:440px scrolling=no src=https://fortrader.org/informers/getInformer?st=7&cat=7&title=Wechselkurs&texts=%7B%22toolTitle%22%3A%22W%C3%A4hrung%22%2C%22todayCourse%22%3A%22RUB%22%7D&mult=1&showGetBtn=0&hideHeader=0&hideDate=1&w=0&codes=1&colors=false&items=2%2C21%2C30%2C11%2C6%2C27%2C47%2C40&columns=todayCourse&toCur=11111></iframe>",
	},

}
const langArr2 = {
	"Convert":{
		"ru": "<spam>Конвертируйте валюту за пару кликов</spam> по выгодному курсу на рынке.<br> Вы ведете операции в иностранной валюте и Вам часто нужно обменивать<br> ее на рубли? Мы делаем все, чтобы работала каждая Ваша копейка!",
		"en": "<spam>Convert currency in a couple of clicks </spam> at the best exchange rate <br> on the market. Do you conduct transactions in foreign currency <br> and do you often need to exchange it for rubles? We do everything to make your every penny work!",
		"de": "<spam>Konvertieren Sie die Währung mit wenigen </spam> Klicks zum besten Wechselkurs <br> auf dem Markt. Führen Sie Transaktionen in Fremdwährung <br> durch und müssen Sie diese häufig in Rubel umtauschen? Wir tun alles, damit jeder Cent funktioniert!",
	},
	"Convert2":{
		"ru": "• Для Вас мы держим курс с минимально возможным спредом от котировок<br> Московской биржи <spam>и обновляем его каждые 15 минут</spam>",
		"en": "• For you, we keep the rate with the lowest possible spread from the quotes <br> of the Moscow Exchange and update it every 15 minutes</spam>",
		"de": "• Für Sie behalten wir den Kurs mit dem geringstmöglichen Spread aus den <br> Kursen der Moskauer Börse bei und aktualisieren ihn alle 15 Minuten</spam>",
	},
	"Convert3":{
		"ru": "• У нас Вы можете <spam>забронировать курс</spam> и приехать для обмена<br> в удобный для вас офис 'Вето-Банка'",
		"en": "• Here you can <spam> book a course </spam> and come to the 'Vetobank'<br> office, which is convenient for you, for an exchange",
		"de": "• Bei uns können Sie <spam> einen Kurs buchen</spam> und kommen für den<br> Austausch in einem für Sie bequemen Büro 'Veto-Bank'",
	},
	"Podrob":{
		"ru": "Подробнее про обмен валют",
		"en": "More about currency exchange",
		"de": "Mehr zum Geldwechsel",
	},
	"train":{
		"ru": "Преймущества ипотеки <br>в Вето-Банке<br>",
		"en": "Benefits of a mortgage <br>in Veto-Bank<br>",
		"de": "Vorteile einer Hypothek <br>in Veto-Bank<br>",
	},
	"train2":{
		"ru": "Подача заявки онлайн",
		"en": "Online application",
		"de": "Online-Bewerbung",
	},
	"train3":{
		"ru": "1 визит на оформление",
		"en": "1 visit for registration",
		"de": "1 Besuch zur Registrierung",
	},
	"train4":{
		"ru": "Досрочное погашение<br> без визитов в банк",
		"en": "Early repayment<br> without visits to the bank",
		"de": "Vorzeitige Rückzahlung<br> ohne Bankbesuche",
	},
}
const langArr3 = {
	"train5":{
		"ru": "Удобное мобильное<br> приложение",
		"en": "Convenient mobile<br> application",
		"de": "Bequeme mobile<br> Anwendung",
	},
	"T1":{
		"ru": "Кредитование <spam>бизнеса</spam>",
		"en": "Business <spam>lending</spam>",
		"de": "Geschäftskredite",
	},

}
const langArr4 = {
	"KT1":{
		"ru": "Кредитование <spam>бизнеса</spam>",
		"en": "Business <spam>lending</spam>",
		"de": "Kreditvergabe an <spam>Unternehmen</spam>",
	},
	"KT2":{
		"ru": "Вы планируете расширение действующего бизнеса или освоение нового<br> направления? Не хватает оборотных средств или надо решить временные трудности?",
		"en": "Are you planning to expand your existing business or master a new<br> direction? Lack of working capital or temporary difficulties need to be resolved?",
		"de": "Planen Sie, Ihr bestehendes Geschäft zu erweitern oder eine neue<br> Richtung einzuschlagen? Mangel an Betriebskapital oder vorübergehende Schwierigkeiten müssen behoben werden?",
	},
	"KT3":{
		"ru": "<spam>• Оставьте заявку онлайн</spam> или позвоните нам. Мы вместе поймем возможности<br>  и скрупулезно проработаем варианты партнерства.",
		"en": "<spam>• Leave a request online</spam> or call us. Together we will understand the possibilities<br> and scrupulously work out the options for partnership.",
		"de": "<spam>• Hinterlassen Sie eine</spam> Anfrage online oder rufen Sie uns an. Gemeinsam werden<br> wir die Möglichkeiten verstehen und die Optionen für eine Partnerschaft sorgfältig ausarbeiten.",
	},
	"KT4":{
		"ru": "Плохая кредитная история? Открыли бизнес совсем недавно? Отказал другой банк?",
		"en": "Bad credit history? Have you started a business recently? Has another bank refused?",
		"de": "Schlechte Bonität? Haben Sie kürzlich ein Unternehmen gegründet? Hat eine andere Bank abgelehnt?",
	},
	"KT5":{
		"ru": "<spam>• Поможем финансовыми советами в кризис</spam> и предоставим рекомендации внешних<br> управляющих. Мы верим, что для каждой ситуации можно подобрать решение!",
		"en": "<spam>• We will help with financial advice</spam> in a crisis and provide recommendations<br> from external managers. We believe that a solution can be found for every situation!",
		"de": "<spam>• Wir helfen bei der Finanzberatung</spam> in einer Krise und geben Empfehlungen<br> von externen Managern. Wir glauben, dass für jede Situation eine Lösung gefunden werden kann!",
	},
	"KT6":{
		"ru": "Подробнее о кредитовании",
		"en": "More about lending",
		"de": "Mehr zum Thema Kreditvergabe",
	},
	"KT7":{
		"ru": "Заинтересовал наш подход давайте строить <spam>партнерские отношения вместе.</spam>",
		"en": "Interested in our approach, let's build <spam>partnerships together.</spam>",
		"de": "Lassen Sie uns gemeinsam <spam>Partnerschaften aufbauen.</spam>",
	},
}
const langArr5 = {
	"News":{
		"ru": "Новости",
		"en": "News",
		"de": "Nachrichten",
	},
	"Date1":{
		"ru": "07 декабря",
		"en": "December 07",
		"de": "07 Dezember",
	},
	"Date2":{
		"ru": "09 декабря",
		"en": "December 09",
		"de": "09 Dezember",
	},
	"Date3":{
		"ru": "12 декабря",
		"en": "December 12",
		"de": "12 Dezember",
	},
}
const langArr6 = {
	"News2":{
		"ru": "Наш банк совершил уже<br> более 5000 успешных сделок.",
		"en": "Our bank has already<br> completed more than 5,000 successful transactions.",
		"de": "Unsere Bank hat bereits<br> mehr als 5.000 erfolgreiche Transaktionen abgeschlossen.",
	},
	"News3":{
		"ru": "Наши офисы в Саратове<br> возобнавляют свою работу",
		"en": "Our offices in Saratov<br> resume their work",
		"de": "Unsere Büros in Saratow<br> nehmen ihre Arbeit wieder auf",
	},
	"News4":{
		"ru": "Просим ознакомиться с<br> графиком работы отделений<br> банка",
		"en": "Please see the opening<br> hours of the bank branches",
		"de": "Bitte beachten Sie die<br> Öffnungszeiten der<br> Bankfilialen",
	},
	"Vetro":{
		"ru": "Вето-банк",
		"en": "Vetobank",
		"de": "Vetobank",
	},
	"seee":{
		"ru": "<input type=search name= search  placeholder=Поиск class=lng-sear>",
		"en": "<input type=search name= search  placeholder=Search class=lng-sear>",
		"de": "<input type=search name=search  placeholder=Suche class=lng-sear>",
	},
	"seee2":{
		"ru": "<input type=submit name=button value=Поиск class=lng-buter>",
		"en": "<input type=submit name=button value=Search class=lng-buter>",
		"de": "<input type=submit name=button value=Suche class=lng-buter>",
	},
	"foot1":{
		"ru": "Физическим лицам",
		"en": "For individuals",
		"de": "Für Einzelpersonen",
	},
	"foot2":{
		"ru": "Корпоротивному бизнесу",
		"en": "Corporate business",
		"de": "Großunternehmen",
	},
	"foot3":{
		"ru": "Финансовым организациям",
		"en": "For financial institutions",
		"de": "Für Finanzinstitute",
	},
	"foot4":{
		"ru": "Приватный банкинг",
		"en": "Private banking",
		"de": "Private Bankgeschäfte",
	},
	"foot5":{
		"ru": "О банке",
		"en": "About the bank",
		"de": "Über die Bank",
	},
	"foot6":{
		"ru": "Ипотека и кредиты",
		"en": "Mortgages and loans",
		"de": "Hypotheken und Kredite",
	},
	"foot7":{
		"ru": "Госпрограмма",
		"en": "News",
		"de": "Nachrichten",
	},
	"foot8":{
		"ru": "Материнский капитал",
		"en": "State program",
		"de": "Staatliches Programm",
	},
	"foot9":{
		"ru": "Готовое жилье",
		"en": "Ready housing",
		"de": "Fertiges Gehäuse",
	},
	"foot10":{
		"ru": "Информация для заемщиков",
		"en": "Information for borrowers",
		"de": "Informationen für Kreditnehmer",
	},
	"foot11":{
		"ru": "Новостройки",
		"en": "New buildings",
		"de": "Neue Gebäude",
	},
	"foot12":{
		"ru": "Вклады и инвестиции",
		"en": "Deposits and investments",
		"de": "Einlagen und Investitionen",
	},
	"foot13":{
		"ru": "Вклады",
		"en": "Contributions",
		"de": "Beiträge",
	},
	"foot14":{
		"ru": "Страхование вкладов",
		"en": "Deposit insurance",
		"de": "Einlagensicherung",
	},
	"foot15":{
		"ru": "Обезличенные металлические счета",
		"en": "Depersonalized metal accounts",
		"de": "Depersonalisierte Metallkonten",
	},
	"foot16":{
		"ru": "ПИФы",
		"en": "MUfs",
		"de": "IVFs",
	},

	"foot17":{
		"ru": "Банковские сейфы",
		"en": "Bank safes",
		"de": "Banksafes",
	},
}
const langArr7 = {
	"foot18":{
		"ru": "Обслуживание",
		"en": "Service",
		"de": "Bedienung",
	},
	"foot19":{
		"ru": "Счета, переводы, платежи",
		"en": "Invoices, transfers, payments",
		"de": "Rechnungen, Überweisungen, Zahlungen",
	},
	"foot20":{
		"ru": "Вето Online",
		"en": "Veto Online",
		"de": "Veto Online",
	},
	"foot21":{
		"ru": "Вето Mobile",
		"en": "Veto Mobile",
		"de": "Veto Mobile",
	},
	"foot22":{
		"ru": "Контакты",
		"en": "Contacts",
		"de": "Kontakte",
	},
}
const langArr8 = {
	"foot23":{
		"ru": "Реквизиты и лицензии",
		"en": "Requisites and licenses",
		"de": "Voraussetzungen und Lizenzen",
	},
	"END":{
		"ru": "© 2001-2020. АО «Вето-Банк», официальный сайт. Генеральная лицензия Банка России № 1326 от 16 января 2015 г.<br> АО ВЕТО-БАНК является участником системы обязательного страхования вкладов.<br>  Информация о максимальных процентных ставках по вкладам физических лиц. Центр раскрытия корпоративной информации. Информация<br>   профессионального участника рынка ценных бумаг. Информация о лицах, под контролем либо значительным влиянием которых находится Банк. Ул. Каланчевская, 27, Москва, 107078.<br>  АО «Вето-Банк» использует файлы «cookie» с целью персонализации сервисов и повышения<br> удобства пользования веб-сайтом. Если Вы не хотите, чтобы Ваши пользовательские данные обрабатывались, пожалуйста, ограничьте их использование в своём браузере",
		"en": "JSC «Veto-Bank», official site. General license of the Bank of Russia No. 1326 dated January 16, 2015.<br>  AO VETO-BANK is a member of the compulsory deposit insurance system. Information<br>  about the maximum interest rates on deposits of individuals. Corporate Information Disclosure Center. Information<br>  of a professional participant in the securities market. Information about persons who control or have significant influence over the Bank. St. Kalanchevskaya, 27, Moscow, 107078.<br>  JSC «Veto-Bank» uses cookies to personalize services and improve the usability of the website. If you do not want your user data to be processed, please limit their use in your browser.",
		"de": "JSC «Veto-Bank», offizielle Seite. Allgemeine Lizenz der Bank von Russland Nr. 1326 vom 16. Januar 2015.<br>  Die AO VETO-BANK ist Mitglied der obligatorischen Einlagensicherung. Angaben<br>  zu den Höchstzinssätzen für Einlagen von Privatpersonen. Offenlegungszentrum für Unternehmensinformationen. Informationen<br>  eines professionellen Teilnehmers am Wertpapiermarkt. Informationen über Personen, die die Bank kontrollieren oder maßgeblichen Einfluss darauf haben. St. Kalanchevskaya, 27, Moskau, 107078.<br>  JSC «Veto-Bank» verwendet Cookies, um Dienste zu personalisieren und die Benutzerfreundlichkeit der Website zu verbessern. Wenn Sie nicht möchten, dass Ihre Benutzerdaten verarbeitet werden, beschränken Sie bitte deren Verwendung in Ihrem Browser.",
	},
	"sear":{
		"ru": "Поиск",
		"en": "Search",
		"de": "Suche",
	},
	"buter":{
		"ru": "Поиск",
		"en": "Search",
		"de": "Suche",
	},
}
//const langArr9 = {
	//"PhoneIm":{
	//	"ru": "<img src=&quotimage/PHONEERUS.png&quot height=&quot942px&quot width=&quot642px&quot id=&quotphone&quot>",
	//	"en": "<img src=&quotimage/PHONEE2.png&quot height=&quot942px&quot width=&quot642px&quot id=&quotphone&quot>",
//		"de": "<img src=&quotimage/PHONEEDES.png&quot height=&quot942px&quot width=&quot642px&quot id=&quotphone&quot>",
//	},