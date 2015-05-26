
package Mail::SpamAssassin::CompiledRegexps::body_0;

use strict;
use vars qw($VERSION @ISA @EXPORT_OK);

use XSLoader ();

BEGIN {
$VERSION = '1.0';
@ISA = qw(XSLoader);
@EXPORT_OK = qw();

our $HAS_RULES = {
    q#ACT_NOW_CAPS,[l=1]# => q#/\bA(?i:ct) N(?i:ow)\b/#,
  q#AXB_3LITTLE_PIGS,[l=1]# => q#/\bwas sent by third-party independent marketing agent\./#,
  q#AXB_BODYMAIL_SBL112884,[l=1]# => q#/\@yeah\.net\b/#,
  q#BANG_GUAR,[l=1]# => q#/\bguaranteed?\!/i#,
  q#BANG_OPRAH,[l=1]# => q#/\boprah!/i#,
  q#BANKING_LAWS,[l=0]# => q#/banking laws/i#,
  q#BILLION_DOLLARS,[l=1]# => q#/[BM]ILLION DOLLAR/#,
  q#BODY_ENHANCEMENT,[l=1]# => q#/\b(?:enlarge|increase|grow|lengthen|larger\b|bigger\b|longer\b|thicker\b|\binches\b).{0,50}\b(?:penis|male organ|pee[ -]?pee|dick|sc?hlong|wh?anger|breast(?!\s+cancer))/i#,
  q#BODY_ENHANCEMENT2,[l=1]# => q#/\b(?:penis|male organ|pee[ -]?pee|dick|sc?hlong|wh?anger|breast(?!\s+cancer)).{0,50}\b(?:enlarge|increase|grow|lengthen|larger\b|bigger\b|longer\b|thicker\b|\binches\b|size)/i#,
  q#CN_B2B_SPAMMER,[l=1]# => q#/\bWe are (?:(?:a )?(?:China|Taiwan)[-\s]based|(?:one of (?:the )?best|(?:a )?leading) [^\.]{10,90} (?:in|from) (?:China|Taiwan))\b/i#,
  q#CUM_SHOT,[l=1]# => q#/\bcum[ -]?shots?\b/i#,
  q#CURR_PRICE,[l=1]# => q#/\bCurrent Price:/#,
  q#DEAR_BENEFICIARY,[l=1]# => q#/\b(?:De[ae]r\s|At+(?:ention|n):?\s?)(?:\S+\s)?Ben[ei]ficiary\b/i#,
  q#DEAR_SOMETHING,[l=1]# => q#/\bDear (?:IT\W|Internet|candidate|sirs?|madam|investor|travell?er|car shopper|web)\b/i#,
  q#DEAR_WINNER,[l=1]# => q#/\bdear.{1,20}winner/i#,
  q#DIET_1,[l=1]# => q#/\b(?:(?:without|no) (?:exercis(?:e(?! price)|ing)|dieting)|weight.?loss|(?:extra|lose|lost|losing).{0,10}(?:pounds|weight|inches|lbs)|burn.{1,10}fat)\b/i#,
  q#DRUGS_SMEAR1,[l=1]# => q#/(?:Viagra|Valium|Xanax|Soma|Cialis){2}/i#,
  q#DRUG_ED_CAPS,[l=1]# => q#/\b(?:CIALIS|LEVITRA|VIAGRA)/#,
  q#DRUG_ED_GENERIC,[l=1]# => q#/\bGeneric Viagra\b/#,
  q#DRUG_ED_ONLINE,[l=1]# => q#/\bviagra .{0,25}(?:express|online|overnight)/i#,
  q#DRUG_ED_SILD,[l=1]# => q#/\bsildenafil\b/i#,
  q#EMRCP,[l=1]# => q#/\bExcess Maximum Return Capital Profit\b/i#,
  q#EM_ROLEX,[l=1]# => q#/[^\s\w.]rolex/i#,
  q#EXCUSE_24,[l=1]# => q#/you(?:'ve|'re| have| are)? receiv(?:e|ed|ing) this (?:advertisement|offer|special|recurring|paid).{0,16}\b(?:by either|because)/i#,
  q#EXCUSE_4,[l=1]# => q#/To Be Removed,? Please/i#,
  q#EXCUSE_REMOVE,[l=1]# => q#/to be removed from.{0,20}(?:mailings|offers)/i#,
  q#FIN_FREE,[l=1]# => q#/\bfinancial(?:ly)? (?:free|independen)/i#,
  q#FORWARD_LOOKING,[l=1]# => q#/\bcontains forward-looking statements\b/i#,
  q#FREE_PORN,[l=1]# => q#/\bfree (?:porn|xxx|adult)/i#,
  q#FREE_QUOTE_INSTANT,[l=1]# => q#/free.{0,12}(?:(?:instant|express|online|no.?obligation).{0,4})+.{0,32}\bquote/i#,
  q#GTUBE,[l=1]# => q#/XJS\*C4JDBQADN1\.NSBN3\*2IDNEN\*GTUBE-STANDARD-ANTI-UBE-TEST-EMAIL\*C\.34X/#,
  q#GUARANTEED_100_PERCENT,[l=0]# => q#/100% GUARANTEED/i#,
  q#HK_SCAM_N1,[l=1]# => q#/\b(?:widow|son|daughter|husband|wife|brother|sister) of (?:the )?(?:late|sacked|dead|passed)\b/i#,
  q#HK_SCAM_N13,[l=1]# => q#/\b(?:business|important|discreet) transaction\b/i#,
  q#HK_SCAM_N15,[l=1]# => q#/\b(?:account (?:overseas?|offshore)|(?:overseas?|offshore) account)\b/i#,
  q#HK_SCAM_N2,[l=1]# => q#/\bnext of kin\b/i#,
  q#HK_SCAM_N3,[l=1]# => q#/\bdirect telephone numbers?\b/i#,
  q#HK_SCAM_N8,[l=1]# => q#/\byour compensation\b/i#,
  q#HK_SCAM_S15,[l=0]# => q#/(?:discovered a dormant account|can you be my partner)/i#,
  q#HK_SCAM_S25,[l=1]# => q#/\bbank (?:in|of) ghana/i#,
  q#HK_SCAM_S4,[l=0]# => q#/transfer (?:this|my|of )?funds?/i#,
  q#HK_SCAM_S7,[l=0]# => q#/(?:(?:investment|proposed|lucrative) (?:business|venture)|(?:business|venture) (?:enterprise|propos(?:al|ition)))/i#,
  q#IMPOTENCE,[l=1]# => q#/\b(?:impotence (?:problem|cure|solution)|Premature Ejaculation|erectile dysfunction)/i#,
  q#INVESTMENT_ADVICE,[l=1]# => q#/\binvestment advice/i#,
  q#JOIN_MILLIONS,[l=1]# => q#/\bjoin (?:millions|thousands)\b/i#,
  q#LIVE_PORN,[l=1]# => q#/\blive .{0,9}(?:fuck(?:ing)?|sex|naked|girls?|virgins?|teens?|porno?)\b/i#,
  q#LONG_TERM_PRICE,[l=1]# => q#/long\W+term\W+(target|projected)(\W+price)?/i#,
  q#LOOPHOLE_1,[l=1]# => q#/loop-?hole in the banking/i#,
  q#LOW_PRICE,[l=1]# => q#/\blow.{0,4} (?-i:P)rice/i#,
  q#MALE_ENHANCE,[l=0]# => q#/male enhancement/i#,
  q#MARKETING_PARTNERS,[l=1]# => q#/\b(?:marketing|network) partner|\bpartner (?:web)?site/i#,
  q#MILLION_USD,[l=1]# => q#/Million\b.{0,40}\b(?:United States? Dollars?|USD)/i#,
  q#MONEY_BACK,[l=0]# => q#/money back guarantee/i#,
  q#MORE_SEX,[l=1]# => q#/increased?.{0,9}(?:sex|stamina)/i#,
  q#NA_DOLLARS,[l=1]# => q#/\b(?:\d{1,3})?Million\b.{0,40}\b(?:Canadian Dollar?s?|US\$|U\.? ?S\.? Dollar)/i#,
  q#NOT_ADVISOR,[l=0]# => q#/not a registered investment advisor/i#,
  q#NO_MEDICAL,[l=1]# => q#/\bno medical exam/i#,
  q#NO_PRESCRIPTION,[l=1]# => q#/N[o0].{1,10}P(?:er|re)scr[i1]pt[i1][o0]n.{1,10}(?:n[e3][e3]d[e3]d|requ[1i]re|n[e3]c[e3]ssary)/i#,
  q#ONE_TIME,[l=1]# => q#/\bone\W+time (?:charge|investment|offer|promotion)/i#,
  q#ONLINE_PHARMACY,[l=1]# => q#/\bonline pharmacy|\b(?:drugs|medications) online/i#,
  q#PREST_NON_ACCREDITED,[l=1]# => q#/prestigi?ous\b.{0,20}\bnon-accredited\b.{0,20}\buniversities/i#,
  q#PRICES_ARE_AFFORDABLE,[l=1]# => q#/\baffordable .{0,10}prices\b/i#,
  q#REFINANCE_NOW,[l=1]# => q#/time to refinance|refinanc\w{1,3}\b.{0,16}\bnow\b/i#,
  q#REFINANCE_YOUR_HOME,[l=1]# => q#/\brefinance your(?: current)? (?:home|house)\b/i#,
  q#REMOVE_BEFORE_LINK,[l=1]# => q#m{(?:no thanks|not interested|unsubscribe here).{0,5}http://}i#,
  q#REPLICA_WATCH,[l=1]# => q#/\breplica.{1,20}rolex/i#,
  q#SHORT_TERM_PRICE,[l=1]# => q#/short\W+term\W+(target|projected)(\W+price)?/i#,
  q#STOCK_ALERT,[l=1]# => q#/\bstock alert/i#,
  q#STRONG_BUY,[l=0]# => q#/strong buy/i#,
  q#TVD_ACT_193,[l=1]# => q#/\bact of (?:193|nineteen thirty)/i#,
  q#TVD_APPROVED,[l=1]# => q#/you.{1,2}re .{0,20}approved/i#,
  q#TVD_INCREASE_SIZE,[l=1]# => q#/\bsize of .{1,20}(?:penis|dick|manhood)/i#,
  q#TVD_LINK_SAVE,[l=1]# => q#/\blink to save\b/i#,
  q#TVD_PH_REC,[l=1]# => q#/\byour .{0,40}account .{0,40}record/i#,
  q#TVD_PH_SEC,[l=1]# => q#/\byour .{0,40}account .{0,40}security/i#,
  q#TVD_QUAL_MEDS,[l=1]# => q#/\bquality med(?:ication)?s\b/i#,
  q#TVD_SECTION,[l=1]# => q#/\bSection (?:27A|21B)/i#,
  q#TVD_VISIT_PHARMA,[l=1]# => q#/Online Ph.rmacy/i#,
  q#UNCLAIMED_MONEY,[l=1]# => q#/\bunclaimed\s(?:assets?|accounts?|mon(?:ey|ies)|balance|funds?|prizes?|rewards?|payments?|deposits?)\b/i#,
  q#URG_BIZ,[l=1]# => q#/urgent.{0,16}(?:assistance|business|buy|confidential|notice|proposal|reply|request|response)/i#,
  q#VIA_GAP_GRA,[l=1]# => q#/\bvia.gra\b/i#,
  q#__ACH_CANCELLED_02,[l=1]# => q#/(?:rejected|cancel+ed|declined|your)[-_ ](?:(?-i:ACH)|direct[-_ ]deposit)[-_ ](?:payment|transfer|transaction|declin(?:ed|ing))/i#,
  q#__ACH_CANCELLED_03,[l=1]# => q#/\bwire[-_ ]?(?:payment|transfer|transaction)[-_ ](?:(?:was|is)[-_ ])?(?:rejected|cancel+ed|declined|disabled|not[-_ ]accepted|(?:technical )?error)/i#,
  q#__ACH_CANCELLED_04,[l=1]# => q#/\bregarding[-_ ]your[-_ ]direct[-_ ]deposit[-_ ]via[-_ ](?-i:ACH)/i#,
  q#__AFF_LOTTERY,[l=0]# => q#/(?:lottery|winner)/i#,
  q#__AFR_UNION,[l=1]# => q#/\bafrican\sunion\b/i#,
  q#__AGREED_RATIO,[l=1]# => q#/\b(?:agreed|sharing)\s(?:ratios?|percent\w+)\b/i#,
  q#__AM_DYING,[l=1]# => q#/\b(?:am\s(?:\S+\s)?dying|terminally\sill|cancer|en\sphase\sterminale|(?:become|is|devenu|maladie)\sincurable|que\sje\smeurs)\b/i#,
  q#__BACK_SCRATCH,[l=1]# => q#/\bmutual+y?\s(?:benefi(?:t|cial)|interest)\b/i#,
  q#__BANK_DRAFT,[l=1]# => q#/\bbank\sdraft/i#,
  q#__BARRISTER,[l=1]# => q#/\b(?:barrister|solicitor at law|barr\.)/i#,
  q#__BENIN,[l=1]# => q#/\bb(?:e|=E9|[\xe9]|[\xc3][\xa9])nin\b/i#,
  q#__BIGNUM_EMAILS,[l=1]# => q#/\b(?:thousand|million|\d[,\d]{4,})\s(?:(?!and|or|your)\w+\s)?(?:e-?mail\saddresses|leads|names)\b/i#,
  q#__BODY_XHTML,[l=0]# => q#/<x-html>/i#,
  q#__BOUNCE_NEVER_SEE,[l=1]# => q#/\bThis is an autoresponder. I'll never see your message\b/i#,
  q#__BOUNCE_NONWORKING,[l=1]# => q#/\bYou have reached a non.?working address.  Please check\b/i#,
  q#__BOUNCE_NO_RESEND,[l=1]# => q#/\bPlease do not resend your original message\./#,
  q#__BOUNCE_OOO_2,[l=1]# => q#/\bI ?.m away until .{10,20} and am unable to read your message\b/#,
  q#__BOUNCE_OOO_3,[l=1]# => q#/\bI am currently out of the office\b/#,
  q#__BURKINA_FASO,[l=1]# => q#/\bburkina\s?faso\b/i#,
  q#__CAN_HELP,[l=1]# => q#/\bcan help\b/i#,
  q#__CASHPRZ,[l=1]# => q#/cash prize of/#,
  q#__CHARITY,[l=1]# => q#/\b(?:charit(?:y|[ai]ble)|orphans?|homeless|orphelins|sans\sabri)\b/i#,
  q#__CLEAN_MAILBOX,[l=1]# => q#/\b(?:(?:e-?mail|mail\s?box|violation:|(?-i:CLICK)) (?:quota size|clean(?:-?up))|clean ?up click ?here)\b/i#,
  q#__COMPENSATION,[l=1]# => q#/\b(?:compensat(?:e|ion)|recompensed?|ausgleich)\b/i#,
  q#__CONTACT_ATTY,[l=1]# => q#/\bcontact(?:er)?\s(?:my|(?:de\s)?mon)\s(?:barrister|attou?rney|lawyer|avocat|gestionnaire)\b/i#,
  q#__CONTACT_YOU,[l=1]# => q#/\b(?:contact(?:ing)\syou|vous\scontacter?)\b/i#,
  q#__COURIER,[l=1]# => q#/\bcourier\s(?:company|service)\b/i#,
  q#__DBLCLAIM,[l=1]# => q#/avoid double claiming/#,
  q#__DEAL,[l=1]# => q#/\b(?:(?:business|financial|this|the|mutual|die(?:se)?r?|cette|profitable)\s(?:deal|transa[ck]tion|proposal|off[er]{2}|venture|suggestion|partnership)|your\spartnership)/i#,
  q#__DECEASED,[l=1]# => q#/\b(?:the|my|der|du|le|meu?)\s(?:deceased|late|verstorbenen|d(?:i|e|=E9|[\xe9]|[\xc3][\xa9])funto?|d(?:e|=E9|[\xe9]|[\xc3][\xa9])nt|falecido)\b/i#,
  q#__DESTROY_ME,[l=1]# => q#/\b(?:destroy|hunt|quemar)\sm[eyi]\b/i#,
  q#__DIED_IN,[l=1]# => q#/\bdied\sin\b/i#,
  q#__DIPLOMATIC,[l=1]# => q#/\bdiplomatic\b/i#,
  q#__DLND_ATTACH,[l=1]# => q#/\bdownload\sthe\sattach(?:ed|ment)\b/i#,
  q#__DORMANT_ACCT,[l=1]# => q#/\b(?:(?:dormant|abandoned|left\s?over)\s(?:account|fund|transaction|sum|deposit)|fonds\sdorment)/i#,
  q#__DOS_BODY_FRI,[l=1]# => q#/\bfri(?:day)?\b/i#,
  q#__DOS_BODY_MON,[l=1]# => q#/\bmon(?:day)?\b/i#,
  q#__DOS_BODY_SAT,[l=1]# => q#/\bsat(?:day)?\b/i#,
  q#__DOS_BODY_STOCK,[l=1]# => q#/\bstock\b/i#,
  q#__DOS_BODY_SUN,[l=1]# => q#/\bsun(?:day)?\b/i#,
  q#__DOS_BODY_THU,[l=1]# => q#/\bthu(?:r(?:s(?:day)?)?)?\b/i#,
  q#__DOS_BODY_TICKER,[l=1]# => q#/\b[A-Z]{4}\.(?:OB|PK)\b/#,
  q#__DOS_BODY_TUE,[l=1]# => q#/\btue(?:s(?:day)?)?\b/i#,
  q#__DOS_BODY_WED,[l=1]# => q#/\bwed(?:nesday)?\b/i#,
  q#__DOS_CORRESPOND_EMAIL,[l=1]# => q#/correspond with me using my email/#,
  q#__DOS_DROP_ME_A_LINE,[l=1]# => q#/Drop me a line at/#,
  q#__DOS_EMAIL_DIRECTLY,[l=1]# => q#/(?:Email m[a-z]?e|address) direc(?:tl|lt)y at/#,
  q#__DOS_FIN_ADVANTAGE,[l=1]# => q#/\bfinancial advantage/i#,
  q#__DOS_I_AM_25,[l=1]# => q#/I a.?m 25/#,
  q#__DOS_I_DRIVE_A,[l=1]# => q#/I drive a/#,
  q#__DOS_LET_GO_JOB,[l=1]# => q#/I was (?:let go|fired|layed off|dismissed) from a job I h(?:el|a)d for (?:2\d years|\d{3} months)/#,
  q#__DOS_LINK,[l=1]# => q#/\blink\b/#,
  q#__DOS_MEET_EACH_OTHER,[l=1]# => q#/(?:meet each other|[Mm]ay ?be we can meet)/#,
  q#__DOS_MY_OLD_JOB,[l=1]# => q#/my old job/#,
  q#__DOS_PERSONAL_EMAIL,[l=1]# => q#/personal email at/#,
  q#__DOS_STEADY_COURSE,[l=1]# => q#/\bsteady (?:and increasing )?course\b/i#,
  q#__DOS_STRONG_CF,[l=1]# => q#/\bstrong cash flow/i#,
  q#__DOS_TAKING_HOME,[l=1]# => q#/Taking home \d (?:digit level|figures) in \d{1,2} months/#,
  q#__DOS_WRITE_ME_AT,[l=1]# => q#/[Ww].?r.?i.?t.?e me at/#,
  q#__DRUGS_ANXIETY2,[l=1]# => q#/\bAlprazolam\b/i#,
  q#__DRUGS_ANXIETY8,[l=1]# => q#/\bklonopin\b/i#,
  q#__DRUGS_ANXIETY9,[l=1]# => q#/\brivotril\b/i#,
  q#__DRUGS_ANXIETY_VAL,[l=0]# => q#/valium/i#,
  q#__DRUGS_ANXIETY_XAN,[l=1]# => q#/xan[ae]x/i#,
  q#__DRUGS_DIET3,[l=1]# => q#/\bbontril\b/i#,
  q#__DRUGS_DIET4,[l=1]# => q#/\bphendimetrazine\b/i#,
  q#__DRUGS_DIET5,[l=1]# => q#/\bdiethylpropion\b/i#,
  q#__DRUGS_DIET_PHEN,[l=1]# => q#/\bphentermine\b/i#,
  q#__DRUGS_ERECTILE2,[l=1]# => q#/\bV(?:agira|igara|iaggra|iaegra)\b/i#,
  q#__DRUGS_ERECTILE4,[l=1]# => q#/\bC(?:alis|ilias|ilais)\b/i#,
  q#__DRUGS_ERECTILE5,[l=1]# => q#/\b_{0,3}s[_\W]?[i1!|l\xEC-\xEF][_\W]?l[_\W]?d[_\W]?[e3\xE8-\xEB][_\W]?n[_\W]?[a4\xE0-\xE6@][_\W]?f[_\W]?[i1!|l\xEC-\xEF][_\W]?l c[_\W]?[i1!|l\xEC-\xEF][_\W]?t[_\W]?r[_\W]?[a4\xE0-\xE6@][_\W]?t[_\W]?[e3\xE8-\xEB]_{0,3}(?:\b|\s)/i#,
  q#__DRUGS_ERECTILE_C,[l=1]# => q#/\bCialis\b/i#,
  q#__DRUGS_ERECTILE_L,[l=1]# => q#/\bLevitra\b/i#,
  q#__DRUGS_ERECTILE_V,[l=1]# => q#/\bViagra\b/i#,
  q#__DRUGS_MUSCLE2,[l=1]# => q#/\b_{0,3}cycl[o0\xF2-\xF6]b[e3\xE8-\xEB]nz[a4\xE0-\xE6@]pr[i1!|l\xEC-\xEF]n[e3\xE8-\xEB]_{0,3}(?:\b|\s)/i#,
  q#__DRUGS_MUSCLE5,[l=1]# => q#/\bskelaxin\b/i#,
  q#__DRUGS_PAIN11,[l=1]# => q#/\bzebutal\b/i#,
  q#__DRUGS_PAIN12,[l=1]# => q#/\besgic plus\b/i#,
  q#__DRUGS_PAIN2,[l=1]# => q#/\b_{0,3}c[o0\xF2-\xF6]deine_{0,3}\b/i#,
  q#__DRUGS_PAIN_FIO,[l=0]# => q#/fioricet/i#,
  q#__DRUGS_PAIN_VICO,[l=0]# => q#/vicodin/i#,
  q#__DRUGS_PAIN_VIOXX,[l=0]# => q#/vioxx/i#,
  q#__EARLY_DEMISE,[l=1]# => q#/\buntimely\sdeath\b/i#,
  q#__FB_CONGRADS,[l=0]# => q#/Congratulations/i#,
  q#__FB_COST,[l=1]# => q#/\bcost\b/i#,
  q#__FB_LOTTERY,[l=0]# => q#/lottery/i#,
  q#__FB_NATIONAL,[l=0]# => q#/national/i#,
  q#__FB_S_STOCK,[l=1]# => q#/\bstock/i#,
  q#__FB_TOUR,[l=1]# => q#/\btour/i#,
  q#__FEES,[l=1]# => q#/\b(?:security|safe\w*|courier|registration|pay|paid|up-?front|processing|delivery|transfer|keeping)[\s\w]{0,15}\s(?:fee|charge)s?\b/i#,
  q#__FOR_SALE_LTP,[l=1]# => q#/00\.? (?:less 10%|LTP)/i#,
  q#__FOR_SALE_NET,[l=1]# => q#/00\.? NET/i#,
  q#__FOR_SALE_OBO,[l=1]# => q#/\bor best offer\b/i#,
  q#__FOR_SALE_PRC_100K,[l=1]# => q#/\bprice:? \$\d\d\d,\d\d\d/i#,
  q#__FOR_SALE_PRC_10K,[l=1]# => q#/\bprice:? \$\d\d,\d\d\d/i#,
  q#__FOR_SALE_PRC_1K,[l=1]# => q#/\bprice:? \$\d,?\d\d\d[.\s]/i#,
  q#__FOUND_YOU,[l=1]# => q#/\b(?:I|we)\sfound\syour?\b/i#,
  q#__FRAUD,[l=1]# => q#/\b(?:de)?fraud/i#,
  q#__FRAUD_AON,[l=1]# => q#/\b(?:confidential|private|alternate|alternative) (?:(?:e-? *)?mail)\b/i#,
  q#__FRAUD_AUM,[l=1]# => q#/\bthe desk of\b/i#,
  q#__FRAUD_AXF,[l=0]# => q#/magnanimity/i#,
  q#__FRAUD_BEP,[l=1]# => q#/\b(?:bank of nigeria|central bank of|trust bank|apex bank|amalgamated bank)\b/i#,
  q#__FRAUD_BGP,[l=1]# => q#/\battached to ticket number\b/i#,
  q#__FRAUD_CKF,[l=0]# => q#/computer ballot system/i#,
  q#__FRAUD_DPR,[l=1]# => q#/\b(?:(?:respond|reply) (?:urgently|immediately)|(?:urgent|immediate|earliest) (?:reply|response))\b/i#,
  q#__FRAUD_ETX,[l=1]# => q#/\byour\b[^.]{0,99}\b(?:contact (?:details|information)|private (?:e?[- ]?mail|telephone|tel|phone|fax))\b/i#,
  q#__FRAUD_EZY,[l=1]# => q#/\b(?:of|the) late president\b/i#,
  q#__FRAUD_FBI,[l=1]# => q#/\bdisburs/i#,
  q#__FRAUD_FCW,[l=0]# => q#/fiduciary agent/i#,
  q#__FRAUD_FVU,[l=0]# => q#/award notification/i#,
  q#__FRAUD_GBW,[l=1]# => q#/god gives .{1,10}second chance/i#,
  q#__FRAUD_IOU,[l=1]# => q#/\b(?:no risks?|risk-? *free|free of risks?|100% safe)\b/i#,
  q#__FRAUD_IOV,[l=1]# => q#/\b(?:no risks?|risky?[- ]{0,3}free|free of risks?|100% safe|v\S{1,3}llig Risikofrei ist)\b/i#,
  q#__FRAUD_IPK,[l=1]# => q#/\b(?:in|to|visit) your country\b/i#,
  q#__FRAUD_IRJ,[l=0]# => q#/(?:finance|holding|securit(?:ies|y)) (?:company|firm|storage house)/i#,
  q#__FRAUD_IRT,[l=1]# => q#/\b(?:compliments? of the|dear friend|dear sir|yours faithfully|season'?s greetings)\b/i#,
  q#__FRAUD_JBU,[l=1]# => q#/\bforeign account\b/i#,
  q#__FRAUD_JNB,[l=1]# => q#/\boperat(?:e|ing)\b[^.]{0,99}\b(?:for(?:ei|ie)gn|off-? ?shore|over-? ?seas?) (?:bank )?accounts?\b/i#,
  q#__FRAUD_JYG,[l=1]# => q#/\bgive\s+you .{0,15}(?:fund|money|total|sum|contact|percent)\b/i#,
  q#__FRAUD_KJV,[l=0]# => q#/(?:claim|concerning) (?:the|this) money/i#,
  q#__FRAUD_LTX,[l=1]# => q#/\bmilli?on (?:.{1,25} thousand\s*)?(?:(?:united states|u\.?s\.?) dollars|(?i:U\.?S\.?D?))\b/i#,
  q#__FRAUD_MCQ,[l=1]# => q#/\btransaction\b.{1,30}\b(?:magnitude|diplomatic|strict|absolute|secret|confiden(?:tial|ce)|guarantee)/i#,
  q#__FRAUD_MLY,[l=1]# => q#/\b(?:reply|respond)\b[^.]{0,50}\b(?:to|through)\b[^.]{0,50}\@\b/i#,
  q#__FRAUD_MQO,[l=0]# => q#/foreign (?:business partner|customer)/i#,
  q#__FRAUD_NEB,[l=0]# => q#/(?:government|bank) of nigeria/i#,
  q#__FRAUD_NRG,[l=0]# => q#/i am contacting you/i#,
  q#__FRAUD_PTS,[l=1]# => q#/\b(?:ass?ass?inat(?:ed|ion)|murder(?:e?d)?|kill(?:ed|ing)\b[^.]{0,99}\b(?:war veterans|rebels?))\b/i#,
  q#__FRAUD_PTX,[l=1]# => q#/\b(?:ass?ass?inat(?:ed|ion)|murder(?:e?d)?|poison(?:e?d)?|kill(?:ed|ing|ers)\b[^.]{0,99}\b(?:war veterans|rebels?)|les tueurs)\b/i#,
  q#__FRAUD_PVN,[l=0]# => q#/as the beneficiary/i#,
  q#__FRAUD_QFY,[l=1]# => q#/\bover-? *(?:invoiced?|cost(?:s|ing)?)\b/i#,
  q#__FRAUD_QXX,[l=1]# => q#/\b(?:my name is|i am) (?:mrs?|engr|barrister|dr|prince(?:ss)?)[. ]/i#,
  q#__FRAUD_RLX,[l=1]# => q#/lott(?:o|ery) (?:co,?ordinator|international)/i#,
  q#__FRAUD_SNT,[l=1]# => q#/\blocate(?: .{1,20})? extended relative/i#,
  q#__FRAUD_TCC,[l=0]# => q#/foreign (?:offshore )?(?:bank|account)/i#,
  q#__FRAUD_TDP,[l=1]# => q#/\b(?:business partner(?:s|ship)?|silent partner(?:s|ship)?)\b/i#,
  q#__FRAUD_THJ,[l=0]# => q#/modalit(?:y|ies)/i#,
  q#__FRAUD_ULK,[l=1]# => q#/\baffidavits?\b/i#,
  q#__FRAUD_UOQ,[l=0]# => q#/vital documents/i#,
  q#__FRAUD_UUY,[l=1]# => q#/\blegitimate business(?:es)?\b/i#,
  q#__FRAUD_WDR,[l=1]# => q#/\bprivate lawyer\b/i#,
  q#__FRAUD_WFC,[l=1]# => q#/\bsecur(?:e|ing) (?:the )?(?:funds?|monies)\b/i#,
  q#__FRAUD_WNY,[l=1]# => q#/\b(?:disburse?(?:ment)?|incurr?(?:ed)?|remunerr?at(?:ed?|ion)|remm?itt?(?:ed|ance|ing)?)\b/i#,
  q#__FRAUD_XJR,[l=0]# => q#/(?:who was a|as a|an? honest|you being a|to any) foreigner/i#,
  q#__FRAUD_XVW,[l=1]# => q#/\bhonest cooperation\b/i#,
  q#__FRAUD_XWW,[l=1]# => q#/\b(?:honest(?:ly)?\sco(?:-?operat(?:e|ion)|llaborat(?:e|ion))|ehrliche\szusammenarbeit|sichere [kc]o+p[eo]ration|col+aboration\swith\sme)\b/i#,
  q#__FRAUD_YJA,[l=0]# => q#/over-invoice/i#,
  q#__FRAUD_YPO,[l=0]# => q#/the total sum/i#,
  q#__FRAUD_YQV,[l=0]# => q#/nigerian? (?:national|government)/i#,
  q#__FRAUD_YWW,[l=1]# => q#/\bfurnish you with\b/i#,
  q#__FRAUD_ZFJ,[l=1]# => q#/\b(?:wife|son|brother|daughter) of the late\b/i#,
  q#__F_LARGE_MONEY_2,[l=1]# => q#/\d\d?\s?(?:thousand|(?:m|b|tr)illion)/i#,
  q#__GHANA,[l=1]# => q#/\bghana\b/i#,
  q#__HAS_WON_01,[l=1]# => q#/\bque ha ganado\b/i#,
  q#__HK_LOTTO_1,[l=1]# => q#/\b(?:(?:inter)?national|foundation|mercato|univers|euro ?million|e-?mail|euro-pw|bill ?gates|swiss|prestige|cristal|am.ricaine|coca.?cola|fiduciary|department) ?lot(?:eri[ej]|t(?:ery|o))/i#,
  q#__HK_LOTTO_2,[l=1]# => q#/\blot(?:eri[ej]|t(?:ery|o)) ?(?:(?:inter)?national|foundation|mercato|univers|euro ?million|e-?mail|euro-pw|bill ?gates|swiss|prestige|cristal|am.ricaine|coca.?cola|fiduciary|department)/i#,
  q#__HK_LOTTO_BALLOT,[l=1]# => q#/\b(?:promotional|on.?line|computer|internet|e-?mail|fran.aise) (?:ballot|draw|sweepstake)/i#,
  q#__HK_LOTTO_JACKPOT,[l=1]# => q#/\bmega jackpot\b/i#,
  q#__HK_LOTTO_STAATS,[l=1]# => q#/\bstaatsloteri/i#,
  q#__HUSH_HUSH,[l=1]# => q#/\b(?:confiden[tc]i[ae]l(?:\b|ity\b|it(?:=E9|[\xe9]|[\xc3][\xa9]))|private\b|secr[e\xe8](?:te?|cy)\b|sensitive\b|concealed\b|obscured?\b|discre(?:et|tion)\b|very\sdiscrete|top\ssecret|vertraulich(?:en)?\b|geheim\b|priv(?:e|=E9|[\xe9]|[\xc3][\xa9]))/i#,
  q#__INHERIT_PMT,[l=1]# => q#/\binheritance\spayment\s/i#,
  q#__INTL_BANK,[l=1]# => q#/\b(?:international\s(?:\w+\s)?bank|banque\sinternationale)\b/i#,
  q#__INVEST_COUNTRY,[l=1]# => q#/\binvest\sin\syour?\scountry\b/i#,
  q#__INVEST_MONEY,[l=1]# => q#/\binvest(?:ir)?\s(?:this|ces|d[ae]s|sur ce|de ces)\s(?:money|f[ou]nds?)\b/i#,
  q#__ISO_2022_JP_DELIM,[l=1]# => q#/\e\$B/#,
  q#__IVORY_COAST,[l=1]# => q#/\b(?:Cote\s?D.Ivoire|Ivory\s?Coast|Costa\sde\sMarfil)\b/i#,
  q#__I_INHERIT,[l=1]# => q#/\b(?:I|eu)\s[a-z\s]{0,30}(?:inherited|herdei)\b/i#,
  q#__I_WILL_YOU,[l=1]# => q#/\bwill(?:ed)?\s(?:[a-z\s]{0,20}(?:fortune|money|\$[\d,]+[a-z]{0,9})\s)?to\syou\b/i#,
  q#__JAPANESE_UCE_BODY,[l=1]# => q#/(?:L\$>5Bz|EE;R%a!<%k)(?:8x|9-)9p/#,
  q#__KAM_LOTTO2,[l=1]# => q#/((ticket|serial|lucky) number|secret pin ?code|batch number|reference number|promotion date)/is#,
  q#__LARGE_PERCENT_AFTER,[l=1]# => q#/\d{3}% after/i#,
  q#__LOTSA_MONEY_05,[l=1]# => q#/(?:(?:sum|value|amount)\sof\s)\d[\d.,\sO]{7,20}[\dO\.][\)\]\(\s]{0,3}(?:pounds?|dollars?|euros?|bucks)\b/i#,
  q#__LOTTO_ADMITS_2,[l=1]# => q#/\b(?:free)?(?:lot(?:to|tery|erie)|sweepstakes)\s(?:(?:inter)?na[tz]ional|department|bureau|group|award|microsoft)/i#,
  q#__LOTTO_AGENT_02,[l=1]# => q#/\blot+ery[^\.]{1,40} ticket agent/i#,
  q#__LOTTO_DEPT,[l=1]# => q#/\b(?:claim(?:s|ing)?(?:\sprocessing)?|fiducia\w+|reimbursement|(?:international|foreign|win+ing)(?:\s(?:rem+it+ance|settlement|payment|award))+|payment|award|compensation|lot+ery)(?:\s\w+)?\s?(?:department|dept|unit|group|committee|bureau)/i#,
  q#__LOTTO_VERIFY,[l=1]# => q#/\bpromo\sverification/i#,
  q#__LOTTO_WIN_01,[l=1]# => q#/\bwin+ing\s(?:prize|number|notification|draw|check|cheque|details|information|payment)/i#,
  q#__LUCKY_WINNER,[l=1]# => q#/\b(?:lucky|gl.cklich(?:en)?|afortunados)\s(?:(?:ge)?win+ers?|ganador(?:es)?|individuals?)\b/i#,
  q#__LUCRATIVE,[l=1]# => q#/\b(?:lucrative|profitable|tr[\xe8]s\ssalutaire)\b/i#,
  q#__MAILBOX_FULL_SE,[l=1]# => q#/(?:\b=F6|[\xf6]|[\xc3][\xb6])verskridit gr(?:=E4|[\xe4]|[\xc3][\xa4])nsen f(?:=F6|[\xf6]|[\xc3][\xb6])r din postl(?:=E5|[\xe5]|[\xc3][\xa5])da\b/i#,
  q#__MAIL_ACCT_ACCESS1,[l=1]# => q#/\b(?:your (?:web ?|e-?)?mail (?:account|log-?in) (?:has )?been accessed|r(?:=F3|[\xf3])zne komputery zalogowaniu sie)\b/i#,
  q#__MAIL_ACCT_ACCESS2,[l=1]# => q#/\blo+se ac+es+ to your (?:web|e-?)?mail (?:account|log-?in|box|address)\b/i#,
  q#__MILLIONS,[l=1]# => q#/\bmillions\sof\s(?:dollar|euro|pound)/i#,
  q#__MY_FORTUNE,[l=1]# => q#/\b(?:my|his|her)\s(?:fortune|heritage)\b/i#,
  q#__NEXT_OF_KIN,[l=1]# => q#/\bnext[-\s]of[-\s]kin\b/i#,
  q#__NIGERIA,[l=1]# => q#/\bnigeria\b/i#,
  q#__NOT_DEAD_YET,[l=1]# => q#/\b(?:will\sinherit|que\sherede)\b/i#,
  q#__NOT_SCAM,[l=1]# => q#/\b(?:not\sa\sscam|(?:not|never)\sscam\syou)\b/i#,
  q#__OUR_BEHALF,[l=1]# => q#/\b(?:on\s(?:my|our)\sbehalf|of\sbehalf\sof)\b/i#,
  q#__PAY_YOU,[l=1]# => q#/\bpay\syou\b/#,
  q#__PILL_PRICE_01,[l=1]# => q#m;(?=[\d .f])(?:free|[\d .]{3}(?:/|per|each)) ?(?=[ptc])(?:pill|tablet|cap(?:sule|let))s?\b;i#,
  q#__PILL_PRICE_02,[l=1]# => q#/(?=[ptc])(?:pill|tablet|cap(?:sule|let))s[-= :]{1,5}\$?[\d .]{3}/i#,
  q#__PLS_REVIEW,[l=1]# => q#/\b(?:please|kindly)\s(?:(?:re)?view|see)(?:\s\w+)?\sattach(?:ed|ment)\b/i#,
  q#__RANDOM_PICK,[l=1]# => q#/\b(?:random(?:ly)?\s(?:\w+\s)?(?:select(?:ion|ed)|pick(?:ed)?|computer)|(?:select|pick)ed\s(?:at\s)?random(?:ly)?|(?:esco(?:g|lh)idos|seleccion) (?:aleatoria(?:mente)?|al azar))\b/i#,
  q#__RUDE_HTML_1,[l=0]# => q#/Get a capable html e-mailer/i#,
  q#__RUDE_HTML_2,[l=1]# => q#/not support the display of HTML. Please view this message in a different/i#,
  q#__RUDE_HTML_3,[l=0]# => q#/This message contains an HTML formatted message but your email client does/i#,
  q#__RUDE_HTML_4,[l=1]# => q#/Your mailer do not support HTML messages. Switch to a better mailer/i#,
  q#__SCAM,[l=1]# => q#/\bscam(?:m?e[dr])?s?\b/i#,
  q#__STYLE_TAG_IN_BODY,[l=1]# => q#/<style(?:[^>]{0,30})?>/i#,
  q#__SUBSCRIPTION_INFO,[l=1]# => q#/\b(?:e?newsletters?|(?:un)?(?:subscrib|register)|you(?:r| are) subscri(?:b|ption)|opt(?:.|ing)?out\b|further info|you do ?n[o']t w(?:ish|ant)|remov\w{1,3}.{1,9}\blists?\b|to your white.?list)/i#,
  q#__SUM_OF_FUND,[l=1]# => q#/\b(?:sum|release|freigabe)\s(?:of|der)\s(?:amount|fund|investment|mittel)\b/i#,
  q#__SURVEY,[l=1]# => q#/\bsurvey\b/i#,
  q#__SYSADMIN,[l=1]# => q#/\b(?:help?[- ]?desk|(?:(?:web ?)?mail ?|sys(?:tem )?)admin(?:istrator)|local[- ]host|(?:support|upgrade|management) (?:team|center)|message from administrator|university mail server copyright|suporte t(?:=E9|[\xe9]|[\xc3][\xa9])cnico|administrador do sistema)\b/i#,
  q#__THEY_INHERIT,[l=1]# => q#/\b(?:inherit\sth(?:e|is)\smoney|herede\sest[ea]\sdinero)\b/i#,
  q#__TRAVEL_AGENT,[l=1]# => q#/\btravel\sagen(?:t|cy)\b/i#,
  q#__TRAVEL_BUSINESS,[l=1]# => q#/\bbusiness\stravel\b/i#,
  q#__TRAVEL_PROFILE,[l=1]# => q#/\btravel+er\sprofile\b/i#,
  q#__TRAVEL_RESERV,[l=1]# => q#/\b(?:reservation\s(?:confirmed|number)|travel\sreservations?)\b/i#,
  q#__TRTMT_DEFILED,[l=1]# => q#/\bdefiled\sall\s(?:forms\sof\s)?(?:medical\s)?treatments?\b/i#,
  q#__TRUNK_BOX,[l=1]# => q#/\b(?:(?:trunk|metallic|proof|security|consignment)\sbox(?:es)?|sealed\ssafe|une mallette m(?:e|=E9|[\xe9]|[\xc3][\xa9])tallique)\b/i#,
  q#__TRUSTED_CHECK,[l=1]# => q#/\b(?:cashier'?s?|certified)\sche(?:ck|que)/i#,
  q#__TVD_PH_BODY_01,[l=1]# => q#/\baccount .{0,20}placed? [io]n restricted status/i#,
  q#__TVD_PH_BODY_02,[l=1]# => q#/\brecords (?:[a-z_,-]+ )+?(?:feature|(?:a|re)ward)/i#,
  q#__TVD_PH_BODY_03,[l=1]# => q#/\byou(?:'ve| have) been (?:[a-z_,-]+ )+?payment/i#,
  q#__TVD_PH_BODY_04,[l=1]# => q#/\bfunds? (?!transfer from)(?!from)(?!in)(?!via)(?:[a-z_,-]+ )+?to your (?:[a-z_,-]+ )*?account/i#,
  q#__TVD_PH_BODY_05,[l=1]# => q#/\bthis is (?:[a-z_,-]+ )+?protect (?:[a-z_,-]+ )+?your/i#,
  q#__TVD_PH_BODY_06,[l=1]# => q#/Dear [a-z]+ bank (?:member|customer)/i#,
  q#__TVD_PH_BODY_07,[l=1]# => q#/\bguarantee the safety of your (?:[a-z_,-]+ )*?account/i#,
  q#__TVD_PH_BODY_08,[l=1]# => q#/\bmultiple password failures/i#,
  q#__TVD_PH_BODY_ACCOUNTS_POST,[l=1]# => q#/\b(?:(?:[dr]e-?)?activat[a-z]*|(?:re-?)?validate|secure|restore|confirm|update|suspend) (?!your)(?:[a-z_,-]+ )+?accounts?\b/i#,
  q#__TVD_PH_BODY_ACCOUNTS_PRE,[l=1]# => q#/\baccounts? (?:[a-z_,-]+ )+?(?:record[a-z]*|suspen[a-z]+|notif(?:y|ication)|updated|verifications?|credited)\b/i#,
  q#__UN,[l=1]# => q#/\bunited\snations?\b/i#,
  q#__VALIDATE_MBOX_SE,[l=1]# => q#/(?:\b=E5|[\xe5]|[\xc3][\xa5])terst(?:=E4|\xe4|[\xc3][\xa4])lla ditt konto\b/i#,
  q#__VBOUNCE_AMAVISD2,[l=1]# => q#/\bV I R U S\b/#,
  q#__VBOUNCE_AOL,[l=1]# => q#/TRANSACTION FAILED - Unrepairable Virus Detected. /#,
  q#__VBOUNCE_ATTACHMENT0,[l=1]# => q#/(?:Attachment.{0,40}was Deleted|the infected attachment)/#,
  q#__VBOUNCE_ATT_QUAR,[l=1]# => q#/\bThe attachment was quarantined\b/#,
  q#__VBOUNCE_AVREPORT0,[l=0]# => q#/(antivirus system report|the antivirus module has|illegal attachment|Unrepairable Virus Detected)/i#,
  q#__VBOUNCE_CLICKBANK,[l=1]# => q#/\bvirus scanner deleted your message\b/i#,
  q#__VBOUNCE_DUTCH,[l=1]# => q#/bevatte bijlage besmet welke besmet was met een virus/#,
  q#__VBOUNCE_EXIM,[l=1]# => q#/a potentially executable attachment /#,
  q#__VBOUNCE_GUIN,[l=1]# => q#/message contains file attachments that are not permitted/#,
  q#__VBOUNCE_MAILMARSHAL,[l=1]# => q#/Mail.?Marshal Rule: Inbound Messages : Block Dangerous Attachments/#,
  q#__VBOUNCE_MAILSWEEP,[l=1]# => q#/MAILsweeper has found that a \S+ \S+ \S+ \S+ one or more virus/#,
  q#__VBOUNCE_MAILSWEEP2,[l=1]# => q#/\bblocked by Mailsweeper\b/i#,
  q#__VBOUNCE_QUOTED_EXE,[l=1]# => q#/> TVqQAAMAAAAEAAAA/#,
  q#__VBOUNCE_REJ_FILT,[l=1]# => q#/Reason: Rejected by filter/#,
  q#__VBOUNCE_SECURIQ,[l=1]# => q#/\bGROUP securiQ.Wall\b/#,
  q#__VBOUNCE_SMTP,[l=1]# => q#/host \S+ said: 5\d\d\s+Error: Message content rejected/#,
  q#__VBOUNCE_STRIP_ATTACH,[l=1]# => q#/\bhas stripped one or more attachments from the following message\b/#,
  q#__VBOUNCE_VALERT,[l=1]# => q#/The mail message \S+ \S+ you sent to \S+ contains the virus/#,
  q#__V_ACCOLADES,[l=1]# => q#/\baccolades?\b/i#,
  q#__V_ACHIEVEMENT,[l=1]# => q#/\bbenchmark of achievement\b/i#,
  q#__V_BESTOFAWARD,[l=1]# => q#/\bBest of \w+ Award/#,
  q#__V_BIOGRAPHY,[l=1]# => q#/\b(?:biography|biographies|biographical)\b/i#,
  q#__V_CBNVANITY,[l=1]# => q#/\bContinental Broadcasting Network\b/#,
  q#__V_DISTINGUISHED,[l=1]# => q#/\bdistinguished\b/i#,
  q#__V_DPHPVANITY,[l=1]# => q#/\bDistinguished Professionals Hardcover Publication\b/#,
  q#__V_EXCELLENCE,[l=1]# => q#/\b(?:demonstrated|commitment to) excellence\b/i#,
  q#__V_EXECS_PROS,[l=1]# => q#/\bexecutives? (?:and|&) professionals?\b/i#,
  q#__V_HONOR_SOCIETY,[l=1]# => q#/\bHonor Society\b/#,
  q#__V_INFORM_YOU,[l=1]# => q#/\b(?:pleased?|pleasure) to inform you\b/#,
  q#__V_INNERCIRCLE,[l=1]# => q#/\bInner Circle\b/#,
  q#__V_NOMINATION,[l=1]# => q#/\b(?:nominated|nomination|potential candidate)\b/i#,
  q#__V_NO_COST,[l=1]# => q#/\b(?:no costs?|cost-? *free|free of costs?|no fees?|neither cost nor obligation)\b/i#,
  q#__V_PRINCETONPRE,[l=1]# => q#/\bPrinceton Premier/#,
  q#__V_PUB_DEADLINE,[l=1]# => q#/\bpublication deadlines?\b/i#,
  q#__V_RECOGNITION,[l=1]# => q#/\brecognition\b/i#,
  q#__V_REGISTRY,[l=1]# => q#/\bregistry\b/i#,
  q#__V_SBCAVANITY,[l=1]# => q#/\bSmall Business Commerce Association/#,
  q#__V_SHMUCK,[l=1]# => q#/\b(?:accomplished|distinguished|exceptional|talented|calibre of) +(?:professionals?|individuals?)\b/i#,
  q#__V_USCAVANITY,[l=1]# => q#/\bUS Commerce Association/#,
  q#__V_WHOSWHO,[l=1]# => q#/\bWho.s Who\b/#,
  q#__WEBMAIL_ACCT,[l=1]# => q#/\byour web ?mail account/i#,
  q#__WIDOW,[l=1]# => q#/\b(?:widow(?:e[rd])'?s?|veuve)\b/i#,
  q#__WILL_LEGAL,[l=1]# => q#/\b(?:codicil|last\stestament|probate|executor|intestate|bequest|mandamus)\b/i#,
  q#__WIRE_XFR,[l=1]# => q#/\b(?:wire|telegraph(?:ic)?|bank)\s?transfer/i#,
  q#__YOUR_BANK,[l=1]# => q#/\byour?\s(?:full\s)?bank(?:ing)?\sinformations?\b/i#,
  q#__YOUR_FUND,[l=1]# => q#/\b(?:your|ihr)\s(?:unpaid\s|win+ing\s|ap+roved\s|foreign\s|overdue\s|outstanding\s|contract\s|inheritance\s|nicht\sausbezahlten\s){0,3}(?:fund|payment|geld)\b/i#,
  q#__YOUR_PERM,[l=1]# => q#/\byour\spermission\b/i#,
  q#__YOUR_PROFIT,[l=1]# => q#/\byour?\sprofit/i#,
  q#__YOU_ASSIST,[l=1]# => q#/\b(?:your\sas+istan(?:ce|t)|votre\s(?:as+istance|aide))\b/i#,
  q#__YOU_HAVE_WON,[l=1]# => q#/you(?: \w+)? won/i#,
  q#__YOU_INHERIT,[l=1]# => q#/\byour\s[a-z\s]{0,30}inherit+ance\b/i#,
  q#__YOU_WON_01,[l=1]# => q#/\byou(?:r|'re|'ve|'ll|\shave|\sdid)?\s(?:e-?mail\s)?(?:\w+\s){0,2}(?:a\s)?w[io]n+(?:er|ing)?(?!'t)\b/i#,
  q#__YOU_WON_02,[l=1]# => q#/\bw[io]n\s(?:(?:for|by)\s)?your?\b/i#,
  q#__YOU_WON_04,[l=1]# => q#/\bqu[ei]\s?(?:vous (?:[\xc3][\xaa]|=C3=AA|[\xea]|e)tes\s?gagnant|en\scons(?:e|=E9|[\xe9]|[\xc3][\xa9])quence\sgagne)\b/i#,
  q#__YOU_WON_05,[l=1]# => q#/\bI won\b/i#,
  q#__freemail_safe_fwd,[l=1]# => q#/---\s?(?:(?:Forwarded|Original) message|Alkuper.inen viesti)/i#,

};

XSLoader::load 'Mail::SpamAssassin::CompiledRegexps::body_0', $VERSION;
}

1;
__END__

=head1 NAME

Mail::SpamAssassin::CompiledRegexps::body_0 - Efficient string matching for regexps found in bases_body_0.in

=head1 SYNOPSIS

  use Mail::SpamAssassin::CompiledRegexps::body_0;
  
  ...
  my $match = Mail::SpamAssassin::CompiledRegexps::body_0::scan($string);

=head1 DESCRIPTION

This module was created by SpamAssassin with the aid of re2xs, which uses re2c
to create an XS library capable of scanning through a bunch of regular
expressions as defined in F<bases_body_0.in>.

See C<sa-compile> for more details.

=cut