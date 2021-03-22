<?php
/**
*
* @package phpBB Extension - Donation extension
* @copyright (c) 2016-2018 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_DONATION_EMPTY_FIELD'					=> 'Veld kan niet leeg zijn.',
	'ACP_DONATION_NO_JSON'						=> 'Sleutel moet eindigen met .json',
	'CURRENCY_SYMBOL'							=> 'Valutasymbool toevoegen',
	'DELETE_CONFIRM_OPERATION'					=> 'Weet u zeker dat u deze bewerking wilt uitvoeren?<br> %1$s',	
	'CURRENCY_SYMBOL_EXPLAIN'					=> 'Wordt gebruikt als standaard valutasymbool.',
	'GENERAL_CONFIG'							=> 'Algemene instellingen',
	'GENERAL_ENABLE'							=> 'Schakel donaties in',
	'GENERAL_ENABLE_EXPLAIN'					=> 'Schakel de donatie extensie globaal in.',
	'PAYPAL_CONFIG'								=> 'PayPal instellingen',
	'PAYPAL_ENABLE'							 	=> 'Activeer PayPal donaties',
	'PAYPAL_EMAIL'								=> 'PayPal e-mailadres voor donatie',
	'PAYPAL_MIN_AMOUNT'						 	=> 'Minimale PayPal donatiebedrag',
	'PAYPAL_PREFERRED_CURRENCIES'				=> 'PayPal voorkeur valuta',
	'PAYPAL_OPEN_ACCOUNT'						=> 'Heb je geen PayPal account?',
	'PAYZA_CONFIG'								=> 'Payza instellingen',
	'PAYZA_ENABLE'								=> 'Activeer Payza donaties',
	'PAYZA_EMAIL'								=> 'Payza donatie e-mailadres',
	'PAYZA_MIN_AMOUNT'							=> 'Minimale Payza donatiebedrag',
	'PAYZA_PREFERRED_CURRENCIES'				=> 'Payza voorkeur valuta',
	'PAYZA_OPEN_ACCOUNT'						=> 'Heb je geen Payza account?',
	'MONEYBOOKERS_CONFIG'						=> 'Moneybookers instellingen',
	'MONEYBOOKERS_ENABLE'						=> 'Activeer Moneybookers donaties',
	'MONEYBOOKERS_EMAIL'						=> 'Moneybookers donatie e-mailadres',
	'MONEYBOOKERS_MIN_AMOUNT'					=> 'Minimale Moneybookers donatiebedrag',
	'MONEYBOOKERS_PREFERRED_CURRENCIES'		 	=> 'Moneybookers voorkeur valuta',
	'MONEYBOOKERS_OPEN_ACCOUNT'				 	=> 'Heb je geen Moneybookers account?',
	'WEBMONEY_CONFIG'							=> 'WebMoney instellingen',
	'WEBMONEY_ENABLE'							=> 'Activeer WebMoney donaties',
	'WEBMONEY_PURSE'							=> 'WebMoney portemonnee(s)',
	'WEBMONEY_MIN_AMOUNT'						=> 'Minimale WebMoney donatiebedrag',
	'WEBMONEY_OPEN_ACCOUNT'					 	=> 'Heb je geen WebMoney account?',
	'PREFERRED_CURRENCIES_EXPLAIN'				=> 'Selecteer de valuta die u wilt accepteren.',
	'PAGE_CONFIG'								=> 'Pagina instellingen',
	'PAGE_BODY'								 	=> 'Donatie hoofdpagina',
	'PAGE_BODY_EXPLAIN'						 	=> 'Geef een bericht weer op de hoofd donatiepagina',
	'PAGE_SUCCESS'								=> 'Donatie succespagina',
	'PAGE_SUCCESS_EXPLAIN'						=> 'Geef een bericht weer op de succespagina',
	'PAGE_CANCEL'								=> 'Donatie annulering pagina',
	'PAGE_CANCEL_EXPLAIN'						=> 'Geef een bericht weer op de annulering pagina',
	'GOAL_CONFIG'								=> 'Donatie doel instellingen',
	'GOAL_ENABLE'								=> 'Schakel het donatiedoel in',
	'GOAL_ENABLE_EXPLAIN'						=> 'Donatiedoel globaal inschakelen.',
	'GOAL_INDEX_ENABLE'						 	=> 'Toon het donatiedoel op de indexpagina',
	'GOAL_INDEX_ENABLE_EXPLAIN'					=> 'Doel op indexpagina inschakelen.',
	'GOAL_INDEX_BOTTOM'						 	=> 'Donatiedoel positie op de indexpagina',
	'GOAL_INDEX_BOTTOM_EXPLAIN'					=> 'Geef het doel op de boven of onderkant van het forum weer.',
	'GOAL_ANIMATION_ENABLE'						=> 'Donatie doelanimatie inschakelen.',
	'GOAL_ANIMATION_ENABLE_EXPLAIN'				=> 'Toon het doel alleen met de css animatie op de index.',	
	'GOAL_AMOUNT_RECEIVED'						=> 'Ontvangen donaties',
	'GOAL_AMOUNT_RECEIVED_EXPLAIN'				=> 'Totaal ontvangen donaties.',
	'GOAL_AMOUNT'								=> 'Donatie doel',
	'GOAL_AMOUNT_EXPLAIN'						=> 'Stel doelbedrag van de donaties in.',
	'GOAL_CURRENCY'								=> 'Valuta',
	'GOAL_CURRENCY_EXPLAIN'						=> 'Stel de standaardvaluta in voor valutaomrekening.',
	'TOP'										=> 'Boven',
	'BOTTOM'									=> 'Onder',
	'DONATE_ENABLE_TOPIC'						=> 'Schakel donatieknop in viewtopic in',
	'DONATE_ENABLE_TOPIC_EXPLAIN'				=> 'Toon donatie knop in onderwerpen.',
	'DONORS_LIST'								=> 'Sponsorlijst',
	'DONORS_LIST_ENABLE'						=> 'Sponsorlijst inschakelen',
	'DONORS_LIST_ENABLE_EXPLAIN'				=> 'Toon sponsorlijst aan leden.',
	'DONORS_LIST_ENABLE_GUESTS'				 	=> 'Sponsorlijst voor gasten inschakelen',
	'DONORS_LIST_ENABLE_GUESTS_EXPLAIN'			=> 'Toon sponsorlijst aan gasten.<br>U moet ook de permissies voor gasten instellen.',
	'DONORS_LIST_TOP_FIVE_ENABLE'				=> 'Geef de top 5 sponsors weer op de sponsorlijst pagina',
	'DONORS_LIST_TOP_FIVE_ENABLE_EXPLAIN'		=> 'Toont de top 5 van de hoogste donaties op de sponsorlijst pagina.',
	'DONORS_INDEX_TOP_FIVE_ENABLE'				=> 'Toon de top 5 sponsors op de forumindex',
	'DONORS_INDEX_TOP_FIVE_ENABLE_EXPLAIN'		=> 'Toont top 5 op de indexpagina.',
	'DONORS_LAST_FIVE_ENABLE'					=> 'Toon de laatste 5 donaties op de hoofd donatiepagina',
	'DONORS_LAST_FIVE_ENABLE_EXPLAIN'			=> 'Toont de laatste 5 donaties op de donatiepagina.',
	'DONORS_TOTAL'								=> 'Totaal sponsors',
	'DONORS_TOTAL_PER_DAY'						=> 'Sponsors per dag',
	'DONATION_AMOUNTS'							=> 'Bedragen',
	'DONATION_AMOUNTS_EXPLAIN'					=> 'Scheid bedrag met een komma.',
	'DONATION_TIME_ENABLE'						=> 'Schakel donatiedagen in',
	'DONATION_TIME_ENABLE_EXPLAIN'				=> 'Indien ingeschakeld, worden de onderstaande dagen geactiveerd.',
	'DONATION_DAYS'								=> 'Dagen',
	'DONATION_DAYS_STAY'						=> 'Dagen om in deze groep te blijven',
	'DONATION_DAYS_ENABLE'						=> 'Stel donatiedagen in',
	'DONATION_DAYS_ENABLE_EXPLAIN'				=> 'Stel het aantal dagen in, leden worden na deze dagen uit de groep verwijderd.<br>Dagen instellen op 0, dan zullen deze niet verlopen.',
	'DONATION_EXPIRY_VALUE'						=> 'Stel donatie vervaldagen in',
	'DONATION_EXPIRY_VALUE_EXPLAIN'				=> 'Stel de vervaldagen in om de gebruiker informatie te tonen voordat hij gedegradeerd wordt uit de donorgroep.<br>Informatie bericht wordt de komende dagen weergegeven.',
	'DONATION_HISTORY_EXPLAIN'					=> 'Alle donaties registreren om de ledengeschiedenis bij te houden.',
	'DONATION_PRUNE_HOURS'						=> 'Uren',
	'DONATION_PRUNE_HOURS_STAY'					=> 'Uren om te snoeien',
	'DONATION_PRUNE_TIME'						=> 'Stel de snoeitijd in',
	'DONATION_PRUNE_TIME_EXPLAIN'				=> 'Stel de uren in wanneer de snoei moet worden geactiveerd. Standaard is 24 hours.',
	'DONATION_SHOW_DROPPED_USER_ENABLE'			=> 'Verwijderde leden',
	'DONATION_SHOW_DROPPED_USER_ENABLE_EXPLAIN'	=> 'Indien ingeschakeld, worden verwijderde leden verborgen voor de sponsor tabel.',
	'DONATION_DELETE_MEMBER_ENABLE'				=> 'Verwijderde leden uit sponsor tabel verwijderen',
	'DONATION_DELETE_MEMBER_ENABLE_EXPLAIN'		=> 'Indien ingeschakeld, wordt de gebruiker verwijderd uit de sponsor tabel als bovenstaande dagen voorbij zijn.<br>Opgelet: Deze actie is niet omkeerbaar.',
	'DONATION_PM_SEND_ID'						=> 'Stel gebruikers ID in voor privébericht',
	'DONATION_PM_SEND_ID_EXPLAIN'				=> 'Gebruikers ID instellen voor het verzenden van een privébericht. Standaard ID voor privéberichten is 2.',
	'DONATION_STATISTICS'						=> 'Donatie statistieken',
	'DONATION_TOTAL_SUM'						=> 'Totaalbedrag van alle donaties',
	'DONATION_TOTAL_SUM_PER_DAY'				=> 'Bedrag per dag',
	'DONATION_TOTAL_TIMES_SUM'					=> 'Totaal aantal keer gedoneerd',
	'DONATION_TOTAL_TIMES_SUM_PER_DAY'			=> 'Donaties per dag',
	'DONATION_IN_TOTAL'							=> 'in totaal',
	'DONATION_GROUP'							=> 'Groep',
	'DONATION_GROUP_AMOUNT'						=> 'Bedrag voor deze groep',
	'DONATON_INSTALL_DATE'						=> 'Donatie installatiedatum',
	'DONATON_RESET_DATE'						=> 'Reset extensie installatiedatum',
	'DONATION_LICENSE' 							=> 'Licentie ongeldig',
	'DONATION_FILE_EXT'							=> 'Stel een bestand in om de donatie extensie te activeren',
	'DONATION_FILE_EXT_EXPLAIN'					=> '<span style="color:#BF0000;"><strong>Vraag een actieve .json bestandsnaam aan en stel deze hier in.</strong></span><br>
	U kunt een sleutel aanmaken bij <a href="https://www.dmzx-web.net/keyinput">dmzx</a>.<br>Voorbeeld: voorbeeld.json (inclusief .json)',
	'DONATION_FILE_EXT_SET'						=> '<span style="color:#00BF00;">Donatie .json bestand is geactiveerd.</span>',
	'NON_MEMBERS_DONATIONS_ENABLE'				=> 'Sta gasten toe om te doneren',
	'NON_MEMBERS_DONATIONS_ENABLE_EXPLAIN'		=> 'Schakel donaties van gasten in.<br>Let op als deze optie is ingeschakeld, kunnen gasten in speciale groepen worden geplaatst!<br>U moet ook de permissies voor gasten instellen.',
	'DONOR_ADD'								 	=> 'Sponsor toevoegen',
	'DONOR_USERNAME'							=> 'Gebruikersnaam',
	'DONOR_AMOUNT'								=> 'Bedrag',
	'DONOR_AMOUNT_TOTAL'						=> 'Totaal bedrag',
	'DONOR_CURRENCY'							=> 'Valuta',
	'DONOR_HISTOY_DELETE'						=> 'Verwijder geschiedenis',
	'DONOR_METHOD'								=> 'Methode',
	'DONOR_DATE'								=> 'Datum',
	'DONOR_TIMES_DONATED'						=> 'Aantal keer gedoneerd',
	'DONOR_TOTAL_AMOUNT'						=> 'Totaal gedoneerd bedrag',
	'ENTER_DONOR_INFO'							=> 'Gelieve alle velden in te vullen.',
	'DONOR_INFO_UPDATED'						=> 'Sponsor informatie is succesvol bijgewerkt.',
	'DONOR_NOT_KNOWN'							=> 'Sponsor bestaat niet.',
	'DONOR_ADDED'								=> 'Sponsor werd succesvol toegevoegd.',
	'DONOR_REMOVED'								=> 'Sponsor werd succesvol verwijderd.',
	'NO_DONOR_SELECTED'						 	=> 'Geen sponsor geselecteerd.',
	'NO_DONORS'									=> 'Er zijn nog geen sponsors.',
	'LIST_DONOR'								=> '1 Sponsor',
	'LIST_DONORS'								=> '%s Sponsors',
	'LIST_DONATION'								=> '1 Donatie',
	'LIST_DONATIONS'							=> '%s Donaties',
	'NOTE_1'									=> 'Je kunt HTML gebruiken als je wilt.',
	'NOTE_2'									=> 'Als u de gebruikersnaam van de leden die deze pagina’s bezoeken wilt weergeven, voegt u USERNAME toe en deze wordt vervangen door hun echte gebruikersnaam.',
	'IPN_ENABLE'								=> 'IPN inschakelen',
	'IPN_ENABLE_EXPLAIN'						=> 'IPN (Direct betaalbericht) is een functie waarmee de extensie automatisch sponsors kan toevoegen aan de sponsorlijst, de sponsor groep en PB meldingen kan verzenden, elke keer dat een donatie wordt ontvangen.',
	'IPN_PAYZA_SECURITY_CODE'					=> 'Payza IPN beveiligingscode',
	'IPN_PAYZA_SECURITY_CODE_EXPLAIN'			=> 'Voer de IPN beveiligingscode in die u met uw Payza account hebt aangemaakt.',
	'IPN_MONEYBOOKERS_SECRET_WORD'				=> 'Moneybookers IPN geheim woord',
	'IPN_MONEYBOOKERS_SECRET_WORD_EXPLAIN'		=> 'Voer het geheime woord in dat je hebt gemaakt met je Moneybookers account.',
	'IPN_PAYPAL_INSTRUCTIONS'					=> 'PayPal IPN instructies',
	'IPN_PAYPAL_INSTRUCTIONS_EXPLAIN'			=> 'Om het PayPal IPN in te schakelen logt u in op uw PayPal rekening en navigeert u naar “Geschiedenis” > “IPN Geschiedenis”.<br> Klik op deze pagina op de “schakel IPN in” link om naar de pagina IPN instellingen te gaan.<br> Zodra u op de pagina IPN instellingen bent, selecteert u “IPN berichten ontvangen (ingeschakeld)” en voegt u de PayPal IPN URL toe in het invoerveld “Meldings URL”.<br> Klik op “Opslaan” en u bent klaar.',
	'IPN_PAYPAL_URL'							=> 'Uw PayPal IPN URL',
	'IPN_WEBMONEY_INSTRUCTIONS'				 	=> 'Webmoney IPN instructies',
	'IPN_WEBMONEY_INSTRUCTIONS_EXPLAIN'		 	=> 'Momenteel zijn er geen speciale IPN instellingen voor WebMoney.',
	'DONORS_GROUP_CONFIG'						=> 'Groep instellingen',
	'DONORS_GROUP_ENABLE'						=> 'Auto groep inschakelen',
	'DONORS_GROUP_ENABLE_EXPLAIN'				=> 'Als deze functie is ingeschakeld, worden sponsors automatisch toegevoegd aan de sponsor groep.',
	'DONORS_GROUP_SELECT'						=> 'Selecteer sponsor groep',
	'DONORS_GROUP_MAKE_DEFAULT'				 	=> 'Maak sponsor groep standaard',
	'DONORS_GROUP_MAKE_DEFAULT_EXPLAIN'		 	=> 'Indien ingeschakeld, wordt de sponsor groep ingesteld als de standaard groep voor sponsors.',
	'DONORS_GROUP_EXCEPTIONS'					=> 'Groep uitzonderingen',
	'DONORS_GROUP_EXCEPTIONS_EXPLAIN'			=> 'Als u niet wilt dat de sponsor groep de standaard groep wordt voor gebruikers die zich in een speciale groep bevinden, kunt u die groep uitsluiten door deze in de lijst te selecteren. <br>Selecteer meerdere groepen door CTRL ingedrukt te houden en te klikken.',
	'NO_CUSTOM_GROUP_FOUND'					 	=> 'Geen aangepaste groep gevonden',
	'SEND_ADMIN_NOTIFICATION_PM'				=> 'Stuur donatie melding PB naar de beheerder groep',
	'SEND_ADMIN_NOTIFICATION_PM_EXPLAIN'		=> 'Indien ingeschakeld, ontvangen beheerders een PB notificatie wanneer een donatie is ontvangen.',
	'SEND_DONOR_NOTIFICATION_PM'				=> 'Stuur een bedank PB naar sponsors',
	'SEND_DONOR_NOTIFICATION_PM_EXPLAIN'		=> 'Indien ingeschakeld, zullen sponsors een PB ontvangen nadat ze hebben gedoneerd.<br>U kunt het PB onderwerp en het bericht hieronder aanpassen.',
	'PM_CONFIG'								 	=> 'PB instellingen',
	'PM_SUBJECT'								=> 'PB onderwerp',
	'PM_BODY'									=> 'PB bericht',
	'PM_BODY_EXPLAIN'							=> 'U kunt BBCode en Smilies gebruiken.',
	'DONATION_EMAIL_ENABLE'						=> 'E-mail inschakelen',
	'DONATION_EMAIL_ENABLE_EXPLAIN'				=> 'Indien ingeschakeld, zullen verlopen (sponsor) leden een e-mailmelding ontvangen.',
	'EMAIL_CONFIG'								=> 'E-mail instellingen',
	'EMAIL_SUBJECT'								=> 'E-mail onderwerp',
	'EMAIL_BODY'								=> 'E-mail bericht',
	'EMAIL_BODY_EXPLAIN'						=> 'Platte tekst BBcode en Smilies zijn niet toegestaan.<br><strong>Gebruikersnaam, donatie link & forum handtekening worden automatisch opgenomen.</strong>',
	'REMOVE_AMOUNT_FROM_GOAL_STATISTICS'		=> 'Verwijder donatiebedrag uit doelstatistieken.',
	'DONATION_AND_CHAT'							=> '& mChat instellingen',
	'DONATION_CHAT_SEND_ID'						=> 'en mChat bericht',
	'DONATION_CHAT_SEND_ID_EXPLAIN'				=> 'Wordt ook gebruikt voor het plaatsen van berichten in mChat.',
	'DONATION_CHAT_ENABLE'						=> 'Schakel posten in mChat in',
	'DONATION_CHAT_ENABLE_EXPLAIN'				=> 'Indien ingeschakeld, wordt een bericht gepost in mChat wanneer een donatie is ontvangen.',
	'DONATION_CHAT_ACP_ENABLE'					=> 'Inschakelen van beheerderspaneel sponsorslijst berichten in mChat',
	'DONATION_CHAT_ACP_ENABLE_EXPLAIN'			=> 'Indien ingeschakeld, wordt een bericht gepost in mChat wanneer een gebruiker wordt toegevoegd aan de beheerderspaneel Sponsorlijst.',
	'DONATION_CHAT_SUBJECT'						=> 'mChat berichtonderwerp',
	'DONATION_INFO_FILE'						=> 'Activering informatie',
	'DONATION_INFO_FILE_EXPLAIN'				=> 'Maak je sleutel <a href="https://www.dmzx-web.net/keyinput"> >> HIER << </a> aan',
	'DONATION_GOAL_CURRENCY_API_NOT_SET'		=> 'U hebt de API sleutel voor de valuta omzetter niet correct ingesteld.<br>Controleer de donatie doel pagina in het beheerderspaneel.',
	'GOAL_CURRENCY_API_SET'						=> 'Stel de API sleutel in voor valuta omzetter',
	'GOAL_CURRENCY_API_SET_EXPLAIN'				=> 'Ontvang een gratis API sleutel op <a href="https://free.currencyconverterapi.com/free-api-key"> >> free.currencyconverterapi.com << </a>',
	'DONATION_GROUP_TRANSFER'					=> 'Overdracht van groep credits',
	'DONATION_GROUP_TRANSFER_ADD'				=> 'Toevoegen',
	'DONATION_GROUP_TRANSFER_EXPLAIN'			=> 'Hier kunt u waarden voor een bepaalde groep optellen, aftrekken of instellen. U kunt ook een persoonlijk bericht naar elk lid van de groep sturen. Handig als je bijvoorbeeld kerstgroeten wilt versturen met een klein cadeautje (je kunt hiervoor bbCodes gebruiken). Als u geen persoonlijk bericht met uw nieuwe waardes wilt sturen, laat u de velden voor onderwerp en opmerking gewoon leeg.',
	'DONATION_GROUP_TRANSFER_FUNCTION'			=> 'Functie',
	'DONATION_GROUP_TRANSFER_PM_COMMENT'		=> 'Reageer voor uw persoonlijke bericht',
	'DONATION_GROUP_TRANSFER_PM_ERROR'			=> 'U moet het onderwerp <strong>EN</strong> de opmerking invoeren om een persoonlijk bericht te sturen met uw groepsoverdracht!',
	'DONATION_GROUP_TRANSFER_PM_SUCCESS'		=> 'De groepsoverdracht is succesvol verwerkt en<br>de leden van de groep hebben uw persoonlijke bericht ontvangen.',
	'DONATION_GROUP_TRANSFER_PM_TITLE'			=> 'Onderwerp voor het persoonlijke bericht',
	'DONATION_GROUP_TRANSFER_SEL_ERROR'			=> 'U kunt geen groepsoverdracht maken naar de groepen Bots en Gasten!',
	'DONATION_GROUP_TRANSFER_SET'				=> 'Stel in',
	'DONATION_GROUP_TRANSFER_SUBSTRACT'			=> 'Aftrekken',
	'DONATION_GROUP_TRANSFER_SUCCESS'			=> 'De groepsoverdracht is succesvol verwerkt.',
	'DONATION_GROUP_TRANSFER_USER'				=> 'Gebruikersgroep',
	'DONATION_GROUP_TRANSFER_VALUE'				=> 'Waarde',
	'DONATION_CREDITS_ENABLE'					=> 'Schakel credits in',
	'DONATION_CREDITS_ENABLE_EXPLAIN'			=> 'Schakel credits in/uit.',
	'DONATION_CREDITS_VALUE'					=> 'Stel extra waarde in',
	'DONATION_CREDITS_VALUE_EXPLAIN'			=> 'Stel een extra waarde in bovenop het gedoneerde bedrag.<br>Voorbeeld: 10 (donatie) + 200 (extra waarde) is 210 credits.<br>Standaard 0 voegt geen extra waarde toe.',
	'DONATION_CREDITS_FACTOR'					=> 'Factor instellen',
	'DONATION_CREDITS_FACTOR_EXPLAIN'			=> 'Stel factor x maal de gedoneerde waarde in.<br>Voorbeeld: 10 (donatie) x 3 (factor) is 30 credits.<br>Standaard 1 voegt alleen het donatiebedrag toe.',
));